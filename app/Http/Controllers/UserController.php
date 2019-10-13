<?php

namespace App\Http\Controllers;
use App\Programme;
use App\Qualification;
use App\Major;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\User\CreateStudentRequest;
use App\Http\Requests\User\CreateAdminRequest;
use App\Http\Requests\User\CreateTeacherRequest;
use App\Http\Requests\User\ChangePasswordRequest;
use App\Http\Requests\User\ImpersonateUserRequest;
use App\Events\UserRegistered;
use Illuminate\Support\Facades\Log;
use App\Services\User\UserService;
/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    protected $userService;
    protected $user;

    public function __construct(UserService $userService, User $user){
        $this->userService = $userService;
        $this->user = $user;
    }

    /**
     * Display a list of all teachers based on school_id.
     * @param $school_id
     */
    public function indexTeacher($school_id){
        $programmes = Programme::query()->get();
        $users = $this->userService->getTeachers($school_id);
        return view('list.teacher-list', compact('users', 'programmes'));
    }

    /**
     * Display a list of all students based on school_id.
     * @param $school_id
     */
    public function indexStudent($school_id){
        $majors = Major::query()->get();
        $programmes = Programme::query()->get();
        $qualifications = Qualification::query()->get();
        $users = $this->userService->getStudents($school_id);
        return view('list.student-list', compact('users', 'programmes', 'qualifications', 'majors'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function changePasswordGet()
    {
        return view('profile.change-password');
    }

    /**
     * @param ChangePasswordRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changePasswordPost(ChangePasswordRequest $request)
    {
        if (Hash::check($request->old_password, Auth::user()->password)) {
            $request->user()->fill([
              'password' => Hash::make($request->new_password),
            ])->save();

            return back()->with('status', __('Saved'));
        }

        return back()->with('error-status', __('Passwords do not match.'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function impersonateGet()
    {
        if (app('impersonate')->isImpersonating()) {
            Auth::user()->leaveImpersonation();
            return (Auth::user()->role == 'master')?redirect('/masters') : redirect('/home');
        }
        else {
            return view('profile.impersonate', [
                'other_users' => $this->user->with('major', 'qualification', 'programme')->where('id', '!=', auth()->id())->get()
            ]);
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function impersonate(ImpersonateUserRequest $request)
    {
        $user = $this->user->find($request->id);
        Auth::user()->impersonate($user);
        return redirect('/home');
    }

    /**
     * @param CreateAdminRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeAdmin(CreateAdminRequest $request)
    {
        $password = $request->password;
        $tb = $this->userService->storeAdmin($request);
        try {
            // Fire event to send welcome email
            // event(new userRegistered($userObject, $plain_password)); // $plain_password(optional)
            event(new UserRegistered($tb, $password));
        } catch(\Exception $ex) {
            Log::info('Email failed to send to this address: '.$tb->email);
        }

        return back()->with('status', __('Saved'));
    }

    /**
     * @param CreateTeacherRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeTeacher(CreateTeacherRequest $request)
    {
        try {
            // Fire event to send welcome email
            // event(new UserRegistered($tb, $password));
            $tb = $this->userService->storeTeacher($request, 'teacher');
            
        } catch(\Exception $ex) {
            // Log::info('Email failed to send to this address: '.$tb->email);
            return __('Could not add the tutor.');
        }

        return back()->with('status', __('Tutor Created'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateStudentRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function storeStudent(CreateStudentRequest $request)
    {
        try {
            // Fire event to send welcome email
            // event(new UserRegistered($tb, $password));
            $tb = $this->userService->storeStudent($request, 'student');
            
        } catch(\Exception $ex) {
            // Log::info('Email failed to send to this address: '.$tb->email);
            return __('Could not add the student.');
        }

        return back()->with('status', __('Student Created'));
    }

    /**
     * Display the specified resource.
     * @param int $id
     * @return UserResource
     */
    public function show($id)
    {
        $user = $this->userService->getUserByCode($id);
        if ($user == 'no permission'){
            return back()->with('status', __('You have no permission to access this profile.'));
        }else{
            
            return view('profile.user', compact('user'));
        }        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $tb = User::find($request->id);
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'code' => 'required|string',
            'gender'  => 'required|string',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string',
            'address' => 'nullable|string',
            'programme_id' => 'required|integer',
            'qualification_id' => 'nullable|integer',
            'major_id' => 'nullable|integer',
            'enrolled_date' => 'required|string',
            'about' => 'nullable|string',
        ]);
        
        $tb->id = $request->id;
        $tb->first_name = $request->first_name;
        $tb->last_name = $request->last_name;
        $tb->code = $request->code;
        $tb->gender = $request->gender;
        $tb->email = $request->email;
        $tb->phone_number = $request->phone_number;
        $tb->address = $request->address;
        $tb->programme_id = $request->programme_id;
        $tb->qualification_id = $request->qualification_id;
        $tb->major_id = $request->major_id;
        $tb->enrolled_date = $request->enrolled_date;
        $tb->about = $request->about;
        if ($tb->save()) {
            return back()->with('status', __('User Saved'));
        }
        else{
            return __('Update Failded.');
        }
    }

    /**
     * Activate admin
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function activateAdmin($id)
    {
        $admin = $this->user->find($id);

        if ($admin->active !== 0) {
            $admin->active = 0;
        } else {
            $admin->active = 1;
        }

        $admin->save();

        return back()->with('status', __('Saved'));
    }

    /**
     * Deactivate admin
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deactivateAdmin($id)
    {
       $admin = $this->user->find($id);

        if ($admin->active !== 1) {
            $admin->active = 1;
        } else {
            $admin->active = 0;
        }

        $admin->save();

        return back()->with('status', __('Saved'));
    }

    /**
     * Reset user's password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function resetUser(Request $request)
    {
        //dd($request);
        $request->validate([
            'id' => 'required|integer',
        ]);

        $tb = User::find($request->id);
        $tb->password = bcrypt('secret');
        if ($tb->save()) {
            return back()->with('status', __('Password Reset.'));
        }
        else{
            return __('Update Failded.');
        }
    }
}

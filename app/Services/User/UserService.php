<?php
namespace App\Services\User;

use App\User;
use Illuminate\Support\Facades\DB;
use Mavinoo\LaravelBatch\Batch;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class UserService {
    
    protected $user;
    protected $db;
    protected $batch;
    protected $st, $st2;
    protected $faker;

    public function __construct(User $user, DB $db, Batch $batch, Faker $faker){
        $this->user = $user;
        $this->db = $db;
        $this->batch = $batch;
        $this->faker = $faker;
    }

    public function isListOfStudents($school_code, $student_code){
        return !empty($school_code) && $student_code == 1;
    }

    public function isListOfTeachers($school_code, $teacher_code){
        return !empty($school_code) && $teacher_code == 1;
    }

    public function indexView($view, $users){
        return view($view, [
            'users' => $users,
            // 'current_page' => $users->currentPage(),
            // 'per_page' => $users->perPage(),
        ]);
    }

    public function indexOtherView($view, $users){
        return view($view, [
            'users' => $users,
            'current_page' => $users->currentPage(),
            'per_page' => $users->perPage(),
        ]);
    }

    public function getStudents($school_id){
        return $this->user->with(['school', 'programme', 'major', 'myClasses', 'qualification'])
                //->where('code', auth()->user()->school->code)
                //->student()
                ->where('active', 1)
                ->where('school_id', $school_id)
                ->where('role', 'student')
                ->orderBy('first_name', 'asc')
                ->get();
                //->paginate(10);
    }

    public function getTeachers($school_id){
        return $this->user->with(['school', 'programme'])
                //->where('code', auth()->user()->school->code)
                ->where('school_id', $school_id)
                ->where('role', 'teacher')
                ->where('active', 1)
                ->orderBy('first_name', 'asc')
                ->get();
                //->paginate(10);
    }

    public function getAccountants(){
        return $this->user->with('school')
                ->where('code', auth()->user()->school->code)
                ->where('role', 'accountant')
                ->where('active', 1)
                ->orderBy('name', 'asc')
                ->paginate(50);
    }

    public function getLibrarians(){
        return $this->user->with('school')
                ->where('code', auth()->user()->school->code)
                ->where('role', 'librarian')
                ->where('active', 1)
                ->orderBy('name', 'asc')
                ->paginate(50);
    }

    public function getSectionStudentsWithSchool($section_id){
        return $this->user->with('school')
            ->student()
            ->where('section_id', $section_id)
            ->where('active', 1)
            ->orderBy('name', 'asc')
            ->get();
    }

    public function getUserByCode($id){
        if ($id == \Auth::user()->id){
            return $this->user->with('programme', 'major', 'qualification', 'school')
                              ->where('id', $id)
                              ->where('active', 1)
                              ->first();
        }else{
            return 'no permission';
        }
    }

    public function storeAdmin($request){
        $tb = new $this->user;
        $tb->name = $request->name;
        $tb->email = $request->email;
        $tb->password = bcrypt($request->password);
        $tb->role = 'admin';
        $tb->active = 1;
        $tb->school_id = session('register_school_id');
        $tb->code = session('register_school_code');
        $tb->student_code = session('register_school_id').date('y').substr(number_format(time() * mt_rand(), 0, '', ''), 0, 5);
        $tb->gender = $request->gender;
        //$tb->blood_group = $request->blood_group;
        //$tb->nationality = (!empty($request->nationality)) ? $request->nationality : '';
        $tb->phone_number = $request->phone_number;
        $tb->pic_path = (!empty($request->pic_path)) ? $request->pic_path : '';
        $tb->verified = 1;
        $tb->save();
        return $tb;
    }

    public function storeStudent($request, $role){
        $tb = new $this->user;
        $tb->about = (!empty($request->about)) ? $request->about : '';
        $tb->first_name = ucfirst($request->first_name);
        $tb->last_name = ucfirst($request->last_name);
        //$tb->code = $this->faker->unique()->randomNumber(6, true);
        $tb->code = $request->code;
        $tb->school_id = \Auth::user()->school_id;
        $tb->email = (!empty($request->email)) ? $request->email : '';
        $tb->password = bcrypt('secret');
        $tb->enrolled_date = date('Y-m-d');
        $tb->role = $role;
        $tb->active = 1;
        $tb->gender = $request->gender;
        $tb->phone_number = $request->phone_number;
        $tb->address = (!empty($request->address)) ? $request->address : '';
        $tb->programme_id = $request->programme_id;   
        $tb->pic_path = (!empty($request->pic_path)) ? $request->pic_path : '';
        $tb->course_token = 1;
        $tb->remember_token = str_random(10);
        $tb->qualification_id = $request->qualification_id;
        $tb->major_id = $request->major_id;
        //dd($tb);
        // $tb->student_code = auth()->user()->school_id.date('y').substr(number_format(time() * mt_rand(), 0, '', ''), 0, 5);
        $tb->save();
        return $tb;
    }

    public function storeTeacher($request, $role){

        $tb = new $this->user;
        $tb->about = (!empty($request->about)) ? $request->about : '';
        $tb->first_name = ucfirst($request->first_name);
        $tb->last_name = ucfirst($request->last_name);
        $tb->code = $this->faker->unique()->randomNumber(6, true);
        $tb->school_id = \Auth::user()->school_id;
        $tb->email = (!empty($request->email)) ? $request->email : '';
        $tb->password = bcrypt('secret');
        $tb->enrolled_date = date('Y-m-d');
        $tb->role = $role;
        $tb->active = 1;
        $tb->gender = $request->gender;
        $tb->phone_number = $request->phone_number;
        $tb->address = (!empty($request->address)) ? $request->address : '';
        $tb->programme_id = $request->programme_id;   
        $tb->pic_path = (!empty($request->pic_path)) ? $request->pic_path : '';
        $tb->course_token = 1;
        $tb->remember_token = str_random(10);
        //dd($tb);
        // $tb->student_code = auth()->user()->school_id.date('y').substr(number_format(time() * mt_rand(), 0, '', ''), 0, 5);
        $tb->save();
        return $tb;
    }
}
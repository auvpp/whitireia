<?php

namespace App\Http\Controllers;

use App\Course;
use App\Major;
use App\User;
use Illuminate\Http\Request;
use App\Qualification;
use App\Services\Course\CourseService;

class CourseController extends Controller
{
    protected $courseService;
    protected $qualification;
    protected $majors;
    protected $courses;
    protected $teacher;

    public function __construct(CourseService $courseService, Qualification $qualification){
      $this->courseService = $courseService;
      $this->qualification = $qualification;
    }

    /**
     * Show courses by qualification_id
     */
    public function course($id)
    {
      $qualification = $this->qualification->find($id);
      $majors = Major::with(['users', 'courses', 'qualification',])
                    ->where('qualification_id', $id)
                    ->orderBy('name', 'asc')
                    ->get();
      
      $programme_id = $qualification->programme_id;
      
      $teachers = User::with('programme')
                    ->where('role', 'teacher')
                    ->orderBy('first_name', 'asc')
                    ->get();

      return view('course.admin-course', compact('qualification', 'majors', 'teachers'));
    }

    /**
     * show the list of courses to students
     * @return \Illuminate\Http\Response
     */
    public function selectionList(){
      $user = User::with('major', 'qualification', 'programme')
                  ->find(\Auth::user()->id);
      $courses = Course::with('user')
                       ->where('major_id', $user->major_id)
                       ->orderBy('code', 'asc')
                       ->get();
      return view('course.students', compact('courses', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      try{
        $request->validate([
          'code' => 'required|string',
          'name' => 'required|string',
          'level' => 'required|string',
          'type'  => 'required|string',
          'credit' => 'required|integer',
          'major_id' => 'required|integer',
          'prerequisite' =>'nullable|string',
          'current_offered' => 'required|string',
          'next_offered' => 'required|string',
          'teacher' => 'required|string',
          'teacher_id' => 'required|integer',
          'description' => 'nullable|string',
        ]);
        $this->courseService->addCourse($request);
      } catch (\Exception $ex){
        return __('Could not add the course.');
      }
      return back()->with('status', __('Course Created'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $course = Course::find($id);
      return view('course.edit', ['course'=>$course]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $request->validate([
        'code' => 'required|string',
        'name' => 'required|string',
        'level' => 'required|string',
        'type'  => 'required|string',
        'credit' => 'required|integer',
        'prerequisite' =>'nullable|string',
        'current_offered' => 'required|string',
        'next_offered' => 'required|string',
        'teacher_id' => 'required|integer',
        'teacher' => 'required|string',
        'description' => 'nullable|string',
      ]);
      $this->courseService->updateCourseInfo($id, $request);
      return back()->with('status', __('Course Saved'));
    }

    /**
     * check the duplicate course code
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function checkCode(Request $request) {
      if (\Auth::user()->role == 'admin'){
          $major = Major::with('courses')
                        ->find($request->major_id);
          foreach ($major->courses as $k => $v){
              if (strtolower($v->code) == strtolower($request->code)){
                  return response()->json(['success' => true, 'code' => $v->code]);
              }
          }
          return response()->json(['success' => false, 'code' => $v->code]);
      }
    }
}

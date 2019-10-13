<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $minutes = 1440;// 24 hours = 1440 minutes
        $school_id = \Auth::user()->school->id;
        $totalCourses = DB::table('courses')->count();
        $current_user = \App\User::with('myClasses', 'programme', 'qualification', 'major')->find(\Auth::user()->id);


        // $classes = \Cache::remember('classes-'.$school_id, $minutes, function () use($school_id) {
        //   return \App\MyClass::bySchool($school_id)
        //                     ->pluck('id')
        //                     ->toArray();
        // });
        $totalStudents = \Cache::remember('totalStudents-'.$school_id, $minutes, function () use($school_id) {
          return \App\User::bySchool($school_id)
                          ->where('role','student')
                          ->where('active', 1)
                          ->count();
        });
        $totalTeachers = \Cache::remember('totalTeachers-'.$school_id, $minutes, function () use($school_id) {
          return \App\User::bySchool($school_id)
                          ->where('role','teacher')
                          ->where('active', 1)
                          ->count();
        });

        $classdetails = \App\ClassDetail::where('user_id', \Auth::user()->id)
                                   ->orderBy('course_id', 'asc')
                                   ->get();
        $totalCredits = 0;
        if ($classdetails != null){
          foreach ($classdetails as $k => $v) {
            $totalCredits += $v->approved_credit;
          }
        }

        return view('home',[
          'totalStudents'=>$totalStudents,
          'totalTeachers'=>$totalTeachers,
          'totalCourses'=>$totalCourses,
          'current_user'=>$current_user,
          'totalCredits'=>$totalCredits,
        ]);
    }
}

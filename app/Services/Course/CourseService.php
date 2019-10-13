<?php
namespace App\Services\Course;

use App\Course;

class CourseService {

    public function isCourseOfTeacher($teacher_id){
        return auth()->user()->role != 'student' && $teacher_id > 0;
    }

    public function getCoursesByTeacher($teacher_id){
        return Course::with(['section', 'teacher','exam'])
                        ->where('teacher_id', $teacher_id)
                        ->get();
    }

    public function updateCourseInfo($id, $request){
        $tb = Course::find($id);
        $tb->code = $request->code;
        $tb->name = $request->name;
        $tb->level = $request->level;
        $tb->type = $request->type;
        $tb->credit = $request->credit;
        $tb->prerequisite = $request->prerequisite;
        $tb->current_offered = $request->current_offered;
        $tb->next_offered = $request->next_offered;
        $tb->teacher_id = $request->teacher_id;
        $tb->teacher = $request->teacher;
        $tb->description = $request->description;
        $tb->save();

        // Simultaneously update all courses with the same code except course type, credits, prerequisite, descriptions
        Course::where('code', $request->code)
              ->update(['teacher' => $request->teacher,
                        'teacher_id' => $request->teacher_id,
                        'name'    => $request->name,
                        'level'   => $request->level,
                        'current_offered' => $request->current_offered,
                        'next_offered' => $request->next_offered
                        ]);
    }

    public function addCourse($request){
        $tb = new Course;
        $tb->code = $request->code;
        $tb->name = $request->name;
        $tb->level = $request->level;
        $tb->type = $request->type;
        $tb->credit = $request->credit;
        if ($request->prerequisite == null){
            $tb->prerequisite = 'None';
        }else{
            $tb->prerequisite = $request->prerequisite;
        }
        $tb->current_offered = $request->current_offered;
        $tb->next_offered = $request->next_offered;
        $tb->teacher = $request->teacher;
        $tb->description = $request->description;
        $tb->major_id = $request->major_id;
        $tb->save();
    }
}
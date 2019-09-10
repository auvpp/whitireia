<?php

namespace App;

use App\Model;

class Course extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'name', 'credit_id', 'major_id', 'level', 'compulsory', 'credit', 'active', 'current_offered', 'current_offered_year', 'next_offered', 'next_offered_year', 'prerequisite', 'description', 'teacher_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       
    ];

    /**
     * One course belongs to only one major.
    */
    public function major()
    {
        return $this->belongsTo('App\Major');
    }
    /**
     * One course has many classDetails.
    */
    public function classDetails()
    {
        return $this->hasMany('App\ClassDetail');
    }

    /**
     * One course belongs to only one credit.
    */
    public function creit()
    {
        return $this->belongsTo('App\Credit');
    }

    // /**
    //  * Get the teacher record associated with the user.
    // */
    // public function teacher()
    // {
    //     return $this->belongsTo('App\User');
    // }
    //  /**
    //  * Get the exam record associated with the course.
    // */
    // public function exam()
    // {
    //     return $this->belongsTo('App\Exam');
    // }
}

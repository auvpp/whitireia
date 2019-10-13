<?php

namespace App\Http\Controllers;

use App\Services\Qualification\QualificationService;

class QualificationController extends Controller
{
    protected $majors;
    protected $qualificationService;

    public function __construct(QualificationService $qualificationService){
        $this->qualificationService = $qualificationService;
    }

    public function showMajors($id){
        $majors = $this->qualificationService->getMajorsByQualificationId($id);
        return view('majors.list',compact('majors'));
    }
}

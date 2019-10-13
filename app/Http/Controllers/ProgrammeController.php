<?php

namespace App\Http\Controllers;

use App\Services\Programme\ProgrammeService;

class ProgrammeController extends Controller
{
    protected $programmeService;
    protected $qualifications;

    public function __construct(ProgrammeService $programmeService){
        $this->programmeService = $programmeService;
    }
    
    // show the courses of programme Business
    public function showBusiness(){
        $qualifications = $this->programmeService->getQualificationsByBusiness();
        return view('programmes.business', compact('qualifications'));
    }

    // show the courses of programme IT
    public function showIT(){
        $qualifications = $this->programmeService->getQualificationsByIT();
        return view('programmes.it', compact('qualifications'));
    }
}
<?php
namespace App\Services\Programme;

use App\Qualification;
use Illuminate\Support\Facades\DB;

class ProgrammeService {

    protected $programme;

    // search programmes, qualifications and majors from database
    public function getQualificationsByBusiness(){
        $programme = DB::table('programmes')->where('name', 'Business')->first();
        return Qualification::with('programme', 'majors')
                    ->where('programme_id', $programme->id)
                    ->get();
    }

    // search programmes, qualifications and majors from database
    public function getQualificationsByIT(){
        $programme = DB::table('programmes')->where('name', 'IT')->first();
        return Qualification::with('programme', 'majors')
                    ->where('programme_id', $programme->id)
                    ->get();
    }
}
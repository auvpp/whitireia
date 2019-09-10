<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Course::class, 50)->create();


        /**
         * Bachelor of Business (Business Analysis & Knowledgement / 
         *                       Marketing & Sales /
         *                       Supply Chain & Logistics Management)
         */
        DB::table('courses')->insert([
            'code' => "BM5201",
            'name' => "Business Operations",
            'major_id'    => 1,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM5201",
            'name' => "Business Operations",
            'major_id'    => 2,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM5201",
            'name' => "Business Operations",
            'major_id'    => 3,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM5202",
            'name' => "People and Change",
            'major_id'    => 1,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM5202",
            'name' => "People and Change",
            'major_id'    => 2,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM5202",
            'name' => "People and Change",
            'major_id'    => 3,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM5203",
            'name' => "Communication",
            'major_id'    => 1,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM5203",
            'name' => "Communication",
            'major_id'    => 2,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM5203",
            'name' => "Communication",
            'major_id'    => 3,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM5204",
            'name' => "New Zealand Business Context",
            'major_id'    => 1,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM5204",
            'name' => "New Zealand Business Context",
            'major_id'    => 2,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM5204",
            'name' => "New Zealand Business Context",
            'major_id'    => 3,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM5209",
            'name' => "Business Planning",
            'major_id'    => 1,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM5209",
            'name' => "Business Planning",
            'major_id'    => 2,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM5209",
            'name' => "Business Planning",
            'major_id'    => 3,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM5210",
            'name' => "Applied Business Planning",
            'major_id'    => 1,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM5210",
            'name' => "Applied Business Planning",
            'major_id'    => 2,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM5210",
            'name' => "Applied Business Planning",
            'major_id'    => 3,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM5211",
            'name' => "Learning Projects",
            'major_id'    => 1,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM5211",
            'name' => "Learning Projects",
            'major_id'    => 2,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM5211",
            'name' => "Learning Projects",
            'major_id'    => 3,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM5212",
            'name' => "Leading in the Workplace",
            'major_id'    => 1,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM5212",
            'name' => "Leading in the Workplace",
            'major_id'    => 2,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM5212",
            'name' => "Leading in the Workplace",
            'major_id'    => 3,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "AM5112",
            'name' => "Business Statistical Analysis",
            'major_id'    => 1,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "TBA",
            'prerequisite'   => "All Year 1 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "AM5112",
            'name' => "Business Statistical Analysis",
            'major_id'    => 2,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "TBA",
            'prerequisite'   => "All Year 1 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "AM5112",
            'name' => "Business Statistical Analysis",
            'major_id'    => 3,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "TBA",
            'prerequisite'   => "All Year 1 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM5213",
            'name' => "Introduction to E-Business",
            'major_id'    => 1,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "TBA",
            'prerequisite'   => "All Year 1 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM5213",
            'name' => "Introduction to E-Business",
            'major_id'    => 2,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "TBA",
            'prerequisite'   => "All Year 1 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM5213",
            'name' => "Introduction to E-Business",
            'major_id'    => 3,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "TBA",
            'prerequisite'   => "All Year 1 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM6201",
            'name' => "Leadership",
            'major_id'    => 1,
            'level' => "Level 6",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM6201",
            'name' => "Leadership",
            'major_id'    => 2,
            'level' => "Level 6",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM6201",
            'name' => "Leadership",
            'major_id'    => 3,
            'level' => "Level 6",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "AM6208",
            'name' => "Organisation Behaviour",
            'major_id'    => 1,
            'level' => "Level 6",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "AM6208",
            'name' => "Organisation Behaviour",
            'major_id'    => 2,
            'level' => "Level 6",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "AM6208",
            'name' => "Organisation Behaviour",
            'major_id'    => 3,
            'level' => "Level 6",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM6202",
            'name' => "Human Resources & Emplyment Relationships",
            'major_id'    => 1,
            'level' => "Level 6",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM6202",
            'name' => "Human Resources & Emplyment Relationships",
            'major_id'    => 2,
            'level' => "Level 6",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM6202",
            'name' => "Human Resources & Emplyment Relationships",
            'major_id'    => 3,
            'level' => "Level 6",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM6203",
            'name' => "Problem Solving & Decision Making",
            'major_id'    => 1,
            'level' => "Level 6",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM6203",
            'name' => "Problem Solving & Decision Making",
            'major_id'    => 2,
            'level' => "Level 6",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM6203",
            'name' => "Problem Solving & Decision Making",
            'major_id'    => 3,
            'level' => "Level 6",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM7201",
            'name' => "Business Transformation & Change",
            'major_id'    => 1,
            'level' => "Level 7",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM7201",
            'name' => "Business Transformation & Change",
            'major_id'    => 2,
            'level' => "Level 7",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM7201",
            'name' => "Business Transformation & Change",
            'major_id'    => 3,
            'level' => "Level 7",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM7202",
            'name' => "Business Sustainability",
            'major_id'    => 1,
            'level' => "Level 7",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM7202",
            'name' => "Business Sustainability",
            'major_id'    => 2,
            'level' => "Level 7",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM7202",
            'name' => "Business Sustainability",
            'major_id'    => 3,
            'level' => "Level 7",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        /**
         * Bachelor of Business (Business Analysis & Knowledgement)
         */
        DB::table('courses')->insert([
            'code' => "AM6211",
            'name' => "Introduction to Business Analysis",
            'major_id'    => 1,
            'level' => "Level 6",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 & Year 2 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "AM6225",
            'name' => "Operations Management",
            'major_id'    => 1,
            'level' => "Level 6",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 & Year 2 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "AM6210",
            'name' => "System Analysis and Design",
            'major_id'    => 1,
            'level' => "Level 6",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 & Year 2 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM7203",
            'name' => "Contemporary Issues in Knowledge Management",
            'major_id'    => 1,
            'level' => "Level 7",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 & Year 2 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM7204",
            'name' => "Strategic Knowledge Management",
            'major_id'    => 1,
            'level' => "Level 7",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 & Year 2 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        /**
         * Bachelor of Business (Marketing & Sales)
         */
        DB::table('courses')->insert([
            'code' => "BM6208",
            'name' => "Buyer Behaviour",
            'major_id'    => 2,
            'level' => "Level 6",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 & Year 2 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM6209",
            'name' => "Introduction to Marketing & Sales",
            'major_id'    => 2,
            'level' => "Level 6",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 & Year 2 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM6217",
            'name' => "Services Marketing Management",
            'major_id'    => 2,
            'level' => "Level 6",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 & Year 2 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM7209",
            'name' => "Digital Marketing",
            'major_id'    => 2,
            'level' => "Level 7",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 & Year 2 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "AM7320",
            'name' => "International Marketing",
            'major_id'    => 2,
            'level' => "Level 7",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 & Year 2 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        /**
         * Bachelor of Business (Supply Chain & Logistics Management)
         */    
        DB::table('courses')->insert([
            'code' => "BM6206",
            'name' => "Introduction to Supply Chain Management",
            'major_id'    => 3,
            'level' => "Level 6",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 & Year 2 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM6207",
            'name' => "Global Supply Chain Management and Transport",
            'major_id'    => 3,
            'level' => "Level 6",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 & Year 2 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "AM6225",
            'name' => "Operations Management",
            'major_id'    => 3,
            'level' => "Level 6",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 & Year 2 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM7207",
            'name' => "Sustainable Strategic Procurement",
            'major_id'    => 3,
            'level' => "Level 7",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 & Year 2 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BM7208",
            'name' => "Supply Chain Management",
            'major_id'    => 3,
            'level' => "Level 7",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 & Year 2 Core Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        /**
         * Bachelor of Business (Business Analysis & Knowledgement / 
         *                       Marketing & Sales /
         *                       Supply Chain & Logistics Management)
         */
        DB::table('courses')->insert([
            'code' => "AM7331",
            'name' => "Industry Project",
            'major_id'    => 1,
            'level' => "Level 7",
            'compulsory'     => 1,
            'credit'   => 45,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 & Year 2 Core Papers and Major Compulsory Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "AM7331",
            'name' => "Industry Project",
            'major_id'    => 2,
            'level' => "Level 7",
            'compulsory'     => 1,
            'credit'   => 45,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 & Year 2 Core Papers and Major Compulsory Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "AM7331",
            'name' => "Industry Project",
            'major_id'    => 3,
            'level' => "Level 7",
            'compulsory'     => 1,
            'credit'   => 45,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "All Year 1 & Year 2 Core Papers and Major Compulsory Papers",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        /**
         * GD in Business (Finance)
         */
        DB::table('courses')->insert([
            'code' => "BUS5100",
            'name' => "Introduction to Accounting",
            'major_id'    => 4,
            'level' => "Level 5",
            'compulsory'     => 0,
            'credit'   => 20,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' => "No longer offered",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS5120",
            'name' => "The Economic Environment",
            'major_id'    => 4,
            'level' => "Level 5",
            'compulsory'     => 0,
            'credit'   => 20,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' => "No longer offered",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS5160",
            'name' => "Business Data Analysis",
            'major_id'    => 4,
            'level' => "Level 5",
            'compulsory'     => 0,
            'credit'   => 20,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' => "No longer offered",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS6202",
            'name' => "Introduction Finance",
            'major_id'    => 4,
            'level' => "Level 6",
            'compulsory'     => 0,
            'credit'   => 20,
            'active' => 0,
            'current_offered'   => "No longer offered",
            'next_offered' => "No longer offered",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS6203",
            'name' => "Applied Economics",
            'major_id'    => 4,
            'level' => "Level 6",
            'compulsory'     => 0,
            'credit'   => 20,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' => "No longer offered",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS7380",
            'name' => "Project Management",
            'major_id'    => 4,
            'level' => "Level 7",
            'compulsory'     => 1,
            'credit'   => 20,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' => "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS7306",
            'name' => "Corporate Finance",
            'major_id'    => 4,
            'level' => "Level 7",
            'compulsory'     => 1,
            'credit'   => 20,
            'active' => 0,
            'current_offered'   => "No longer offered",
            'next_offered' => "No longer offered",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS7305",
            'name' => "Investments",
            'major_id'    => 4,
            'level' => "Level 7",
            'compulsory'     => 1,
            'credit'   => 20,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' => "No longer offered",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS7390",
            'name' => "Industry Project",
            'major_id'    => 4,
            'level' => "Level 7",
            'compulsory'     => 1,
            'credit'   => 20,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' => "No longer offered",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        /**
         * GD in Business (Hospitality)
         */
        DB::table('courses')->insert([
            'code' => "BUS6271",
            'name' => "Operation Management - Accommodation",
            'major_id'    => 5,
            'level' => "Level 6",
            'compulsory'     => 1,
            'credit'   => 20,
            'active' => 1	,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' => "No longer offered",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS6272",
            'name' => "Operation Management - Food & Beverage",
            'major_id'    => 5,
            'level' => "Level 6",
            'compulsory'     => 1,
            'credit'   => 20,
            'active' => 0,
            'current_offered'   => "No longer offered",
            'next_offered' => "No longer offered",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS7371",
            'name' => "Advanced Operations Management - Accommodation",
            'major_id'    => 5,
            'level' => "Level 7",
            'compulsory'     => 1,
            'credit'   => 20,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);


        DB::table('courses')->insert([
            'code' => "BUS7372",
            'name' => "Advanced Operations Management - Food & Beverage",
            'major_id'    => 5,
            'level' => "Level 7",
            'compulsory'     => 1,
            'credit'   => 20,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' => "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS7341",
            'name' => "Marketing Strategy",
            'major_id'    => 5,
            'level' => "Level 7",
            'compulsory'     => 0,
            'credit'   => 20,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS7333",
            'name' => "Strategy Management",
            'major_id'    => 5,
            'level' => "Level 7",
            'compulsory'     => 0,
            'credit'   => 20,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' => "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS7312",
            'name' => "Industry Project",
            'major_id'    => 5,
            'level' => "Level 7",
            'compulsory'     => 1,
            'credit'   => 20,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' => "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        /**
         * GD in Business (Marketing)
         */
        DB::table('courses')->insert([
            'code' => "BUS5141",
            'name' => "Marketing Principles",
            'major_id'    => 7,
            'level' => "Level 5",
            'compulsory'     => 0,
            'credit'   => 20,
            'active' => 0,
            'current_offered'   => "No longer offered",
            'next_offered' => "No longer offered",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS5160",
            'name' => "Business Data Analysis",
            'major_id'    => 7,
            'level' => "Level 5",
            'compulsory'     => 0,
            'credit'   => 20,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' => "No longer offered",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS6245",
            'name' => "Consumer Behaviour",
            'major_id'    => 7,
            'level' => "Level 6",
            'compulsory'     => 0,
            'credit'   => 20,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' => "No longer offered",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS6246",
            'name' => "Market Research",
            'major_id'    => 7,
            'level' => "Level 6",
            'compulsory'     => 0,
            'credit'   => 20,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' => "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS6247",
            'name' => "Services Marketing",
            'major_id'    => 7,
            'level' => "Level 6",
            'compulsory'     => 0,
            'credit'   => 20,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' => "T2",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS6262",
            'name' => "Marketing Communications",
            'major_id'    => 7,
            'level' => "Level 6",
            'compulsory'     => 0,
            'credit'   => 20,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' => "No longer offered",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS7380",
            'name' => "Project Management",
            'major_id'    => 7,
            'level' => "Level 7",
            'compulsory'     => 1,
            'credit'   => 20,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' => "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS7342",
            'name' => "International Marketing",
            'major_id'    => 7,
            'level' => "Level 7",
            'compulsory'     => 0,
            'credit'   => 20,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' => "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS7363",
            'name' => "E-Business",
            'major_id'    => 7,
            'level' => "Level 7",
            'compulsory'     => 0,
            'credit'   => 20,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS7390",
            'name' => "Industry Project",
            'major_id'    => 7,
            'level' => "Level 7",
            'compulsory'     => 1,
            'credit'   => 20,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' => "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        /**
         * GD in Business (Management)
         */
        DB::table('courses')->insert([
            'code' => "BUS6233",
            'name' => "Strategic Human Resource Management",
            'major_id'    => 6,
            'level' => "Level 6",
            'compulsory'     => 1,
            'credit'   => 20,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' => "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS6281",
            'name' => "Business Research",
            'major_id'    => 6,
            'level' => "Level 6",
            'compulsory'     => 1,
            'credit'   => 20,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' => "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS7380",
            'name' => "Project Management",
            'major_id'    => 6,
            'level' => "Level 7",
            'compulsory'     => 1,
            'credit'   => 20,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' => "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS7333",
            'name' => "Strategy Management",
            'major_id'    => 6,
            'level' => "Level 7",
            'compulsory'     => 1,
            'credit'   => 20,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' => "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS7364",
            'name' => "Change Management",
            'major_id'    => 6,
            'level' => "Level 7",
            'compulsory'     => 1,
            'credit'   => 20,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' => "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS7390",
            'name' => "Industry Project",
            'major_id'    => 6,
            'level' => "Level 7",
            'compulsory'     => 1,
            'credit'   => 20,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        /**
         * PGD in Business (Finance /
         *                  Information Systems /
         *                  Marketing /
         *                  Hospitality)
         */
        DB::table('courses')->insert([
            'code' => "BUS8500",
            'name' => "Research Methods in Management",
            'major_id'    => 8,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8500",
            'name' => "Research Methods in Management",
            'major_id'    => 9,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8500",
            'name' => "Research Methods in Management",
            'major_id'    => 10,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8500",
            'name' => "Research Methods in Management",
            'major_id'    => 11,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8503",
            'name' => "Communication for Leaders and Managers",
            'major_id'    => 8,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8503",
            'name' => "Communication for Leaders and Managers",
            'major_id'    => 9,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8503",
            'name' => "Communication for Leaders and Managers",
            'major_id'    => 10,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8503",
            'name' => "Communication for Leaders and Managers",
            'major_id'    => 11,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8521",
            'name' => "Leadership, Management and Social Responsibility",
            'major_id'    => 8,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8521",
            'name' => "Leadership, Management and Social Responsibility",
            'major_id'    => 9,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8521",
            'name' => "Leadership, Management and Social Responsibility",
            'major_id'    => 10,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8521",
            'name' => "Leadership, Management and Social Responsibility",
            'major_id'    => 11,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        /**
         * PGD in Business (Finance)
         */
        DB::table('courses')->insert([
            'code' => "BUS8507",
            'name' => "Financial Analysis",
            'major_id'    => 8,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8511",
            'name' => "Investment Analysis",
            'major_id'    => 8,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        /**
         * PGD in Business (Information Systems)
         */
        DB::table('courses')->insert([
            'code' => "BUS8502",
            'name' => "Business Analysis",
            'major_id'    => 10,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8509",
            'name' => "Information Management",
            'major_id'    => 10,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        /**
         * PGD in Business (Marketing)
         */
        DB::table('courses')->insert([
            'code' => "BUS8504",
            'name' => "Consumer Behaviour and Marketing Communication",
            'major_id'    => 11,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8516",
            'name' => "Strategic Marketing",
            'major_id'    => 11,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        /**
         * PGD in Business (Hospitality)
         */
        DB::table('courses')->insert([
            'code' => "BUS8505",
            'name' => "Contemporary Issues in Hospitality Management",
            'major_id'    => 9,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8515",
            'name' => "Strategic Hospitality Management",
            'major_id'    => 9,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        /**
         * PGD in Business (Finance /
         *                  Information Systems /
         *                  Marketing /
         *                  Hospitality)
         */
        DB::table('courses')->insert([
            'code' => "BUS8506",
            'name' => "Entrepreneurship",
            'major_id'    => 8,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T2",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8506",
            'name' => "Entrepreneurship",
            'major_id'    => 9,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T2",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8506",
            'name' => "Entrepreneurship",
            'major_id'    => 10,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T2",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8506",
            'name' => "Entrepreneurship",
            'major_id'    => 11,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T2",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8510",
            'name' => "Internship",
            'major_id'    => 8,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 30,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8510",
            'name' => "Internship",
            'major_id'    => 9,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 30,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8510",
            'name' => "Internship",
            'major_id'    => 10,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 30,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8510",
            'name' => "Internship",
            'major_id'    => 11,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 30,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8514",
            'name' => "Strategic Human Resource Management",
            'major_id'    => 8,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8514",
            'name' => "Strategic Human Resource Management",
            'major_id'    => 9,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8514",
            'name' => "Strategic Human Resource Management",
            'major_id'    => 10,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8514",
            'name' => "Strategic Human Resource Management",
            'major_id'    => 11,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8517",
            'name' => "Supply Chain Management",
            'major_id'    => 8,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8517",
            'name' => "Supply Chain Management",
            'major_id'    => 9,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8517",
            'name' => "Supply Chain Management",
            'major_id'    => 10,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8517",
            'name' => "Supply Chain Management",
            'major_id'    => 11,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        /**
         * Master of Management(Finance /
         *                      Information Systems /
         *                      Marketing /
         *                      Hospitality)
         */
        DB::table('courses')->insert([
            'code' => "BUS8400",
            'name' => "Research Methods in Management",
            'major_id'    => 12,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8400",
            'name' => "Research Methods in Management",
            'major_id'    => 13,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8400",
            'name' => "Research Methods in Management",
            'major_id'    => 14,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8400",
            'name' => "Research Methods in Management",
            'major_id'    => 15,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8403",
            'name' => "Communication for Leaders and Managers",
            'major_id'    => 12,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8403",
            'name' => "Communication for Leaders and Managers",
            'major_id'    => 13,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8403",
            'name' => "Communication for Leaders and Managers",
            'major_id'    => 14,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8403",
            'name' => "Communication for Leaders and Managers",
            'major_id'    => 15,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8421",
            'name' => "Leadership, Management and Social Responsibility",
            'major_id'    => 12,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8421",
            'name' => "Leadership, Management and Social Responsibility",
            'major_id'    => 13,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8421",
            'name' => "Leadership, Management and Social Responsibility",
            'major_id'    => 14,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8421",
            'name' => "Leadership, Management and Social Responsibility",
            'major_id'    => 15,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        /**
         * Master of Management(Finance)
         */
        DB::table('courses')->insert([
            'code' => "BUS8407",
            'name' => "Financial Analysis",
            'major_id'    => 12,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8411",
            'name' => "Investment Analysis",
            'major_id'    => 12,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        /**
         * Master of Management(Information Systems)
         */
        DB::table('courses')->insert([
            'code' => "BUS8402",
            'name' => "Business Analysis",
            'major_id'    => 14,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8409",
            'name' => "Information Management",
            'major_id'    => 14,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        /**
         * Master of Management(Marketing)
         */
        DB::table('courses')->insert([
            'code' => "BUS8404",
            'name' => "Consumer Behaviour and Marketing Communication",
            'major_id'    => 15,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8416",
            'name' => "Strategic Marketing",
            'major_id'    => 15,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        /**
         * Master of Management(Hospitality)
         */
        DB::table('courses')->insert([
            'code' => "BUS8405",
            'name' => "Contemporary Issues in Hospitality Management",
            'major_id'    => 13,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8415",
            'name' => "Strategic Hospitality Management",
            'major_id'    => 13,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        /**
         * Master of Management(Finance /
         *                      Information Systems /
         *                      Marketing /
         *                      Hospitality)
         */
        DB::table('courses')->insert([
            'code' => "BUS8406",
            'name' => "Entrepreneurship",
            'major_id'    => 12,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T2",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8406",
            'name' => "Entrepreneurship",
            'major_id'    => 13,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T2",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8406",
            'name' => "Entrepreneurship",
            'major_id'    => 14,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T2",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8406",
            'name' => "Entrepreneurship",
            'major_id'    => 15,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T2",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8410",
            'name' => "Internship",
            'major_id'    => 12,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 30,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8410",
            'name' => "Internship",
            'major_id'    => 13,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 30,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8410",
            'name' => "Internship",
            'major_id'    => 14,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 30,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8410",
            'name' => "Internship",
            'major_id'    => 15,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 30,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8414",
            'name' => "Strategic Human Resource Management",
            'major_id'    => 12,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8414",
            'name' => "Strategic Human Resource Management",
            'major_id'    => 13,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8414",
            'name' => "Strategic Human Resource Management",
            'major_id'    => 14,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8414",
            'name' => "Strategic Human Resource Management",
            'major_id'    => 15,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "TBA",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8417",
            'name' => "Supply Chain Management",
            'major_id'    => 12,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8417",
            'name' => "Supply Chain Management",
            'major_id'    => 13,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8417",
            'name' => "Supply Chain Management",
            'major_id'    => 14,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS8417",
            'name' => "Supply Chain Management",
            'major_id'    => 15,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS9501",
            'name' => "Applied Research Project",
            'major_id'    => 12,
            'level' => "Level 9",
            'compulsory'     => 1,
            'credit'   => 45,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS9501",
            'name' => "Applied Research Project",
            'major_id'    => 13,
            'level' => "Level 9",
            'compulsory'     => 1,
            'credit'   => 45,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS9501",
            'name' => "Applied Research Project",
            'major_id'    => 14,
            'level' => "Level 9",
            'compulsory'     => 1,
            'credit'   => 45,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS9501",
            'name' => "Applied Research Project",
            'major_id'    => 15,
            'level' => "Level 9",
            'compulsory'     => 1,
            'credit'   => 45,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS9503",
            'name' => "Dissertation",
            'major_id'    => 12,
            'level' => "Level 9",
            'compulsory'     => 0,
            'credit'   => 60,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS9503",
            'name' => "Dissertation",
            'major_id'    => 13,
            'level' => "Level 9",
            'compulsory'     => 0,
            'credit'   => 60,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS9503",
            'name' => "Dissertation",
            'major_id'    => 14,
            'level' => "Level 9",
            'compulsory'     => 0,
            'credit'   => 60,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS9503",
            'name' => "Dissertation",
            'major_id'    => 15,
            'level' => "Level 9",
            'compulsory'     => 0,
            'credit'   => 60,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS9502",
            'name' => "Thesis",
            'major_id'    => 12,
            'level' => "Level 9",
            'compulsory'     => 0,
            'credit'   => 90,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS9502",
            'name' => "Thesis",
            'major_id'    => 13,
            'level' => "Level 9",
            'compulsory'     => 0,
            'credit'   => 90,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS9502",
            'name' => "Thesis",
            'major_id'    => 14,
            'level' => "Level 9",
            'compulsory'     => 0,
            'credit'   => 90,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "BUS9502",
            'name' => "Thesis",
            'major_id'    => 15,
            'level' => "Level 9",
            'compulsory'     => 0,
            'credit'   => 90,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered' =>      "T1",
            'next_offered_year'   => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        // **************************************************************************************
        /**
         * Bachelor of Information Technology (General IT)
         */
        DB::table('courses')->insert([
            'code' => "IT5181",
            'name' => "Communication Studies",
            'major_id'    => 16,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "Not offered",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT5182",
            'name' => "Fundamentals of Data Models and Databases",
            'major_id'    => 16,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "Not offered",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT5183",
            'name' => "Fundamentals of Software Design and Development",
            'major_id'    => 16,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "Not offered",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT5184",
            'name' => "Programming",
            'major_id'    => 16,
            'level' => "Level 5",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "Not offered",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT5185",
            'name' => "Mathematics for Information Technology",
            'major_id'    => 16,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "Not offered",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT5186",
            'name' => "The Information Technology Environment",
            'major_id'    => 16,
            'level' => "Level 5",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "Not offered",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT5187",
            'name' => "Fundamentals of Networking",
            'major_id'    => 16,
            'level' => "Level 5",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "Not offered",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT5189",
            'name' => "Introduction to Operation System",
            'major_id'    => 16,
            'level' => "Level 5",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "Not offered",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT6111",
            'name' => "Research and Theory in Information Technology",
            'major_id'    => 16,
            'level' => "Level 6",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year' => 2019,
            'next_offered' => "T2",
            'next_offered_year' => 2020,
            'prerequisite'   => "IT5101 or IT5181",
            'description' => "",
            'teacher_id'    =>  1,
        ]);
        
        DB::table('courses')->insert([
            'code' => "IT6119",
            'name' => "Operation Systems",
            'major_id'    => 16,
            'level' => "Level 6",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "T1",
            'next_offered_year' => 2020,
            'prerequisite'   => "IT5117 or IT5189",
            'description' => "",
            'teacher_id'    =>  1,
        ]);
        
        DB::table('courses')->insert([
            'code' => "IT6122",
            'name' => "Software Quality Assurance",
            'major_id'    => 16,
            'level' => "Level 6",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "T2",
            'next_offered_year' => 2020,
            'prerequisite'   => "IT5103 or IT5183",
            'description' => "",
            'teacher_id'    =>  1,
        ]);
        
        DB::table('courses')->insert([
            'code' => "IT6123",
            'name' => "Software Development Methods",
            'major_id'    => 16,
            'level' => "Level 6",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "T1",
            'next_offered_year' => 2020,
            'prerequisite'   => "IT5104 or IT5184",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT6126",
            'name' => "Data Models and Databases",
            'major_id'    => 16,
            'level' => "Level 6",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "T1",
            'next_offered_year' => 2020,
            'prerequisite'   => "IT5103 or IT5182",
            'description' => "",
            'teacher_id'    =>  1,
        ]);
        
        DB::table('courses')->insert([
            'code' => "IT6128",
            'name' => "Evaluation and Procurement",
            'major_id'    => 16,
            'level' => "Level 6",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 0,
            'current_offered'   => "No longer offered",
            'next_offered' => "No longer offered",
            'prerequisite'   => "IT5103 or IT5183",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT6129",
            'name' => "System Analysis and Design",
            'major_id'    => 16,
            'level' => "Level 6",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "T1",
            'next_offered_year' => 2020,
            'prerequisite'   => "IT5103 or IT5183",
            'description' => "",
            'teacher_id'    =>  1,
        ]);
        
        DB::table('courses')->insert([
            'code' => "IT6130",
            'name' => "Internet Application Development",
            'major_id'    => 16,
            'level' => "Level 6",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year' => 2019,
            'next_offered'      => "T1",
            'next_offered_year' => 2020,
            'prerequisite'   => "IT5104 or IT5184 & IT5182",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT6187",
            'name' => "Network Technologies - LAN & WAN",
            'major_id'    => 16,
            'level' => "Level 6",
            'compulsory'     => 0,
            'credit'   => 30,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year' => 2019,
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "IT5117 or IT5187",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT7101",
            'name' => "Project",
            'major_id'    => 16,
            'level' => "Level 7",
            'compulsory'     => 1,
            'credit'   => 45,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year' => 2019,
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "IT7305 or IT7125 & 300 credits",
            'description' => "",
            'teacher_id'    =>  1,
        ]);
        
        DB::table('courses')->insert([
            'code' => "IT7111",
            'name' => "Advanced Internet Development",
            'major_id'    => 16,
            'level' => "Level 7",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year' => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "IT6203 or IT6210 or IT6123 or IT6130",
            'description' => "",
            'teacher_id'    =>  1,
        ]);
        
        DB::table('courses')->insert([
            'code' => "IT7122",
            'name' => "Software Development",
            'major_id'    => 16,
            'level' => "Level 7",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "IT6203 or IT6210 or IT6123 or IT6130",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT7123",
            'name' => "System Analysis, Design and Control",
            'major_id'    => 16,
            'level' => "Level 7",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "IT6209 or IT6129",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT7125",
            'name' => "Project Management for IT",
            'major_id'    => 16,
            'level' => "Level 7",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "IT5183, IT5185, IT5186, IT6111",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT7126",
            'name' => "Information System in Management",
            'major_id'    => 16,
            'level' => "Level 7",
            'compulsory'     => 0,
            'credit'   => 16,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "IT5106 or IT5186",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT7128",
            'name' => "Human Computer Interaction",
            'major_id'    => 16,
            'level' => "Level 7",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "IT6203 or IT6210 / IT6123 or IT6130",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT7129",
            'name' => "Data Models and Databases",
            'major_id'    => 16,
            'level' => "Level 7",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "IT6206 or IT6126",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT7137",
            'name' => "System Administrator and VOIP",
            'major_id'    => 16,
            'level' => "Level 7",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "IT6218 or IT6119",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT7138",
            'name' => "Internet Security & Wireless Technologies",
            'major_id'    => 16,
            'level' => "Level 7",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "IT6217 or IT6187",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT7144",
            'name' => "Internship",
            'major_id'    => 16,
            'level' => "Level 7",
            'compulsory'     => 0,
            'credit'   => 30,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        /**
         * GD in Information Technology (General IT)
         */
        DB::table('courses')->insert([
            'code' => "IT5282",
            'name' => "Fundamentals of Data Models and Databases",
            'major_id'    => 17,
            'level' => "Level 5",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "Not offered",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT5284",
            'name' => "Programming",
            'major_id'    => 17,
            'level' => "Level 5",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "Not offered",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT5287",
            'name' => "Fundamentals of Networking",
            'major_id'    => 17,
            'level' => "Level 5",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "Not offered",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT5289",
            'name' => "Introduction to Operation System",
            'major_id'    => 17,
            'level' => "Level 5",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "Not offered",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT6211",
            'name' => "Research and Theory in Information Technology",
            'major_id'    => 17,
            'level' => "Level 6",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year' => 2019,
            'next_offered' => "T2",
            'next_offered_year' => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT6219",
            'name' => "Operation Systems",
            'major_id'    => 17,
            'level' => "Level 6",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "T1",
            'next_offered_year' => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT6222",
            'name' => "Software Quality Assurance",
            'major_id'    => 17,
            'level' => "Level 6",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "T2",
            'next_offered_year' => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT6223",
            'name' => "Software Development Methods",
            'major_id'    => 17,
            'level' => "Level 6",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "T1",
            'next_offered_year' => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT6226",
            'name' => "Data Models and Databases",
            'major_id'    => 17,
            'level' => "Level 6",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "T1",
            'next_offered_year' => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT6228",
            'name' => "Evaluation and Procurement",
            'major_id'    => 17,
            'level' => "Level 6",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 0,
            'current_offered'   => "No longer offered",
            'next_offered' => "No longer offered",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT6229",
            'name' => "System Analysis and Design",
            'major_id'    => 17,
            'level' => "Level 6",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered' => "T1",
            'next_offered_year' => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT6230",
            'name' => "Internet Application Development",
            'major_id'    => 17,
            'level' => "Level 6",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year' => 2019,
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT6287",
            'name' => "Network Technologies - LAN & WAN",
            'major_id'    => 17,
            'level' => "Level 6",
            'compulsory'     => 0,
            'credit'   => 30,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year' => 2019,
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT7201",
            'name' => "Project",
            'major_id'    => 17,
            'level' => "Level 7",
            'compulsory'     => 1,
            'credit'   => 45,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year' => 2019,
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "IT7225",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT7211",
            'name' => "Advanced Internet Development",
            'major_id'    => 17,
            'level' => "Level 7",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year' => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT7222",
            'name' => "Software Development",
            'major_id'    => 17,
            'level' => "Level 7",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT7223",
            'name' => "System Analysis, Design and Control",
            'major_id'    => 17,
            'level' => "Level 7",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT7225",
            'name' => "Project Management for IT",
            'major_id'    => 17,
            'level' => "Level 7",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT7226",
            'name' => "Information System in Management",
            'major_id'    => 17,
            'level' => "Level 7",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT7228",
            'name' => "Human Computer Interaction",
            'major_id'    => 17,
            'level' => "Level 7",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT7229",
            'name' => "Data Models and Databases",
            'major_id'    => 17,
            'level' => "Level 7",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT7237",
            'name' => "System Administrator and VOIP",
            'major_id'    => 17,
            'level' => "Level 7",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "IT6219",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT7238",
            'name' => "Internet Security & Wireless Technologies",
            'major_id'    => 17,
            'level' => "Level 7",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "IT6287",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT7244",
            'name' => "Internship",
            'major_id'    => 17,
            'level' => "Level 7",
            'compulsory'     => 0,
            'credit'   => 30,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        /**
         * PGD in Information Technology (General IT)
         */
        DB::table('courses')->insert([
            'code' => "IT7311",
            'name' => "Advanced Internet Development",
            'major_id'    => 18,
            'level' => "Level 7",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year' => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);
        
        DB::table('courses')->insert([
            'code' => "IT7322",
            'name' => "Software Development",
            'major_id'    => 18,
            'level' => "Level 7",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT7323",
            'name' => "System Analysis, Design and Control",
            'major_id'    => 18,
            'level' => "Level 7",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT7325",
            'name' => "Project Management for IT",
            'major_id'    => 18,
            'level' => "Level 7",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'   => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);
        
        DB::table('courses')->insert([
            'code' => "IT7326",
            'name' => "Information System in Management",
            'major_id'    => 18,
            'level' => "Level 7",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT7328",
            'name' => "Human Computer Interaction",
            'major_id'    => 18,
            'level' => "Level 7",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT7329",
            'name' => "Data Models and Databases",
            'major_id'    => 18,
            'level' => "Level 7",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT7337",
            'name' => "System Administrator and VOIP",
            'major_id'    => 18,
            'level' => "Level 7",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "Knowledge / Experience in Operating System",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT7338",
            'name' => "Internet Security & Wireless Technologies",
            'major_id'    => 18,
            'level' => "Level 7",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "Knowledge / Experience in Network System",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT8401",
            'name' => "Research in Information Technology",
            'major_id'    => 18,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT8410",
            'name' => "Business Analysis for Information Technology",
            'major_id'    => 18,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);    

        DB::table('courses')->insert([
            'code' => "IT8411",
            'name' => "Business Intelligence and Data Mining",
            'major_id'    => 18,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT8412",
            'name' => "Cloud Computing and ICT Infrastructure",
            'major_id'    => 18,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT8413",
            'name' => "Data Modelling",
            'major_id'    => 18,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT8414",
            'name' => "Information Management",
            'major_id'    => 18,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT8415",
            'name' => "Multimedia Applications for Mobile Devices",
            'major_id'    => 18,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT8416",
            'name' => "Network Design and Management",
            'major_id'    => 18,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT8417",
            'name' => "Network Security and Forensics",
            'major_id'    => 18,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT8418",
            'name' => "Quality Assurance and Testing",
            'major_id'    => 18,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT8419",
            'name' => "Systems Architecture and Technology Integration",
            'major_id'    => 18,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT8421",
            'name' => "Research Project",
            'major_id'    => 18,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 30,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "IT7325 & IT8401",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT8424",
            'name' => "Internship",
            'major_id'    => 18,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 30,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        /**
         * Master of Information Technology (General IT)
         */
        DB::table('courses')->insert([
            'code' => "IT8501",
            'name' => "Research in Information Technology",
            'major_id'    => 19,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT8502",
            'name' => "Research Proposal",
            'major_id'    => 19,
            'level' => "Level 8",
            'compulsory'     => 1,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T1",
            'current_offered_year'    => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "IT8501",
            'description' => "",
            'teacher_id'    =>  1,
        ]);   

        DB::table('courses')->insert([
            'code' => "IT8510",
            'name' => "Business Analysis for Information Technology",
            'major_id'    => 19,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT8511",
            'name' => "Business Intelligence and Data Mining",
            'major_id'    => 19,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT8512",
            'name' => "Cloud Computing and ICT Infrastructure",
            'major_id'    => 19,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT8513",
            'name' => "Data Modelling",
            'major_id'    => 19,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT8514",
            'name' => "Information Management",
            'major_id'    => 19,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT8515",
            'name' => "Multimedia Applications for Mobile Devices",
            'major_id'    => 19,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT8516",
            'name' => "Network Design and Management",
            'major_id'    => 19,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT8517",
            'name' => "Network Security and Forensics",
            'major_id'    => 19,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T2",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT8518",
            'name' => "Quality Assurance and Testing",
            'major_id'    => 19,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT8519",
            'name' => "Systems Architecture and Technology Integration",
            'major_id'    => 19,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT8520",
            'name' => "Special Topic in Information Technology",
            'major_id'    => 19,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 15,
            'active' => 1,
            'current_offered'   => "Not offered",
            'next_offered'      => "TBA",
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT8521",
            'name' => "Research Project",
            'major_id'    => 19,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 30,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "IT8501",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT8524",
            'name' => "Internship",
            'major_id'    => 19,
            'level' => "Level 8",
            'compulsory'     => 0,
            'credit'   => 30,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "None",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT9501",
            'name' => "Applied Research Project",
            'major_id'    => 19,
            'level' => "Level 9",
            'compulsory'     => 1,
            'credit'   => 45,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "135 Credits from Level 8 including IT8501 & IT8502",
            'description' => "",
            'teacher_id'    =>  1,
        ]);

        DB::table('courses')->insert([
            'code' => "IT9502",
            'name' => "Thesis",
            'major_id'    => 19,
            'level' => "Level 9",
            'compulsory'     => 1,
            'credit'   => 90,
            'active' => 1,
            'current_offered'   => "T2",
            'current_offered_year'    => 2019,
            'next_offered'      => "T1",
            'next_offered_year'    => 2020,
            'prerequisite'   => "135 Credits from Level 8 including IT8501 & IT8502",
            'description' => "",
            'teacher_id'    =>  1,
        ]);
    }
}
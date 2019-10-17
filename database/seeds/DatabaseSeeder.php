<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SchoolsTableSeeder::class);
        $this->call(GradesTableSeeder::class);
        $this->call(ProgrammesTableSeeder::class);
        $this->call(QualificationsTableSeeder::class);
        $this->call(MajorsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
    }
}

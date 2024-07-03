<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = [
            [
                'course_name' => 'Development Perspectives',
                'course_code' => 'DST 100',
                'course_type' => 'None Code',
                'credit' => '12.00',
                'lecturer' => 'Amani katwila',
               
            ],
            [
                'course_name' => 'Communication skills',
                'course_code' => 'COM 101',
                'course_type' => 'Core',
                'credit' => '13.00',
                'lecturer' => 'Mr mashaka',
              
                
            ],
        ];
        // Insert the data into the users table
        DB::table('courses')->insert($course);
    }
}

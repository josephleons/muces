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
                'course' => 'Development Perspectives',
                'code' => 'DST 100',
                'type' => 'None Code',
                'credit' => '12.00',
               
            ],
            [
                'course' => 'Communication skills',
                'code' => 'COM 101',
                'type' => 'Core',
                'credit' => '13.00',
              
                
            ],
        ];
        // Insert the data into the users table
        DB::table('courses')->insert($course);
    }
}

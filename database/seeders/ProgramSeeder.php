<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $program = [
            [
                'program' => 'Bsc.MICT-EDU',
                'description' => 'Bachelor of Science with Education in Mathematics and ICT',
                'department' => 'EMS',
                'department_id' => '3',
               
            ],
            [
                'program' => 'BSc. ITS',
                'description' => ' Bachelor of Science in Information Technology and Systems',
                'department' => 'CSS',
                'department_id' => '3',
               
            ],
            [
                'program' => 'BSc. IEM',
                'description' => 'Bachelor of Science in Industrial Engineering Management',
                'department' => 'EMS',
                'department_id' => '3',
               
            ],
        ];
        DB::table('programs')->insert($program);
    }
}

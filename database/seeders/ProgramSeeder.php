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
                'name' => 'Bsc.MICT-EDU',
                'description' => 'Bachelor of Science with Education in Mathematics and ICT',
                'department' => 'EMS',
                'department_id' => '1',
               
            ],
            [
                'name' => 'BSc. ITS',
                'description' => ' Bachelor of Science in Information Technology and Systems',
                'department' => 'CSS',
                'department_id' => '1',
               
            ],
            [
                'name' => 'BSc. IEM',
                'description' => 'Bachelor of Science in Industrial Engineering Management',
                'department' => 'EMS',
                'department_id' => '1',
               
            ],
        ];
        DB::table('programs')->insert($program);
    }
}

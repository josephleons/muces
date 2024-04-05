<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $department = [
            [
                'name' => 'EMS',
                'description' => 'Department of Mathematics Studies',
                'email' => 'ems@gmail.com',
                'contact' => '0756452619',
                'faculty' => 'FST',
                'faculty_id'=>'1',
               
            ],
            [
                'name' => 'CSS',
                'description' => 'Department of Computer Science Studies',
                'email' => 'css@gmail.com',
                'contact' => '0756452619',
                'faculty' => 'FST',
                'faculty_id'=>'1',
               
            ],
        ];
        DB::table('departments')->insert($department);
    }
}

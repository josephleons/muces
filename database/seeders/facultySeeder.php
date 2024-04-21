<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class facultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faculty = [
            [
                'faculty' => 'FST',
                'description' => 'Faculty of science and Technology',
                'email' => 'faculty@gmail.com',
                'contact' => '0756452617',
               
            ],
            [
                'faculty' => 'SOB',
                'description' => 'School of Business',
                'email' => 'sob@gmail.com',
                'contact' => '0656452629',
               
            ],
            [
                'faculty' => 'SOPAM',
                'description' => 'School Of Public Administrative Management',
                'email' => 'sopam@gmail.com',
                'contact' => '0657381635',
               
            ],
        ];
        DB::table('faculties')->insert($faculty);
    }
}

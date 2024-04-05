<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lecturer = [
            [
                'name' => 'lecturer@example.com',
                'email' => 'lecture@example.com',
                'department' => 'CSS',
                'department_id' => '1',
            ],
        ];
        DB::table('lecturer')->insert($lecturer);
    }
}

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
                'lecturer' => 'kasheshe makumbusho masalu',
                'department_id' => '1',
                'user_id'=>'4',

            ],
        ];
        DB::table('lecturer')->insert($lecturer);
    }
}

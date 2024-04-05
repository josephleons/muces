<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'username' => 'admin@example.com',
                'email' => 'admin@example.com',
                'contact' => '+255656825737',
                'password' => Hash::make('admin01'),
                'usertype' => 'admin',
            ],
            [
                'username' => 'dean@example.com',
                'email' => 'dean@example.com',
                'contact' => '+255656825737',
                'password' => Hash::make('123456'),
                'usertype' => 'dean',
            ],
            [
                'username' => 'student@example.com',
                'email' => 'student@example.com',
                'contact' => '+255656825737',
                'password' => Hash::make('mu123456'),
                'usertype' => 'student',
            ],
            [
                'username' => 'juma@example.com',
                'email' => 'juma@example.com',
                'contact' => '+255656825737',
                'password' => Hash::make('123456'),
                'usertype' => 'evaluator',
            ],
            // Add more users as needed
        ];

        // Insert the data into the users table
        DB::table('users')->insert($users);
    }
}

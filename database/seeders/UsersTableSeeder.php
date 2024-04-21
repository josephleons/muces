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
                'username' => 'admin@gmail.com',
                'email' => 'admin@gmail.com',
                'contact' => '+255656825737',
                'password' => Hash::make('admin01'),
                'usertype' => 'Admin',
            ],
            [
                'username' => 'dean@gmail.com',
                'email' => 'admin@gmail.com',
                'contact' => '+255656825737',
                'password' => Hash::make('123456'),
                'usertype' => 'Dean',
            ],
            [
                'username' => 'student@gmail.com',
                'email' => 'student@gmail.com',
                'contact' => '+255656825737',
                'password' => Hash::make('mu123456'),
                'usertype' => 'Student',
            ],
            [
                'username' => 'qualityassuarance@gmail.com',
                'email' => 'qualityassuarance@gmail.com',
                'contact' => '+255656825737',
                'password' => Hash::make('123456'),
                'usertype' => 'Q_assuarance',
            ],
            // Add more users as needed
        ];

        // Insert the data into the users table
        DB::table('users')->insert($users);
    }
}

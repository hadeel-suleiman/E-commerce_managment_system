<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run()
    {
        // Check if the admin user already exists
        if (!User::where('email', 'hadeelsul@gmail.com')->exists()) {
            User::create([
                'name' => 'Hadeel Sueliman',
                'email' => 'hadeelsul@gmail.com',
                'password' => Hash::make('12345678'), // Use a secure password
                'role' => 'admin', // Assuming you have a role field to distinguish admin users
            ]);
        }
    }




}

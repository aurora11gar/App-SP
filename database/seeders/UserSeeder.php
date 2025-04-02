<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create[(
            'name'=> 'Aurora',
            'email' => 'villaaurora375@gmail.com'
            'password' => Hash::make ('12345678'), 
            'email_verified_at' => now(),
        )]
    }
}

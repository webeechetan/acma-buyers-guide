<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new User();  
        $admin->name = 'Admin';
        $admin->email = 'admin@gmail.com';
        $admin->password = Hash::make('123456');
        $admin->type = '1';
        $admin->save();
    }
}

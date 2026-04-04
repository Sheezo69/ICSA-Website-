<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        if (Admin::query()->exists()) {
            return;
        }

        Admin::query()->create([
            'username' => 'admin',
            'email' => 'admin@icsa.us',
            'password_hash' => Hash::make('password'),
            'role' => Admin::ROLE_ADMIN,
            'login_attempts' => 0,
        ]);
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'username' => 'admin',
                'password' => Hash::make('123456789'),
                'role' => 'admin',
            ]
        );

        User::updateOrCreate(
            ['email' => 'semiadmin@example.com'],
            [
                'username' => 'semiadmin',
                'password' => Hash::make('123456789'),
                'role' => 'semiadmin',
            ]
        );
    }
}


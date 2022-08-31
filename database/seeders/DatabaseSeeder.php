<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Role::create([
            'name' => 'Admin'
        ]);

        Role::create([
            'name' => 'Editor'
        ]);

        User::create([
            'name' => 'Rasendriya Nakano',
            'url' => 'rasendriya-nakano',
            'email' => 'rasendriya.nakano@gmail.com',
            'role_id' => 1,
            'password' => Hash::make('password')
        ]);

        User::create([
            'name' => 'Oki Taryadi',
            'url' => 'oki-taryadi',
            'email' => 'oki.taryadi@gmail.com',
            'role_id' => 2,
            'password' => Hash::make('password')
        ]);

        User::create([
            'name' => 'Zaili Fajrizal',
            'url' => 'zaili-fajrizal',
            'email' => 'zaili.fajrizal@gmail.com',
            'role_id' => 2,
            'is_active' => FALSE,
            'password' => Hash::make('password')
        ]);
    }
}

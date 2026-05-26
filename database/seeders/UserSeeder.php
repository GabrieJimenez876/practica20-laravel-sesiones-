<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name' => 'Omar Q M',
            'email' => 'omarqm@example.com',
            'password' => Hash::make('Omar411*'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Gabriel Jimenez',
            'email' => 'gabriel@example.com',
            'password' => Hash::make('Gabriel123*'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Maria Lopez',
            'email' => 'maria@example.com',
            'password' => Hash::make('Maria123*'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'Carlos Perez',
            'email' => 'carlos@example.com',
            'password' => Hash::make('Carlos123*'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'Ana Gutierrez',
            'email' => 'ana@example.com',
            'password' => Hash::make('Ana123*'),
            'role' => 'user',
        ]);
    }
}

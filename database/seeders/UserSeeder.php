<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'George Miseal Gantume',
            'username' => 'georgemisaell',
            'email' => 'george@gmail.com',
            'password' => Hash::make('password123'),
        ]);

        User::factory(5)->create();
    }
}

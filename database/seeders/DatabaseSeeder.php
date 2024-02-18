<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Napi',
            'email' => 'napi@gmail.com',
            'password'=> 'napi',
            'role' => 'admin'
        ]);
    }
}

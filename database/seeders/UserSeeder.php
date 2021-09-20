<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Nur',
            'email' => 'nuriswanto66@gmail.com',
            'password' => Hash::make('nurlisa2311'),
            'level' => 'admin',
        ]);
    }
}

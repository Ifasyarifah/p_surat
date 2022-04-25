<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => \Hash::make('12345678'),
                'isAdmin' => true
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => \Hash::make('12345678'),
                'isAdmin' => false
            ]
        ]);
    }
}

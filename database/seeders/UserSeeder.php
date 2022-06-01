<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]);
        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'User 1',
            'email' => 'user1@user.com',
            'password' => bcrypt('password'),
        ]);
        $user->assignRole('user');
    }
}
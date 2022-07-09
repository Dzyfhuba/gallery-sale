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
        $admin = User::create([
        	'name' => 'hafidz',
            'username' => 'hafidz21ub',
        	'email' => 'hafidz21ub@gmail.com',
        	'password' => Hash::make('12345678')
        ]);

        $admin->assignRole('admin');

        $user = User::create([
        	'name' => 'ubaidillah',
            'username' => '15lululili15',
        	'email' => '15lululili15@gmail.com',
        	'password' => Hash::make('12345678')
        ]);

        $user->assignRole('user');
    }
}

<?php

namespace Database\Seeders;

use App\Models\ContactUs;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @return void
     *
     */
    public function run()
    {
        ContactUs::factory(1)->create();
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        User::factory(25)->create();
        // $this->call(PostSeeder::class);
        // Gallery::factory(100)->create();

        Service::factory(25)->create();
    }
}

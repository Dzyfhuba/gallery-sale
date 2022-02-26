<?php

namespace Database\Seeders;

use App\Models\Gallery;
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
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        User::factory(25)->create();
        $this->call(PostSeeder::class);

        if (!File::exists(storage_path('storage/gallery'))) {
            Storage::makeDirectory('public/gallery', 777, true, true);
            echo "direktori tidak ada\n";
        } else {
            echo "direktori sudah dibuat\n";
        }
        Gallery::factory(100)->create();
    }
}

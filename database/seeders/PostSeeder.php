<?php

namespace Database\Seeders;

use App\Models\User;
use Dzyfhuba\PostSys\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            $faker = Faker::create();
            $post = Post::create([
                'title' => substr(Str::title($faker->unique()->sentence()), 0, -1),
                'description' => $faker->realText(1000),
                'status' => rand(0, 1),
            ]);
            $user = User::where('username', 'hafidz21ub')->first();

            $user->assignPost($post);
        }
    }
}

<?php

namespace Database\Factories;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // get random int from 3 to 15
        $imagesCount = random_int(3, 15);
        // get few random images from the gallery
        $images = Gallery::inRandomOrder()->take($imagesCount)->get();
        // $images to json
        $images = $images->toJson();
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'images' => $images,
            'status' => $this->faker->boolean,
        ];
    }
}

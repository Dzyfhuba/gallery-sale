<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContactUs>
 */
class ContactUsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'logo' => "alamrohmangarden.png",
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraphs(3, true),
            'address' => $this->faker->address,
            'coordinates' => $this->faker->latitude . ',' . $this->faker->longitude,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'facebook' => $this->faker->url,
            'instagram' => $this->faker->url,
        ];
    }
}

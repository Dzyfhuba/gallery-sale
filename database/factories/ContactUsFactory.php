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
            'address' => "Alam Rohman Garden",
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'facebook' => $this->faker->userName,
            'facebook_url' => $this->faker->url,
            'instagram' => $this->faker->userName,
            'instagram_url' => $this->faker->url,
        ];
    }
}
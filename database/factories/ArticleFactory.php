<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker()->sentence();
        return [
            'user_id' => 1,
            'title' => $title,
            'slug' => Str::slug($title),
            'content' => $this->faker()->paragraphs(10, true),
            'image' => $this->faker()->image
        ];
    }
}

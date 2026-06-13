<?php

namespace Database\Factories;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class BlogFactory extends Factory
{
    protected $model = Blog::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'description' => $this->faker->text(),
            'time_to_read' => $this->faker->randomNumber(),
            'image_url' => $this->faker->imageUrl(),
            'content' => $this->faker->word(),
            'tags' => $this->faker->words(),
            'slug' => $this->faker->slug(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'category_id' => Category::factory(),
        ];
    }
}

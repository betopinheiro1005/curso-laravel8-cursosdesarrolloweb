<?php

namespace Database\Factories;

use \App\Models\Post;
use \App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            "user_id" => User::factory(),
            "title" => $this->faker->text(50),
            "content" => $this->faker->text(500),
            "created_at" => now()
        ];
    }
}

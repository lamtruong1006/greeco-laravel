<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\PostCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'post_category_id' => PostCategory::factory(),
            'user_id' => User::factory(),
            'title' => fake()->unique()->sentence(6),
            'excerpt' => fake()->paragraph(),
            'content' => fake()->paragraphs(8, true),
            'featured_image' => 'images/post-1.jpg',
            'tags' => ['môi trường', 'khí nhà kính'],
            'views' => fake()->numberBetween(0, 1000),
            'published_at' => fake()->dateTimeBetween('-1 year', 'now'),
            'status' => 'published',
            'meta_title' => null,
            'meta_description' => null,
            'meta_keywords' => null,
            'og_image' => null,
        ];
    }
}

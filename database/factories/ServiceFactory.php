<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition(): array
    {
        return [
            'name' => fake()->unique()->words(3, true),
            'icon' => 'images/icon-service-1.svg',
            'short_description' => fake()->sentence(10),
            'content' => fake()->paragraphs(5, true),
            'featured_image' => 'images/service-img-1.jpg',
            'gallery' => null,
            'order' => fake()->numberBetween(1, 100),
            'is_featured' => fake()->boolean(40),
            'is_active' => true,
            'meta_title' => null,
            'meta_description' => null,
            'meta_keywords' => null,
            'og_image' => null,
        ];
    }
}

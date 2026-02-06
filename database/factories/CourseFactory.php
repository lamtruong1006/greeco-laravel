<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition(): array
    {
        return [
            'course_category_id' => CourseCategory::factory(),
            'name' => fake()->unique()->sentence(4),
            'badge' => fake()->randomElement(['Mới', 'Hot', 'Bestseller', null]),
            'short_description' => fake()->sentence(15),
            'content' => fake()->paragraphs(6, true),
            'overview' => fake()->paragraph(3),
            'featured_image' => 'images/service-img-1.jpg',
            'gallery' => null,
            'duration_hours' => fake()->numberBetween(8, 40),
            'total_sessions' => fake()->numberBetween(2, 10),
            'format' => fake()->randomElement(['online', 'offline', 'hybrid']),
            'min_students' => 10,
            'max_students' => 30,
            'has_certificate' => true,
            'price' => fake()->numberBetween(3, 15) * 1000000,
            'discount_price' => null,
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

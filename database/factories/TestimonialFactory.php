<?php

namespace Database\Factories;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestimonialFactory extends Factory
{
    protected $model = Testimonial::class;

    public function definition(): array
    {
        return [
            'client_name' => fake()->name(),
            'client_position' => fake()->jobTitle(),
            'client_company' => fake()->company(),
            'client_avatar' => 'images/client-image-1.jpg',
            'content' => fake()->paragraph(3),
            'rating' => fake()->numberBetween(4, 5),
            'order' => fake()->numberBetween(1, 100),
            'is_active' => true,
        ];
    }
}

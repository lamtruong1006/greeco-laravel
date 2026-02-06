<?php

namespace Database\Factories;

use App\Models\Slider;
use Illuminate\Database\Eloquent\Factories\Factory;

class SliderFactory extends Factory
{
    protected $model = Slider::class;

    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'subtitle' => fake()->sentence(5),
            'description' => fake()->paragraph(),
            'button_text' => 'Tìm hiểu thêm',
            'button_url' => '/about',
            'image' => 'images/hero-bg.jpg',
            'order' => fake()->unique()->numberBetween(1, 10),
            'is_active' => true,
        ];
    }
}

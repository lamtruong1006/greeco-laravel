<?php

namespace Database\Factories;

use App\Models\Partner;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartnerFactory extends Factory
{
    protected $model = Partner::class;

    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'logo' => 'images/company-logo.svg',
            'website' => fake()->url(),
            'description' => fake()->sentence(),
            'type' => fake()->randomElement(['client', 'partner']),
            'order' => fake()->numberBetween(1, 100),
            'is_active' => true,
        ];
    }
}

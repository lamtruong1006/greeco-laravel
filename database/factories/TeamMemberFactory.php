<?php

namespace Database\Factories;

use App\Models\TeamMember;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamMemberFactory extends Factory
{
    protected $model = TeamMember::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'position' => fake()->jobTitle(),
            'department' => fake()->randomElement(['Ban Giám đốc', 'Tư vấn Môi trường', 'Đào tạo']),
            'avatar' => 'images/team-1.jpg',
            'bio' => fake()->paragraph(3),
            'email' => fake()->email(),
            'phone' => fake()->phoneNumber(),
            'social_links' => [
                'facebook' => 'https://facebook.com',
                'linkedin' => 'https://linkedin.com',
            ],
            'order' => fake()->numberBetween(1, 100),
            'is_active' => true,
        ];
    }
}

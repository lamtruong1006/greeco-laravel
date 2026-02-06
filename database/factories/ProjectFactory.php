<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition(): array
    {
        return [
            'project_category_id' => ProjectCategory::factory(),
            'name' => fake()->unique()->sentence(4),
            'short_description' => fake()->sentence(15),
            'content' => fake()->paragraphs(6, true),
            'featured_image' => 'images/project-1.jpg',
            'gallery' => null,
            'client_name' => fake()->company(),
            'project_type' => 'Kiểm kê KNK',
            'duration' => '3 tháng',
            'standard' => 'ISO 14064-1',
            'start_date' => fake()->dateTimeBetween('-1 year', '-6 months'),
            'end_date' => fake()->dateTimeBetween('-5 months', 'now'),
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

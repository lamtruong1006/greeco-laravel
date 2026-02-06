<?php

namespace Database\Seeders;

use App\Models\CourseCategory;
use Illuminate\Database\Seeder;

class CourseCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Khí nhà kính & Carbon',
                'description' => 'Các khóa đào tạo về kiểm kê khí nhà kính, tín chỉ carbon, CBAM và thị trường carbon.',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'ESG & Phát triển Bền vững',
                'description' => 'Các khóa đào tạo về ESG, báo cáo phát triển bền vững, GRI, TCFD.',
                'order' => 2,
                'is_active' => true,
            ],
        ];

        foreach ($categories as $category) {
            CourseCategory::create($category);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\PostCategory;
use Illuminate\Database\Seeder;

class PostCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Tin tức & Sự kiện',
                'description' => 'Tin tức về hoạt động của GREECO và các sự kiện ngành môi trường, biến đổi khí hậu.',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Kiến thức Chuyên môn',
                'description' => 'Bài viết chia sẻ kiến thức về kiểm kê KNK, ESG, CBAM, phát triển bền vững.',
                'order' => 2,
                'is_active' => true,
            ],
        ];

        foreach ($categories as $category) {
            PostCategory::create($category);
        }
    }
}

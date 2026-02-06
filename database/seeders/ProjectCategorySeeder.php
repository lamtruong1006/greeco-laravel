<?php

namespace Database\Seeders;

use App\Models\ProjectCategory;
use Illuminate\Database\Seeder;

class ProjectCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Kiểm kê Khí nhà kính',
                'description' => 'Dự án kiểm kê khí nhà kính cho doanh nghiệp, nhà máy, khu công nghiệp theo ISO 14064 và GHG Protocol.',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Báo cáo CBAM & LCA',
                'description' => 'Dự án hỗ trợ doanh nghiệp xuất khẩu EU lập báo cáo CBAM và phân tích vòng đời sản phẩm.',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'ESG & Phát triển Bền vững',
                'description' => 'Dự án tư vấn chiến lược ESG và báo cáo phát triển bền vững cho doanh nghiệp.',
                'order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($categories as $category) {
            ProjectCategory::create($category);
        }
    }
}

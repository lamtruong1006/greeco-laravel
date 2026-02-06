<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    public function run(): void
    {
        $sliders = [
            [
                'title' => 'Giải pháp Kiểm kê Khí nhà kính Toàn diện',
                'subtitle' => 'Đối tác chiến lược cho Phát triển Bền vững',
                'description' => 'GREECO cung cấp dịch vụ kiểm kê khí nhà kính theo tiêu chuẩn quốc tế ISO 14064, GHG Protocol. Hỗ trợ doanh nghiệp xây dựng lộ trình giảm phát thải và đạt mục tiêu Net Zero.',
                'button_text' => 'Khám phá dịch vụ',
                'button_url' => '/services',
                'image' => 'images/hero-bg-env.png',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Đào tạo Chuyên gia Môi trường & Carbon',
                'subtitle' => 'Nâng cao năng lực Phát triển Bền vững',
                'description' => 'Các khóa đào tạo chuyên sâu về kiểm kê khí nhà kính, ESG, CBAM, LCA được thiết kế bởi đội ngũ chuyên gia giàu kinh nghiệm. Cấp chứng chỉ được công nhận quốc tế.',
                'button_text' => 'Xem khóa học',
                'button_url' => '/courses',
                'image' => 'images/hero-bg-2.jpg',
                'order' => 2,
                'is_active' => true,
            ],
        ];

        foreach ($sliders as $slider) {
            Slider::create($slider);
        }
    }
}

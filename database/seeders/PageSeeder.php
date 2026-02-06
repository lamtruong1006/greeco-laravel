<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        $pages = [
            [
                'title' => 'Giới thiệu',
                'slug' => 'gioi-thieu',
                'content' => '<p>GREECO - Viện Đào tạo và nghiên cứu Môi trường là đơn vị tiên phong trong lĩnh vực kiểm kê khí nhà kính, tư vấn phát triển bền vững và đào tạo môi trường tại Việt Nam.</p>
<p>Với đội ngũ chuyên gia giàu kinh nghiệm, GREECO cung cấp các giải pháp toàn diện giúp doanh nghiệp đáp ứng yêu cầu về môi trường, hướng tới phát triển bền vững.</p>',
                'template' => 'about',
                'featured_image' => 'images/about-image-env.png',
                'is_active' => true,
                'meta_title' => 'Giới thiệu - GREECO | Viện Đào tạo và nghiên cứu Môi trường',
                'meta_description' => 'GREECO - Viện Đào tạo và nghiên cứu Môi trường hàng đầu Việt Nam. Chuyên kiểm kê khí nhà kính, tư vấn ESG, CBAM và đào tạo phát triển bền vững.',
            ],
            [
                'title' => 'Hợp tác & NCKH',
                'slug' => 'hop-tac',
                'content' => '<p>GREECO luôn mở rộng hợp tác với các tổ chức, doanh nghiệp, trường đại học và viện nghiên cứu trong và ngoài nước nhằm thúc đẩy phát triển bền vững và bảo vệ môi trường.</p>',
                'template' => 'cooperation',
                'featured_image' => 'images/about-image-env.png',
                'is_active' => true,
                'meta_title' => 'Hợp tác & NCKH - GREECO | Viện Đào tạo và nghiên cứu Môi trường',
                'meta_description' => 'Hợp tác với GREECO trong lĩnh vực môi trường, kiểm kê KNK, ESG và nghiên cứu khoa học.',
            ],
        ];

        foreach ($pages as $page) {
            Page::create($page);
        }
    }
}

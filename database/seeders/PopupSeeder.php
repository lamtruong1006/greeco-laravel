<?php

namespace Database\Seeders;

use App\Models\Popup;
use Illuminate\Database\Seeder;

class PopupSeeder extends Seeder
{
    public function run(): void
    {
        Popup::create([
            'title' => 'KIỂM KÊ <span>KHÍ NHÀ KÍNH</span> CHO DOANH NGHIỆP',
            'subtitle' => 'CƠ HỘI tư vấn - đào tạo',
            'content' => '<ul class="popup-features">
<li><i class="fa-solid fa-check"></i> Tư vấn kiểm kê KNK theo ISO 14064-1</li>
<li><i class="fa-solid fa-check"></i> Hỗ trợ lập báo cáo CBAM cho xuất khẩu EU</li>
<li><i class="fa-solid fa-check"></i> Đào tạo chuyên gia nội bộ</li>
<li><i class="fa-solid fa-check"></i> Chiết khấu 15% cho đăng ký sớm</li>
</ul>',
            'button_text' => 'Đăng ký tư vấn miễn phí',
            'button_url' => '/lien-he',
            'image' => 'images/popup-image.jpg',
            'badge_1' => 'Tháng 1-3/2026',
            'badge_2' => 'Tư vấn MIỄN PHÍ',
            'start_date' => '2025-01-01',
            'end_date' => '2026-12-31',
            'is_active' => true,
        ]);
    }
}

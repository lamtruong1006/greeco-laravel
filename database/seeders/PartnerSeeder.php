<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    public function run(): void
    {
        $partners = [
            [
                'name' => 'Tổng Công ty Thép Việt Nam (VNSTEEL)',
                'logo' => 'images/company-logo.svg',
                'website' => 'https://vnsteel.vn',
                'description' => 'Tổng công ty thép lớn nhất Việt Nam, khách hàng kiểm kê KNK',
                'type' => 'client',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Tập đoàn Vinamilk',
                'logo' => 'images/company-logo.svg',
                'website' => 'https://vinamilk.com.vn',
                'description' => 'Công ty sữa lớn nhất Việt Nam, khách hàng Net Zero',
                'type' => 'client',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'VSIP Group',
                'logo' => 'images/company-logo.svg',
                'website' => 'https://vsip.com.vn',
                'description' => 'Tập đoàn phát triển KCN hàng đầu, khách hàng KCN sinh thái',
                'type' => 'client',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Tập đoàn FPT',
                'logo' => 'images/company-logo.svg',
                'website' => 'https://fpt.com.vn',
                'description' => 'Tập đoàn công nghệ, khách hàng báo cáo PTBV',
                'type' => 'client',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'VietinBank',
                'logo' => 'images/company-logo.svg',
                'website' => 'https://vietinbank.vn',
                'description' => 'Ngân hàng lớn, khách hàng chiến lược ESG',
                'type' => 'client',
                'order' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Bộ Tài nguyên và Môi trường',
                'logo' => 'images/company-logo.svg',
                'website' => 'https://monre.gov.vn',
                'description' => 'Đối tác trong các chương trình đào tạo',
                'type' => 'partner',
                'order' => 6,
                'is_active' => true,
            ],
            [
                'name' => 'GIZ Vietnam',
                'logo' => 'images/company-logo.svg',
                'website' => 'https://giz.de',
                'description' => 'Đối tác hợp tác kỹ thuật về biến đổi khí hậu',
                'type' => 'partner',
                'order' => 7,
                'is_active' => true,
            ],
            [
                'name' => 'World Bank Vietnam',
                'logo' => 'images/company-logo.svg',
                'website' => 'https://worldbank.org',
                'description' => 'Đối tác tài trợ dự án carbon',
                'type' => 'partner',
                'order' => 8,
                'is_active' => true,
            ],
            [
                'name' => 'UNIDO Vietnam',
                'logo' => 'images/company-logo.svg',
                'website' => 'https://unido.org',
                'description' => 'Đối tác phát triển KCN sinh thái',
                'type' => 'partner',
                'order' => 9,
                'is_active' => true,
            ],
            [
                'name' => 'Đại học Bách khoa TP.HCM',
                'logo' => 'images/company-logo.svg',
                'website' => 'https://hcmut.edu.vn',
                'description' => 'Đối tác học thuật và nghiên cứu',
                'type' => 'partner',
                'order' => 10,
                'is_active' => true,
            ],
        ];

        foreach ($partners as $partner) {
            Partner::create($partner);
        }
    }
}

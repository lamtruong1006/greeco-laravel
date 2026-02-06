<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    public function run(): void
    {
        $members = [
            [
                'name' => 'TS. Nguyễn Văn An',
                'position' => 'Viện trưởng',
                'department' => 'Ban Giám đốc',
                'avatar' => 'images/team-1-env.png',
                'bio' => 'Tiến sĩ Môi trường, Đại học Tokyo. Hơn 20 năm kinh nghiệm trong lĩnh vực tư vấn môi trường và biến đổi khí hậu. Chuyên gia đánh giá của UNFCCC. Thành viên Ban soạn thảo Luật Bảo vệ Môi trường 2020.',
                'email' => 'an.nguyen@greeco.vn',
                'phone' => '0903 330 001',
                'social_links' => [
                    'linkedin' => 'https://linkedin.com/in/nguyenvanan',
                    'facebook' => 'https://facebook.com/nguyenvanan',
                ],
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'ThS. Trần Thị Bích Ngọc',
                'position' => 'Phó Viện trưởng',
                'department' => 'Ban Giám đốc',
                'avatar' => 'images/team-2-env.png',
                'bio' => 'Thạc sĩ Quản lý Môi trường, Đại học Melbourne. 15 năm kinh nghiệm trong kiểm kê khí nhà kính và ESG. Chứng chỉ GRI Certified Training Partner. Chuyên gia thẩm định ISO 14064-3.',
                'email' => 'ngoc.tran@greeco.vn',
                'phone' => '0903 330 002',
                'social_links' => [
                    'linkedin' => 'https://linkedin.com/in/tranbichngoc',
                ],
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'ThS. Lê Minh Hoàng',
                'position' => 'Giám đốc Tư vấn',
                'department' => 'Tư vấn Môi trường',
                'avatar' => 'images/team-3.jpg',
                'bio' => 'Thạc sĩ Kỹ thuật Môi trường, ĐH Bách khoa. 12 năm kinh nghiệm tư vấn ĐTM, giấy phép môi trường. Chứng chỉ Lead Auditor ISO 14001. Đã thực hiện hơn 200 dự án tư vấn.',
                'email' => 'hoang.le@greeco.vn',
                'phone' => '0903 330 003',
                'social_links' => [
                    'linkedin' => 'https://linkedin.com/in/leminhhoang',
                ],
                'order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'CN. Phạm Thị Hương',
                'position' => 'Trưởng phòng Đào tạo',
                'department' => 'Đào tạo',
                'avatar' => 'images/team-4.jpg',
                'bio' => 'Cử nhân Môi trường, ĐH Khoa học Tự nhiên. 10 năm kinh nghiệm đào tạo doanh nghiệp. Chứng chỉ ESG Practitioner (CFA Institute). Đã đào tạo hơn 5,000 học viên.',
                'email' => 'huong.pham@greeco.vn',
                'phone' => '0903 330 004',
                'social_links' => [
                    'linkedin' => 'https://linkedin.com/in/phamthihuong',
                    'facebook' => 'https://facebook.com/phamthihuong',
                ],
                'order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'ThS. Võ Thanh Tùng',
                'position' => 'Chuyên gia Carbon',
                'department' => 'Tư vấn Môi trường',
                'avatar' => 'images/team-1.jpg',
                'bio' => 'Thạc sĩ Biến đổi Khí hậu, ĐH Wageningen. 8 năm kinh nghiệm kiểm kê KNK và thị trường carbon. Chứng chỉ VERRA VCS. Đã thực hiện 50+ dự án kiểm kê KNK.',
                'email' => 'tung.vo@greeco.vn',
                'phone' => '0903 330 005',
                'social_links' => [
                    'linkedin' => 'https://linkedin.com/in/vothanhtung',
                ],
                'order' => 5,
                'is_active' => true,
            ],
        ];

        foreach ($members as $member) {
            TeamMember::create($member);
        }
    }
}

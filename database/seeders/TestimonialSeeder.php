<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            [
                'client_name' => 'Ông Nguyễn Văn Hùng',
                'client_position' => 'Giám đốc Phát triển Bền vững',
                'client_company' => 'Tập đoàn Hòa Phát',
                'client_avatar' => 'images/client-image-1.jpg',
                'content' => 'GREECO đã hỗ trợ chúng tôi xây dựng hệ thống kiểm kê khí nhà kính chuyên nghiệp theo ISO 14064-1. Đội ngũ chuyên gia rất am hiểu ngành thép và đưa ra nhiều giải pháp giảm phát thải thiết thực. Đây là đối tác tin cậy trong hành trình Net Zero của Hòa Phát.',
                'rating' => 5,
                'order' => 1,
                'is_active' => true,
            ],
            [
                'client_name' => 'Bà Trần Thị Mai',
                'client_position' => 'ESG Manager',
                'client_company' => 'Vinamilk',
                'client_avatar' => 'images/client-image-2.jpg',
                'content' => 'Khóa đào tạo ESG của GREECO rất thực tiễn và dễ áp dụng. Giảng viên có kinh nghiệm thực tế phong phú, chia sẻ nhiều case study từ doanh nghiệp Việt Nam. Sau khóa học, team ESG của Vinamilk đã tự tin triển khai các sáng kiến mới.',
                'rating' => 5,
                'order' => 2,
                'is_active' => true,
            ],
            [
                'client_name' => 'Ông Lê Hoàng Nam',
                'client_position' => 'Tổng Giám đốc',
                'client_company' => 'VSIP Bình Dương',
                'client_avatar' => 'images/client-image-3.jpg',
                'content' => 'GREECO là đối tác chiến lược trong kế hoạch chuyển đổi VSIP thành KCN sinh thái. Họ không chỉ tư vấn chuyên môn mà còn hỗ trợ kết nối các doanh nghiệp trong KCN để triển khai cộng sinh công nghiệp. Rất chuyên nghiệp và tận tâm.',
                'rating' => 5,
                'order' => 3,
                'is_active' => true,
            ],
            [
                'client_name' => 'Bà Phạm Thu Hà',
                'client_position' => 'Giám đốc Xuất khẩu',
                'client_company' => 'Thép Pomina',
                'client_avatar' => 'images/client-image-4.jpg',
                'content' => 'Khi CBAM có hiệu lực, chúng tôi lo lắng về việc tuân thủ. GREECO đã hướng dẫn chi tiết từng bước lập báo cáo CBAM, giúp Pomina hoàn thành đúng hạn và chính xác. Giờ đây chúng tôi tự tin tiếp tục xuất khẩu sang EU.',
                'rating' => 5,
                'order' => 4,
                'is_active' => true,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}

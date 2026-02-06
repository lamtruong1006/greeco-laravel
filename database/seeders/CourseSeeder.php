<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\CourseModule;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $carbonCategory = CourseCategory::where('name', 'like', '%Carbon%')->first();
        $esgCategory = CourseCategory::where('name', 'like', '%ESG%')->first();

        $courses = [
            // Carbon courses
            [
                'course_category_id' => $carbonCategory->id,
                'name' => 'Kiểm kê Khí nhà kính theo ISO 14064-1',
                'badge' => 'Bestseller',
                'short_description' => 'Khóa học toàn diện về kiểm kê khí nhà kính doanh nghiệp theo tiêu chuẩn ISO 14064-1:2018 và GHG Protocol.',
                'content' => '<h3>Giới thiệu khóa học</h3>
<p>Khóa học cung cấp kiến thức và kỹ năng thực hành để thực hiện kiểm kê khí nhà kính cho doanh nghiệp theo các tiêu chuẩn quốc tế.</p>

<h3>Đối tượng tham dự</h3>
<ul>
<li>Nhân viên phụ trách môi trường doanh nghiệp</li>
<li>Chuyên viên ESG, phát triển bền vững</li>
<li>Tư vấn viên môi trường</li>
<li>Quản lý năng lượng</li>
</ul>

<h3>Lợi ích sau khóa học</h3>
<ul>
<li>Hiểu rõ nguyên lý và phương pháp kiểm kê KNK</li>
<li>Thực hành thu thập dữ liệu và tính toán phát thải</li>
<li>Biết cách lập báo cáo KNK chuẩn</li>
<li>Nhận chứng chỉ được công nhận</li>
</ul>',
                'overview' => 'Khóa học chuyên sâu 16 giờ về kiểm kê khí nhà kính theo ISO 14064-1, bao gồm lý thuyết và thực hành với case study thực tế.',
                'featured_image' => 'images/service-img-1.jpg',
                'duration_hours' => 16,
                'total_sessions' => 4,
                'format' => 'hybrid',
                'min_students' => 15,
                'max_students' => 30,
                'has_certificate' => true,
                'price' => 5500000,
                'discount_price' => 4900000,
                'order' => 1,
                'is_featured' => true,
                'is_active' => true,
                'meta_description' => 'Khóa đào tạo kiểm kê khí nhà kính ISO 14064-1 cho doanh nghiệp. Cấp chứng chỉ được công nhận.',
                'modules' => [
                    [
                        'title' => 'Module 1: Tổng quan về Khí nhà kính',
                        'content' => 'Giới thiệu về biến đổi khí hậu, khí nhà kính và các cam kết quốc tế.',
                        'lessons' => [
                            ['title' => 'Biến đổi khí hậu và khí nhà kính', 'duration' => '60 phút'],
                            ['title' => 'Thỏa thuận Paris và NDC Việt Nam', 'duration' => '45 phút'],
                            ['title' => 'Quy định pháp luật Việt Nam về KNK', 'duration' => '45 phút'],
                        ],
                        'order' => 1,
                        'is_active' => true,
                    ],
                    [
                        'title' => 'Module 2: ISO 14064-1 và GHG Protocol',
                        'content' => 'Tìm hiểu chi tiết các tiêu chuẩn kiểm kê khí nhà kính.',
                        'lessons' => [
                            ['title' => 'Cấu trúc ISO 14064-1:2018', 'duration' => '60 phút'],
                            ['title' => 'GHG Protocol Corporate Standard', 'duration' => '60 phút'],
                            ['title' => 'So sánh và lựa chọn tiêu chuẩn', 'duration' => '30 phút'],
                        ],
                        'order' => 2,
                        'is_active' => true,
                    ],
                    [
                        'title' => 'Module 3: Thu thập dữ liệu và tính toán',
                        'content' => 'Phương pháp thu thập dữ liệu và công thức tính toán phát thải.',
                        'lessons' => [
                            ['title' => 'Xác định ranh giới tổ chức', 'duration' => '45 phút'],
                            ['title' => 'Phân loại Scope 1, 2, 3', 'duration' => '60 phút'],
                            ['title' => 'Hệ số phát thải và công thức tính', 'duration' => '60 phút'],
                            ['title' => 'Thực hành với Excel', 'duration' => '90 phút'],
                        ],
                        'order' => 3,
                        'is_active' => true,
                    ],
                    [
                        'title' => 'Module 4: Lập báo cáo và thẩm định',
                        'content' => 'Cách lập báo cáo KNK và quy trình thẩm định.',
                        'lessons' => [
                            ['title' => 'Cấu trúc báo cáo KNK', 'duration' => '45 phút'],
                            ['title' => 'Yêu cầu về chất lượng dữ liệu', 'duration' => '30 phút'],
                            ['title' => 'Quy trình thẩm định theo ISO 14064-3', 'duration' => '45 phút'],
                            ['title' => 'Case study và thực hành', 'duration' => '120 phút'],
                        ],
                        'order' => 4,
                        'is_active' => true,
                    ],
                ],
            ],
            [
                'course_category_id' => $carbonCategory->id,
                'name' => 'CBAM - Cơ chế Điều chỉnh Biên giới Carbon EU',
                'badge' => 'Mới',
                'short_description' => 'Khóa học về quy định CBAM của EU và cách lập báo cáo cho doanh nghiệp xuất khẩu.',
                'content' => '<h3>Giới thiệu khóa học</h3>
<p>Cơ chế Điều chỉnh Biên giới Carbon (CBAM) của EU có hiệu lực từ 2026. Khóa học giúp doanh nghiệp hiểu và tuân thủ quy định này.</p>

<h3>Đối tượng tham dự</h3>
<ul>
<li>Doanh nghiệp xuất khẩu thép, nhôm, xi măng, phân bón, điện, hydrogen sang EU</li>
<li>Nhân viên xuất nhập khẩu</li>
<li>Chuyên viên môi trường</li>
</ul>

<h3>Nội dung chính</h3>
<ul>
<li>Tổng quan quy định CBAM</li>
<li>Phương pháp tính embedded emissions</li>
<li>Quy trình báo cáo và mua chứng chỉ</li>
</ul>',
                'overview' => 'Khóa học 8 giờ về CBAM, giúp doanh nghiệp xuất khẩu EU tuân thủ quy định và lập báo cáo chính xác.',
                'featured_image' => 'images/service-img-2.jpg',
                'duration_hours' => 8,
                'total_sessions' => 2,
                'format' => 'online',
                'min_students' => 10,
                'max_students' => 50,
                'has_certificate' => true,
                'price' => 3500000,
                'discount_price' => null,
                'order' => 2,
                'is_featured' => true,
                'is_active' => true,
                'meta_description' => 'Khóa đào tạo CBAM cho doanh nghiệp xuất khẩu sang EU. Hướng dẫn lập báo cáo CBAM.',
                'modules' => [
                    [
                        'title' => 'Module 1: Tổng quan CBAM',
                        'content' => 'Giới thiệu cơ chế CBAM, lộ trình và sản phẩm áp dụng.',
                        'lessons' => [
                            ['title' => 'EU Green Deal và CBAM', 'duration' => '45 phút'],
                            ['title' => 'Sản phẩm và lộ trình áp dụng', 'duration' => '45 phút'],
                            ['title' => 'Yêu cầu đối với nhà xuất khẩu', 'duration' => '30 phút'],
                        ],
                        'order' => 1,
                        'is_active' => true,
                    ],
                    [
                        'title' => 'Module 2: Tính toán và Báo cáo',
                        'content' => 'Phương pháp tính embedded emissions và lập báo cáo CBAM.',
                        'lessons' => [
                            ['title' => 'Phương pháp tính phát thải trực tiếp', 'duration' => '60 phút'],
                            ['title' => 'Phương pháp tính phát thải gián tiếp', 'duration' => '60 phút'],
                            ['title' => 'Hướng dẫn sử dụng cổng CBAM', 'duration' => '45 phút'],
                            ['title' => 'Thực hành lập báo cáo', 'duration' => '90 phút'],
                        ],
                        'order' => 2,
                        'is_active' => true,
                    ],
                ],
            ],
            [
                'course_category_id' => $carbonCategory->id,
                'name' => 'Thị trường Carbon và Tín chỉ Carbon',
                'badge' => 'Hot',
                'short_description' => 'Tổng quan về thị trường carbon, các loại tín chỉ và cách tham gia giao dịch.',
                'content' => '<h3>Giới thiệu khóa học</h3>
<p>Việt Nam đang xây dựng thị trường carbon nội địa. Khóa học cung cấp kiến thức cần thiết để tham gia thị trường này.</p>

<h3>Đối tượng tham dự</h3>
<ul>
<li>Doanh nghiệp có phát thải lớn</li>
<li>Nhà đầu tư quan tâm tín chỉ carbon</li>
<li>Chuyên viên tài chính xanh</li>
</ul>

<h3>Nội dung chính</h3>
<ul>
<li>Các loại thị trường carbon (ETS, voluntary)</li>
<li>Các chuẩn tín chỉ (VCS, Gold Standard, VERRA)</li>
<li>Cách phát triển dự án tín chỉ carbon</li>
</ul>',
                'overview' => 'Khóa học 12 giờ về thị trường carbon, tín chỉ carbon và cách tham gia giao dịch.',
                'featured_image' => 'images/service-img-3.jpg',
                'duration_hours' => 12,
                'total_sessions' => 3,
                'format' => 'hybrid',
                'min_students' => 15,
                'max_students' => 35,
                'has_certificate' => true,
                'price' => 4500000,
                'discount_price' => 4000000,
                'order' => 3,
                'is_featured' => false,
                'is_active' => true,
                'meta_description' => 'Khóa đào tạo thị trường carbon và tín chỉ carbon tại Việt Nam.',
                'modules' => [
                    [
                        'title' => 'Module 1: Tổng quan Thị trường Carbon',
                        'content' => 'Giới thiệu các loại thị trường carbon trên thế giới.',
                        'lessons' => [
                            ['title' => 'ETS - Hệ thống giao dịch phát thải', 'duration' => '60 phút'],
                            ['title' => 'Thị trường carbon tự nguyện', 'duration' => '60 phút'],
                            ['title' => 'Thị trường carbon Việt Nam', 'duration' => '45 phút'],
                        ],
                        'order' => 1,
                        'is_active' => true,
                    ],
                    [
                        'title' => 'Module 2: Tín chỉ Carbon',
                        'content' => 'Các loại tín chỉ và tiêu chuẩn chứng nhận.',
                        'lessons' => [
                            ['title' => 'VCS và Gold Standard', 'duration' => '60 phút'],
                            ['title' => 'Tín chỉ CER và VER', 'duration' => '45 phút'],
                            ['title' => 'Điều 6 Paris Agreement', 'duration' => '45 phút'],
                        ],
                        'order' => 2,
                        'is_active' => true,
                    ],
                    [
                        'title' => 'Module 3: Phát triển Dự án Carbon',
                        'content' => 'Quy trình phát triển và đăng ký dự án tín chỉ carbon.',
                        'lessons' => [
                            ['title' => 'Các loại dự án carbon phổ biến', 'duration' => '60 phút'],
                            ['title' => 'Quy trình MRV và đăng ký dự án', 'duration' => '60 phút'],
                            ['title' => 'Case study: Dự án carbon rừng', 'duration' => '60 phút'],
                        ],
                        'order' => 3,
                        'is_active' => true,
                    ],
                ],
            ],
            // ESG courses
            [
                'course_category_id' => $esgCategory->id,
                'name' => 'ESG cho Doanh nghiệp - Từ Cơ bản đến Nâng cao',
                'badge' => 'Bestseller',
                'short_description' => 'Khóa học toàn diện về ESG, từ khái niệm cơ bản đến triển khai thực tế trong doanh nghiệp.',
                'content' => '<h3>Giới thiệu khóa học</h3>
<p>ESG đang trở thành yêu cầu bắt buộc từ nhà đầu tư, ngân hàng và khách hàng quốc tế. Khóa học giúp doanh nghiệp hiểu và triển khai ESG hiệu quả.</p>

<h3>Đối tượng tham dự</h3>
<ul>
<li>Lãnh đạo doanh nghiệp</li>
<li>Chuyên viên ESG, CSR</li>
<li>Nhân viên phát triển bền vững</li>
<li>Nhà đầu tư</li>
</ul>

<h3>Lợi ích sau khóa học</h3>
<ul>
<li>Hiểu rõ 3 trụ cột ESG</li>
<li>Biết cách xây dựng chiến lược ESG</li>
<li>Thực hành đánh giá và báo cáo ESG</li>
</ul>',
                'overview' => 'Khóa học 20 giờ về ESG, bao gồm E (Environmental), S (Social), G (Governance) và cách triển khai trong doanh nghiệp Việt Nam.',
                'featured_image' => 'images/service-img-1.jpg',
                'duration_hours' => 20,
                'total_sessions' => 5,
                'format' => 'offline',
                'min_students' => 20,
                'max_students' => 40,
                'has_certificate' => true,
                'price' => 6500000,
                'discount_price' => 5500000,
                'order' => 4,
                'is_featured' => true,
                'is_active' => true,
                'meta_description' => 'Khóa đào tạo ESG toàn diện cho doanh nghiệp Việt Nam. Từ cơ bản đến triển khai thực tế.',
                'modules' => [
                    [
                        'title' => 'Module 1: Tổng quan ESG',
                        'content' => 'Giới thiệu ESG và tầm quan trọng đối với doanh nghiệp.',
                        'lessons' => [
                            ['title' => 'ESG là gì và tại sao quan trọng', 'duration' => '60 phút'],
                            ['title' => 'Xu hướng ESG toàn cầu và Việt Nam', 'duration' => '60 phút'],
                            ['title' => 'Các khung tiêu chuẩn ESG', 'duration' => '60 phút'],
                        ],
                        'order' => 1,
                        'is_active' => true,
                    ],
                    [
                        'title' => 'Module 2: Environmental (Môi trường)',
                        'content' => 'Trụ cột E trong ESG: Quản lý môi trường và khí hậu.',
                        'lessons' => [
                            ['title' => 'Quản lý carbon và năng lượng', 'duration' => '60 phút'],
                            ['title' => 'Quản lý nước và chất thải', 'duration' => '45 phút'],
                            ['title' => 'Đa dạng sinh học và kinh tế tuần hoàn', 'duration' => '45 phút'],
                        ],
                        'order' => 2,
                        'is_active' => true,
                    ],
                    [
                        'title' => 'Module 3: Social (Xã hội)',
                        'content' => 'Trụ cột S: Trách nhiệm với người lao động và cộng đồng.',
                        'lessons' => [
                            ['title' => 'Quyền lao động và an toàn sức khỏe', 'duration' => '60 phút'],
                            ['title' => 'Đa dạng và hòa nhập (DEI)', 'duration' => '45 phút'],
                            ['title' => 'Quan hệ cộng đồng và chuỗi cung ứng', 'duration' => '45 phút'],
                        ],
                        'order' => 3,
                        'is_active' => true,
                    ],
                    [
                        'title' => 'Module 4: Governance (Quản trị)',
                        'content' => 'Trụ cột G: Quản trị công ty và đạo đức kinh doanh.',
                        'lessons' => [
                            ['title' => 'Cấu trúc hội đồng quản trị', 'duration' => '45 phút'],
                            ['title' => 'Đạo đức kinh doanh và chống tham nhũng', 'duration' => '45 phút'],
                            ['title' => 'Minh bạch và công bố thông tin', 'duration' => '45 phút'],
                        ],
                        'order' => 4,
                        'is_active' => true,
                    ],
                    [
                        'title' => 'Module 5: Triển khai và Báo cáo ESG',
                        'content' => 'Hướng dẫn triển khai ESG và lập báo cáo.',
                        'lessons' => [
                            ['title' => 'Xây dựng chiến lược ESG', 'duration' => '60 phút'],
                            ['title' => 'Thiết lập KPIs và theo dõi', 'duration' => '45 phút'],
                            ['title' => 'Lập báo cáo ESG theo GRI', 'duration' => '60 phút'],
                            ['title' => 'Case study và thực hành', 'duration' => '90 phút'],
                        ],
                        'order' => 5,
                        'is_active' => true,
                    ],
                ],
            ],
            [
                'course_category_id' => $esgCategory->id,
                'name' => 'Báo cáo Phát triển Bền vững theo GRI 2021',
                'badge' => null,
                'short_description' => 'Hướng dẫn chi tiết cách lập báo cáo phát triển bền vững theo GRI Standards 2021.',
                'content' => '<h3>Giới thiệu khóa học</h3>
<p>GRI Standards là khung báo cáo phát triển bền vững được sử dụng phổ biến nhất thế giới. Khóa học hướng dẫn chi tiết cách áp dụng GRI 2021.</p>

<h3>Đối tượng tham dự</h3>
<ul>
<li>Người phụ trách lập báo cáo PTBV</li>
<li>Chuyên viên ESG, CSR</li>
<li>Kiểm toán viên tài chính phi tài chính</li>
</ul>

<h3>Nội dung chính</h3>
<ul>
<li>Cấu trúc GRI Standards 2021</li>
<li>Quy trình đánh giá materiality</li>
<li>Thu thập dữ liệu và lập báo cáo</li>
</ul>',
                'overview' => 'Khóa học 12 giờ về lập báo cáo phát triển bền vững theo GRI Standards 2021.',
                'featured_image' => 'images/service-img-2.jpg',
                'duration_hours' => 12,
                'total_sessions' => 3,
                'format' => 'online',
                'min_students' => 10,
                'max_students' => 40,
                'has_certificate' => true,
                'price' => 4000000,
                'discount_price' => null,
                'order' => 5,
                'is_featured' => false,
                'is_active' => true,
                'meta_description' => 'Khóa đào tạo lập báo cáo phát triển bền vững theo GRI Standards 2021.',
                'modules' => [
                    [
                        'title' => 'Module 1: Giới thiệu GRI 2021',
                        'content' => 'Tổng quan GRI Standards và những thay đổi mới.',
                        'lessons' => [
                            ['title' => 'Lịch sử và vai trò của GRI', 'duration' => '45 phút'],
                            ['title' => 'Cấu trúc GRI Universal Standards', 'duration' => '60 phút'],
                            ['title' => 'GRI Sector và Topic Standards', 'duration' => '45 phút'],
                        ],
                        'order' => 1,
                        'is_active' => true,
                    ],
                    [
                        'title' => 'Module 2: Quy trình lập báo cáo',
                        'content' => 'Các bước lập báo cáo theo GRI.',
                        'lessons' => [
                            ['title' => 'Đánh giá materiality', 'duration' => '60 phút'],
                            ['title' => 'Engagement với stakeholders', 'duration' => '45 phút'],
                            ['title' => 'Thu thập và quản lý dữ liệu', 'duration' => '60 phút'],
                        ],
                        'order' => 2,
                        'is_active' => true,
                    ],
                    [
                        'title' => 'Module 3: Thực hành lập báo cáo',
                        'content' => 'Thực hành với các chỉ số GRI phổ biến.',
                        'lessons' => [
                            ['title' => 'Chỉ số môi trường (300 series)', 'duration' => '60 phút'],
                            ['title' => 'Chỉ số xã hội (400 series)', 'duration' => '60 phút'],
                            ['title' => 'Thiết kế và trình bày báo cáo', 'duration' => '45 phút'],
                            ['title' => 'Case study và thực hành', 'duration' => '90 phút'],
                        ],
                        'order' => 3,
                        'is_active' => true,
                    ],
                ],
            ],
        ];

        foreach ($courses as $courseData) {
            $modules = $courseData['modules'] ?? [];
            unset($courseData['modules']);

            $course = Course::create($courseData);

            foreach ($modules as $moduleData) {
                $moduleData['course_id'] = $course->id;
                CourseModule::create($moduleData);
            }
        }
    }
}

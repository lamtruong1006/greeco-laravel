<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'name' => 'Kiểm kê Khí nhà kính (GHG Inventory)',
                'icon' => 'images/icon-service-1.svg',
                'short_description' => 'Dịch vụ kiểm kê khí nhà kính theo tiêu chuẩn ISO 14064-1, GHG Protocol. Hỗ trợ doanh nghiệp xác định nguồn phát thải Scope 1, 2, 3 và xây dựng báo cáo phát thải chính xác.',
                'content' => '<h3>Tổng quan dịch vụ</h3>
<p>Kiểm kê khí nhà kính (GHG Inventory) là bước đầu tiên và quan trọng nhất trong hành trình hướng tới Net Zero của doanh nghiệp. GREECO cung cấp dịch vụ kiểm kê KNK toàn diện theo các tiêu chuẩn quốc tế.</p>

<h3>Phạm vi dịch vụ</h3>
<ul>
<li>Xác định ranh giới tổ chức và ranh giới hoạt động</li>
<li>Thu thập dữ liệu hoạt động theo Scope 1, 2, 3</li>
<li>Tính toán phát thải sử dụng hệ số phát thải phù hợp</li>
<li>Lập báo cáo kiểm kê KNK theo chuẩn quốc tế</li>
<li>Đề xuất giải pháp giảm phát thải</li>
</ul>

<h3>Tiêu chuẩn áp dụng</h3>
<ul>
<li>ISO 14064-1:2018</li>
<li>GHG Protocol Corporate Standard</li>
<li>Thông tư 17/2022/TT-BTNMT</li>
</ul>

<h3>Lợi ích</h3>
<ul>
<li>Tuân thủ quy định pháp luật về môi trường</li>
<li>Đáp ứng yêu cầu của đối tác, nhà đầu tư quốc tế</li>
<li>Phát hiện cơ hội tiết kiệm chi phí năng lượng</li>
<li>Xây dựng lộ trình giảm phát thải hiệu quả</li>
</ul>',
                'featured_image' => 'images/service-img-1.jpg',
                'order' => 1,
                'is_featured' => true,
                'is_active' => true,
                'meta_description' => 'Dịch vụ kiểm kê khí nhà kính GHG theo ISO 14064-1, GHG Protocol. Xác định Scope 1, 2, 3 và lập báo cáo phát thải chuẩn quốc tế.',
            ],
            [
                'name' => 'Báo cáo CBAM & Phân tích LCA',
                'icon' => 'images/icon-service-2.svg',
                'short_description' => 'Hỗ trợ doanh nghiệp xuất khẩu sang EU lập báo cáo CBAM. Phân tích vòng đời sản phẩm (LCA) để xác định dấu chân carbon và EPD.',
                'content' => '<h3>Tổng quan dịch vụ</h3>
<p>Cơ chế Điều chỉnh Biên giới Carbon (CBAM) của EU yêu cầu các nhà xuất khẩu phải báo cáo lượng phát thải CO2 của sản phẩm. GREECO hỗ trợ doanh nghiệp tuân thủ đầy đủ quy định CBAM.</p>

<h3>Dịch vụ CBAM</h3>
<ul>
<li>Đánh giá sản phẩm thuộc phạm vi CBAM</li>
<li>Thu thập dữ liệu phát thải trực tiếp và gián tiếp</li>
<li>Tính toán embedded emissions theo phương pháp EU</li>
<li>Lập báo cáo CBAM theo mẫu chuẩn</li>
<li>Hỗ trợ đăng ký trên cổng thông tin CBAM</li>
</ul>

<h3>Phân tích LCA</h3>
<ul>
<li>Đánh giá vòng đời sản phẩm từ cradle-to-gate/grave</li>
<li>Xác định carbon footprint sản phẩm</li>
<li>Phân tích các tác động môi trường</li>
<li>Xây dựng Environmental Product Declaration (EPD)</li>
</ul>

<h3>Lợi ích</h3>
<ul>
<li>Đảm bảo quyền xuất khẩu sang thị trường EU</li>
<li>Tăng tính cạnh tranh trên thị trường quốc tế</li>
<li>Phát hiện cơ hội cải thiện quy trình sản xuất</li>
</ul>',
                'featured_image' => 'images/service-img-2.jpg',
                'order' => 2,
                'is_featured' => true,
                'is_active' => true,
                'meta_description' => 'Dịch vụ báo cáo CBAM cho doanh nghiệp xuất khẩu EU. Phân tích vòng đời sản phẩm LCA và xây dựng EPD.',
            ],
            [
                'name' => 'Tư vấn Phát triển Bền vững & ESG',
                'icon' => 'images/icon-service-3.svg',
                'short_description' => 'Xây dựng chiến lược ESG, báo cáo phát triển bền vững theo GRI, SASB, TCFD. Hỗ trợ doanh nghiệp tích hợp ESG vào hoạt động kinh doanh.',
                'content' => '<h3>Tổng quan dịch vụ</h3>
<p>ESG (Environmental, Social, Governance) đang trở thành yêu cầu bắt buộc của nhà đầu tư và đối tác quốc tế. GREECO hỗ trợ doanh nghiệp xây dựng và triển khai chiến lược ESG toàn diện.</p>

<h3>Phạm vi dịch vụ</h3>
<ul>
<li>Đánh giá hiện trạng ESG của doanh nghiệp</li>
<li>Xây dựng chiến lược và lộ trình ESG</li>
<li>Thiết lập KPIs và hệ thống theo dõi ESG</li>
<li>Lập báo cáo phát triển bền vững theo GRI/SASB</li>
<li>Đánh giá và công bố rủi ro khí hậu theo TCFD</li>
</ul>

<h3>Khung báo cáo hỗ trợ</h3>
<ul>
<li>GRI Standards 2021</li>
<li>SASB Standards</li>
<li>TCFD Recommendations</li>
<li>UN SDGs Mapping</li>
</ul>

<h3>Lợi ích</h3>
<ul>
<li>Thu hút đầu tư từ quỹ ESG</li>
<li>Nâng cao uy tín thương hiệu</li>
<li>Giảm rủi ro pháp lý và vận hành</li>
<li>Tạo giá trị dài hạn cho cổ đông</li>
</ul>',
                'featured_image' => 'images/service-img-3.jpg',
                'order' => 3,
                'is_featured' => true,
                'is_active' => true,
                'meta_description' => 'Tư vấn chiến lược ESG, báo cáo phát triển bền vững GRI, SASB, TCFD cho doanh nghiệp Việt Nam.',
            ],
            [
                'name' => 'Hồ sơ Môi trường & Giấy phép',
                'icon' => 'images/icon-service-4.svg',
                'short_description' => 'Lập đánh giá tác động môi trường (ĐTM), giấy phép môi trường, quan trắc môi trường định kỳ. Hỗ trợ doanh nghiệp tuân thủ pháp luật môi trường.',
                'content' => '<h3>Tổng quan dịch vụ</h3>
<p>GREECO cung cấp đầy đủ các dịch vụ lập hồ sơ môi trường theo quy định của Luật Bảo vệ Môi trường 2020 và các văn bản hướng dẫn.</p>

<h3>Dịch vụ cung cấp</h3>
<ul>
<li>Lập Báo cáo Đánh giá Tác động Môi trường (ĐTM)</li>
<li>Xin Giấy phép Môi trường</li>
<li>Đăng ký Môi trường</li>
<li>Lập Kế hoạch Quản lý Môi trường</li>
<li>Quan trắc môi trường định kỳ</li>
<li>Báo cáo công tác bảo vệ môi trường</li>
</ul>

<h3>Đối tượng áp dụng</h3>
<ul>
<li>Dự án đầu tư mới</li>
<li>Dự án mở rộng, nâng công suất</li>
<li>Cơ sở sản xuất đang hoạt động</li>
<li>Khu công nghiệp, cụm công nghiệp</li>
</ul>

<h3>Cam kết</h3>
<ul>
<li>Hồ sơ chất lượng, đúng quy định</li>
<li>Hỗ trợ đến khi được phê duyệt</li>
<li>Thời gian nhanh chóng</li>
</ul>',
                'featured_image' => 'images/service-img-1.jpg',
                'order' => 4,
                'is_featured' => false,
                'is_active' => true,
                'meta_description' => 'Lập ĐTM, xin giấy phép môi trường, quan trắc môi trường định kỳ. Hỗ trợ doanh nghiệp tuân thủ Luật BVMT 2020.',
            ],
            [
                'name' => 'Ứng phó Sự cố Môi trường',
                'icon' => 'images/icon-service-5.svg',
                'short_description' => 'Xây dựng kế hoạch ứng phó sự cố môi trường, đào tạo đội ứng phó, diễn tập thực tế. Hỗ trợ khắc phục và báo cáo sau sự cố.',
                'content' => '<h3>Tổng quan dịch vụ</h3>
<p>Sự cố môi trường có thể gây thiệt hại nghiêm trọng về tài chính và uy tín. GREECO giúp doanh nghiệp chủ động phòng ngừa và sẵn sàng ứng phó khi sự cố xảy ra.</p>

<h3>Dịch vụ cung cấp</h3>
<ul>
<li>Đánh giá rủi ro sự cố môi trường</li>
<li>Xây dựng Kế hoạch Ứng phó Sự cố</li>
<li>Thiết kế hệ thống cảnh báo sớm</li>
<li>Đào tạo đội ứng phó sự cố</li>
<li>Tổ chức diễn tập định kỳ</li>
<li>Hỗ trợ khắc phục sau sự cố</li>
</ul>

<h3>Loại sự cố</h3>
<ul>
<li>Tràn dầu, hóa chất</li>
<li>Sự cố hệ thống xử lý nước thải</li>
<li>Rò rỉ khí độc</li>
<li>Cháy nổ ảnh hưởng môi trường</li>
</ul>',
                'featured_image' => 'images/service-img-2.jpg',
                'order' => 5,
                'is_featured' => false,
                'is_active' => true,
                'meta_description' => 'Xây dựng kế hoạch ứng phó sự cố môi trường, đào tạo và diễn tập. Hỗ trợ khắc phục sự cố tràn dầu, hóa chất.',
            ],
            [
                'name' => 'Tư vấn Khu Công nghiệp Xanh',
                'icon' => 'images/icon-service-6.svg',
                'short_description' => 'Tư vấn quy hoạch và chuyển đổi KCN theo tiêu chí xanh, sinh thái. Xây dựng hệ thống cộng sinh công nghiệp và kinh tế tuần hoàn.',
                'content' => '<h3>Tổng quan dịch vụ</h3>
<p>Khu công nghiệp xanh/sinh thái là xu hướng tất yếu hướng tới phát triển bền vững. GREECO hỗ trợ các KCN chuyển đổi và đạt các chứng nhận quốc tế.</p>

<h3>Dịch vụ cung cấp</h3>
<ul>
<li>Đánh giá hiện trạng môi trường KCN</li>
<li>Xây dựng chiến lược KCN xanh/sinh thái</li>
<li>Thiết kế hệ thống cộng sinh công nghiệp</li>
<li>Triển khai mô hình kinh tế tuần hoàn</li>
<li>Hỗ trợ đạt chứng nhận KCN sinh thái</li>
</ul>

<h3>Tiêu chuẩn áp dụng</h3>
<ul>
<li>Nghị định 35/2022/NĐ-CP về KCN sinh thái</li>
<li>UNIDO Eco-Industrial Park Framework</li>
<li>LEED for Cities and Communities</li>
</ul>

<h3>Lợi ích</h3>
<ul>
<li>Thu hút đầu tư xanh, FDI chất lượng cao</li>
<li>Giảm chi phí vận hành cho doanh nghiệp</li>
<li>Nâng cao giá trị thương hiệu KCN</li>
<li>Đóng góp vào mục tiêu Net Zero quốc gia</li>
</ul>',
                'featured_image' => 'images/service-img-3.jpg',
                'order' => 6,
                'is_featured' => true,
                'is_active' => true,
                'meta_description' => 'Tư vấn chuyển đổi KCN xanh, sinh thái theo Nghị định 35. Xây dựng cộng sinh công nghiệp và kinh tế tuần hoàn.',
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}

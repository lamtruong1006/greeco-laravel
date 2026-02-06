<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $ghgCategory = ProjectCategory::where('name', 'like', '%Khí nhà kính%')->first();
        $cbamCategory = ProjectCategory::where('name', 'like', '%CBAM%')->first();
        $esgCategory = ProjectCategory::where('name', 'like', '%ESG%')->first();

        $projects = [
            // GHG Projects
            [
                'project_category_id' => $ghgCategory->id,
                'name' => 'Kiểm kê KNK Nhà máy Thép Hòa Phát Dung Quất',
                'short_description' => 'Thực hiện kiểm kê khí nhà kính toàn diện cho nhà máy sản xuất thép công suất 4 triệu tấn/năm theo tiêu chuẩn ISO 14064-1.',
                'content' => '<h3>Tổng quan dự án</h3>
<p>GREECO được lựa chọn thực hiện kiểm kê khí nhà kính cho Nhà máy Thép Hòa Phát Dung Quất - một trong những nhà máy thép lớn nhất Việt Nam.</p>

<h3>Phạm vi công việc</h3>
<ul>
<li>Xác định ranh giới tổ chức và hoạt động</li>
<li>Thu thập dữ liệu phát thải Scope 1, 2, 3</li>
<li>Phân tích nguồn phát thải chính từ lò cao, luyện thép</li>
<li>Tính toán phát thải theo hệ số phát thải ngành thép</li>
<li>Đề xuất 15 giải pháp giảm phát thải</li>
</ul>

<h3>Kết quả</h3>
<ul>
<li>Tổng phát thải: 8.5 triệu tấn CO2e/năm</li>
<li>Xác định 5 nguồn phát thải chính chiếm 85% tổng phát thải</li>
<li>Đề xuất lộ trình giảm 30% phát thải đến 2030</li>
</ul>',
                'featured_image' => 'images/project-1.jpg',
                'client_name' => 'Tập đoàn Hòa Phát',
                'project_type' => 'Kiểm kê KNK doanh nghiệp',
                'duration' => '4 tháng',
                'standard' => 'ISO 14064-1:2018',
                'start_date' => '2024-03-01',
                'end_date' => '2024-06-30',
                'order' => 1,
                'is_featured' => true,
                'is_active' => true,
                'meta_description' => 'Dự án kiểm kê khí nhà kính cho Nhà máy Thép Hòa Phát Dung Quất theo ISO 14064-1.',
            ],
            [
                'project_category_id' => $ghgCategory->id,
                'name' => 'Kiểm kê KNK và Lộ trình Net Zero Vinamilk',
                'short_description' => 'Hỗ trợ Vinamilk kiểm kê toàn bộ chuỗi cung ứng và xây dựng lộ trình đạt Net Zero 2050.',
                'content' => '<h3>Tổng quan dự án</h3>
<p>Vinamilk cam kết đạt Net Zero vào năm 2050. GREECO hỗ trợ xây dựng baseline và lộ trình giảm phát thải toàn diện.</p>

<h3>Phạm vi công việc</h3>
<ul>
<li>Kiểm kê KNK cho 13 nhà máy trên toàn quốc</li>
<li>Đánh giá phát thải chuỗi cung ứng (Scope 3)</li>
<li>Phân tích carbon footprint sản phẩm chủ lực</li>
<li>Xây dựng Science-Based Targets</li>
<li>Lập lộ trình Net Zero 2050</li>
</ul>

<h3>Kết quả</h3>
<ul>
<li>Baseline phát thải: 1.2 triệu tấn CO2e/năm</li>
<li>Mục tiêu SBTi: Giảm 42% đến 2030</li>
<li>20 sáng kiến giảm phát thải được đề xuất</li>
</ul>',
                'featured_image' => 'images/project-2.jpg',
                'client_name' => 'Công ty CP Sữa Việt Nam',
                'project_type' => 'Lộ trình Net Zero',
                'duration' => '6 tháng',
                'standard' => 'GHG Protocol, SBTi',
                'start_date' => '2024-01-15',
                'end_date' => '2024-07-15',
                'order' => 2,
                'is_featured' => true,
                'is_active' => true,
                'meta_description' => 'Dự án kiểm kê KNK và xây dựng lộ trình Net Zero 2050 cho Vinamilk.',
            ],
            [
                'project_category_id' => $ghgCategory->id,
                'name' => 'Kiểm kê KNK KCN Việt Nam - Singapore',
                'short_description' => 'Kiểm kê khí nhà kính cấp khu công nghiệp cho VSIP Bình Dương, hướng tới chứng nhận KCN sinh thái.',
                'content' => '<h3>Tổng quan dự án</h3>
<p>VSIP Bình Dương triển khai kiểm kê KNK toàn KCN như bước đầu chuyển đổi thành KCN sinh thái.</p>

<h3>Phạm vi công việc</h3>
<ul>
<li>Kiểm kê KNK hạ tầng KCN</li>
<li>Hướng dẫn 50 doanh nghiệp lập báo cáo KNK</li>
<li>Tổng hợp phát thải toàn KCN</li>
<li>Xác định tiềm năng cộng sinh công nghiệp</li>
</ul>

<h3>Kết quả</h3>
<ul>
<li>Tổng phát thải KCN: 450,000 tấn CO2e/năm</li>
<li>15 cơ hội cộng sinh được xác định</li>
<li>Tiềm năng giảm 20% phát thải</li>
</ul>',
                'featured_image' => 'images/project-3.jpg',
                'client_name' => 'VSIP Bình Dương',
                'project_type' => 'Kiểm kê KNK KCN',
                'duration' => '5 tháng',
                'standard' => 'ISO 14064-1, NĐ 35/2022',
                'start_date' => '2024-02-01',
                'end_date' => '2024-06-30',
                'order' => 3,
                'is_featured' => false,
                'is_active' => true,
                'meta_description' => 'Dự án kiểm kê khí nhà kính cho KCN VSIP Bình Dương, hướng tới KCN sinh thái.',
            ],
            // CBAM Projects
            [
                'project_category_id' => $cbamCategory->id,
                'name' => 'Báo cáo CBAM cho Thép Pomina xuất khẩu EU',
                'short_description' => 'Hỗ trợ Pomina lập báo cáo CBAM cho sản phẩm thép xuất khẩu sang thị trường Châu Âu.',
                'content' => '<h3>Tổng quan dự án</h3>
<p>Pomina là một trong những doanh nghiệp thép đầu tiên cần báo cáo CBAM khi xuất khẩu sang EU. GREECO hỗ trợ tuân thủ đầy đủ quy định.</p>

<h3>Phạm vi công việc</h3>
<ul>
<li>Xác định sản phẩm thuộc phạm vi CBAM</li>
<li>Tính toán embedded emissions</li>
<li>Lập báo cáo CBAM quarterly</li>
<li>Hỗ trợ đăng ký trên cổng CBAM</li>
</ul>

<h3>Kết quả</h3>
<ul>
<li>4 mã sản phẩm được báo cáo</li>
<li>Embedded emissions: 1.8 tCO2/tấn thép</li>
<li>100% tuân thủ yêu cầu EU</li>
</ul>',
                'featured_image' => 'images/project-carbon.png',
                'client_name' => 'Thép Pomina',
                'project_type' => 'Báo cáo CBAM',
                'duration' => '2 tháng',
                'standard' => 'EU CBAM Regulation',
                'start_date' => '2024-06-01',
                'end_date' => '2024-07-31',
                'order' => 4,
                'is_featured' => true,
                'is_active' => true,
                'meta_description' => 'Dự án báo cáo CBAM cho Thép Pomina xuất khẩu sang thị trường EU.',
            ],
            [
                'project_category_id' => $cbamCategory->id,
                'name' => 'Phân tích LCA và EPD cho Gạch Đồng Tâm',
                'short_description' => 'Xây dựng Environmental Product Declaration (EPD) cho sản phẩm gạch ceramic xuất khẩu.',
                'content' => '<h3>Tổng quan dự án</h3>
<p>Đồng Tâm cần EPD để đáp ứng yêu cầu của các dự án xây dựng xanh quốc tế như LEED, BREEAM.</p>

<h3>Phạm vi công việc</h3>
<ul>
<li>Phân tích LCA từ khai thác nguyên liệu đến cổng nhà máy</li>
<li>Tính toán 12 chỉ số tác động môi trường</li>
<li>Xây dựng EPD theo PCR ngành gốm sứ</li>
<li>Đăng ký EPD với tổ chức quốc tế</li>
</ul>

<h3>Kết quả</h3>
<ul>
<li>Carbon footprint: 12.5 kgCO2e/m2 gạch</li>
<li>EPD được công nhận quốc tế</li>
<li>Tăng 25% đơn hàng từ dự án xanh</li>
</ul>',
                'featured_image' => 'images/project-water.png',
                'client_name' => 'Gạch Đồng Tâm',
                'project_type' => 'LCA & EPD',
                'duration' => '3 tháng',
                'standard' => 'ISO 14040/44, EN 15804',
                'start_date' => '2024-04-01',
                'end_date' => '2024-06-30',
                'order' => 5,
                'is_featured' => false,
                'is_active' => true,
                'meta_description' => 'Dự án phân tích LCA và xây dựng EPD cho sản phẩm gạch Đồng Tâm.',
            ],
            // ESG Projects
            [
                'project_category_id' => $esgCategory->id,
                'name' => 'Báo cáo Phát triển Bền vững FPT 2024',
                'short_description' => 'Xây dựng báo cáo phát triển bền vững theo GRI 2021 cho Tập đoàn FPT.',
                'content' => '<h3>Tổng quan dự án</h3>
<p>FPT cam kết minh bạch ESG và công bố báo cáo phát triển bền vững hàng năm theo chuẩn GRI.</p>

<h3>Phạm vi công việc</h3>
<ul>
<li>Đánh giá materiality với stakeholders</li>
<li>Thu thập 85 chỉ số GRI</li>
<li>Đánh giá rủi ro khí hậu theo TCFD</li>
<li>Mapping với UN SDGs</li>
<li>Thiết kế và biên soạn báo cáo</li>
</ul>

<h3>Kết quả</h3>
<ul>
<li>Báo cáo đạt GRI In Accordance</li>
<li>Xác định 15 vấn đề trọng yếu</li>
<li>Đóng góp vào 10 SDGs</li>
</ul>',
                'featured_image' => 'images/project-forest.png',
                'client_name' => 'Tập đoàn FPT',
                'project_type' => 'Báo cáo PTBV',
                'duration' => '4 tháng',
                'standard' => 'GRI 2021, TCFD',
                'start_date' => '2024-01-01',
                'end_date' => '2024-04-30',
                'order' => 6,
                'is_featured' => true,
                'is_active' => true,
                'meta_description' => 'Dự án xây dựng báo cáo phát triển bền vững GRI 2021 cho Tập đoàn FPT.',
            ],
            [
                'project_category_id' => $esgCategory->id,
                'name' => 'Chiến lược ESG cho VietinBank',
                'short_description' => 'Xây dựng chiến lược ESG và lộ trình triển khai cho VietinBank giai đoạn 2024-2030.',
                'content' => '<h3>Tổng quan dự án</h3>
<p>VietinBank cần chiến lược ESG để đáp ứng yêu cầu của NHNN và thu hút vốn xanh quốc tế.</p>

<h3>Phạm vi công việc</h3>
<ul>
<li>Đánh giá hiện trạng ESG</li>
<li>Benchmark với ngân hàng khu vực</li>
<li>Xây dựng chiến lược ESG 2024-2030</li>
<li>Thiết lập 50 KPIs ESG</li>
<li>Xây dựng Green Finance Framework</li>
</ul>

<h3>Kết quả</h3>
<ul>
<li>Chiến lược ESG được phê duyệt</li>
<li>Mục tiêu: 20% tín dụng xanh đến 2030</li>
<li>Lộ trình TCFD disclosure</li>
</ul>',
                'featured_image' => 'images/project-renewable.png',
                'client_name' => 'VietinBank',
                'project_type' => 'Chiến lược ESG',
                'duration' => '5 tháng',
                'standard' => 'TCFD, GRI FS',
                'start_date' => '2024-02-01',
                'end_date' => '2024-06-30',
                'order' => 7,
                'is_featured' => false,
                'is_active' => true,
                'meta_description' => 'Dự án xây dựng chiến lược ESG cho VietinBank giai đoạn 2024-2030.',
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}

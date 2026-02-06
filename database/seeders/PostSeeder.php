<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\PostCategory;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $newsCategory = PostCategory::where('name', 'like', '%Tin tức%')->first();
        $knowledgeCategory = PostCategory::where('name', 'like', '%Kiến thức%')->first();
        $admin = User::first();

        $posts = [
            // News posts
            [
                'post_category_id' => $newsCategory->id,
                'user_id' => $admin->id,
                'title' => 'GREECO tổ chức Hội thảo Kiểm kê Khí nhà kính cho Doanh nghiệp 2025',
                'excerpt' => 'Ngày 15/01/2025, GREECO phối hợp với Sở Tài nguyên Môi trường TP.HCM tổ chức Hội thảo "Kiểm kê Khí nhà kính - Lộ trình bắt buộc cho doanh nghiệp" với sự tham gia của hơn 200 doanh nghiệp.',
                'content' => '<p>Ngày 15/01/2025, tại Khách sạn Rex TP.HCM, GREECO phối hợp với Sở Tài nguyên Môi trường TP.HCM tổ chức thành công Hội thảo "Kiểm kê Khí nhà kính - Lộ trình bắt buộc cho doanh nghiệp" với sự tham gia của hơn 200 đại biểu từ các doanh nghiệp sản xuất, khu công nghiệp.</p>

<h3>Nội dung chính</h3>
<p>Hội thảo tập trung vào các chủ đề:</p>
<ul>
<li>Quy định pháp luật về kiểm kê KNK tại Việt Nam theo Nghị định 06/2022/NĐ-CP</li>
<li>Lộ trình bắt buộc kiểm kê KNK đến 2025</li>
<li>Phương pháp kiểm kê theo ISO 14064-1 và Thông tư 17/2022/TT-BTNMT</li>
<li>Kinh nghiệm thực tiễn từ các doanh nghiệp đã triển khai</li>
</ul>

<h3>Chia sẻ từ chuyên gia</h3>
<p>TS. Nguyễn Văn An - Viện trưởng GREECO nhấn mạnh: "Kiểm kê khí nhà kính không chỉ là yêu cầu pháp lý mà còn là công cụ quan trọng giúp doanh nghiệp nhận diện cơ hội tiết kiệm năng lượng và nâng cao năng lực cạnh tranh quốc tế."</p>

<h3>Kết quả</h3>
<p>Sau hội thảo, hơn 50 doanh nghiệp đã đăng ký tham gia chương trình hỗ trợ kiểm kê KNK của GREECO.</p>',
                'featured_image' => 'images/post-1.jpg',
                'tags' => ['hội thảo', 'kiểm kê khí nhà kính', 'doanh nghiệp'],
                'views' => 450,
                'published_at' => '2025-01-16 08:00:00',
                'status' => 'published',
                'meta_description' => 'GREECO tổ chức Hội thảo Kiểm kê Khí nhà kính cho Doanh nghiệp 2025 tại TP.HCM với sự tham dự của 200 doanh nghiệp.',
            ],
            [
                'post_category_id' => $newsCategory->id,
                'user_id' => $admin->id,
                'title' => 'GREECO ký kết hợp tác chiến lược với GIZ Vietnam về Biến đổi Khí hậu',
                'excerpt' => 'GREECO và GIZ Vietnam ký kết thỏa thuận hợp tác giai đoạn 2025-2030, tập trung vào hỗ trợ doanh nghiệp Việt Nam giảm phát thải và thích ứng biến đổi khí hậu.',
                'content' => '<p>Ngày 20/12/2024, tại Hà Nội, GREECO và GIZ Vietnam (Tổ chức Hợp tác Phát triển Đức) đã ký kết Thỏa thuận Hợp tác Chiến lược giai đoạn 2025-2030 trong lĩnh vực biến đổi khí hậu và phát triển bền vững.</p>

<h3>Phạm vi hợp tác</h3>
<ul>
<li>Phát triển năng lực kiểm kê khí nhà kính cho doanh nghiệp SME</li>
<li>Hỗ trợ kỹ thuật cho các Khu công nghiệp sinh thái</li>
<li>Xây dựng hệ thống MRV (Đo lường, Báo cáo, Thẩm tra) quốc gia</li>
<li>Đào tạo chuyên gia thẩm định tín chỉ carbon</li>
</ul>

<h3>Mục tiêu</h3>
<p>Đến 2030, hợp tác sẽ hỗ trợ:</p>
<ul>
<li>500 doanh nghiệp SME hoàn thành kiểm kê KNK</li>
<li>10 KCN chuyển đổi thành KCN sinh thái</li>
<li>100 chuyên gia được đào tạo chứng nhận quốc tế</li>
</ul>

<p>Đây là bước tiến quan trọng trong nỗ lực đóng góp vào mục tiêu Net Zero 2050 của Việt Nam.</p>',
                'featured_image' => 'images/post-2.jpg',
                'tags' => ['hợp tác', 'GIZ', 'biến đổi khí hậu'],
                'views' => 320,
                'published_at' => '2024-12-21 10:00:00',
                'status' => 'published',
                'meta_description' => 'GREECO ký kết hợp tác chiến lược với GIZ Vietnam giai đoạn 2025-2030 về biến đổi khí hậu.',
            ],
            // Knowledge posts
            [
                'post_category_id' => $knowledgeCategory->id,
                'user_id' => $admin->id,
                'title' => 'Hướng dẫn chi tiết Kiểm kê Khí nhà kính Scope 3 cho Doanh nghiệp',
                'excerpt' => 'Scope 3 chiếm phần lớn tổng phát thải của nhiều doanh nghiệp nhưng lại khó đo lường nhất. Bài viết hướng dẫn chi tiết 15 danh mục Scope 3 và cách thu thập dữ liệu.',
                'content' => '<h3>Scope 3 là gì?</h3>
<p>Scope 3 bao gồm tất cả phát thải gián tiếp khác trong chuỗi giá trị của doanh nghiệp, không thuộc Scope 1 (phát thải trực tiếp) và Scope 2 (điện mua). Theo GHG Protocol, Scope 3 được chia thành 15 danh mục.</p>

<h3>15 Danh mục Scope 3</h3>

<h4>Upstream (Từ nhà cung cấp)</h4>
<ol>
<li><strong>Hàng hóa và dịch vụ mua:</strong> Phát thải từ sản xuất nguyên vật liệu, bao bì</li>
<li><strong>Tài sản cố định:</strong> Phát thải từ sản xuất máy móc, thiết bị, tòa nhà</li>
<li><strong>Năng lượng liên quan:</strong> Tổn thất truyền tải điện, sản xuất nhiên liệu</li>
<li><strong>Vận chuyển upstream:</strong> Vận chuyển nguyên liệu từ nhà cung cấp</li>
<li><strong>Chất thải phát sinh:</strong> Xử lý chất thải từ hoạt động sản xuất</li>
<li><strong>Đi công tác:</strong> Phát thải từ di chuyển bằng máy bay, xe</li>
<li><strong>Di chuyển nhân viên:</strong> Nhân viên đi làm hàng ngày</li>
<li><strong>Tài sản thuê:</strong> Phát thải từ tài sản thuê upstream</li>
</ol>

<h4>Downstream (Đến khách hàng)</h4>
<ol start="9">
<li><strong>Vận chuyển downstream:</strong> Phân phối sản phẩm đến khách hàng</li>
<li><strong>Chế biến sản phẩm:</strong> Khách hàng B2B chế biến tiếp sản phẩm</li>
<li><strong>Sử dụng sản phẩm:</strong> Khách hàng cuối sử dụng sản phẩm</li>
<li><strong>Xử lý cuối vòng đời:</strong> Sản phẩm sau khi hết hạn sử dụng</li>
<li><strong>Tài sản cho thuê:</strong> Phát thải từ tài sản cho thuê</li>
<li><strong>Nhượng quyền:</strong> Phát thải từ đối tác nhượng quyền</li>
<li><strong>Đầu tư:</strong> Phát thải từ công ty được đầu tư</li>
</ol>

<h3>Cách tiếp cận thu thập dữ liệu</h3>
<ul>
<li><strong>Primary data:</strong> Dữ liệu thực tế từ nhà cung cấp</li>
<li><strong>Secondary data:</strong> Hệ số phát thải trung bình ngành</li>
<li><strong>Spend-based:</strong> Ước tính từ chi phí mua hàng</li>
</ul>

<h3>Khuyến nghị</h3>
<p>Doanh nghiệp nên bắt đầu với các danh mục trọng yếu nhất (hotspots) thay vì cố gắng đo lường tất cả 15 danh mục ngay từ đầu.</p>',
                'featured_image' => 'images/post-3.jpg',
                'tags' => ['scope 3', 'kiểm kê khí nhà kính', 'GHG Protocol', 'chuỗi cung ứng'],
                'views' => 890,
                'published_at' => '2025-01-10 14:00:00',
                'status' => 'published',
                'meta_description' => 'Hướng dẫn chi tiết 15 danh mục Scope 3 và phương pháp thu thập dữ liệu kiểm kê khí nhà kính.',
            ],
            [
                'post_category_id' => $knowledgeCategory->id,
                'user_id' => $admin->id,
                'title' => 'CBAM là gì? Tất cả những gì Doanh nghiệp Xuất khẩu cần biết',
                'excerpt' => 'Cơ chế Điều chỉnh Biên giới Carbon (CBAM) của EU có hiệu lực từ 2026. Bài viết giải thích chi tiết CBAM và hướng dẫn chuẩn bị cho doanh nghiệp Việt Nam.',
                'content' => '<h3>CBAM là gì?</h3>
<p>Carbon Border Adjustment Mechanism (CBAM) - Cơ chế Điều chỉnh Biên giới Carbon - là chính sách của EU nhằm đánh thuế carbon đối với hàng hóa nhập khẩu từ các quốc gia có chính sách carbon yếu hơn.</p>

<h3>Lộ trình áp dụng</h3>
<ul>
<li><strong>10/2023 - 12/2025:</strong> Giai đoạn chuyển tiếp - chỉ báo cáo, chưa nộp phí</li>
<li><strong>01/2026:</strong> Bắt đầu áp dụng chính thức - phải mua chứng chỉ CBAM</li>
<li><strong>2034:</strong> Áp dụng 100% CBAM, loại bỏ hoàn toàn miễn phí ETS</li>
</ul>

<h3>Sản phẩm áp dụng</h3>
<ol>
<li>Sắt thép</li>
<li>Nhôm</li>
<li>Xi măng</li>
<li>Phân bón</li>
<li>Điện</li>
<li>Hydrogen</li>
</ol>

<h3>Cách tính phí CBAM</h3>
<p>Phí CBAM = (Embedded emissions - Carbon price đã trả tại nước xuất xứ) × Giá carbon EU ETS</p>

<h3>Doanh nghiệp Việt Nam cần làm gì?</h3>
<ol>
<li><strong>Xác định sản phẩm:</strong> Kiểm tra mã HS có thuộc phạm vi CBAM không</li>
<li><strong>Đo lường phát thải:</strong> Tính toán embedded emissions cho từng sản phẩm</li>
<li><strong>Lập hệ thống MRV:</strong> Xây dựng quy trình thu thập và lưu trữ dữ liệu</li>
<li><strong>Làm việc với nhà nhập khẩu EU:</strong> Cung cấp thông tin cho declarant</li>
<li><strong>Giảm phát thải:</strong> Đầu tư giảm carbon để giảm chi phí CBAM</li>
</ol>

<h3>Tác động đến Việt Nam</h3>
<p>Theo Bộ Công Thương, CBAM có thể ảnh hưởng đến khoảng 4 tỷ USD kim ngạch xuất khẩu của Việt Nam sang EU, chủ yếu từ ngành thép và nhôm.</p>',
                'featured_image' => 'images/post-1.jpg',
                'tags' => ['CBAM', 'xuất khẩu', 'EU', 'thuế carbon'],
                'views' => 1250,
                'published_at' => '2025-01-05 09:00:00',
                'status' => 'published',
                'meta_description' => 'CBAM là gì? Hướng dẫn chi tiết về Cơ chế Điều chỉnh Biên giới Carbon EU cho doanh nghiệp xuất khẩu Việt Nam.',
            ],
            [
                'post_category_id' => $knowledgeCategory->id,
                'user_id' => $admin->id,
                'title' => 'So sánh ISO 14064-1 và Thông tư 17: Doanh nghiệp nên chọn tiêu chuẩn nào?',
                'excerpt' => 'ISO 14064-1 và Thông tư 17/2022/TT-BTNMT đều quy định về kiểm kê khí nhà kính. Bài viết phân tích chi tiết sự khác biệt và hướng dẫn lựa chọn phù hợp.',
                'content' => '<h3>Giới thiệu</h3>
<p>Doanh nghiệp Việt Nam khi thực hiện kiểm kê khí nhà kính thường băn khoăn giữa việc áp dụng tiêu chuẩn quốc tế ISO 14064-1 hay quy định trong nước theo Thông tư 17/2022/TT-BTNMT.</p>

<h3>So sánh chi tiết</h3>

<table>
<tr><th>Tiêu chí</th><th>ISO 14064-1:2018</th><th>Thông tư 17/2022</th></tr>
<tr><td>Phạm vi</td><td>Quốc tế</td><td>Việt Nam</td></tr>
<tr><td>Scope 3</td><td>Yêu cầu báo cáo</td><td>Khuyến khích</td></tr>
<tr><td>Hệ số phát thải</td><td>IPCC, IEA</td><td>BTNMT công bố</td></tr>
<tr><td>Thẩm định</td><td>Bắt buộc (cho chứng nhận)</td><td>Tùy chọn</td></tr>
<tr><td>Mục đích</td><td>Đa dạng (SBTi, ESG, CBAM)</td><td>Tuân thủ pháp luật VN</td></tr>
</table>

<h3>Khi nào nên dùng ISO 14064-1?</h3>
<ul>
<li>Xuất khẩu sang EU, cần báo cáo CBAM</li>
<li>Có nhà đầu tư nước ngoài yêu cầu ESG</li>
<li>Muốn đạt chứng nhận SBTi</li>
<li>Cần thẩm định bởi bên thứ ba quốc tế</li>
</ul>

<h3>Khi nào nên dùng Thông tư 17?</h3>
<ul>
<li>Thuộc danh mục phải kiểm kê theo NĐ 06/2022</li>
<li>Chỉ cần nộp báo cáo cho cơ quan nhà nước</li>
<li>Ngân sách hạn chế, không cần thẩm định</li>
</ul>

<h3>Khuyến nghị</h3>
<p>Doanh nghiệp nên thiết kế hệ thống kiểm kê đáp ứng cả hai yêu cầu. ISO 14064-1 bao trùm và chi tiết hơn, nên nếu áp dụng ISO 14064-1 thì tự động đáp ứng Thông tư 17.</p>',
                'featured_image' => 'images/post-2.jpg',
                'tags' => ['ISO 14064', 'Thông tư 17', 'so sánh', 'tiêu chuẩn'],
                'views' => 680,
                'published_at' => '2024-12-28 11:00:00',
                'status' => 'published',
                'meta_description' => 'So sánh ISO 14064-1 và Thông tư 17/2022/TT-BTNMT. Hướng dẫn doanh nghiệp chọn tiêu chuẩn kiểm kê KNK phù hợp.',
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}

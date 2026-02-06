<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'Kiểm kê khí nhà kính là gì?',
                'answer' => 'Kiểm kê khí nhà kính (GHG Inventory) là quá trình xác định, tính toán và báo cáo lượng phát thải khí nhà kính của một tổ chức, doanh nghiệp theo các tiêu chuẩn quốc tế như ISO 14064-1 hoặc GHG Protocol. Đây là bước đầu tiên để doanh nghiệp hiểu rõ dấu chân carbon và xây dựng lộ trình giảm phát thải.',
                'category' => 'Kiểm kê KNK',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'question' => 'Doanh nghiệp nào bắt buộc phải kiểm kê khí nhà kính?',
                'answer' => 'Theo Nghị định 06/2022/NĐ-CP, các cơ sở phát thải trên 3.000 tấn CO2e/năm thuộc danh mục phải kiểm kê KNK. Bao gồm nhà máy sản xuất thép, xi măng, điện, hóa chất, và các cơ sở sử dụng nhiều năng lượng. Đến 2025, hầu hết doanh nghiệp sản xuất lớn đều phải thực hiện kiểm kê.',
                'category' => 'Kiểm kê KNK',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'question' => 'CBAM là gì và ảnh hưởng đến doanh nghiệp Việt Nam như thế nào?',
                'answer' => 'CBAM (Carbon Border Adjustment Mechanism) là cơ chế điều chỉnh biên giới carbon của EU, yêu cầu nhà nhập khẩu phải mua chứng chỉ CBAM tương ứng với lượng carbon phát thải trong sản xuất hàng hóa. Doanh nghiệp Việt Nam xuất khẩu thép, nhôm, xi măng, phân bón sang EU sẽ bị ảnh hưởng trực tiếp và cần chuẩn bị báo cáo phát thải.',
                'category' => 'CBAM',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'question' => 'Chi phí kiểm kê khí nhà kính là bao nhiêu?',
                'answer' => 'Chi phí phụ thuộc vào quy mô doanh nghiệp, số lượng cơ sở, độ phức tạp của hoạt động. Thông thường dao động từ 50-200 triệu VNĐ cho một chu kỳ kiểm kê. GREECO cung cấp báo giá cụ thể sau khi khảo sát và đánh giá phạm vi công việc.',
                'category' => 'Kiểm kê KNK',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'question' => 'Khóa đào tạo có cấp chứng chỉ không?',
                'answer' => 'Có. Tất cả các khóa đào tạo chính quy của GREECO đều cấp chứng chỉ hoàn thành khóa học. Một số khóa đặc biệt còn cấp chứng chỉ được công nhận quốc tế, phối hợp với các tổ chức như GRI, VERRA, Gold Standard.',
                'category' => 'Đào tạo',
                'order' => 5,
                'is_active' => true,
            ],
            [
                'question' => 'ESG là gì và tại sao doanh nghiệp cần quan tâm?',
                'answer' => 'ESG là viết tắt của Environmental (Môi trường), Social (Xã hội), Governance (Quản trị) - ba trụ cột đánh giá mức độ phát triển bền vững của doanh nghiệp. ESG ngày càng quantrọng vì nhà đầu tư, ngân hàng, đối tác quốc tế yêu cầu doanh nghiệp công bố thông tin ESG. Điều này giúp thu hút vốn đầu tư, giảm rủi ro và nâng cao uy tín thương hiệu.',
                'category' => 'ESG',
                'order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}

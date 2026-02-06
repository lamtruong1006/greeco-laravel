<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            // General Settings
            ['key' => 'company_name', 'value' => 'GREECO', 'type' => 'text', 'group' => 'general', 'label' => 'Tên công ty'],
            ['key' => 'company_full_name', 'value' => 'Viện Nghiên cứu Môi trường GREECO', 'type' => 'text', 'group' => 'general', 'label' => 'Tên đầy đủ'],
            ['key' => 'email', 'value' => 'info@greeco.vn', 'type' => 'text', 'group' => 'contact', 'label' => 'Email'],
            ['key' => 'phone', 'value' => '0903 330 454', 'type' => 'text', 'group' => 'contact', 'label' => 'Số điện thoại'],
            ['key' => 'hotline', 'value' => '1900 636 454', 'type' => 'text', 'group' => 'contact', 'label' => 'Hotline'],
            ['key' => 'address', 'value' => '123 Nguyễn Văn Linh, Phường Tân Thuận Tây, Quận 7, TP. Hồ Chí Minh', 'type' => 'text', 'group' => 'contact', 'label' => 'Địa chỉ'],
            ['key' => 'topbar_text', 'value' => 'Đối tác tin cậy trong lĩnh vực môi trường & phát triển bền vững', 'type' => 'text', 'group' => 'general', 'label' => 'Text Topbar'],

            // Social Media
            ['key' => 'facebook_url', 'value' => 'https://facebook.com/greeco.vn', 'type' => 'text', 'group' => 'social', 'label' => 'Facebook'],
            ['key' => 'twitter_url', 'value' => 'https://twitter.com/greeco_vn', 'type' => 'text', 'group' => 'social', 'label' => 'Twitter'],
            ['key' => 'instagram_url', 'value' => 'https://instagram.com/greeco.vn', 'type' => 'text', 'group' => 'social', 'label' => 'Instagram'],
            ['key' => 'linkedin_url', 'value' => 'https://linkedin.com/company/greeco', 'type' => 'text', 'group' => 'social', 'label' => 'LinkedIn'],
            ['key' => 'youtube_url', 'value' => 'https://youtube.com/@greeco', 'type' => 'text', 'group' => 'social', 'label' => 'YouTube'],
            ['key' => 'zalo_url', 'value' => 'https://zalo.me/0903330454', 'type' => 'text', 'group' => 'social', 'label' => 'Zalo'],
            ['key' => 'messenger_url', 'value' => 'https://m.me/greeco.vn', 'type' => 'text', 'group' => 'social', 'label' => 'Messenger'],
            ['key' => 'google_maps_url', 'value' => 'https://maps.google.com/?q=10.7367,106.7036', 'type' => 'text', 'group' => 'contact', 'label' => 'Google Maps'],

            // SEO Settings
            ['key' => 'meta_title', 'value' => 'GREECO - Viện Nghiên cứu Môi trường | Kiểm kê Khí nhà kính & Tư vấn Phát triển Bền vững', 'type' => 'text', 'group' => 'seo', 'label' => 'Meta Title'],
            ['key' => 'meta_description', 'value' => 'GREECO - Viện nghiên cứu và tư vấn môi trường hàng đầu Việt Nam. Chuyên kiểm kê khí nhà kính (GHG), báo cáo CBAM, LCA, ESG, tín chỉ carbon và đào tạo phát triển bền vững.', 'type' => 'text', 'group' => 'seo', 'label' => 'Meta Description'],
            ['key' => 'meta_keywords', 'value' => 'kiểm kê khí nhà kính, GHG inventory, CBAM, LCA, ESG, tín chỉ carbon, phát triển bền vững, môi trường, ISO 14064, carbon footprint', 'type' => 'text', 'group' => 'seo', 'label' => 'Meta Keywords'],

            // Footer
            ['key' => 'copyright_text', 'value' => '© 2025 GREECO. Bản quyền thuộc về Viện Nghiên cứu Môi trường GREECO.', 'type' => 'text', 'group' => 'footer', 'label' => 'Copyright'],
            ['key' => 'footer_description', 'value' => 'GREECO là đơn vị tiên phong trong lĩnh vực kiểm kê khí nhà kính, tư vấn phát triển bền vững và đào tạo môi trường tại Việt Nam.', 'type' => 'text', 'group' => 'footer', 'label' => 'Mô tả Footer'],

            // Logo & Branding
            ['key' => 'logo', 'value' => 'images/greeco_logo.svg', 'type' => 'text', 'group' => 'branding', 'label' => 'Logo'],
            ['key' => 'logo_footer', 'value' => 'images/footer-logo.svg', 'type' => 'text', 'group' => 'branding', 'label' => 'Logo Footer'],
            ['key' => 'favicon', 'value' => 'images/favicon.png', 'type' => 'text', 'group' => 'branding', 'label' => 'Favicon'],

            // Homepage Stats
            ['key' => 'stat_projects', 'value' => '150+', 'type' => 'text', 'group' => 'stats', 'label' => 'Số dự án'],
            ['key' => 'stat_clients', 'value' => '100+', 'type' => 'text', 'group' => 'stats', 'label' => 'Khách hàng'],
            ['key' => 'stat_experience', 'value' => '10+', 'type' => 'text', 'group' => 'stats', 'label' => 'Năm kinh nghiệm'],
            ['key' => 'stat_trainees', 'value' => '2000+', 'type' => 'text', 'group' => 'stats', 'label' => 'Học viên đào tạo'],

            // Working Hours
            ['key' => 'working_hours', 'value' => 'Thứ 2 - Thứ 6: 8:00 - 17:30', 'type' => 'text', 'group' => 'contact', 'label' => 'Giờ làm việc'],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(
                ['key' => $setting['key']],
                $setting
            );
        }
    }
}

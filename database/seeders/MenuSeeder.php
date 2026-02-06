<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        Menu::create([
            'name' => 'Header Menu',
            'location' => 'header',
            'items' => [
                ['title' => 'Trang chủ', 'url' => '/', 'route' => 'home'],
                ['title' => 'Giới thiệu', 'url' => '/gioi-thieu', 'route' => 'about'],
                [
                    'title' => 'Dịch vụ',
                    'url' => '#',
                    'children' => [
                        ['title' => 'Tư vấn', 'url' => '/dich-vu', 'route' => 'services.index'],
                        ['title' => 'Dự án', 'url' => '/du-an', 'route' => 'projects.index'],
                    ],
                ],
                ['title' => 'Đào tạo', 'url' => '/dao-tao', 'route' => 'courses.index'],
                ['title' => 'Hợp tác & NCKH', 'url' => '/hop-tac', 'route' => 'cooperation'],
                ['title' => 'Liên hệ', 'url' => '/lien-he', 'route' => 'contact'],
            ],
            'is_active' => true,
        ]);

        Menu::create([
            'name' => 'Footer Menu',
            'location' => 'footer',
            'items' => [
                ['title' => 'Trang chủ', 'url' => '/', 'route' => 'home'],
                ['title' => 'Giới thiệu', 'url' => '/gioi-thieu', 'route' => 'about'],
                ['title' => 'Dịch vụ', 'url' => '/dich-vu', 'route' => 'services.index'],
                ['title' => 'Dự án', 'url' => '/du-an', 'route' => 'projects.index'],
                ['title' => 'Đào tạo', 'url' => '/dao-tao', 'route' => 'courses.index'],
            ],
            'is_active' => true,
        ]);
    }
}

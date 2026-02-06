<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin user
        User::updateOrCreate(
            ['email' => 'admin@greeco.vn'],
            [
                'name' => 'Admin GREECO',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );

        // Run seeders in dependency order
        $this->call([
            SettingSeeder::class,
            SliderSeeder::class,
            ServiceSeeder::class,
            ProjectCategorySeeder::class,
            ProjectSeeder::class,
            CourseCategorySeeder::class,
            CourseSeeder::class,
            PartnerSeeder::class,
            TeamMemberSeeder::class,
            TestimonialSeeder::class,
            PostCategorySeeder::class,
            PostSeeder::class,
            PageSeeder::class,
            PopupSeeder::class,
            FaqSeeder::class,
            MenuSeeder::class,
        ]);
    }
}

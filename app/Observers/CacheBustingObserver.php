<?php

namespace App\Observers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class CacheBustingObserver
{
    /**
     * Map of model classes to their related cache keys.
     */
    protected static array $cacheMap = [
        \App\Models\Slider::class      => ['home_sliders'],
        \App\Models\Service::class     => ['home_services', 'footer_services', 'sitemap_xml'],
        \App\Models\Project::class     => ['home_projects', 'sitemap_xml'],
        \App\Models\Course::class      => ['home_courses', 'sitemap_xml'],
        \App\Models\Testimonial::class => ['home_testimonials'],
        \App\Models\Partner::class     => ['home_partners'],
        \App\Models\Post::class        => ['home_posts', 'sitemap_xml'],
        \App\Models\TeamMember::class  => ['home_team_members'],
        \App\Models\Faq::class         => ['home_faqs'],
        \App\Models\Popup::class       => ['home_popup'],
        \App\Models\Setting::class     => ['site_settings'],
        \App\Models\Page::class        => ['sitemap_xml'],
    ];

    public function saved(Model $model): void
    {
        $this->clearCacheFor($model);
    }

    public function deleted(Model $model): void
    {
        $this->clearCacheFor($model);
    }

    protected function clearCacheFor(Model $model): void
    {
        $keys = static::$cacheMap[get_class($model)] ?? [];

        foreach ($keys as $key) {
            Cache::forget($key);
        }
    }
}

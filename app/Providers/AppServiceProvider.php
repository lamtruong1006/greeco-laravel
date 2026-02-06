<?php

namespace App\Providers;

use App\Observers\CacheBustingObserver;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Force HTTPS in production
        if (config('app.env') === 'production' || request()->header('X-Forwarded-Proto') === 'https') {
            URL::forceScheme('https');
        }

        $models = [
            \App\Models\Slider::class,
            \App\Models\Service::class,
            \App\Models\Project::class,
            \App\Models\Course::class,
            \App\Models\Testimonial::class,
            \App\Models\Partner::class,
            \App\Models\Post::class,
            \App\Models\TeamMember::class,
            \App\Models\Faq::class,
            \App\Models\Popup::class,
            \App\Models\Setting::class,
            \App\Models\Page::class,
        ];

        foreach ($models as $model) {
            $model::observe(CacheBustingObserver::class);
        }
    }
}

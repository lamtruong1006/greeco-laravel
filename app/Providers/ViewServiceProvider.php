<?php

namespace App\Providers;

use App\Models\Service;
use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Only share data when not running in console (artisan commands)
        if ($this->app->runningInConsole()) {
            return;
        }

        // Check schema once and cache the result
        $hasSettingsTable = Cache::remember('has_settings_table', 86400, function () {
            return Schema::hasTable('settings');
        });

        if (!$hasSettingsTable) {
            return;
        }

        // Share cached settings with all views
        View::composer('*', function ($view) {
            static $shared = null;

            if ($shared === null) {
                $shared = Cache::remember('site_settings', 3600, function () {
                    return Setting::pluck('value', 'key')->toArray();
                });
            }

            $view->with('settings', $shared);
        });

        // Share cached footer services
        View::composer('components.footer', function ($view) {
            $footerServices = Cache::remember('footer_services', 3600, function () {
                return Service::active()->orderBy('order')->limit(4)->get();
            });

            $view->with('footerServices', $footerServices);
        });
    }
}

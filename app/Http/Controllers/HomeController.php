<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Faq;
use App\Models\Post;
use App\Models\Project;
use App\Models\Service;
use App\Models\Slider;
use App\Models\TeamMember;
use App\Models\Testimonial;
use App\Models\Popup;
use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $sliders = Cache::remember('home_sliders', 3600, function () {
            return Slider::active()->ordered()->get();
        });

        $services = Cache::remember('home_services', 3600, function () {
            return Service::active()
                ->ordered()
                ->limit(6)
                ->get();
        });

        $projects = Cache::remember('home_projects', 3600, function () {
            return Project::with('category')
                ->active()
                ->featured()
                ->ordered()
                ->limit(6)
                ->get();
        });

        $courses = Cache::remember('home_courses', 3600, function () {
            return Course::with(['category', 'modules'])
                ->active()
                ->featured()
                ->ordered()
                ->limit(6)
                ->get();
        });

        $testimonials = Cache::remember('home_testimonials', 3600, function () {
            return Testimonial::active()
                ->ordered()
                ->limit(6)
                ->get();
        });

        $posts = Cache::remember('home_posts', 1800, function () {
            return Post::with('category', 'author')
                ->published()
                ->latest()
                ->limit(3)
                ->get();
        });

        $teamMembers = Cache::remember('home_team_members', 3600, function () {
            return TeamMember::active()
                ->ordered()
                ->limit(4)
                ->get();
        });

        $faqs = Cache::remember('home_faqs', 3600, function () {
            return Faq::active()
                ->ordered()
                ->limit(4)
                ->get();
        });

        $popup = Cache::remember('home_popup', 3600, function () {
            return Popup::active()->first();
        });

        return view('pages.home', compact(
            'sliders',
            'services',
            'projects',
            'courses',
            'testimonials',
            'posts',
            'teamMembers',
            'faqs',
            'popup'
        ));
    }
}

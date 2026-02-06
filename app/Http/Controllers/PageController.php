<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Partner;
use App\Models\TeamMember;
use Illuminate\View\View;

class PageController extends Controller
{
    public function about(): View
    {
        $page = Page::where('slug', 'gioi-thieu')->active()->firstOrFail();
        $teamMembers = TeamMember::active()->ordered()->get();

        return view('pages.about', compact('page', 'teamMembers'));
    }

    public function cooperation(): View
    {
        $page = Page::where('slug', 'hop-tac')->active()->first();
        $partners = Partner::active()->ordered()->get();

        return view('pages.cooperation', compact('page', 'partners'));
    }

    public function show(Page $page): View
    {
        abort_unless($page->is_active, 404);

        $viewName = 'pages.' . $page->template;

        if (!view()->exists($viewName)) {
            $viewName = 'pages.default';
        }

        return view($viewName, compact('page'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProjectController extends Controller
{
    public function index(Request $request): View
    {
        $categories = ProjectCategory::active()
            ->ordered()
            ->get();

        $currentCategory = $request->category;

        $projects = Project::with('category')
            ->active()
            ->ordered()
            ->when($request->filled('category'), function ($query) use ($request) {
                $query->whereHas('category', function ($q) use ($request) {
                    $q->where('slug', $request->category);
                });
            })
            ->paginate(9);

        return view('pages.projects.index', compact('projects', 'categories', 'currentCategory'));
    }

    public function show(Project $project): View
    {
        abort_unless($project->is_active, 404);

        $project->load('category');

        $relatedProjects = Project::with('category')
            ->active()
            ->where('id', '!=', $project->id)
            ->when($project->project_category_id, function ($query) use ($project) {
                $query->where('project_category_id', $project->project_category_id);
            })
            ->ordered()
            ->limit(3)
            ->get();

        return view('pages.projects.show', compact('project', 'relatedProjects'));
    }
}

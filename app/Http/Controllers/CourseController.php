<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function index(Request $request): View
    {
        $categories = CourseCategory::active()
            ->ordered()
            ->get();

        $currentCategory = $request->category;

        $courses = Course::with('category')
            ->active()
            ->ordered()
            ->when($request->filled('category'), function ($query) use ($request) {
                $query->whereHas('category', function ($q) use ($request) {
                    $q->where('slug', $request->category);
                });
            })
            ->paginate(9);

        return view('pages.courses.index', compact('courses', 'categories', 'currentCategory'));
    }

    public function show(Course $course): View
    {
        abort_unless($course->is_active, 404);

        $course->load(['category', 'modules' => function ($query) {
            $query->active()->ordered();
        }]);

        $relatedCourses = Course::with('category')
            ->active()
            ->where('id', '!=', $course->id)
            ->when($course->course_category_id, function ($query) use ($course) {
                $query->where('course_category_id', $course->course_category_id);
            })
            ->ordered()
            ->limit(3)
            ->get();

        return view('pages.courses.show', compact('course', 'relatedCourses'));
    }
}

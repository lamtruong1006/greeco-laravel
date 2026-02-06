<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Health check - basic (for DigitalOcean health check)
Route::get('/health', function () {
    return response('OK', 200);
});

// Database check - kiểm tra database connection
Route::get('/db-check', function () {
    try {
        DB::connection()->getPdo();
        return response()->json([
            'status' => 'ok',
            'database' => 'connected',
            'php_version' => phpversion(),
            'laravel_version' => app()->version(),
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'error',
            'database' => 'failed',
            'message' => $e->getMessage(),
        ], 500);
    }
});

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// About
Route::get('/gioi-thieu', [PageController::class, 'about'])->name('about');

// Services
Route::get('/dich-vu', [ServiceController::class, 'index'])->name('services.index');
Route::get('/dich-vu/{service}', [ServiceController::class, 'show'])->name('services.show');

// Projects
Route::get('/du-an', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/du-an/{project}', [ProjectController::class, 'show'])->name('projects.show');

// Courses
Route::get('/dao-tao', [CourseController::class, 'index'])->name('courses.index');
Route::get('/dao-tao/{course}', [CourseController::class, 'show'])->name('courses.show');

// Cooperation
Route::get('/hop-tac', [PageController::class, 'cooperation'])->name('cooperation');

// Blog/Posts
Route::get('/tin-tuc', [PostController::class, 'index'])->name('posts.index');
Route::get('/tin-tuc/{post}', [PostController::class, 'show'])->name('posts.show');

// Contact
Route::get('/lien-he', [ContactController::class, 'index'])->name('contact');
Route::post('/lien-he', [ContactController::class, 'store'])->name('contact.store')->middleware('throttle:5,1');

// Newsletter
Route::post('/newsletter', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe')->middleware('throttle:3,1');

// Dynamic Pages
Route::get('/trang/{page}', [PageController::class, 'show'])->name('pages.show');

// Sitemap
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

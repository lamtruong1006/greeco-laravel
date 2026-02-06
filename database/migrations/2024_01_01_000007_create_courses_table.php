<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_category_id')->nullable()->constrained()->nullOnDelete();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('badge')->nullable(); // Chứng chỉ, Chuyên sâu, Cơ bản
            $table->text('short_description')->nullable();
            $table->longText('content')->nullable();
            $table->longText('overview')->nullable();
            $table->string('featured_image')->nullable();
            $table->json('gallery')->nullable();

            // Course details
            $table->integer('duration_hours')->nullable();
            $table->integer('total_sessions')->nullable();
            $table->string('format')->nullable(); // Online, Offline, Hybrid
            $table->integer('min_students')->nullable();
            $table->integer('max_students')->nullable();
            $table->boolean('has_certificate')->default(false);
            $table->decimal('price', 12, 0)->nullable();
            $table->decimal('discount_price', 12, 0)->nullable();

            $table->integer('order')->default(0);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);

            // SEO fields
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('og_image')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};

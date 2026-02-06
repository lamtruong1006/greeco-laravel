<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Course extends Model implements HasMedia
{
    use SoftDeletes, Sluggable, InteractsWithMedia;

    protected $fillable = [
        'course_category_id',
        'name',
        'slug',
        'badge',
        'short_description',
        'content',
        'overview',
        'featured_image',
        'gallery',
        'duration_hours',
        'total_sessions',
        'format',
        'min_students',
        'max_students',
        'has_certificate',
        'price',
        'discount_price',
        'order',
        'is_featured',
        'is_active',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'og_image',
    ];

    protected $casts = [
        'gallery' => 'array',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'has_certificate' => 'boolean',
        'order' => 'integer',
        'duration_hours' => 'integer',
        'total_sessions' => 'integer',
        'min_students' => 'integer',
        'max_students' => 'integer',
        'price' => 'string',
        'discount_price' => 'string',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(CourseCategory::class, 'course_category_id');
    }

    public function modules(): HasMany
    {
        return $this->hasMany(CourseModule::class)->orderBy('order');
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('featured_image')
            ->singleFile();

        $this->addMediaCollection('gallery');
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function getFormattedPriceAttribute(): string
    {
        if (!$this->price || $this->price === 'Liên hệ') {
            return 'Liên hệ';
        }

        // If numeric, format with thousand separators
        if (is_numeric($this->price)) {
            return number_format((float) $this->price, 0, ',', '.') . ' đ';
        }

        return $this->price;
    }

    public function getStudentsRangeAttribute(): string
    {
        if ($this->min_students && $this->max_students) {
            return $this->min_students . '-' . $this->max_students;
        }

        return $this->min_students ?? $this->max_students ?? 'N/A';
    }
}

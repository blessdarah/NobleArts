<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ["name", "image", "slug", "summary", "description", "category_id"];

    public function imageUrl(): string
    {
        return '/storage/' . $this->image;
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, "taggable");
    }

    public function serviceUrl(): string
    {
        return "/services/{$this->id}/{$this->slug}";
    }
}

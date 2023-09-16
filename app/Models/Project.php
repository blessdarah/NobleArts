<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ["name", "image", "slug", "description", "detail", "status", "start_date", "end_date"];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function projectUrl(): string
    {
        return "/projects/{$this->id}/{$this->slug}";
    }
}

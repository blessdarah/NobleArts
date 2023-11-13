<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use HasFactory;
    use SoftDeletes;

    public static function MovieTypes(): array
    {
        return [
            'trailer' => 'Trailer',
            'short film' => 'Short Film',
            'theatre' => 'Theatre arts',
        ];
    }
    protected $fillable = ['title', 'cover', 'description', 'type', 'video_url', 'release_date'];
}

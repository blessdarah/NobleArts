<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'button_text', 'image', 'is_active'];

    public static function where(string $string, bool $bool)
    {
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeamMember extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const OPTIONS = [
        'core' => 'Core members',
        'actor' => 'Actor'
    ];

    protected $fillable = [ "name", "type", "image", "position",
        "website", "email", "telephone", "about", "facebook",
        "twitter", "instagram", "linkedin"];
}

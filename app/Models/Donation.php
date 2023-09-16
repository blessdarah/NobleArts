<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = ['transId', 'status', 'medium', 'service_name', 'amount', 'revenue', 'email', 'financial_trans_id', 'initiated_on', 'confirmed_on'];

    protected $casts = [
        'initiated_on' => 'datetime',
        'confirmed_on' => 'datetime'
    ];
}

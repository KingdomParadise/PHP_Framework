<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainUsers extends Model
{
    protected $guarded = [
        'id',
        'updated_at',
        'created_at',
    ];

    protected $fillable = [
        'ip_address',
        'last_name',
        'ip_valid',
        'allowed_times',
    ];
}
<?php

namespace App\Modules\Docs\Models;

use Illuminate\Database\Eloquent\Model;

use App\Modules\Docs\Enums\DocType;

class Doc extends Model
{
    protected $fillable = [
        'title',
        'name',
        'price',
        'type'
    ];

    protected $casts = [
        'price' => 'float',
        'type' => DocType::class,
    ];
}

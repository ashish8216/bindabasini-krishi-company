<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Admin\Database\Factories\SettingFactory;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = ['content'];

    protected $casts = [
        'content' => 'array',
    ];
}

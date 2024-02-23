<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeeklyImage extends Model
{
    use HasFactory;
    protected $table = 'weekly_images';
    protected $guarded = [];
}

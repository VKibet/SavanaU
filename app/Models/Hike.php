<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hike extends Model
{
    protected $fillable = [
        'title',
        'event_date',
        'location',
        'difficulty',
        'price',
        'description',
        'meeting_point',
        'image',
        'featured'
    ];
}
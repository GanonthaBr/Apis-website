<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuccessStory extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image',
        'video',
    ];

    // Relationship between tables
    public function images()
    {
        return $this->hasMany('App\Models\SuccessStoryImages');
    }
}

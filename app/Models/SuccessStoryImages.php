<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuccessStoryImages extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'success_story_id'];
    public function successStory()
    {
        return $this->belongsTo('App\Models\SuccessStory');
    }
}

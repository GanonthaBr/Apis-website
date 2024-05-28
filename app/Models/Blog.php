<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    //add fillabes
    protected $fillable = [
        'title',
        'content',
        'image',
        'author',
    ];
    //add relationship
    public function comments()
    {
        return $this->hasMany(Comments::class)->orderBy('created_at', 'desc');
    }
    //add relationship to images
    public function images()
    {
        return $this->hasMany('App\Models\BlogImages');
    }
}

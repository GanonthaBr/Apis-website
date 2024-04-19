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
    ];
}

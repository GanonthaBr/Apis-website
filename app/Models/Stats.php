<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    use HasFactory;
    // define fillables with year_of_experiece, number_of_beneficiairies, communities_helped, departements_helped
    protected $fillable = ['year_of_experience', 'number_of_beneficiaries', 'communities_helped', 'departments_helped'];
}

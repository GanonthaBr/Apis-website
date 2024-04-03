<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DomaineInterventionController extends Controller
{
    public function index()
    {
        return view('partials.domaineIntervention');
    }
}

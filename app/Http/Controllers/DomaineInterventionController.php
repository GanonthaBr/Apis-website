<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DomaineInterventionController extends Controller
{
    public function santenutrition()
    {
        return view('partials.domaineIntervention.sante-nutrition');
    }
    public function educationdeveloppement()
    {
        return view('partials.domaineIntervention.education-developpement');
    }
    public function urgencehumanitaire()
    {
        return view('partials.domaineIntervention.urgence-humanitaire');
    }
    public function securitealimentaire()
    {
        return view('partials.domaineIntervention.securite-alimentaire');
    }
}

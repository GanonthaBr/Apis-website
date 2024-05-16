<?php

namespace App\Http\Controllers;

use App\Models\Causes;
use Illuminate\Http\Request;

class CausesController extends Controller
{
    public function index()
    {
        $causes = Causes::all();
        return view('partials.causes', ['causes' => $causes]);
    }
}

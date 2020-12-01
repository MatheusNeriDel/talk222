<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndiqueController extends Controller
{
    public function showIndique()
    {
        return view('indique');
    }
}

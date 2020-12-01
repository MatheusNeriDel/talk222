<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaleConoscoController extends Controller
{
    public function showFaleConosco()
    {
        return view('faleConosco');
    }
}

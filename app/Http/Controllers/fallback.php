<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fallback extends Controller
{
    public function __invoke()
    {
        return view('fallback.index');
    }
}

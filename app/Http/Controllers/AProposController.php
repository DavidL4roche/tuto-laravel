<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AProposController extends Controller
{
    public function about() {
        $title = "A propos";
        return view('pages/about', ['title' => $title]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OuiOuiController extends Controller
{
    public function index() {
        return view('welcome');
    }

    // POURQUOI CA NE FONCTIONNE PAS ?
    public function getIndex() {
        return "T'as réussi champion";
    }

    public function __construct() {
        // Mettre les middleware ici
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OlaController extends Controller
{
    public function index(string $name)
    {
        return view("saudar", compact("name"));
    }
}

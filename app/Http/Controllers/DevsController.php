<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevsController extends Controller
{
    public function index()
    {
        return view('desenvolvedores');
    }
}

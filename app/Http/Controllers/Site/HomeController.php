<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use App\Models\Curso;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $linhas = Curso::all();
        $rows = Aluno::all();
        return view('home', compact('linhas', 'rows'));
    }
}

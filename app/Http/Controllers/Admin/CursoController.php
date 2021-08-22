<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function cursos()
    {
        $titulo = 'Dev Cursos';
        return view('admin.cursos.index', compact('titulo'));
    }
}

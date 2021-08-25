<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Course;

class CursoController extends Controller
{
    public function cursos()
    {
        $titulo = 'Dev Cursos';

        $courses = Course::all();


        return view('admin.cursos.index', compact('titulo', 'courses'));
    }
}

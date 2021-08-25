<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Course;

class FormularioController extends Controller
{
    public function formulario()
    {
        return view('admin.crud.form');
    }

    public function adicionar(Request $request)
    {
        $curso = new Course();
        $curso->titulo = $request->titulo;

        $curso->save();

        return redirect()->route('cursos.listar');
    }
}

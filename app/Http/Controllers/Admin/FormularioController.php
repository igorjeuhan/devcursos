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
        Course::create($request->all());

        return redirect()->route('cursos.listar');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function formulario()
    {
        return view('Admin.crud.form');
    }
}

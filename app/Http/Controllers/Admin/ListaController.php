<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListaController extends Controller
{
    public function lista()
    {
        return view('Admin.lista.index');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\Sexo;

class SexosController extends Controller
{
    public function index(){
        $sexos = Sexo::all();        
        return view('admin/membros/form', compact('sexos'));        
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\Raca;

class RacasController extends Controller
{
    public function index(){
        $racas = Raca::all();        
        return view('admin/membros/form', compact('racas'));        
    }
}

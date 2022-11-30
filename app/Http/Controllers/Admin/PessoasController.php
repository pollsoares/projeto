<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Logradouro;
use App\Models\Pessoa;
use App\Models\Raca;
use App\Models\Sexo;

class PessoasController extends Controller
{
    public function index(){
        $pessoas = Pessoa::orderBy('id', 'asc')->paginate(10);

        return view('admin/pessoas/index', compact('pessoas'));
    }

    public function form(){
        $sexos = Sexo::all();
        $racas = Raca::all();
        $logradouros = Logradouro::all();


        return view('admin/pessoas/form' , compact('sexos', 'racas', 'logradouros'));
    }

    public function store(Request $request){
        $pessoa = Pessoa::create($request->all());

        if ($pessoa)
            return redirect()->route('pessoas.index')->with('sucesso', 'Dados cadastrados!');
    }

    public function show($id){
        $pessoa = Pessoa::find($id);

        return view('admin/pessoas/show', compact('pessoa'));
    }

    public function edit($id){
        $sexos = Sexo::all();
        $racas = Raca::all();
        $logradouros = Logradouro::all();
        $pessoa = Pessoa::find($id);

        return view('admin/pessoas/edit', compact('pessoa', 'id', 'sexos', 'racas', 'logradouros'));
    }

    public function update(Request $request){
        $pessoa = Pessoa::find($request->id);
        $pessoa->nome = $request->nome;
        $pessoa->sexo = $request->sexo;
        $pessoa->raca = $request->raca;
        $pessoa->data_nasc = $request->data_nasc;
        $pessoa->cidade_nasc = $request->cidade_nasc;
        $pessoa->cep = $request->cep;
        $pessoa->logradouro = $request->logradouro;
        $pessoa->endereco = $request->endereco;
        $pessoa->numero = $request->numero;
        $pessoa->complemento = $request->complemento;
        $pessoa->bairro = $request->bairro;
        $pessoa->cidade = $request->cidade;
        $pessoa->estado  = $request->estado;
        $pessoa->email = $request->email;

        $pessoa->save();

        if ($pessoa){
            return redirect()->route('pessoas.index')->with('sucesso', 'Dados Alterados!');
        }
    }

    public function delete(Request $request){
        $pessoa = Pessoa::where('id',$request->id)->delete();

        if($pessoa){
            return redirect()->route('pessoas.index')->with('sucesso', 'Dados excluídos');
        }
    }

    public function search(Request $request){
        $pesquisa = $request->pesquisar;

        $pessoas = Pessoa::pesquisa($request->pesquisar);

        if(count($pessoas) > 0){
            return view('admin/pessoas/search', compact('pessoas', 'pesquisa'));
        } else {
            return redirect()->route('pessoas.index')->with('error', 'Registro não localizado!');
        }
    }
}

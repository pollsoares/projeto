@extends('adminlte::page')

@section('title', 'Hemocentro - Campinas')

@section('content_header')
<h1>
    <small><strong>Pesquisa</strong></small>
</h1>    
@stop

@section('content')

<div class="box box-primary col-xs-12">    
    <div class="box-header">
        <div class="row">
            <h4 class="box-title col-md-3">Resultados para: <strong>{{ $pesquisa }}</strong></h4>           

            <div class="box-tools col-md-6">
                <form role="form" action="{{ route('pessoas.pesquisar') }}" method="POST" >
                    {{ csrf_field() }}
                    <div class="form input-group input-group-sm" >
                    <input type="text" name="pesquisar" class="form-control pull-right" placeholder="Pesquisar...">

                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-default btn-sm "><i class="fa fa-search "></i></button>
                    </div>
                    </div>
                </form>
            </div>

            <div class="col-md-1">
                
            </div>

        </div>
    </div><!-- /.box-header -->

    <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
            <tbody>
            <tr>
               <th class="col-md-1">ID</th>
               <th class="col-md-3">Nome</th>
               <th class="col-md-2">Telefone</th>
               <th class="col-md-3">E-mail</th>
               <th class="col-md-3">Ações</th>
            </tr>

            @foreach ($pessoas as $pessoa)
            <tr>                
                <td> {{ $pessoa->id }} </td>
                <td> {{ $pessoa->nome }} </td>
                <td> {{ $pessoa->telefone }} </td>
                <td> {{ $pessoa->email }} </td>
                <td> 
                    <a type="button" href="{{ url('admin/pessoas/show', $pessoa->id) }}" class="btn btn-success btn-xs">Visualizar</a>
                    <a type="button" href="{{ url('admin/pessoas/edit', $pessoa->id) }}" class="btn btn-warning btn-xs">Editar</a>
                    <a type="button" href="{{ url('admin/pessoas/delete', $pessoa)}}" class="btn btn-danger btn-xs">Excluir</a>
                </td>                    
            </tr>
            @endforeach
            </tbody>
        </table>

        <div class="box-footer">
            <a href="{{ route('pessoas.index') }}" class="btn btn-primary">Voltar</a>
        </div>

    </div><!-- /.box-body -->
</div><!-- /.box -->
    
@stop
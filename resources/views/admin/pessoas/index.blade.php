@extends('adminlte::page')

@section('title', 'Hemocentro - Campinas')

@section('content_header')
<h1>
    <small><strong>Funcionários cadastrados</strong></small>
</h1>
@stop

@section('content')

<div class="box box-primary col-xs-12">
    <div class="box-header">

        <div class="row"> <!-- MODAL -->
            <div class="col-md-4"></div>

            <div class="col-md-4">
                @if ($message = Session::get('sucesso'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i>{{ $message }}</h4>
                    </div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>

            <div class="col-md-4">
                @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-close"></i>{{ $message }}</h4>
                    </div>
                @endif
            </div> <!-- MODAL -->
        </div>

        <div class="row">

            <div class="box-tools col-md-6">
                <form role="form" action="{{ route('pessoas.pesquisar') }}" method="POST" >
                    {{ csrf_field() }}
                    <div class="form input-group input-group-sm" >
                    <input type="text" name="pesquisar" class="form-control pull-right" placeholder="Pesquisar...">

                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-default btn-sm"><i class="fa fa-search"></i></button>
                    </div>
                    </div>
                </form>
            </div>

            <div class="col-md-1">

            </div>

            <div class="col-md-2">
                <a href="{{ route('pessoas.form')}}" class="btn btn-primary btn-sm"> Cadastrar Funcionario </a>
            </div>
        </div>
    </div><!-- /.box-header -->

    <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
            <tbody>
            <tr>
               <th class="col-md-1">Código</th>
               <th class="col-md-3">Nome</th>
               <th class="col-md-2">Data de Nascimento</th>
               <th class="col-md-3">Email</th>
               <th class="col-md-4">Ações</th>
            </tr>

            @foreach ($pessoas as $pessoa)
            <tr>
                <td> {{ $pessoa->id }} </td>
                <td> {{ $pessoa->nome }} </td>
                <td> {{ $pessoa->data_nasc }} </td>
                <td> {{ $pessoa->email }} </td>
                <td>
                    <a type="button" href="{{ url('admin/pessoas/show', $pessoa->id) }}" class="btn btn-success btn-xs">Visualizar</a>
                    <a type="button" href="{{ url('admin/pessoas/edit', $pessoa->id) }}" class="btn btn-warning btn-xs">Editar</a>
                    <a type="button" href="{{ url('admin/pessoas/delete', $pessoa->id) }}" class="btn btn-danger btn-xs">Excluir</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div><!-- /.box-body -->

    <!-- PAGINAÇÃO -->
    {{ $pessoas->links() }}

</div><!-- /.box -->



@stop

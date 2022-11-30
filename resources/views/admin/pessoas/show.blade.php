@extends('adminlte::page')

@section('title', 'Hemocentro - Campinas')

@section('content_header')
<h1>
    <small><strong>Dados do Funcionário</strong></small>
</h1>
@stop

@section('content')

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Detalhes</h3>
    </div>
    <!-- form start -->
    <form role="form" method="POST" action="{{ route('pessoas.store') }}">
    {{ csrf_field() }}
        <div class="box-body">
            <div class="form-group" >
                <label for="nome">Nome</label>
                <p>{{ $pessoa->nome }}</p>
            </div>

            <div class="form-group">
                <label for="sexo">Sexo</label>
                <p>{{ $pessoa->getSexo->desc_sexo }}</p>
            </div>

            <div class="form-group">
                <label for="data_nasc">Data de Nascimento</label>
                <p>{{ date('d/m/Y', strtotime($pessoa->data_nasc)) }}</p>
            </div>

            <div class="form-group">
                <label for="cidade_nasc">Cidade de Nascimento</label>
                <p>{{ $pessoa->cidade_nasc }}</p>
            </div>

            <div class="form-group">
                <label for="raca">Raça</label>
                <p>{{ $pessoa->getRaca->desc_raca }}</p>
            </div>

            <div class="form-group">
                <label for="cep">Cep</label>
                <p>{{ $pessoa->cep }}</p>
            </div>

            <div class="form-group">
                <label for="logradouro">Endereço</label>
                <p>{{ $pessoa->getLogradouro->desc_logradouro }} {{ $pessoa->endereco }} , {{ $pessoa->numero }}  {{ $pessoa->complemento }}  </p>
                <p>{{ $pessoa->bairro }} - {{ $pessoa->cidade }} - {{ $pessoa->estado }}</p>
            </div>

            <div class="form-group">
                <label for="email">email</label>
                <p>{{ $pessoa->email }}</p>
            </div>

            <div class="box-footer">
                <a href="{{ route('pessoas.edit', $pessoa->id) }}" class="btn btn-warning bt-sm">Editar</a>
                <a href="{{ route('pessoas.index') }}" class="btn btn-primary bt-sm">Voltar</a>
            </div>
        </div>
    </form>
</div>

@stop

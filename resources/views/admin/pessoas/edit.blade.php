@extends('adminlte::page')

@section('title', 'Hemocentro - Campinas')

@section('content_header')
<h1>
    <small><strong>Alteração de dados do funcionario</strong></small>
</h1>
@stop

@section('content')

<div class="box box-primary">
    <div class="box-header with-border">
        <hr>
    </div><!-- /.box-header -->

    <!-- form start -->
    <form role="form" method="POST" action="{{ route('pessoas.update') }}">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $pessoa->id }}">
        <div class="box-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group" >
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" value="{{ $pessoa->nome }}" name="nome" required>
                    </div>
                </div>

                <div class="col-sm-2">
                    <!-- select -->
                    <div class="form-group">
                      <label>Sexo</label>
                      <select name="sexo" class="custom-select">
                        <option disabled {{ (old("sexo") == "" ? "selected":"") }} > Escolha um sexo</option>

                        @foreach ($sexos as $sexo)
                        <option value="{{$sexo->cod_sexo}}" {{ ($pessoa->sexo == "$sexo->cod_sexo") ? "selected":"" }} > {{$sexo->desc_sexo }}</option>
                        @endforeach
                  </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group" >
                        <label for="data_nasc">Data de Nascimento</label>
                        <input type="date" class="form-control" value="{{ $pessoa->data_nasc }}" name="data_nasc" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group" >
                        <label for="cidade_nasc">Cidade de Nascimento</label>
                        <input type="text" class="form-control" value="{{ $pessoa->cidade_nasc }}" name="cidade_nasc" required>
                    </div>
                </div>

                <div class="col-sm-2">
                    <!-- select -->
                    <div class="form-group">
                      <label>Raça</label>
                      <select name="raca" class="custom-select">
                        <option disabled {{ (old("racas") == "" ? "selected":"") }} > Escolha a raça</option>

                        @foreach ($racas as $raca)
                      <option value="{{$raca->cod_raca}}" {{ ($pessoa->raca == "$raca->cod_raca") ? "selected":"" }}> {{ $raca->desc_raca }}</option>
                        @endforeach
                  </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="cep">CEP</label>
                        <input type="number" class="form-control" value="{{ $pessoa->cep }}" name="cep" required>
                    </div>
                </div>
                <div class="col-sm-2">
                    <!-- select -->
                    <div class="form-group">
                      <label>Logradouro</label>
                      <select name="logradouro" class="custom-select">
                        <option disabled {{ (old("logradouro") == "" ? "selected":"") }} > Escolha o tipo de logradouro</option>

                        @foreach ($logradouros as $logradouro)
                        <option value="{{$logradouro->cod_logradouro}}" {{ ($pessoa->logradouro == "$logradouro->cod_logradouro") ? "selected":"" }} > {{$logradouro->desc_logradouro }}</option>
                        @endforeach
                  </select>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" value="{{ $pessoa->endereco }}" name="endereco" required>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <label for="numero">Nº</label>
                        <input type="string" class="form-control" value="{{ $pessoa->numero }}" name="numero">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="complemento">Complemento</label>
                        <input type="text" class="form-control" value="{{ $pessoa->complemento }}" name="complemento">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="bairro">Bairro</label>
                        <input type="text" class="form-control" value="{{ $pessoa->bairro }}"name="bairro">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group" >
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" value="{{ $pessoa->cidade }}"name="cidade" required>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <input type="text" class="form-control" value="{{ $pessoa->estado }}"name="estado">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" value="{{ $pessoa->email }}"name="email">
                    </div>
                </div>
            </div>
        </div>
        <div>
        </div>

        <div class="box-footer">
            <button type="submit" class="btn btn-primary btn-sm"><strong>Salvar</strong></button>
            <a href="{{ route('pessoas.index') }}" class="btn btn-primary btn-sm">Voltar</a>
        </div>
        <hr>
    </form>
</div>

@stop

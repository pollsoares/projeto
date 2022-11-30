@extends('adminlte::page')

@section('title', 'Hemocentro - Campinas')

@section('content_header')
<h1>
    <small><strong>Cadastro de novo funcionário</strong></small>
</h1>
@stop

@section('content')

<div class="box box-primary">
    <div class="box-header with-border">
        <hr>
    </div><!-- /.box-header -->

    <!-- form start -->
    <form role="form" method="POST" action="{{ route('pessoas.store') }}">
        {{ csrf_field() }}
        <div class="box-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" placeholder="" required>
                    </div>
                </div>

                <div class="col-sm-2">
                    <!-- select -->
                    <div class="form-group">
                        <label>Sexo</label>
                        <select name="sexo" class="custom-select">
                            <option disabled> Escolha um sexo</option>
                            @foreach ($sexos as $sexo)
                                <option value="{{$sexo->cod_sexo}}">
                                    {{ (old("sexo") == "$sexo->cod_sexo" ? "selected":"") }}>
                                    {{$sexo->desc_sexo }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="col-md-2">
                    <div class="form-group">
                        <label for="data_nasc">Data de Nascimento</label>
                        <input type="date" class="form-control" name="data_nasc" placeholder="" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="cidade_nasc">Cidade de Nascimento</label>
                        <input type="text" class="form-control" name="cidade_nasc" placeholder="" required>
                    </div>
                </div>

                <div class="col-sm-2">
                    <!-- select -->
                    <div class="form-group">
                        <label>Ra?a</label>
                        <select name="raca" class="custom-select">
                            <option disabled> Escolha a ra?a</option>
                            @foreach ($racas as $raca)
                                <option value="{{$raca->cod_raca}}"
                                    {{ (old("racas") == "$raca->cod_raca" ? "selected":"") }}> {{$raca->desc_raca }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label>CEP</label>
                        <input type="number" class="form-control" name="cep" placeholder="" required>
                    </div>
                </div>
                <div class="col-sm-2">
                    <!-- select -->
                    <div class="form-group">
                        <label>Logradouro</label>
                        <select name="logradouro" class="custom-select">
                            <option disabled {{ (old("logradouro") == "" ? "selected":"") }}> Escolha o tipo de
                                logradouro</option>
                            @foreach ($logradouros as $logradouro)
                            <option value="{{$logradouro->cod_logradouro}}"
                                {{ (old("logradouros") == "$logradouro->cod_logradouro" ? "selected":"") }}>
                                {{$logradouro->desc_logradouro }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" name="endereco" placeholder="" required>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <label for="numero">Nº</label>
                        <input type="string" class="form-control" name="numero" placeholder="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="complemento">Complemento</label>
                        <input type="text" class="form-control" name="complemento" placeholder="" maxlength="50">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="bairro">Bairro</label>
                        <input type="text" class="form-control" name="bairro" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" name="cidade" placeholder="" required>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <input type="text" class="form-control" name="estado" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="">
                    </div>
                </div>
            </div>
        </div>
        <div>
        </div>

        <div class="box-footer">
            <button type="submit" class="btn btn-primary btn-sm">Cadastrar</button>
            <a href="{{ route('pessoas.index') }}" class="btn btn-info pull-right btn-sm">Voltar</a>
        </div>
        <hr>
    </form>
</div>

@stop

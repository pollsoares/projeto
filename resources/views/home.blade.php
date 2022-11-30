@extends('adminlte::page')

@section('title', 'Hemocentro - Unicamp')

@section('content_header')
<h1>
    <small><strong>Dashboard</strong></small>
</h1>
@stop

@section('content')

<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-xs-6">

        <div class="small-box bg-teal">
            <div class="inner">
                <h3>{{ \App\Models\Pessoa::count() }}</h3>

                <p>Funcionarios Ativos</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="/admin/pessoas" class="small-box-footer">Visualizar funcionarios <i
                    class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div> <!-- ./col -->

    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-olive">
            <div class="inner">
                <h3>0<sup style="font-size: 20px"></sup></h3>

                <p>Treinamentos aplicados</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">Visualizar Treinamentos <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div><!-- ./col -->

    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>0</h3>

                <p>Funcionários Afastados</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">Visualizar Funcionarios <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div><!-- ./col -->

    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-secondary">
            <div class="inner">
                <h3>0</h3>

                <p>Funcionarios em férias</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">Visualizar Funcionários<i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div><!-- ./col -->
</div><!-- /.row -->


@stop

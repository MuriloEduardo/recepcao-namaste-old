@extends('voyager::master')

@section('page_title', __('voyager.generic.viewing').' Relatórios')

@section('css')

    @include('voyager::compass.includes.styles')

    <style>
        .reports {
            padding-top: 30px;
        }
    </style>
    
@stop

@section('page_header')
    <h1 class="page-title">
        <i class="voyager-pie-graph"></i>
        <p> Relatórios</p>
        <span class="page-description">Aqui você extrairá dados úteis para o gerenciamento do Namastê.</span>
    </h1>
@stop

@section('content')

    <div id="gradient_bg"></div>

    <div class="page-content reports container-fluid">
        <div class="row equal">
            <div class="col-md-8">
                <div class="panel widget center bgimage" style="margin-bottom:0;overflow:hidden;background-image:url('/storage/backgrounds/reports-customer-professional.jpg');">
                    <div class="dimmer"></div>
                    <div class="panel-content">
                        <i class="voyager-group"></i>
                        <h4>Clientes por profissionais</h4>
                        <p>Relatório de números de clientes atendidos por cada profissional.</p>
                        <a href="/admin/relatorios/clientes-por-profissionais" class="btn btn-primary">Abrir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel widget center bgimage" style="margin-bottom:0;overflow:hidden;background-image:url('/storage/backgrounds/reports-participation-events.jpg');">
                    <div class="dimmer"></div>
                    <div class="panel-content">
                        <i class="voyager-activity"></i>
                        <h4>Participacão em eventos</h4>
                        <p>Ralatório de pessoas que participaram nos eventos.</p>
                        <a href="#" class="btn btn-primary">Abrir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
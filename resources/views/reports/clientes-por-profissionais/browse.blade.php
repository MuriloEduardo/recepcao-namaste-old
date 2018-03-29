@extends('voyager::master')

@section('page_title', __('voyager.generic.viewing').' Relatório de Clientes por profissionais')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-group"></i> Clientes por profissionais
        </h1>
    </div>
@stop

@section('content')
    <div class="page-content filter container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        @foreach ($professionals as $professional)
                            <p>{{ $professional->sannyas }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
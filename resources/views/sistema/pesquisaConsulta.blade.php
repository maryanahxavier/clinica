@extends('sistema.layout')
@section('title', 'Consultas - Pesquisa Consulta')
@section('content')
    <div class="card border">
        <div class="card-body">
            <form action="{{route('procurarConsulta')}}" method="GET">
                @csrf
                <div class="form-group">
                    <label for="data_consulta">Data da Consulta</label>
                    <input type="text" class="form-control" name="data_consulta" id="data_consulta" placeholder="Informe a data da consulta">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Pesquisar</button>
                <button onclick="window.location.href='{{route('consultasPendentes')}}';" type="button" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
@endsection
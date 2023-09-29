@extends('sistema.layout')
@section('title', 'Consultas - Nova Consulta')
@section('content')
        <div class="card border">
                <div class="card bordy">
                    <form action="{{'gravaNovaConsulta'}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nome">Data da Consulta</label>
                            <input type="text" class="form-control" name="data_consulta" id="data_consulta" placeholder="Informe a data da consulta">
                        </div>
                        <div class="form-group">
                            <label for="nome">Selecione o tipo do diagnóstico</label>
                            <select class="form-control" name="diagnostico" id="diagnostico" required>
                                @foreach ($consultas as $item)
                                    <option value="{{$item->id}}">{{$item->data_consulta}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="selectRealizada">Selecione se a tarefa foi realizada</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="realizada" id="realizada" value="S">
                                <label class="form-check-label" for="realizada">
                                    Concluída
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="realizada" id="realizada" value="S">
                                <label class="form-check-label" for="realizada">
                                    Pendente
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                        <button onclick="window.location.href='{{route('consultasPendentes')}}';" type="button" class="btn btn-danger btn-sm">Cancelar</button>
                    </form>
                </div>
        </div>
@endsection        
@extends('sistema.layout')
@section('title', 'Consultas - Consultas')
@section('content')
    <div class="card border">
        @if(session()->get('danger'))
           <div class="alert alert-danger">
                {{ session()->get('danger') }}
            </div><br />
        @elseif(session()->get('sucess'))
             <div class="alert alert-sucess">
                {{ session()->get('sucess') }}
            </div><br />
        @endif
        <div class="card-body">
            <h5 class="card-title" style="text-align: center">Cadastro de Consultas</h5>
                <table class="table table-ordered table-hover" id="tabelaConsultas">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Data da consulta</th>
                            <th>Realizada</th>
                            <th>Diagnóstico</th>
                            <th style="text-align: center" colspan="2">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                         @foreach ($dados as $item => $value)
                         <tr>
                            <td>{{ $value['id'] }}</td>
                            <td>{{ $value['data_consulta'] }}</td>
                            @if($value['realizada'] == 'N')
                                <td>Pendente</td>
                            @else
                                 <td>Concluída</td>
                             @endif
                            <td>{{ $value['cliente']['nome'] }}</td>
                             <td style="text-align:center">
                                <a href="/consultas/editar/{{ $value['id'] }}" class="btn btn-primary">Editar</a>
                            </td>
                            <td style="text-align:center">
                                <a href="/consultas/apagar/{{ $value['id'] }}" class="btn btn-danger">Deletar</a>
                            </td>
                        </tr>
                        @endforeach
                     </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {!! $dados->links() !!}
                </div>
        <div class="card-footer">
            <a href="/consultas/novo" class="btn btn-primary btn-sm" role="button">Novo Cadastro</a>
        </div>
    </div>
@endsection

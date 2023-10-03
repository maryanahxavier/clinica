@extends('sistema.layout')
@section('title', 'Consultas - Consultas')
@section('content')
        <div class="card-body">
            <h5 class="card-title" style="text-align: center;"> Cadastro de consultas</h5>
                <table class="table table-ordered table-hover" id="tabelaClientes">
                    <thead>
                        <tr>
                            <th>Consultas</th>
                            <th>Data consulta</th>
                            <th>Realizada</th>
                            <th>Diagnóstico</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dados as $item)
                        <tr>
                            <td>{{ $item->id}}</td>
                            <td>{{$item->data_consulta}}</td>
                            @if($item->realizada =='N')</td>
                                <td>Pendente</td>
                            @else
                            <td>Concluída</td>
                            @endif
                            <td>{{ $item->nome}}</td>
                            <td style="text-align: center;">
                                <a href="/consultas/editar/{{ $item->id}}" class="btn btn-primary">Editar</a>
                        </td>
                        <td style="text-align: center;">
                            <a href="/consultas/apagar/{{ $item->id}}" class="btn btn-primary">Deletar</a>
                            </td>
                        </tr>
                        @endforeach 
                    </tbody>
                </table>
        </div>
        <div class="card-footer">
            <a href="/consultas/novo" class="btn btn-primary btn-sm" role="button">Novo Cadastro</a>
        </div>
</div>
@endsection

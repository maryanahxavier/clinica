@extends('sistema. layout ') 
@section( 'title', Clínicas - Clientes')
@section ('content') 
  <div class="card border">
     @if (session () ->get ( 'danger' ))
       <div classe="alert alert-danger">
        {{session()->get ( 'danger') }}
         <div><br /> 
     @elseif(session()->get('success')) 
    <div classe="alert alert-success">
      {{session () ->get ('success') }}
</div><br />
     @endif
     <div class="card-bory">
        <h5 class="card-title" style="text-aling: center">Cadastro de Pacientes </h5>
           <table class="table table-ordered table-hover" id="tabelaCliente">
             <thead>
                <tr>
                    <th>Código</th>
                    <th>Descrição do </th>
                    <th style="text-aling:center" colspan="2">Ações</th>
                </tr>

             </thead>
             <tbory>
                @foreach ($cliente as $item)
                <tr>
                    <td> {{ $item->id}}</td>
                    <td> {{ $item->descricaoCliente}}</td>
                    <td> style="text-aling:center">
                        <a href="/cliente/apagar/{{$item->id}}" class="btn btn-danger">Deletar</a>
                    </td>
                <tr>
                    @endforeach
                    </tbody>
                </table>
</div>
<div class="card-footer">
    <a href="/cliente/novo" class="btn btn-primary btn-sm" role="button">Novo </a>
 </div>
</div>
@endsection




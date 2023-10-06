@extends(‘sistema.loyout’)
@section(‘title’, ‘Sistema da Clínica – editar Cliente’)
@section(‘content’)
     <div class= “card border">
            <div class=”card-body”>
                        <form action= “/cliente/{{$dados->}}” method= “POST”>
                               @csrf
                                <div class= “form-group”>
                                        <label for= “descricaoCliente”> Breve descrição sobre o cliente</label>
                                          <input type=”text” class= “form-control” name= “descricaoCliente”
                                                    Id= “descricaoCliente” value = “{{$dados->descricaoCliente}}”>
    </div> 
      <button type= submit” class= “btn btn-primary btn-sm/’>Salvar</button>
        <button onclick= “windon.location.href=’/tipos’ ; “ type=”button”
                Class= “btn btn-danger btn-sm”>Cancelar</button>
</form>
</div>
</div>
@endsection

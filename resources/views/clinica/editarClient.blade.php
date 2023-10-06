@extends(‘sistema.loyout’)
@section(‘title’, ‘Sistema da Clínica – novo cliente’)
@section(‘content’)
     <div class= “card border”>
            <div class=”card-body”>
                        <form action= “{{route(‘gravaNovoCliente’}}}’ method= “POST”>
                               @csrf
                                <div class= “form-group”>
                                        <label for= “descricaoCliente”> Breve descrição sobre o cliente</label>
                                          <input type=”text” class= “form-control” name= “descricaoCliente”
                                                    Id= “descricaoCliente” placeholder= “informe os dados do cliente”>
    </div> 
      <button type= submit” class= “btn btn-primary btn-sm/’>Salvar</button>
        <button onclick= “windon.location.href=’{{route(‘indexCliente’)}}’ ; “ type=”button”
                Class= “btn btn-danger btn-sm”>Cancelar</button>
</form>
</div>
</div>
@endsection


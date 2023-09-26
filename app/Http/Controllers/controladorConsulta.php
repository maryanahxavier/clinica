<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Consultas;
use Illuminate\Support\Facades\DB;

class controladorConsulta extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $consultas;
    private $total = 5;
    public function __construct(Cliente $cliente)
    {
        $this->middleware('auth');
        $this->consultas = $consulta;

    }
    public function consultaPendente()
    {
        $dados = $this->consultas->with('cliente')->where('nome', '=', 'N')->paginate($this->total);
        return view('sistema.consultas', compact('dados'));
    }
    public function consultaRealizada()
    {
        $dados = $this->consultas->with('cliente')->where('nome', '=', 'S')->paginate($this->total);
        return view('sistema.consultas', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cliente = Cliente::all();
        return view('sistema.novaConsulta', compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new Consulta();
        $dados->nome = $request->input('nome');
        $dados->realizada = $request->input('realizada');
        $dados->cliente_id = $request->input('cliente');
        $dados->save();
        return redirect('/consultaPendente')->with('success', 'Nova consulta cadastrada com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dados = Consulta::find($id);
        if(isset($dados)){
            $clientes = Cliente::all();
            $dados->clientes = $clientes;
            return view('sistema.editarConsulta', compact('dados'));
        }
        return redirect('/consultaPendente')->with('danger', 'Consultra não encontrada.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = Consulta::find($id);
        if(isset($dados)){
            $dados->nome = $request->input('nome');
            $dados->realizada = $request->input('realizada');
            $dados->cliente_id = $request->input('cliente');
            $dados->save();
        }else{
            return redirect('/consultaPendente')->with('danger', 'Erro ao tentar atualizar o cadastro.');
        }
        return redirect('/consultaPendente')->with('success', 'Cadastro excluído com sucesso.');
    }

    public function pesquisarConsulta()
    {
        return view('sistema.pesquisaConsulta');
    }

    public function procurarConsulta(Request $request)
    {
        $nomes = $request->input('nome');
        $dados = DB::table('consultas')->select('id', 'nome', 'realizada', 'cliente_id')->where(DB::raw('lower(nome'), 'like', '%'. strlower($nomes).'%')->get();
        if(isset($dados)){
            foreach($dados as $item){
                $cliente = Cliente::find($item->cliente_id);
                $item->nome = $$cliente->nome;
            }
            return view('sistema.exibirPesquisaConsulta', compact('dados'));
        }
        else
        return redirect('/consultaPendente')->with('danger', 'Não foram encontrados registros com o termo pesquisado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

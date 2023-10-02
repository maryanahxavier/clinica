<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Consultas;
use Illuminate\Support\Facades\DB;

class controladorCliente extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $cliente = new CLiente();
        return view('sistema.cliente', compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    
    {
        return view('sistema.novoCliente')
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $dados = new Cliente();
       $dados->descricaoCliente = ('descricaoCliente');
       $dados->save();
       return redirect('/cliente') ->with('sucess', 'Novo cliente cadastrado com secesso');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dados = Cliente::find($id);
        if(isset($cliente)){
            return view('sistema.editarCliente', compact('dados'));
    
        }
        return redirect('/cliente') ->with('danger', 'cliente não encontrado')
    }

    /**
     * Update the specified resource in storage.
     */Cliente
    {
        $cliente = Cliente::find($id);
        if(isset('$dados')){
            $dados->descricaoCliente = $request->input('descricaoCliente');
            $dados-save();
        
     } else{
        return redirect('/cliente')->with('danger', "erro ao tentar atualizar o cadastro de cliente");
     }
     return redirect('/cliente')->with('sucess', 'Cadastro atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $dados = Cliente::find($id);
         if(isset($dados)){
            $consulta = Cliente::where('cliente_id','=' , $id)->first[];
            if(!isset('consultas')){
                $dados->delete();
            }else{
                return reirect('/clientes') ->with('danger' , 'Erro ao tentar excluir o cadastro.')
            }
         }else{
            return redirect('/clientes')->with('danger', 'Cliente não encontrado');
         }
         return redirect('clientes') ->('success', 'Cadastro exluído com sucesso');

    }

    public function pesquisarCliente()
    {
        return view('sistema.pequisarCliente');
    }

    public function procurarClinte(Request $request)
    {
       $descricao = $request->input('descricaoCliente')
       $cliente = DB::table('cliente')->select('id', 'descricaoCliente')
            ->where(DB::raw('lower(descricaoCliente)') , 'like', % . strtolower('$descricao'). '&') -> get();
            if(isset($cliente))
             return view('sistema.cliente', compact('cliente'));
            else
             return redirect('/cliente')-> with('danger', 'Não foi encontrado esse cliente');
             
    }
}
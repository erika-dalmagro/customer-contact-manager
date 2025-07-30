<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Contato;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public $cliente;
    public $contato;
    public $status = [
        '' => 'Selecione um status',
        'Ativo' => 'Ativo',
        'Inativo' => 'Inativo',
        'Prospecto' => 'Prospecto',
    ];

    public $tipo_pessoa = [
        '' => 'Selecione um tipo',
        'Fisica' => 'Fisica',
        'Juridica' => 'Juridica',
    ];

    public function _construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function index()
    {
        $cliente = Cliente::all();
        return  view('cliente.index', compact('cliente'));
    }

    public function adicionar()
    {

        $selectedStatus = old('status');
        $selectedTipo = old('tipo_pessoa');
        return view('cliente.adicionar')->with('status', $this->status)->with('selectedTipo', $selectedTipo)->with('selectedStatus', $selectedStatus)->with('tipo_pessoa', $this->tipo_pessoa);
    }

    public function salvar(Request $request)
    {
        $request->validate([
            'nome_fantasia' => 'required',
            'razao_social' => 'required',
            'estado' => 'required',
            'cidade' => 'required',
            'email' => 'required',
            'tipo_pessoa' => 'required',
            'telefone' => 'required | regex:/^\(\d{2}\) \d{3}.\d{3}.\d{3}$/',
            'endereco' => 'required',
            'status' => 'required',
            'documento' => ($request['tipo_pessoa'] == 'Fisica' ? 'required|unique:clientes|regex:/^\d{3}.\d{3}.\d{3}-\d{2}$/' : 'required|unique:clientes|regex:/^\d{2}.\d{3}.\d{3}\/\d{4}-\d{2}$/'),
        ]);


        $cliente = Cliente::create($request->all());
        return redirect()->route('cliente.detalhar', $cliente->id);
    }

    public function editar($id)
    {
        $cliente = Cliente::find($id);
        return view('cliente.editar', compact('cliente'))->with('status', $this->status)->with('tipo_pessoa', $this->tipo_pessoa);
    }

    public function atualizar(Request $request, $id)
    {
        $request->validate([
            'nome_fantasia' => 'required',
            'razao_social' => 'required',
            'estado' => 'required',
            'cidade' => 'required',
            'email' => 'required',
            'tipo_pessoa' => 'required',
            'telefone' => 'required | regex:/^\(\d{2}\) \d{3}.\d{3}.\d{3}$/',
            'endereco' => 'required',
            'status' => 'required',
            'documento' => ($request['tipo_pessoa'] == 'Fisica' ? 'required|regex:/^\d{3}.\d{3}.\d{3}-\d{2}$/' : 'required|regex:/^\d{2}.\d{3}.\d{3}\/\d{4}-\d{2}$/'),
        ]);

        Cliente::find($id)->update($request->all());
        return redirect()->route('cliente.detalhar', $id);
    }

    public function detalhar($id)
    {
        $cliente = Cliente::find($id);
        $contato = Contato::where('cliente_id', $id)->get();

        return view('cliente.detalhar')->with('cliente', $cliente)->with('contato', $contato);
    }

    public function excluir($id)
    {
        Cliente::destroy($id);
        return redirect()->route('cliente.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContatoController extends Controller
{

    public $contato;

    public function _construct(Contato $contato)
    {
        $this->contato = $contato;
    }


    public function visualizarContato()
    {
        $contato = Contato::paginate(25);
        return view('contato.index', compact('contato'));
    }


    public function index()
    {
        $contato = Contato::all();
        return  view('contato.index', compact('contato'));
    }


    public function adicionar($id)
    {
        return view('contato.adicionar', ['id' => $id]);
    }

    public function salvar(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'telefone' =>  'required | regex:/^\(\d{2}\) \d{3}.\d{3}.\d{3}$/',
            'funcao' => 'required',
        ]);

        Contato::create($request->all());
        return redirect()->route('cliente.detalhar', $request->cliente_id);
    }

    public function editar($id)
    {
        $contato = Contato::find($id);
        return view('contato.editar', compact('contato'));
    }

    public function atualizar(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'telefone' =>  'required | regex:/^\(\d{2}\) \d{3}.\d{3}.\d{3}$/',
            'funcao' => 'required',
        ]);
        Contato::find($id)->update($request->all());
        $contato = Contato::find($id);
        return redirect()->route('cliente.detalhar', $contato->cliente_id);
    }


    public function excluir($id)
    {
        Contato::destroy($id);
        return redirect()->back();
    }
}

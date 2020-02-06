<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Uses Models
use App\Contato;

class ContatoController extends Controller
{
    public function index()
    {
        // Buscando todos os registros da tabela, e enviado para a view com o  compact
        $contatos = Contato::all();
        return view('contatos.index', compact('contatos'));
    }

    public function createContato(Request $request)
    {
        $create_contato = Contato::create([
            'cliente'   =>  $request['cliente'],
            'empresa'   =>  $request['empresa'],
            'email'     =>  $request['email'],
            'telefone'  =>  $request['telefone'],
            'vendedor'  =>  $request['vendedor'],
            'validade'  =>  $request['validade']
        ]);

        if($create_contato)
        {
            return redirect()->back();
        }
    }

    public function editContato($id)
    {
        // Busca o contato pelo id passado pela rota
        $contato = Contato::findOrFail($id);

        return view('contatos.edit', compact('contato'));
    }

    public function updateContato(Request $request, $id)
    {
        $contato = Contato::findOrFail($id);

        $update_contato = $contato->update([
            'cliente'   =>  $request['cliente'],
            'empresa'   =>  $request['empresa'],
            'email'     =>  $request['email'],
            'telefone'  =>  $request['telefone'],
            'vendedor'  =>  $request['vendedor'],
            'validade'  =>  $request['validade']
        ]);

        if($update_contato)
        {
            return redirect()->back();
        }
    }

    public function deleteContato($id)
    {
        $contato = Contato::findOrFail($id);

        $delete_contato = $contato->delete();

        if($delete_contato)
        {
            return redirect()->back();
        }
    }

}

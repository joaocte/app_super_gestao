<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;
class ContatoController extends Controller
{
    public function Contato(Request $request){

        // $contato = new SiteContato();
        /*1º Modo*/
        // $contato->nome = $request->input('nome');
        // $contato->email = $request->input('email');
        // $contato->telefone = $request->input('telefone');
        // $contato->motivo_contato = $request->input('motivo_contato');
        // $contato->mensagem = $request->input('mensagem');

        // $contato->save();
        /*2º Modo*/
        // $contato->fill($request->all());
        // $contato->save();
        /*3º Modo*/
        // $contato->create($request->all());

        $motivo_contatos = [
            '1' => 'Dúvidas',
            '2' => 'Elogio',
            '3' => 'Reclamacão'
        ];

        return view('site.contato', ['motivo_contatos' => $motivo_contatos]);
    }

    public function Salvar(Request $request)
    {
        $request->validate([
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required|max:2000'
        ]);
    }
}


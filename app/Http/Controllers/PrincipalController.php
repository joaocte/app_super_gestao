<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function Principal(){

        $motivo_contatos = [
            '1' => 'Dúvidas',
            '2' => 'Elogio',
            '3' => 'Reclamacão'
        ];
        return view('site.principal', ['motivo_contatos'=> $motivo_contatos]);

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;

class FornecedorController extends Controller
{
    public function Index()
    {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '0',
                'ddd' => '', //São Paulo (SP)
                'telefone' => '0000-0000'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '85', //Fortaleza (CE)
                'telefone' => '0000-0000'
            ],
            2 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '32', //Juiz de fora (MG)
                'telefone' => '0000-0000'
            ]
        ];
        /*
        condicao ? se verdade : se falso;
        condicao ? se verdade : (condicao ? se verdade : se falso);
        */
        $msg = isset($fornecedores[0]['cnpj']) ? 'CNPJ informado' : 'CNPJ não informado';
        echo $msg;
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}

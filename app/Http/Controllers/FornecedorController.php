<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;

class FornecedorController extends Controller
{
    public function Index()
    {
        $fornecedores = [
            0 => ['nome' => 'Fornecedor 1', 'status' => 'N']
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}

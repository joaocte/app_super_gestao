<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;

class FornecedorController extends Controller
{
    public function Index()
    {
        $fornecedores =['','',''];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}

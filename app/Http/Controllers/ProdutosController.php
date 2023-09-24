<?php

namespace App\Http\Controllers;

use App\Models\produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        $findProduto = produto::all();
        
        return view('pages.produtos.paginacao', compact('findProduto'));

    }
}

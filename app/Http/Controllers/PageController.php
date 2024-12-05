<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
class PageController extends Controller
{

    public function inicio()
    {
        return view('pages.inicio');
    }

    public function carrinho()
    {
        return view('pages.carrinho');
    }
    
    public function sobreNos()
    {
        return view('pages.sobre-nos'); 
    }


    public function contactos()
    {
        return view('pages.contactos');
    }
    public function produtos()
    {

        return view('products');
    }

    public function addprodutos()
    {
        $products = Product::all();
        return view('produtos.index', compact('products'));
    }
}

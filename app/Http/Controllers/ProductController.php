<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('produtos.index', compact('products')); 
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image_url' => 'nullable|string'
        ]);

        // Criação do produto
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'image_url' => $request->image_url,
        ]);

        return redirect()->route('produtos.index')->with('success', 'Produto excluído com sucesso!');
    }

    public function edit(Product $product)
    {
        return view('produtos.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        // Validação dos dados
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image_url' => 'nullable|string'
        ]);

        // Atualiza os dados do produto
        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'image_url' => $request->image_url,
        ]);

        return redirect()->route('produtos.index')->with('success', 'Produto excluído com sucesso!');
    }

    public function destroy(Product $product)
    {
        $product->delete(); // Deleta o produto

        return redirect()->route('produtos.index')->with('success', 'Produto excluído com sucesso!');
    }
}

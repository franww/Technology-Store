<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class CartController extends Controller
{
    // Adicionar produto ao carrinho
    public function add($productId, Request $request)
    {
        $product = Product::findOrFail($productId);

        // Verificar se o produto já está no carrinho
        $cartItem = Cart::where('user_id', Auth::id())->where('product_id', $productId)->first();

        if ($cartItem) {
            // Incrementa a quantidade
            $cartItem->quantity += 1;
            $cartItem->save();
        } else {
            // Adiciona um novo item ao carrinho
            Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $productId,
                'quantity' => 1,
            ]);
        }

        return redirect()->back()->with('success', 'Produto adicionado ao carrinho!');
    }

    // Listar itens do carrinho
    public function index()
    {
        $cartItems = Cart::with('product')->where('user_id', Auth::id())->get();

        return view('cart.index', compact('cartItems'));
    }
     public function update(Request $request, Cart $cartItem)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $cartItem->update([
            'quantity' => $request->quantity,
        ]);

        return redirect()->route('cart.index')->with('success', 'Quantidade atualizada com sucesso!');
    }

    // Remover item do carrinho
    public function remove(Cart $cartItem)
    {
        $cartItem->delete();

        return redirect()->route('cart.index')->with('success', 'Produto removido do carrinho!');
    }
}

<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    // Add product to cart
    public function addToCart(Request $request)
    {
        // if user is logged in use the session(user_id);
        $cart = session()->get('cart', []);
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1);
        $product = Product::findOrFail($productId);

        if ($product->is_custom) {
            $cart[] = [
                "id" => uniqid(),
                "name" => $product->name,
                "quantity" => $quantity,
                "price" => $product->price,
                "image" => $product->image,
                "jersey_name" => $request->input('jersey_name'),
                "jersey_number" => $request->input('jersey_number'),
                "is_custom" => true,
            ];
        } else {
            $cart[$productId] = $cart[$productId] ?? [
                "id" => $productId,
                "name" => $product->name,
                "quantity" => 0,
                "price" => $product->price,
                "image" => $product->image,
                "is_custom" => false,
            ];
            $cart[$productId]["quantity"] += $quantity;
        }

        session()->put('cart', $cart);

        return redirect()->route('cart.view')->with('success', 'Product added to cart successfully!');
    }


    // View the cart
    public function viewCart()
    {
        $cart = session()->get('cart', []);
        dd($cart);
        return view('cart.index', compact('cart'));
    }

    // Remove product from cart
    public function removeFromCart($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.view')->with('success', 'Product removed from cart successfully!');
    }
}

<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    private $user_id;
    public function __construct()
    {
        $this->user_id = 1;
    }
    // Add product to cart
    public function addToCart(Request $request)
    {
        try {
            $cart = [];
            $productId = $request->input('product_id');
            $quantity = $request->input('quantity', 1);
            $size = $request->input('size');

            // Assuming you have already retrieved the product from the database
            $product = Product::find($productId);
            $quantity = $request->input('quantity', 1); // Default to 1 if quantity is not provided

            if ($product->is_custom) {
                // Custom product logic
                \Cart::session($this->user_id)->add(uniqid(), $product->name, $product->price, $quantity, [
                    'image' => $product->image,
                    'product_id' => $productId,
                    'size' => $size,
                    'jersey_name' => $request->input('jersey_name'),
                    'jersey_number' => $request->input('jersey_number'),
                    'is_custom' => true
                ]);
            } else {
                // Non-custom product logic
                $cartItem = \Cart::session($this->user_id)->get($productId);
                if ($cartItem) {
                    // If the product already exists in the cart, update the quantity
                    \Cart::session($this->user_id)->update($productId, [
                        'quantity' => $quantity, // Increase quantity
                    ]);
                } else {
                    // If the product does not exist, add it to the cart
                    \Cart::session($this->user_id)->add($productId, $product->name, $product->price, $quantity, [
                        'product_id' => $productId,
                        'size' => $size,
                        'image' => $product->image,
                        'is_custom' => false,
                    ]);
                }
            }
            return response()->json(['message' => 'Product added to cart successfully!'], 200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['message' => 'Product not found'], 404);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred while adding product to cart', $e->getMessage()], 500);
        }
    }


    // View the cart
    public function viewCart()
    {
        $cart = \Cart::session($this->user_id)->getContent();
        return view('pages.cart', compact('cart'));
    }

    public function getCount()
    {
        $cart = \Cart::session($this->user_id)->getContent();
        $count = $cart->count();
        return response()->json(['count' => $count]);
    }

    // Remove product from cart
    public function removeFromCart(Request $request)
    {
        $id = $request->cartItemId;
        \Cart::session($this->user_id)->remove($id);

        return response()->json(['message' => 'Product removed from cart successfully!', "success" => true], 200);
    }

    public function emptyCart()
    {
        \Cart::session($this->user_id)->clear();
        return response()->json(['message' => 'Cart emptied successfully!'], 200);
    }

    public function update(Request $request)
    {
        $items = $request->input('items');
        foreach ($items as $item) {
            // Update cart item quantity in the session or database
            \Cart::session($this->user_id)->update($item['id'], ['quantity' => [
                'relative' => false,
                'value' => $item['quantity']
            ]]);
        }

        return response()->json(['success' => true]);
    }
}

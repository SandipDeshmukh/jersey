<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        $cart = \Cart::session(1)->getContent();
        $subtotal = 0;
        foreach ($cart as $item) {
            $product = \App\Models\Product::find($item['attributes']['product_id']);
            $subtotal += $product->price * $item['quantity'];
        }
        $taxRate = 0.15;
        $tax = $subtotal * $taxRate;
        $total = $subtotal + $tax;
        return view('pages.checkout', compact('cart', 'total', 'subtotal', 'tax'));
    }

    public function placeOrder(Request $request)
    {
        // Start a database transaction to ensure atomicity
        DB::beginTransaction();

        try {
            // Assume cart details are stored in session or passed through the request
            $cart = \Cart::session(1)->getContent();  // Replace with your cart fetching logic
            $subtotal = 0;

            // Calculate subtotal
            foreach ($cart as $item) {
                $product = \App\Models\Product::find($item['attributes']['product_id']);
                $subtotal += $product->price * $item['quantity'];
            }

            $taxRate = 0.15;  // 15% tax rate
            $tax = $subtotal * $taxRate;
            $total = $subtotal + $tax;

            // Create the order
            $order = Order::create([
                'user_id' => 1,
                'subtotal' => $subtotal,
                'tax' => $tax,
                'total' => $total,
                'status' => 'pending',
            ]);

            // Create the order items
            foreach ($cart as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $item['attributes']['product_id'],
                    'name' => $item['name'],
                    'quantity' => $item['quantity'],
                    'price' => $item['price'],
                    'is_custom' => $item['attributes']['is_custom'],
                    'jersey_name' => $item['attributes']['jersey_name'] ?? null,
                    'jersey_number' => $item['attributes']['jersey_number'] ?? null,
                ]);
            }

            \Cart::session(1)->clear();
            // Commit the transaction
            DB::commit();

            // Clear the cart
            session()->forget('cart');  // Or your cart clearing logic

            return response()->json(['message' => 'Order placed successfully', 'order_id' => $order->id], 200);

        } catch (\Exception $e) {
            // Rollback the transaction if something goes wrong
            DB::rollBack();
            return response()->json(['message' => 'Order placement failed', 'error' => $e->getMessage()], 500);
        }
    }
}

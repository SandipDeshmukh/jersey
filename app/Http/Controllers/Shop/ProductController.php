<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(Request $request)
    {
        $product = Product::where('slug', $request->product)->first();
        $estimateDate1 = Carbon::now()->add(7, 'day')->isoFormat('ddd, MMM D');
        $estimateDate2 = Carbon::now()->add(8, 'day')->isoFormat('ddd, MMM D');
        $count = 3;
        return view('pages.single-product', compact('product', 'estimateDate1', 'estimateDate2', 'count'));
    }
}

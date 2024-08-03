<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop(Request $request)
    {
        $per_page = $request->query('per_page', 10);
        $sort_by = $request->query('sort_by', 'featured');
        $products = Product::leftJoin('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.*', 'categories.name as category_name')
            ->limit($per_page)
            ->paginate($per_page);
        return view('pages.shop', compact('products', 'per_page', 'sort_by'));
    }
}

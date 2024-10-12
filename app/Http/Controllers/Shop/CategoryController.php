<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(Request $request, $category)
    {
        $per_page = $request->query('per_page', 10);
        $sort_by = $request->query('sort_by', 'featured');
        $products = Product::leftJoin('categories', 'categories.id', '=', 'products.category_id')
            ->where('categories.slug', $category)
            ->select('products.*', 'categories.name as category_name')
            ->limit($per_page)
            ->paginate($per_page);

        return view('pages.category', compact('category', 'products', 'per_page', 'sort_by'));
    }
}

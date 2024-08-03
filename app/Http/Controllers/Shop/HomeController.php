<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $sliders = Slider::where('status', 1)->get();
        $bestProducts = Product::where('status', Product::STATUSES[0])->limit(8)->get();
        $newArrival = Product::where('status', Product::STATUSES[0])->limit(8)->latest()->get();
        $topRated = Product::where('status', Product::STATUSES[0])->limit(8)->get();

        $testimonials = Testimonial::where('status', Testimonial::STATUSES['active'])->get();

        return view('pages.home', [
            'sliders' => $sliders,
            'bestProducts' => $bestProducts,
            'newArrival' => $newArrival,
            'topRated' => $topRated,
            'testimonials' => $testimonials,
        ]);
    }
}

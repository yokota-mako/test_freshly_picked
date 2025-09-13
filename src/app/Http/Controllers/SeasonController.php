<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
public function create()
    {
        return view('show');
    }
public function index()
    {
        $product_season = Product::all();
        return view('index', ['products' => $products]);
    }

}
}
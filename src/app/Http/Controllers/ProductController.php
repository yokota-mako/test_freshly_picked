<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index', ['products' => $products]);
    }
    public function store(Request $request)
    {
        $document = $request->document;
        // 画像を"storage/app/public"に保存
        $document->store('public');
    }
    public function show(string $id)
    {
        // IDに一致する商品をデータベースから取得
        // 存在しない場合は404エラーを返す
        $product = Product::findOrFail($id);

        // 'show'ビューに商品データを渡して表示
        return view('show', ['product' => $product]);
    }
}

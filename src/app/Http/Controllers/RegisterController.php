<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register');
    }
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'price' => 'required|integer|min:0|max:10000',
        //     'image' => 'required|image|mimes:png,jpeg|max:255',
        //     'season' => 'required|array',
        //     'description' => 'required|string|max:120',
        // ]);
        $imagePath = $request->file('image')->store('img', 'public');
        // $imageName = basename($imagePath);

        // Product::create([
        //     'name' => $validatedData['name'],
        //     'price' => $validatedData['price'],
        //     'img' => $imageName,
        //     'season' => json_encode($validatedData['season']),
        //     'description' => $validatedData['description'],
        // ]);
    
        $fruits = $request->only(['name', 'price', 'season', 'description']);
        $fruits['image'] = $imagePath;
       
        Product::create($fruits);
        return redirect('/');
    }
}
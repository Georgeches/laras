<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

$categories = ['shoes', 'hoodies', 't-shirts', 'pants', 'shorts'];
class ProductController extends Controller
{
    public function index(){
        global $categories;
        return view('products.index', [
            'products' => Product::latest()->filter(request(['category', 'minprice', 'maxprice', 'sort', 'search']))->get(),
            'categories' => $categories
        ]);
    }

    public function show(Product $product){
        dd($product);
        return view('products.show', [
            'product' => $product
        ]);
    }
}

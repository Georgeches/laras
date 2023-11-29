<?php

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProductController::class, 'index']);

Route::get('/all', function(){
    $categories = ['shoes', 'hoodies', 't-shirt', 'pants', 'shorts'];

    return view('products.productsPage',[
        'products' => Product::latest()->filter(request(['category', 'minprice', 'maxprice', 'sort', 'search']))->get(),
        'categories' => $categories
    ]);
});

Route::get('/products/{id}', function($id){
    $product = Product::find($id);

    return view('products.show',[
        'product' => $product
    ]);
});

Route::get('/adminpage', function(){
    if(request('collection')){
        $collection = request('collection');
        if($collection == 'products'){
            return view('admin.index',[
                'collection' => Product::latest()->get(),
                'request' => $collection
            ]);
        }
        elseif($collection == 'users'){
            return view('admin.index',[
                'collection' => User::latest()->get(),
                'request' => $collection
            ]);
        }
        elseif($collection == 'orders'){
            return view('admin.index',[
                'collection' => Order::latest()->get(),
                'request' => $collection
            ]);
        }
    }
    return view('admin.index', [
        'collection' => Product::latest()->get(),
        'request' => 'products'
    ]);
});
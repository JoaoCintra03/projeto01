<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $clients = Client::get();
        return view('products.index', [
            'products' => $clients
        ]);
    }

    public function show(int $id)
    {
        $product = Product::find($id);

        return view('product.show', [
            'product' => $product
        ]);
    }
}

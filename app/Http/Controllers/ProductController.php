<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Transaction;

class ProductController extends Controller
{
    //
    public function index(){

        $products = Product::latest()->get();
        // dd($products);
        // $cart = Transaction::where('user_id', auth()->user()->id );
        $cart = Transaction::where('user_id', auth()->user()->id );

        return view('home', ['products' => $products]);
    }

    public function show($slug){
        $product = Product::where('slug', $slug)->get();
        $similar_products = Product::latest()->take(3)->get();
        // dd($similar_products);

        return view('product', ['product' => $product, 'similars' => $similar_products]);
    }

    public function add_to_cart(Request $request){
        $transaction = $request->all();

        Transaction::create($transaction);

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan');
    }
}

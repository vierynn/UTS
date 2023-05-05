<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();

        return view('user1.product.signature')->with('products', $product);
    }
    public function index2()
    {
        $product = Product::all();

        return view('user1.product.basic')->with('products', $product);
    }
    public function index3()
    {
        $product = Product::all();

        return view('user1.product.cream')->with('products', $product);
    }
    public function index4()
    {
        $product = Product::all();

        return view('user1.product.tea')->with('products', $product);
    }
    public function index5()
    {
        $product = Product::all();

        return view('user1.product.base')->with('products', $product);
    }

    public function index6()
    {
        $product = Product::all();

        return view('user2.product.signature')->with('products', $product);
    }
    public function index7()
    {
        $product = Product::all();

        return view('user2.product.basic')->with('products', $product);
    }
    public function index8()
    {
        $product = Product::all();

        return view('user2.product.cream')->with('products', $product);
    }
    public function index9()
    {
        $product = Product::all();

        return view('user2.product.tea')->with('products', $product);
    }
    public function index10()
    {
        $product = Product::all();

        return view('user2.product.base')->with('products', $product);
    }
    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

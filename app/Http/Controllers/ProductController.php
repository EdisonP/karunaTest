<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productList = Products::all();
        return view('index ', ['products' => $productList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $timestamp = str(date('Y-m-d H:i:s'));
        $product = new Products;
        $product->name = $req->name;
        $product->price = $req->price;
        $product->details = $req->details;
        $product->published = $req->published;

        $product->save();
        return redirect('/')->with('success', 'Product has been successfully added');
    }

    public function view(Request $req)
    {
        $timestamp = str(date('Y-m-d H:i:s'));
        $product = new Products;
        $product->name = $req->name;
        $product->price = $req->price;
        $product->details = $req->details;
        $product->published = $req->published;

        echo $product;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Products::where('id', $id)->firstOrFail();
        return view('product.detailsProduct', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Products::where('id', $id)->firstOrFail();
        return view('product.editProduct', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $product = Products::find($req->id);
        $product->name = $req->name;
        $product->price = $req->price;
        $product->details = $req->details;
        $product->published = $req->published;
        $product->save();

        return redirect('/')->with('success', 'Product has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Products::findOrFail($id);
        $product->delete();

        return redirect('/')->with('success', 'Product has been successfully deleted');
    }
}

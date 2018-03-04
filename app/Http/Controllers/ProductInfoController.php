<?php

namespace App\Http\Controllers;

use App\ProductInfo;
use App\Comment;
use Illuminate\Http\Request;


class ProductInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = ProductInfo::all();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductInfo  $productInfo
     * @return \Illuminate\Http\Response
     */
    public function show(ProductInfo $productInfo)
    {
        $products = ProductInfo::all();

        $comments = Comment::all();

        return view('products.show', compact('productInfo', 'products', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductInfo  $productInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductInfo $productInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductInfo  $productInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductInfo $productInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductInfo  $productInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductInfo $productInfo)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::all();
        return [
            'data' => $data
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate(
            [
                'name' => 'required',
                'slug' => 'required',
                'price' => 'required'
            ]
        );
        $data = Product::create($request->all());
        return [
            "success"=> True,
            "errors"=> "None",
            "status_code"=> 0,
            "status_message"=> 'success',
            "message"=> "successfully created product",
            "data"=> $data
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Product::find($id);
        return [
            "data" => $data
        ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());
        return [
            "success"=> True,
            "errors"=> "None",
            "status_code"=> 0,
            "status_message"=> 'success',
            "message"=> "successfully updated product",
            "data"=> $product
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);

        return [
            "success"=> True,
            "errors"=> "None",
            "status_code"=> 0,
            "status_message"=> 'success',
            "message"=> "successfully deleted product",
        ];
    }

    /**
     * Search.
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        $product =  Product::where('name','like','%'.$name.'%')->get();
        return [
            "success"=> True,
            "errors"=> "None",
            "status_code"=> 0,
            "status_message"=> 'success',
            "message"=> $product = "[]" ?  "No Products Similar to search" :  "successfully retrieved products",
            "data"=> $product
        ];
    }
}

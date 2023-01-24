<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product/index',compact('products'));
    }

    public function create()
    {
        return view('product/create');
    }

    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect()->route('product.index');
    }

    public function show($id)
    {
        //
    }

    public function edit(Request $request)
    {

        $id = $request->id;
        $data =Product::find($id);
       return view('product/edit',compact('id','data'));
    }

    public function update(Request $request)
    {
        $id = $request->id;
        Product::find($id)->update($request->all());
        return redirect()->route('product.index');
    }

    public function destroy(Request $request)
    {
        //
        $id = $request->id;
        Product::find($id)->delete();
         return redirect()->route('product.index');
    }

     public function indexPurchase(Request $request)
    {
        $products = Product::all();
        return view('purchase/index',compact('products'));
    }

    public function buy(Request $request)
    {
        $purchase = DB::table('purchase')->insert([
         'product_id'=>$request->product_id,
         'user_id'=>auth()->user()->id,
          "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
          "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
        ]);
        return redirect()->route('product.purchase');
    }
}

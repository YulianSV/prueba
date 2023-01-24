<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\User;
use App\Models\Product;
use DB;

class InvoiceController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('invoice.index',compact('users'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {    

        $sum = DB::table('purchase')
        ->join('products','products.id','=','purchase.product_id')
        ->where('status','pending')
        ->where('user_id',$request->user_id)->sum('products.amount');
         

           $invoice =   Invoice::create([
            'user_id'=>$request->user_id,
            'total_amount'=>$sum
          ]);


         $purchase = DB::table('purchase')
        ->where('status','pending')
        ->where('user_id',$request->user_id)->update([
            'status'=>'paid',
             'invoice_id'=>$invoice->id
         ]);

       
      $products =  DB::table('purchase')
        ->join('products','products.id','=','purchase.product_id')
        ->where('status','paid')
        ->where('invoice_id',$invoice->id)
        ->where('user_id',$request->user_id)
        ->get();

       // return redirect()->route('inovoice.show');
         return view('invoice.show',[
            "invoice"=>$invoice,
            "data"=>$products,
     ]);
    }

    public function show(Request $request)
    {    

 
       
      $products =  DB::table('purchase')
        ->join('products','products.id','=','purchase.product_id')
        ->where('status','paid')
        ->where('user_id',$request->user_id)
        ->get();

       // return redirect()->route('inovoice.show');
         return view('invoice.show',[
            "data"=>$products,
     ]);
    }


    public function list()
    {
       $invoices = DB::table('purchase')
     ->join('invoices','invoices.id','purchase.invoice_id')
     ->join('users','users.id','purchase.user_id')
     ->join('products','products.id','purchase.product_id')
     ->select('invoices.id','invoices.created_at','users.email','invoices.total_amount','users.id as userId')
     ->where('status','paid')
     ->get();
        return view('invoice.list',[
            "invoices"=>$invoices,
     ]);
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

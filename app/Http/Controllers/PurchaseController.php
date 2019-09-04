<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Validator;
use DB;
use Auth;
use Illuminate\View\View;
use App\Product;
use App\Purchase;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchases = Purchase::all();

        return view('pos/purchases/list',compact('purchases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();

        return view('pos/purchases/create',compact('products'));
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
        /**
         *  Data  Validation.....
         */
        $v = Validator::make($request->all(), [
            'product_id' => 'required',
            'customer_name' => 'required',
            'product_qty' => 'required',
            'product_amount' => 'required',
        ]);

        /**
         * Check Data is Valid or Not
         */
        if ($v->fails()) {

            \Session::flash('message', 'Fail To Save  Data.Please check error messages ....... ');
            return redirect()->back()->withInput()->withErrors($v);

        }else{

            $purchase = new Purchase();
            $purchase->product_id= $request['product_id'];
            $purchase->customer_name= $request['customer_name'];
            $purchase->product_qty= $request['product_qty'];
            $purchase->product_amount= $request['product_amount'];

           // add other fields
            $purchase->save();


            \Session::flash('message', 'Data Save Successfully ....... ');

            return redirect('create/purchase');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

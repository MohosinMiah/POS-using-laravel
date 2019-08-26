<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Auth;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('pos/product/create',compact('categories'));
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

            'name' => 'required|unique:products|max:200',

            'p_category' => 'required',

            'p_r_price' => 'required',

            'p_s_price' => 'required',

            'p_qty' => 'required',

            'p_unit' => 'required',


            'p_supplier' => 'required',

            'p_code' => 'required',

            'p_weight' => 'required',

            'p_tax' => 'required',

            'p_b_method' => 'required',

            'p_type' => 'required',

            'p_note' => 'required',



        ]);



        /**
         * Check Data is Valid or Not
         */
        if ($v->fails()) {

            \Session::flash('message', 'Fail To Save  Data.Please check error messages ....... ');
            return redirect()->back()->withInput()->withErrors($v);

        }else{
           /**
         * Check File is uploaded or not
         */
        $img = $request->file('img');
        if ($img) {
        $img_name = time()."_".$img->getClientOriginalName();

        $destinationPathOne = public_path('images');
        $img->move($destinationPathOne, $img_name);
    }else{
        \Session::flash('message', 'Fail To Save  Data.Please check error messages ....... ');
    return redirect()->back()->withInput()->withErrors($v);
    }

            $product = new Product();
            $product->name= $request['name'];
            $product->category_id= $request['p_category'];
            $product->price= $request['p_r_price'];
            $product->sell_price= $request['p_s_price'];
            $product->code= $request['p_code'];
            $product->supplier_id= $request['p_supplier'];
            $product->img = $img_name;
            $product->unit= $request['p_unit'];
            $product->weight= $request['p_weight'];
            $product->quantity= $request['p_qty'];
            $product->company= $request['p_company'];
            $product->tax= $request['p_tax'];
            $product->product_type= $request['p_type'];
            $product->method= $request['p_b_method'];
            $product->note= $request['p_note'];


           // add other fields

            $product->save();


            \Session::flash('message', 'Data Save Successfully ....... ');

            return redirect('create/product');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\View\View;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categories = Category::all();
        $categories = Category::orderBy('id', 'desc')->get();
        return view('pos/category/list',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pos/category/create');
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
            'name' => 'required|unique:categories|max:100',
            'type' => 'required',
            'note' => 'required',

        ]);

        /**
         * Check Data is Valid or Not
         */
        if ($v->fails()) {

            \Session::flash('message', 'Fail To Save  Data.Please check error messages ....... ');
            return redirect()->back()->withInput()->withErrors($v);

        }else{

            $category = new Category();
            $category->name= $request['name'];
            $category->type= $request['type'];
            $category->note= $request['note'];
           // add other fields
            $category->save();


            \Session::flash('message', 'Data Save Successfully ....... ');

            return redirect('create/category');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $category = Category::find($id);
       return view('pos/category/view',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category =  Category::find($id);

        return view('pos/category/edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /**
         *  Data  Validation.....
         */
        $v = Validator::make($request->all(), [
            'name' => 'required|max:100',
            'type' => 'required',
            'note' => 'required',

        ]);

        /**
         * Check Data is Valid or Not
         */
        if ($v->fails()) {

            \Session::flash('message', 'Fail To Save  Data.Please check error messages ....... ');
            return redirect()->back()->withInput()->withErrors($v);

        }else{

            $category = Category::find($id);
            $category->name= $request['name'];
            $category->type= $request['type'];
            $category->note= $request['note'];
           // add other fields
            $category->save();


            \Session::flash('message', 'Data Update Successfully ....... ');

              return redirect()->back();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->forceDelete();
        \Session::flash('message', 'Data Delete Successfully ....... ');

        return redirect()->back();
    }
}

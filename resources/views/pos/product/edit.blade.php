@extends('pos/layout')
{{-- Title  --}}
@section('title', 'POS Software Dashbord')

@section('sidebar')
    @parent
    {{-- We can add extra side bar  --}}
    {{-- <p>This is appended to the master sidebar.</p> --}}
@endsection


@section('content')
        <div class="row">

                <div class="form-three widget-shadow">
                      {{-- {{ --ShowErrorMessage-- }} --}}
                     <div class="" style="text-align:center">
                            @if (Session::has('message'))
                            <h4 class="alert alert-info" role="alert">{!! session('message') !!}</h4>
                    @endif
                            @if ( count( $errors ) > 0 )
                                    @foreach ($errors->all() as $error)
                                <p class="alert alert-danger" >{{ $error }}</p>
                                @endforeach
                                @endif
                     </div>
                          {{-- {{ --ShowErrorMessage-- }} --}}

                    <form method="post" action="{{ route('update_product',$product->id) }}" class="form-horizontal" enctype="multipart/form-data">
                         <?php
                        //  echo Form::open(array('action' => 'CategoryController@store'));
                        echo Form::token();
                         ?>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Product Name</label>
                            <div class="col-sm-8">
                                <input type="text" name="name" value="{{ $product->name }}" class="form-control1" id="focusedinput" >
                            </div>
                            <div class="col-sm-2">
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="selector1" class="col-sm-2 control-label">Product Category</label>
                            <div class="col-sm-8"><select name="p_category" id="selector1" class="form-control1">
                                <?php

                                foreach ($categories as $category) {




                                ?>
                                <option value="{{ $category->id }}" <?php if($category->id == $product->category_id){ ?> selected <?php  } ?> >{{ $category->name }}</option>

                                <?php    } ?>
                            </select>
                        </div>
                        </div>






                        <div class="form-group">
                            <label for="txtarea1" class="col-sm-2 control-label">Actual Price</label>
                            <div class="col-sm-8">

                            <input type="number"  name="p_r_price"   value="{{ $product->price }}"  class="form-control1" value="0.00"  id="focusedinput" placeholder="Product Actual  Price  ... ">
                            </div>
                        </div>





                        <div class="form-group">
                            <label for="txtarea1" class="col-sm-2 control-label">Sell Price</label>
                            <div class="col-sm-8">

                            <input type="number"  name="p_s_price"   value="{{ $product->sell_price }}"   class="form-control1"   id="focusedinput" placeholder="Product Selling Price ... " required>
                            </div>
                        </div>







                        <div class="form-group">
                            <label for="txtarea1" class="col-sm-2 control-label">QTY</label>
                            <div class="col-sm-8">

                            <input type="number"  name="p_qty"  value="{{ $product->quantity }}"   class="form-control1"   id="focusedinput" placeholder="Product QTY" required>
                            </div>
                        </div>




                        <div class="form-group">
                            <label for="txtarea1" class="col-sm-2 control-label">Unit</label>
                            <div class="col-sm-8">

                            <input type="text"  name="p_unit"    value="{{ $product->unit }}"   class="form-control1" value="none"  id="focusedinput" placeholder="Product Unit">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="txtarea1" class="col-sm-2 control-label"> Image</label>
                            <div class="col-sm-8">

                            <input type="file"  name="img"  class="form-control1">
                            <?php  if($product->img){ ?>
                            <img src="{{ url('images') }}/{{ $product->img }}" width="100px" height="100px" alt="">
                            <?php } ?>
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="selector1" class="col-sm-2 control-label"> Supplier</label>
                            <div class="col-sm-8"><select name="p_supplier" id="selector1" class="form-control1">
                              <?php

                                foreach ($categories as $category) {

                                ?>
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                <?php   }  ?>

                            </select></div>
                        </div>


                        <div class="form-group">
                            <label for="txtarea1" class="col-sm-2 control-label">Product Code</label>
                            <div class="col-sm-8">

                            <input type="text"  name="p_code"    value="{{ $product->code }}"  class="form-control1" value="none"  id="focusedinput" placeholder="Product Code  ... ">
                            </div>
                        </div>





                        <div class="form-group">
                            <label for="txtarea1" class="col-sm-2 control-label">Weight</label>
                            <div class="col-sm-8">

                            <input type="text"  name="p_weight"   value="{{ $product->weight }}"  class="form-control1" value="none"  id="focusedinput" placeholder="Product weight ... ">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="txtarea1" class="col-sm-2 control-label">TAX</label>
                            <div class="col-sm-8">

                            <input type="number"  name="p_tax"   value="{{ $product->tax }}"  class="form-control1" value="none"  id="focusedinput" placeholder="Product TAX... ">
                            </div>
                        </div>




                        <div class="form-group">
                            <label for="txtarea1" class="col-sm-2 control-label">Buying Method</label>
                            <div class="col-sm-8">

                            <input type="text"  name="p_b_method"   value="{{ $product->method }}"  class="form-control1" value="none"  id="focusedinput" placeholder="Buying Method  ... ">
                            </div>
                        </div>







                        <div class="form-group">
                            <label for="txtarea1" class="col-sm-2 control-label"> Company</label>
                            <div class="col-sm-8">

                            <input type="text"  name="p_company"  value="{{ $product->company }}"  class="form-control1" value="none"  id="focusedinput" placeholder="Buying Method  ... ">
                            </div>
                        </div>




                        <div class="form-group">
                            <label for="txtarea1" class="col-sm-2 control-label">Product Type</label>
                            <div class="col-sm-8">

                            <input type="text"  name="p_type"   value="{{ $product->product_type }}"  class="form-control1" value="none"  id="focusedinput" placeholder="Product Type ... Ex.Solid or Liquid ">
                            </div>
                        </div>





                        <div class="form-group">
                            <label for="txtarea1" class="col-sm-2 control-label"> Note</label>
                            <div class="col-sm-8">

                            <input type="text"  name="p_note"  value="{{ $product->note }}"  class="form-control1" value="none"  id="focusedinput" placeholder="Short Note  Ex.This product I buy from USA.By Jhon Doe.At that time... ">
                            </div>
                        </div>





                                    <div class="form-group mb-n">
                                <label for="largeinput" class="col-sm-2 control-label label-input-lg"></label>

                                <div class="col-sm-8">
                                    <input type="submit" value="Update" class="form-control btn-primary" id="largeinput" >
                                </div>
                                </div>
                            </form>
                </div>
            </div>
                    <div class="clearfix"> </div>
                </div>
@endsection

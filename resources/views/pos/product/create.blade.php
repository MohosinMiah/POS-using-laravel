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

                    <form method="post" action="{{route('create_product')}}" class="form-horizontal" >
                         <?php
                        //  echo Form::open(array('action' => 'CategoryController@store'));
                        echo Form::token();
                         ?>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Product Name</label>
                            <div class="col-sm-8">
                                <input type="text" name="p_name" class="form-control1" id="focusedinput" placeholder="Product Name ... ">
                            </div>
                            <div class="col-sm-2">
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="selector1" class="col-sm-2 control-label">Product Category</label>
                            <div class="col-sm-8"><select name="p_category" id="selector1" class="form-control1">
                                <option>Lorem ipsum dolor sit amet.</option>
                                <option>Dolore, ab unde modi est!</option>
                                <option>Illum, fuga minus sit eaque.</option>
                                <option>Consequatur ducimus maiores voluptatum minima.</option>
                            </select></div>
                        </div>






                        <div class="form-group">
                            <label for="txtarea1" class="col-sm-2 control-label">Actual Price</label>
                            <div class="col-sm-8">

                            <input type="number"  name="p_r_price"  class="form-control1" value="0.00"  id="focusedinput" placeholder="Product Actual  Price  ... ">
                            </div>
                        </div>





                        <div class="form-group">
                            <label for="txtarea1" class="col-sm-2 control-label">Sell Price</label>
                            <div class="col-sm-8">

                            <input type="number"  name="p_s_price"  class="form-control1"   id="focusedinput" placeholder="Product Selling Price ... " required>
                            </div>
                        </div>







                        <div class="form-group">
                            <label for="txtarea1" class="col-sm-2 control-label">QTY</label>
                            <div class="col-sm-8">

                            <input type="number"  name="p_qty"  class="form-control1"   id="focusedinput" placeholder="Product QTY" required>
                            </div>
                        </div>




                        <div class="form-group">
                            <label for="txtarea1" class="col-sm-2 control-label">Unit</label>
                            <div class="col-sm-8">

                            <input type="text"  name="p_unit"  class="form-control1" value="none"  id="focusedinput" placeholder="Product Unit">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="txtarea1" class="col-sm-2 control-label"> Image</label>
                            <div class="col-sm-8">

                            <input type="file"  name="p_image"  class="form-control1">
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="selector1" class="col-sm-2 control-label"> Supplier</label>
                            <div class="col-sm-8"><select name="p_supplier" id="selector1" class="form-control1">
                                <option>Lorem ipsum dolor sit amet.</option>
                                <option>Dolore, ab unde modi est!</option>
                                <option>Illum, fuga minus sit eaque.</option>
                                <option>Consequatur ducimus maiores voluptatum minima.</option>
                            </select></div>
                        </div>


                        <div class="form-group">
                            <label for="txtarea1" class="col-sm-2 control-label">Product Code</label>
                            <div class="col-sm-8">

                            <input type="text"  name="p_code"  class="form-control1" value="none"  id="focusedinput" placeholder="Product Code  ... ">
                            </div>
                        </div>





                        <div class="form-group">
                            <label for="txtarea1" class="col-sm-2 control-label">Weight</label>
                            <div class="col-sm-8">

                            <input type="text"  name="p_weight"  class="form-control1" value="none"  id="focusedinput" placeholder="Product weight ... ">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="txtarea1" class="col-sm-2 control-label">TAX</label>
                            <div class="col-sm-8">

                            <input type="number"  name="p_tax"  class="form-control1" value="none"  id="focusedinput" placeholder="Product TAX... ">
                            </div>
                        </div>




                        <div class="form-group">
                            <label for="txtarea1" class="col-sm-2 control-label">Buying Method</label>
                            <div class="col-sm-8">

                            <input type="text"  name="p_b_method"  class="form-control1" value="none"  id="focusedinput" placeholder="Buying Method  ... ">
                            </div>
                        </div>




                        <div class="form-group">
                            <label for="txtarea1" class="col-sm-2 control-label">Product Type</label>
                            <div class="col-sm-8">

                            <input type="text"  name="p_type"  class="form-control1" value="none"  id="focusedinput" placeholder="Product Type ... Ex.Solid or Liquid ">
                            </div>
                        </div>





                        <div class="form-group">
                            <label for="txtarea1" class="col-sm-2 control-label"> Note</label>
                            <div class="col-sm-8">

                            <input type="text"  name="p_note"  class="form-control1" value="none"  id="focusedinput" placeholder="Short Note  Ex.This product I buy from USA.By Jhon Doe.At that time... ">
                            </div>
                        </div>





                                    <div class="form-group mb-n">
                                <label for="largeinput" class="col-sm-2 control-label label-input-lg"></label>

                                <div class="col-sm-8">
                                    <input type="submit" value="Submit" class="form-control btn-primary" id="largeinput" >
                                </div>
                                </div>
                            </form>
                </div>
            </div>
                    <div class="clearfix"> </div>
                </div>
@endsection

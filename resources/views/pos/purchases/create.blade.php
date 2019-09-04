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

                    <form method="post" action="{{route('create_purchase')}}" class="form-horizontal" >

                         <?php
                        //  echo Form::open(array('action' => 'CategoryController@store'));
                        echo Form::token();
                         ?>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Customer Name</label>
                            <div class="col-sm-8">
                                <input type="text" name="customer_name" class="form-control1" id="focusedinput" placeholder="Category Name ... ">
                            </div>
                            <div class="col-sm-2">
                            </div>
                        </div>





                        <div class="form-group">
                                <label for="selector1" class="col-sm-2 control-label">Select Product</label>
                                <div id="myDropdown" class="col-sm-8">

                                    <select name="product_id" id="selector1" class="form-control1">
                                    <?php

                                    foreach ($products as $product) {

                                    ?>
                                    <option value="{{ $product->id }}">{{ $product->name }} -- {{ $product->code }}</option>
                                    <?php   }  ?>
                                </select>
                            </div>
                            </div>


                            <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label">Amount</label>
                                    <div class="col-sm-8">
                                        <input type="number" name="product_amount" class="form-control1" id="focusedinput" placeholder="Ex. 2000">
                                    </div>
                                    <div class="col-sm-2">
                                    </div>
                                </div>




                                <div class="form-group">
                                        <label for="focusedinput" class="col-sm-2 control-label">Product QTY</label>
                                        <div class="col-sm-8">
                                            <input type="number" name="product_qty" class="form-control1" id="focusedinput" placeholder="Ex. 4">
                                        </div>
                                        <div class="col-sm-2">
                                        </div>
                                    </div>



                            <div class="form-group">
                                    <label for="txtarea1" class="col-sm-2 control-label">Phone</label>
                                    <div class="col-sm-8">

                                    <input type="text"  name="phone"  class="form-control1" value="none"  id="focusedinput" placeholder="Short Note  ... ">
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

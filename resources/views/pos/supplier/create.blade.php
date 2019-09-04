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

                    <form method="post" action="{{route('create_supplier')}}" class="form-horizontal" >

                         <?php
                        //  echo Form::open(array('action' => 'CategoryController@store'));
                        echo Form::token();
                         ?>

                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">First Name</label>
                            <div class="col-sm-8">
                                <input type="text" name="first_name" class="form-control1" id="focusedinput" placeholder="First Name ... ">
                            </div>
                            <div class="col-sm-2">
                            </div>
                        </div>




                        <div class="form-group">
                                <label for="txtarea1" class="col-sm-2 control-label">Last Name</label>
                                <div class="col-sm-8">

                                <input type="text"  name="last_name"  class="form-control1"  id="focusedinput" placeholder="Last Name ">
                                </div>
                            </div>






                            <div class="form-group">
                                    <label for="txtarea1" class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-8">

                                    <input type="text"  name="address"  class="form-control1"  id="focusedinput" placeholder="Address ">
                                    </div>
                                </div>






                                <div class="form-group">
                                        <label for="txtarea1" class="col-sm-2 control-label">Phone</label>
                                        <div class="col-sm-8">

                                        <input type="text"  name="phone"  class="form-control1"  id="focusedinput" placeholder="Phone ">
                                        </div>
                                    </div>






                                    <div class="form-group">
                                            <label for="txtarea1" class="col-sm-2 control-label">Phone Two</label>
                                            <div class="col-sm-8">

                                            <input type="text"  name="phone_two"  class="form-control1"  id="focusedinput" placeholder="Phone Two ">
                                            </div>
                                        </div>



                                        <div class="form-group">
                                                <label for="txtarea1" class="col-sm-2 control-label">Email</label>
                                                <div class="col-sm-8">

                                                <input type="email"  name="email"  class="form-control1"  id="focusedinput" placeholder="Email ">
                                                </div>
                                            </div>



                                            <div class="form-group">
                                                    <label for="txtarea1" class="col-sm-2 control-label">Note</label>
                                                    <div class="col-sm-8">

                                                    <input type="text"  name="note"  class="form-control1"  id="focusedinput" placeholder="Note ">
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

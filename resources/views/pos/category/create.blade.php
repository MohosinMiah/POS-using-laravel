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
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Category Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" id="focusedinput" placeholder="Category Name ... ">
                            </div>
                            <div class="col-sm-2">
                            </div>
                        </div>




                        <div class="form-group">
                            <label for="txtarea1" class="col-sm-2 control-label">Category Type</label>
                            <div class="col-sm-8">

                            <input type="text" class="form-control1" id="focusedinput" placeholder="Category Type  ... ">
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

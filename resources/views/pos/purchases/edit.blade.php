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

                               {{-- For Update Category Need To Pass Id  with route --}}
                    <form method="post" action="{{route('update_category',$category->id)}}" class="form-horizontal" enctype="multipart/form-data" >
                         <?php
                        //  echo Form::open(array('action' => 'CategoryController@store'));
                        echo Form::token();
                         ?>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Category Name</label>
                            <div class="col-sm-8">
                            <input type="text" name="name" value="{{ $category->name }}" class="form-control1" id="focusedinput" placeholder="Category Name ... " required>
                            </div>
                            <div class="col-sm-2">
                            </div>
                        </div>




                        <div class="form-group">
                                <label for="txtarea1" class="col-sm-2 control-label">Category Type</label>
                                <div class="col-sm-8">

                                <input type="text"  name="type"  class="form-control1" value="{{ $category->type }}"  id="focusedinput" placeholder="Category Type  ... "  required >
                                </div>
                            </div>







                            <div class="form-group">
                                    <label for="txtarea1" class="col-sm-2 control-label">Category Note</label>
                                    <div class="col-sm-8">

                                    <input type="text"  name="note"  class="form-control1" value="{{ $category->note }}"  id="focusedinput" placeholder="Short Note  ... " required>
                                    </div>
                                </div>



                                {{-- <div class="form-group">
                                        <label for="txtarea1" class="col-sm-2 control-label">Category Image</label>
                                        <div class="col-sm-8">

                                        <input type="file"  name="image"  class="form-control1">
                                        </div>
                                    </div> --}}



                                    <div class="form-group mb-n">
                                <label for="largeinput" class="col-sm-2 control-label label-input-lg"></label>

                                <div class="col-sm-8">
                                    <input type="submit" onclick="return confirm('Are You Sure To Update')" value="Update" class="form-control btn-primary" id="largeinput" >
                                </div>
                                </div>
                            </form>
                </div>
            </div>
                    <div class="clearfix"> </div>
                </div>
@endsection

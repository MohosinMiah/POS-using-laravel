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

                               {{-- For Update Category Need To Pass Id  with route --}}
                    <form class="form-horizontal"  >

                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Category Name</label>
                            <div class="col-sm-8">
                            <input type="text" name="name" value="{{ $category->name }}" class="form-control1" id="focusedinput" placeholder="Category Name ... " readonly>
                            </div>
                            <div class="col-sm-2">
                            </div>
                        </div>




                        <div class="form-group">
                                <label for="txtarea1" class="col-sm-2 control-label">Category Type</label>
                                <div class="col-sm-8">

                                <input type="text"  name="type"  class="form-control1" value="{{ $category->type }}"  id="focusedinput" placeholder="Category Type  ... "  readonly >
                                </div>
                            </div>







                            <div class="form-group">
                                    <label for="txtarea1" class="col-sm-2 control-label">Category Note</label>
                                    <div class="col-sm-8">

                                    <input type="text"  name="note"  class="form-control1" value="{{ $category->note }}"  id="focusedinput" placeholder="Short Note  ... " readonly>
                                    </div>
                                </div>



                                <div class="form-group">
                                        <label for="txtarea1" class="col-sm-2 control-label">Category Image</label>
                                        <div class="col-sm-8">

                                        <input type="file"  name="image"  class="form-control1">
                                        </div>
                                    </div>



                                    <div class="form-group mb-n">
                                <label for="largeinput" class="col-sm-2 control-label label-input-lg"></label>

                                <div class="col-sm-8">
                                    <a href="{{ route('category_index') }}" class="btn btn-primary">Back To List</a>
                                </div>
                                </div>
                            </form>
                </div>
            </div>
                    <div class="clearfix"> </div>
                </div>
@endsection

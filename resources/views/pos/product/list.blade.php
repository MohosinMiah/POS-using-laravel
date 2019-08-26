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
                <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Note</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
              <?php

            foreach ($categories as $category) {
            ?>
                            <tr>
                                <td>{{ $category->id  }}</td>
                                <td>{{ $category->name  }}</td>
                                <td>{{ $category->type  }}</td>
                                <td>{{ $category->note  }}</td>
                                <td>{{ $category->created_at }}</td>
                                <td>{{ $category->updated_at }}</td>
                                <td>
                                        <a href="{{route('edit_category',$category->id)}}" title="EDIT"><i class='glyphicon glyphicon-edit' style='font-size:24px'></i></a>
                                        <a href="{{ route('show_category',$category->id) }}" title="VIEW"><i class="glyphicon glyphicon-search" style="font-size:24px"></i> </a>
                                        <a href="{{ route('destroy_category',$category->id) }}" title="DELETE" onclick="return confirm('Are You Sure To Delete')"><i class='glyphicon glyphicon-trash' style='font-size:24px'></i></a>
                                    </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        <tfoot>
                        <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Note</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>ACTION</th>

                            </tr>
                        </tfoot>
                    </table>
                    <div class="clearfix"> </div>
                </div>
                <script type="text/javascript" charset="utf8">
                $(document).ready(function() {
                    $('#example').DataTable()
                } )
                </script>
@endsection

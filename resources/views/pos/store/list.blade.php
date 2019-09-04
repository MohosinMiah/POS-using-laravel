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
                                <th>Pro. ID</th>
                                <th>Customer Name</th>
                                <th> Product Name</th>
                                <th>Available Quantity</th>
                                <th>Image</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
              <?php

            foreach ($purchases as $purchase) {

            ?>
                            <tr>
                                <td>{{  $purchase->product_id }}</td>

                                <td>{{ $purchase->customer_name  }}</td>

                                <td>{{ $purchase->name  }}</td>

                                <td>{{ $purchase->total_qty }}</td>



                                <td><img src="{{ url('images') }}/{{  $purchase->img }}" width="100px" height="100px" alt=""></td>
                                <td>
                                        <a href="{{route('edit_purchase',$purchase->id)}}" title="EDIT"><i class='glyphicon glyphicon-edit' style='font-size:24px'></i></a>
                                        <a href="{{ route('show_purchase',$purchase->id) }}" title="VIEW"><i class="glyphicon glyphicon-search" style="font-size:24px"></i> </a>
                                        <a href="{{ route('destroy_purchase',$purchase->id) }}" title="DELETE" onclick="return confirm('Are You Sure To Delete')"><i class='glyphicon glyphicon-trash' style='font-size:24px'></i></a>
                                    </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Pro. ID</th>
                            <th>Customer Name</th>
                            <th> Product Name</th>
                            <th>Available Quantity</th>
                            <th>Image</th>
                            <th>ACTION</th>

                            </tr>
                        </tfoot>
                    </table>
                    <div class="clearfix"> </div>
                </div>
                <script type="text/javascript" charset="utf8">
                $(document).ready(function() {
                    $('#example').DataTable()
                } );
                </script>
@endsection

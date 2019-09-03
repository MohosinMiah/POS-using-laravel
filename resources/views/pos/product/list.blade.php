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
                                <th>Category</th>
                                <th>Sell Price</th>
                                <th>Quantity</th>
                                <th>Image</th>
                                <th>Unight</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
              <?php

            foreach ($products as $product) {
            ?>
                            <tr>
                                <td>{{ $product->id  }}</td>
                                <td>{{ $product->name  }}</td>
                                <td>
                                    {{ $product->category['name'] }}

                                </td>
                                <td>{{ $product->sell_price  }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td><img src="{{ url('images') }}/{{ $product->img }}" width="100px" height="100px" alt=""></td>
                                <td>{{ $product->unit }}</td>
                                <td>
                                        <a href="{{route('edit_product',$product->id)}}" title="EDIT"><i class='glyphicon glyphicon-edit' style='font-size:24px'></i></a>
                                        <a href="{{ route('show_product',$product->id) }}" title="VIEW"><i class="glyphicon glyphicon-search" style="font-size:24px"></i> </a>
                                        <a href="{{ route('destroy_product',$product->id) }}" title="DELETE" onclick="return confirm('Are You Sure To Delete')"><i class='glyphicon glyphicon-trash' style='font-size:24px'></i></a>
                                    </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Sell Price</th>
                            <th>Quantity</th>
                            <th>Image</th>
                            <th>Unight</th>
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

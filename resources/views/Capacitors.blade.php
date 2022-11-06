



@extends('layout')
@section('title')
Tested
@endsection
@section('data')
<body id="page-top">


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3">Products Details</h1>
               
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-success">Testing Details</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                
                                        </tr>
                                    </thead>
                                    <th>Product_id</th>
<th>Product_name</th>
<th>Product_Price</th>
<th>Product_image</th>
<th>Product_category</th>
<th>delete_product</th>
<th>Update_Product</th>
                                    <tbody>
                                    </tr>
@foreach( $product as $u)
<tr>
<td>{{$u->Product_id}}</td>
<td>{{$u->name}}</td>
<td>{{$u->Price}}</td>
<td><img src="./images/{{$u->image}}" width="50px" height="50px" alt=""></td>

<td>{{$u->Category}}</td>
<td><center><a href="delete/{{$u->Product_id}}" class="a"><i class="fa-solid fa-trash-can"></i>&nbsp;Delete</center></td>
<td><center><a href="{{Url('/update'.$u->Product_id)}}" class="a1"><i class="fa-regular fa-pen-to-square"></i>&nbsp;Update</center></td>

@endforeach


</tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

      
            <!-- End of Footer -->
@endsection
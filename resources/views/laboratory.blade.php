
@extends('layout')
@section('title')
Tested
@endsection
@section('data')
<body id="page-top">


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3">Testing Products Details</h1>
               
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-success">Testing Details</h6>
                        </div>
                        <div class="card-body">
                        <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                     <thead>
                                        <tr>
                                            <th>Testing_id</th>
                                            <th>Tested by</th>
                                            <th>Product_name</th>
                                            <th>image</th>
                                            <th>Update_time</th>
                                            
                                            <th>Category</th>
                                            <th>Status</th>
                                           
                                           
                                            <th>Delete</th>
                                            <th>Update</th>
                                        </tr>
                                    </thead>
                               
                                    <tbody>
                                    @foreach($view as $v)

<tr>

<td>{{$v->Testing_id}}</td>
<td>{{$v->tester_name}}</td>

<td>{{$v->Product_name}}</td>
<td><img src="../images/{{$v->image}}" width="50px" alt=""></td>
<td>{{$v->updated_at}}</td>

<td>{{$v->Product_category}}</td>
<td >{{$v->Product_status}}</td>
<td><center><a href="deleted/{{$v->Product_id}}" class="a"><i class="bi bi-trash3-fill"></i>Delete</a></center>
<td><center><a href="{{Url('/test'.$v->Product_id)}}" class="a1"><i class="fa-regular fa-pen-to-square"></i>&nbsp;Update</center></td>


</div> </td>


</tr>
@endforeach
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

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
                            <h6 class="m-0 font-weight-bold text-success">Users Details</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                
                                        </tr>
                                    </thead>
                                    <th>User_id</th>
<th>User_name</th>
<th>User_email</th>
<th>User_gender</th>
<th>User_country</th>
<th>User_age</th>
<th>Delete_User</th>
                                    <tbody>
                                    </tr>
                                    @foreach( $users as $PP)
<tr>
<td>{{$PP->id}}</td>
<td>{{$PP->user_name}}</td>
<td>{{$PP->email}}</td>
<td>{{$PP->gender}}</td>
<td>{{$PP->Country}}</td>
    <td>{{$PP->age}}</td>
<td><center><a href="delete/{{$PP->id}}" class="a"><i class="bi bi-trash3-fill"></i></center></td>


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





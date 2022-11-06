



@extends('layout')
@section('title')
Tested
@endsection
@section('data')
<body id="page-top">


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3">Messages Details</h1>
               
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
                                    
<th>First_name</th>
<th>Second_name</th>
<th>Email</th>
<th>Message</th>
<th>Delete</th>
                                    <tbody>
                                    </tr>
@foreach( $get as $u)
<tr>
<td>{{$u->first_name}}</td>
<td>{{$u->last_name}}</td>
<td>{{$u->email}}</td>

<td>{{$u->message}}</td>
<td><center><a href="removed/{{$u->id}}" class="a"><i class="fa-solid fa-trash-can"></i>&nbsp;Delete</center></td>

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
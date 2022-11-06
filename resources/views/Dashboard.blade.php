@extends('layout')
@section('title')

Laboratory
@endsection
@section('data')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Products</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$count}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4  col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                              Users</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$users}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                       
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-4  col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Tested Products</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$tested}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header bg-warning py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-light">Products Overview</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Products:</div>
                                            <a class="dropdown-item" href="#">Gears</a>
                                            <a class="dropdown-item" href="#">Fuses</a>
                                            <a class="dropdown-item" href="#">Capacitors</a>
                                            <a class="dropdown-item" href="#">Switches</a>
                                          
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area bg1">

                                    <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Product_id</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Update_time</th>
                                            <th>Image</th>
                                           
                                           
                                            <th>Delete</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                               
                                    <tbody>


                                    @foreach( $image as $u)
<tr>
<td>{{$u->Product_id}}</td>
<td>{{$u->name}}</td>
<td>{{$u->Price}}</td>
<td>{{$u->updated_at}}</td>
<td><img src="./images/{{$u->image}}" width="50px" height="50px" alt=""></td>

<td><a href="delete/{{$u->Product_id}}" class="a"><i class="bi bi-trash3-fill"></i></td>

<td>{{$u->Category}}</td></tr>
@endforeach
</tbody>
                                </table>
                            </div>            </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header bg-success py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-light ">Product Managment</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Laboratory:</div>
                                            <a class="dropdown-item" href="#">Visit Products</a>
                                            <a class="dropdown-item" href="#">Visit lab-tests</a>
                                        
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="cart">
                                    
<br><br>

                                           <h2>Laboratory</h2>
                                           <p>Through here you can add  products  click the buttons below to perform your action.</p>


<br>

                                         <div class="row">


                                         <div class="col-md-12 col-6">


<!-- Button trigger modal -->
<center><button type="button " data-bs-toggle="modal" class="dashbtn" data-bs-target="#staticBackdrop">
Add Products
</button></center>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Products</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<form action="/inserted" method="POST" enctype="multipart/form-data" >
@csrf
<input type="file"class="form-control" name="image">
<label for="Product" >Product Name</label>
<input type="text" class="form-control" name="Product" placeholder="Product Name..">
<label for="Price">Price</label>
<input type="text"class="form-control" placeholder="Enter Price.." name="Price">
<label for="category">categories</label>
<select  class="form-control" name="category" >
<option value="volvo" >Select Category..</option>
  
  <option value="Capacitors" >Capacitors</option>
  <option value="Switches">Switches</option>
  <option value="Gears">Gears</option>
  <option value="Fuses">Fuses</option>
</select>
      </div>
      <div class="modal-footer">
        <button type="button" data-bs-dismiss="modal" class="dashbtn1">Close</button>
        <button type="submit" class="dashbtn" >Add</button>
      </div>
      </form>
    </div>
  </div>
</div>


</div>


<!-- testing -->






                                         </div>
                                         </div>




                             
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                  
                            <!-- Color System -->
                
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

          @endsection
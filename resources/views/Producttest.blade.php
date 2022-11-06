@extends('layout')
@section('title')
Testing
@endsection


@section('data')


<section class="register">

<div class="container">



<div class="row">


<div class="col-md-12 ">
<h1>Test Products</h1>

<form method="POST" action="/TestUpdate{{$cd[0]->Product_id}}" enctype="multipart/form-data">


@csrf
<div class="row">

<div class="col-md-12 ">
    
  
<div class="upload">
<img src="../images/camera.png"alt="">
<div class="round">
<input type="file" name="image" value="../images/{{$cd[0]->image}}">
<i class="fa fa-camera" style="color:white;cursor:pointer;"></i><br><br>



</div>
</div>





    </div>

<div class="col-md-12">
    
<label for="user" >Enter Product Name</label>
<input type="text" value="{{$cd[0]->Product_name}}" name="productname"  placeholder="Your Product Name..">
</div>

<div class="col-md-12">
<label for="text">Enter Your Name</label>

<input type="text" name="testername" value="{{$cd[0]->tester_name}}"  Placeholder="create Your Name..">



</div>




<div class="col-md-6">


<label for="Category">Select Category</label>



<select  name="category" >
 
<option value="Capacitors">Capacitors</option>

<option value="Gears">Gears</option>
<option value="Switches">Switches</option>
<option value="Fuses">Fuses</option>
</select>
</div>



<div class="col-md-6">


<label for="Status">Status</label>
<select name="status" id=""type="text" name="status" >
    <option value="{{$cd[0]->Product_status}}">Select Status</option>
<option value="Analysing">Analysing</option>

<option value="Tested">Tested</option>
<option value="Re-testing">Re-testing</option>

</select>


</div>





<div class="col-md-12">




<button type="submit" class="">Update Test</button>
</div>

</div>




















</form>





</div>



</div>

</div>


</section>

<hr>
@endsection
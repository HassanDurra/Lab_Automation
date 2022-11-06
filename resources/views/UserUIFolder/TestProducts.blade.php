@extends('UserUIFolder.weblayout')
@section('title')
Testing
@endsection


@section('items')


<section class="register">

<div class="container">



<div class="row">


<br><div class="col-md-6"><img src="../images/cb1.jpg" class="img" width="100%" alt=""></div>



<div class="col-md-6 ">
<h1>Send For Testing</h1>

<form method="POST" action="/insert{{$cd[0]->Product_id}}" enctype="multipart/form-data">


@csrf
<div class="row">

<div class="col-md-12 ">
    
  
<!-- <input type="file"  name="image" value="{{$cd[0]->image}}"> -->
<center><img src="../images/{{$cd[0]->image}}" width='180px' style="box-shadow:0 0 20px rgba(128, 128, 128, 0.267);background:transparent;  padding:15px;margin-bottom:15px;border:1px solid green;border-radius:4px;" /></center> 
<input type="hidden" name="image" value="{{$cd[0]->image}}">








    </div>

<div class="col-md-12">
    
<label for="user" >Enter Product Name</label>
<input type="text" value="{{$cd[0]->name}}" name="productname"  placeholder="Your Product Name..">
</div>

<div class="col-md-12">
<label for="text">Enter Your Name</label>

<input type="text" name="testername" value="{{$cd[0]->tester_name}}"  Placeholder="create Your Name..">



</div>




<div class="col-md-6">


<label for="Category">Select Category</label>



<select  name="category" >
 <option value="">Select Category</option>
<option value="Capacitors">Capacitors</option>

<option value="Gears">Gears</option>
<option value="Switches">Switches</option>
<option value="Fuses">Fuses</option>
</select>
</div>


<div class="col-md-6">


<label for="Status">Status</label>
<select name="status" id="">
    <option value="">Select Status</option>
<option value="Analysing">Analysing</option>

<option value="Tested">Tested</option>
<option value="Re-testing">Re-testing</option>

</select>

</div>





<div class="col-md-12">




<button type="submit" class="">Send For Testing</button>
</div>

</div>




















</form>





</div>



</div>

</div>


</section>

<hr>
@endsection
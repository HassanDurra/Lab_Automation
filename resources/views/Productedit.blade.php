@extends('layout')
@section('title')
Update Product
@endsection


@section('data')


<section class="register">

<div class="container">

    <center><h1>Update Products</h1></center>
    
<div class="row">


<div class="col-md-12 ">


<form method="post" action="/ProductUpdate{{$cd[0]->Product_id}}" enctype="multipart/form-data">


@csrf
<div class="row">

<div class="col-md-12 ">
    
  
<input class="form-control" type="image" name="image" value="{{$cd[0]->image}}">
<br><br>



</div>
</div>





    </div>

<div class="col-md-12">
    
<label for="user" >Enter Product Name</label>
<input type="text" value="{{$cd[0]->name}}" name="name"  placeholder="Your Product Name..">
</div>

<div class="col-md-12">
<label for="text">Price</label>

<input type="text" name="price" value="{{$cd[0]->Price}}"  Placeholder="create Your Name..">



</div>




<div class="col-md-12">
    <label for="category">Category</label>
<input type="text " name="category" value="{{$cd[0]->Category}}">

</div>








<div class="col-md-12">




<button type="submit" class="">Update Product</button>
</div>

</div>




















</form>





</div>



</div>

</div>


</section>

<hr>
@endsection
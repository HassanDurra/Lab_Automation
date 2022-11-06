@extends('UserUIFolder.weblayout')
@section('title')

Products

@endsection

@section('items')
<section class="Productspage">

<div class="container">
<center> <h1>Products</h1></center><hr><br><br>
<div class="row">
@foreach($data as $p)

<div class="col-md-3">


<div class="card">


<img src="../images/{{$p->image}}" alt="">
<div class="card-body">

<h3>{{$p->name}} </h3>
<div class="row">
  <div class="col-md-12">
    <p class="cp" style="color:grey;"><b style="color:red">Category :</b>&nbsp;{{$p->Category}}</p>
  </div>
<div class="col-md-12">
  <p class="sp"style="color:grey;"><b style="color:red">Price :</b>&nbsp;{{$p->Price}}</p>
</div>
</div>

</div>
<a href="{{Url('/ProductTesting'.$p->Product_id)}}" class="a4">Send For testing</a>





</div>





</div>
@endforeach


</div>


</div>

</section> 

@endsection
@extends('UserUIFolder.weblayout')     
@section('title')
Products

@endsection



@section('items')
<section class="Productspage">
<center> <h1>Products</h1></center><br>
<ul class="nav nav-tabs justify-content-center " id="myTab" role="tablist">
  <li class="nav-item ">
    <a class="nav-link text-success active" id="home-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">All</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-success" id="profile-tab" data-toggle="tab" href="#capacitors" role="tab" aria-controls="capacitors" aria-selected="false">Capacitors</a>
  </li>

  
  <li class="nav-item">
    <a class="nav-link text-success" id="profile-tab" data-toggle="tab" href="#switches" role="tab" aria-controls="switches" aria-selected="false">Switches</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link text-success" id="profile-tab" data-toggle="tab" href="#gears" role="tab" aria-controls="gears" aria-selected="false">Gears</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link text-success" id="profile-tab" data-toggle="tab" href="#fuses" role="tab" aria-controls="fuses" aria-selected="false">Fuses</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link text-success" id="profile-tab" data-toggle="tab" href="#tested" role="tab" aria-controls="tested" aria-selected="false">Tested Products</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link text-success" id="profile-tab" data-toggle="tab" href="#analysing" role="tab" aria-controls="inprogress" aria-selected="false">Analysing</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link text-success" id="profile-tab" data-toggle="tab" href="#retesting" role="tab" aria-controls="tested" aria-selected="false">Re-testing</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  
  <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab"><br>

<section class="Productspage">

<div class="container">
<div class="row">
@foreach($products as $p)

<div class="col-md-3">


<div class="card " style="margin:10px;">


<img src="{{asset('../images/'.$p->image)}}" alt="">
<div class="card-body">

<h3 class="v" style="font-size:16px;">{{$p->name}} </h3>
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
<center><span class="pagination" style="padding:10px;">{{$products->links()}}</span></center>

</div>


</div>

</section>


  </div>
  <div class="tab-pane fade " id="capacitors" role="tabpanel" aria-labelledby="capicators-tab">
  <section class="Productspage">

<div class="container">
<div class="row">
@foreach($Cap as $p)

<div class="col-md-3">


<div class="card">


<img src="../images/{{$p->image}}" alt="">
<div class="card-body">

<h3 class="v" style="font-size:16px;">{{$p->name}} </h3>
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

<center><span class="pagination" style="padding:10px;">{{$Cap->links()}}</span></center>
</div>


</div>

</section>

  </div>

  <div class="tab-pane fade show" id="gears" role="tabpanel" aria-labelledby="gears-tab">
  <section class="Productspage">

<div class="container">
<div class="row">
@foreach($Gear as $p)

<div class="col-md-3">


<div class="card">


<img src="../images/{{$p->image}}" alt="">
<div class="card-body">
<h3 class="v" style="font-size:16px;">{{$p->name}} </h3>
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

<center><span class="pagination" style="padding:10px;">{{$Gear->links()}}</span></center>
</div>


</div>

</section>
</div>

  <div class="tab-pane fade" id="fuses" role="tabpanel" aria-labelledby="fuses-tab">

<section class="Productspage">

<div class="container">
<div class="row">
@foreach($Fuse as $p)

<div class="col-md-3">


<div class="card">


<img src="../images/{{$p->image}}" alt="">
<div class="card-body">

<h3 class="v" style="font-size:16px;">{{$p->name}} </h3>
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

<center><span class="pagination" style="padding:10px;">{{$Fuse->links()}}</span></center>
</div>


</div>

</section> 




  </div>
  <div class="tab-pane fade" id="switches" role="tabpanel" aria-labelledby="switches-tab">
  <section class="Productspage">

<div class="container">
<div class="row">
@foreach($Switch as $p)

<div class="col-md-3">


<div class="card">


<img src="../images/{{$p->image}}" alt="">
<div class="card-body">

<h3 class="v" style="font-size:16px;">{{$p->name}} </h3>
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

<center><span class="pagination" style="padding:10px;">{{$Switch->links()}}</span></center>
</div>


</div>

</section>


  </div>
  <div class="tab-pane fade" id="analysing" role="tabpanel" aria-labelledby="inprogress-tab">
  <section class="Productspage">

<div class="container">
<div class="row">
@foreach($testing as $p)

<div class="col-md-3">


<div class="card">


<img src="../images/{{$p->image}}" alt="">
<div class="card-body">
<h3 class="v" style="font-size:12px;">{{$p->Product_name}} </h3>
<div class="row">
<div class="col-md-12">
    <p class="cp" style="color:grey;"><b style="color:red">Category :</b>&nbsp;{{$p->Product_category}}</p>
  </div>
<div class="col-md-12">
  <p class="sp"style="color:grey;"><b style="color:red">Status :</b>&nbsp;{{$p->Product_status}}</p>
</div>
<div class="col-md-12">
  <p class="sp"style="color:grey; font-size:12px;"><b style="color:red">Tested by :</b>&nbsp;{{$p->tester_name}}</p>
</div>
</div>

</div>





</div>





</div>
@endforeach
<center><span class="pagination" style="padding:10px;">{{$testing->links()}}</span></center>

</div>


</div>

</section>


  </div>
  <div class="tab-pane fade" id="tested" role="tabpanel" aria-labelledby="tested-tab">
  <section class="Productspage">

<div class="container">
<div class="row">
@foreach($test as $p)

<div class="col-md-3">


<div class="card">


<img src="../images/{{$p->image}}" alt="">
<div class="card-body">

<h3 class="v" style="font-size:16px;">{{$p->Product_name}} </h3>
<div class="row">
<div class="col-md-12">
    <p class="cp" style="color:grey;"><b style="color:red">Category :</b>&nbsp;{{$p->Product_category}}</p>
  </div>
<div class="col-md-12">
  <p class="sp"style="color:grey;"><b style="color:red">Status :</b>&nbsp;{{$p->Product_status}}</p>
</div>
<div class="col-md-12">
  <p class="sp"style="color:grey;"><b style="color:red">Tested by :</b>&nbsp;{{$p->tester_name}}</p>
</div>


</div>

</div>






</div>





</div>
@endforeach

<center><div><span id="pagination" style="padding:10px;">{{$test->links()}}</span></div></center>
</div>


</div>

</section>


  </div>
  <div class="tab-pane fade" id="retesting" role="tabpanel" aria-labelledby="retesting-tab">
  <section class="Productspage">

<div class="container">
<div class="row">
@foreach($retest as $p)

<div class="col-md-3">


<div class="card">


<img src="../images/{{$p->image}}" alt="">
<div class="card-body">
<h3 class="v" style="font-size:16px;">{{$p->Product_name}} </h3>
<div class="row">
<div class="col-md-12">
    <p class="cp" style="color:grey;"><b style="color:red">Category :</b>&nbsp;{{$p->Product_category}}</p>
  </div>
<div class="col-md-12">
  <p class="sp"style="color:grey;"><b style="color:red">Status :</b>&nbsp;{{$p->Product_status}}</p>
</div>


<a href="{{Url('/Updatetest'.$p->Product_id)}}" class="a4">Send For testing</a>



</div>
</div>

</div>





</div>





</div>
@endforeach
<center><span class="pagination" style="padding:10px;">{{$retest->links()}}</span></center>

</div>


</div>

</section>

  </div>
  
</div>
</section>
<!-- productsend -->











<hr>




@endsection
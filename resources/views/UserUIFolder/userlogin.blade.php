@extends('UserUIFolder.weblayout')
@section('title')
Login 
@endsection


@section('items')


<section class="register">

<div class="container">



<div class="row">


<div class="col-md-6 "><img src="../images/cb1.jpg" width="100%" alt=""></div>



<div class="col-md-6 ">
<h1>Login Your Self</h1>

<form method="POST" action="/loggedin">


@csrf
<div class="row">


<center><p class="text-success">{{session('success')}}</p></center>

<div class="col-md-12">
<label for="email">Enter Your Email</label>
<input type="email" name="email" placeholder="You Email..">
</div>




<div class="col-md-12">
<label for="password">Enter Your Password</label>

<input type="password" name="password"  Placeholder="create Your password..">



</div>







<div class="col-md-12 ">




<button type="submit">Login In</button>

<center><p class="text-danger">{{session('error')}}</p></center>

</div>

<hr>
<div class="col-md-12">
<center><p class="text-success">Or</p></center>

<center><p>New to website ? <a href="/register" class="text-success"> Register here</a></p></center>
</div>

</div>




















</form>





</div>



</div>

</div>


</section>

<hr>
@endsection
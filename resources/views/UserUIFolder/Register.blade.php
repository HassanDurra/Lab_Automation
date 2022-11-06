@extends('UserUIFolder.weblayout')
@section('title')
Sign Up
@endsection


@section('items')


<section class="register">

<div class="container">



<div class="row">


<br><div class="col-md-6"><img src="../images/cb1.jpg" class="img" width="100%" alt=""></div>



<div class="col-md-6 ">
<h1>Register Your Self</h1>

<form method="POST" action="/registeration" enctype="multipart/form-data">


@csrf
<div class="row">

<div class="col-md-12 ">
    
  
<div class="upload">
<img src="../images/file.png"alt="">
<div class="round">
<input type="file" name="image">
<i class="fa fa-camera" style="color:white;cursor:pointer;"></i><br><br>



</div>
</div>





    </div>

<div class="col-md-6">
    
<label for="user">Enter Your Name</label>
<input type="text" name="user"  placeholder="Your name..">
</div>
<div class="col-md-6">
<label for="Gender">Select Your Gender</label>
<select name="Gender"   id="">

<option value="Male">Male</option>
<option value="Female">Female</option>


</select>

</div>

<div class="col-md-12">
<label for="password">Create Your Password</label>

<input type="password" name="password"  Placeholder="create Your password..">



</div>



<div class="col-md-12">
<label for="email">Enter Your Email</label>
<input type="email" name="email" placeholder="You Email..">
</div>

<div class="col-md-6">


<label for="country">Select Your Country</label>
<select name="Country" id="">
<option value="Pakistan">Pakistan</option>
<option value="United state america">United state of america</option>
<option value="Malaysia">Malaysia</option>
<option value="Turkey">Turkey</option>
<option value="India">India</option>

</select>

</div>


<div class="col-md-6">


<label for="age">Enter Your Age</label>
<input type="number"  placeholder="You Age.." name="age">
</div>

<div class="c0l-md-12">
<div class="row">

<div class="col-md-6">




</div>

</div>



<div class="col-md-12">




<button type="submit" class="">submit</button>
</div>

</div>




















</form>





</div>



</div>

</div>


</section>

<hr>
@endsection
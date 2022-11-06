@extends('UserUIFolder.weblayout')
@section('title')
Contact Us
@endsection




@section('items')
<br><br>
<section class="map">


<div class="mapouter"><div class="gmap_canvas"><iframe class="w-100" height="465" id="gmap_canvas" src="https://maps.google.com/maps?q=aptech%20garden&t=k&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:465px;width:100%;}</style><a href="https://www.embedgooglemap.net">google maps embed link</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:465px;width:100%;}</style></div></div>



</section>

<section class="contact">





<div class="container">

<div class="row">

<hr>
<br><br><div class="col-md-6 reveal">


<center><img src="../images/contact.png" width="450px"  alt=""></center>


</div>
<div class="col-md-6 reveal">
<center><h1>Contact</h1></center>
<form action="sended"  method="POST">
@csrf
<div class="row">



<div class="col-md-6">
    


<input type="text"name="firstName" Placeholder="Enter Your first name" ></div>


<div class="col-md-6"><input type="text" name="lastName" Placeholder="Enter Your last name" ></div><br>
<div class="col-md-12"><input type="email" name="email" Placeholder="Enter Your email " ></div>


<div class="col-md-12"><textarea rows="5" id="comment" name="message" placeholder="message"></textarea></div>

<div class="col-md-12"><button type="submit" class="search2">Submit</button></div>






</div>

</form>


</div>

</div>

</div>





</section>

<!-- formend -->





<br><br>
<section class="data">
<div class="container">


<div class="row">

<div class="col-md-4 reveal">

<div class="card rt">


<center><img src="../images/email.png"  width="120px"alt=""></center>

<center><h3>Email</h3></center>
<center><p>Aptech@aptechgdn.net</p></center>




</div>





</div>

<div class="col-md-4 reveal">

<div class="card rt">


<center><img src="../images/ph.png"  width="120px"alt=""></center>

<center><h3>Phone</h3></center>
<center><p>+92 3030239865</p></center>




</div>





</div>
<div class="col-md-4 reveal">

<div class="card rt">


<center><img src="../images/loc.png"  width="120px"alt=""></center>

<center><h3>Location</h3></center>
<center><p>Aptect learning garden </p></center>




</div>





</div>
</div>


</div>


</section>

<!-- logoends -->
<br><br>



<hr>










@endsection
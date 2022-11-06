
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" integrity="sha512-doJrC/ocU8VGVRx3O9981+2aYUn3fuWVWvqLi1U+tA2MWVzsw+NVKq1PrENF03M+TYBP92PnYUlXFH1ZW0FpLw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
<script src="	https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="./css/lab.css">

<link rel="stylesheet" href="./css/bootstrap.css">
<script src="./js/bootstrap.js"></script><link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script><script src="./js/jquery-3.6.0.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body onload=loader() >
    <!-- navbarstart -->
    <div id="Loading">


<div class="box-area">

<li class="li"></li>
<li class="li"></li>
<li class="li"></li>
<li class="li"></li>
<li class="li"></li>
<li class="li"></li>



</div>



 </div>
<!-- login -->




 <div id="loading1">


<div class="box-area1">

<li class="li"></li>
<li class="li"></li>
<li class="li"></li>
<li class="li"></li>
<li class="li"></li>
<li class="li"></li>
<section>

<center><div class="login ">
<div class="row"> 

<div class="col-md-6 col-12">


<img src="../images/cb1.jpg" width="100%" height="400px" alt="">

</div>

<div class="col-md-6 col-12 column">

<center><h1 class="h1">Login </h1></center>
<center><p class="p2">Login using your password And email</p></center>

<form action="/Loggedpost" method="POST">
@csrf
<input type="text" Placeholder="Enter Your Email.." name="email">


<input type="password" class="input1" placeholder="Enter Your Password.." name="password" >



<button type="submit">login</button>




<p class="Error">{{session('error')}}</p>
</form>








</div>




</div>
</div>
</section>


</div>



 </div>









</section>



<!-- start login -->


<!-- footer -->

<!-- end -->

</body>
</html>

<script>
var preloader= document.getElementById('Loading');
function loader(){

preloader.style.display="none";

}


</script>
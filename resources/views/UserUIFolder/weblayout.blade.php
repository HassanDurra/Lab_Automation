<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="../images/x-icon.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" integrity="sha512-doJrC/ocU8VGVRx3O9981+2aYUn3fuWVWvqLi1U+tA2MWVzsw+NVKq1PrENF03M+TYBP92PnYUlXFH1ZW0FpLw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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






 </div>
<section class="navbar-back"> 

<nav class="navbar navbar-expand-lg  small">
  
  
  <div class=" justify-content-start small navbar-expand">
    <ul class="navbar-nav">
      <li class="nav-item active">
      <span ><i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;Aptech@aptechgdn.net</span>
      </li>
      <li class="nav-item">
      <span ><i class="fa-solid fa-phone"></i>&nbsp;&nbsp;+93030239865</span>
      </li>
      <li class="nav-item">
      <span ><i class="fa-regular fa-clock"></i>&nbsp;&nbsp;Mon-Sat at 10am-9pm</span>
      </li>
 
    </ul>  </div>

    <div class="navbar-collapse small justify-content-end  navbar-expand " >
    <ul class="navbar-nav">
      <li class="nav-item active">
      <span ><i class="fa-brands fa-twitter i"></i></span>
      </li>
      <li class="nav-item">
      <span ><i class="fa-brands fa-linkedin i"></i></span>
      </li>
      <li class="nav-item">
      <span ><i class="fa-brands fa-google i"></i></span>
      </li>
      <li class="nav-item">
      <span ><i class="fa-brands fa-facebook i"></i></span>
      </li>
 
    </ul>
    
  </div>

</nav>

<nav class="navbar navbar-expand-lg ">
  <span class="navbar-brand" style="    font-size: 40px;" ><b >Lab</b>Automation</span>
  <button class="navbar-toggler navbar-end" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler border-none"><i class="fa-sharp fa-solid fa-bars tog1"></i></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link a" href="Home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link a" href="About">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link a" href="products">Products</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link a " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pages
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="nav-link p text-center" href="contact">Contact</a>
@if(session('Users')!='')
<a class="nav-link p text-center" href="Userlogout">Logout</a>

@else           <a class="nav-link p text-center" href="userlogin">Login</a>
          <a class="nav-link p text-center" href="register">Register</a>
        
@endif
          <div class="dropdown-divider"></div>
          <a class="nav-link p text-center" href="login">Admin Login</a>
        </div>
      </li>
    </ul>
    
  </div>
  <form action="search">
    <input type="text" name="search" class="input" placeholder="Search Products..">
<button  class="search">Search</button>
</form></nav>



<h1>@yield('title')</h1>
<p>Home <i class="fa-solid fa-angles-right" style="color:yellowgreen;font-weight:bold;"></i>&nbsp;&nbsp;@yield('title')</p>













</section>


@yield('items')



<!-- footer -->
<section class="footer">


<footer>


<div class="container-fluid">






<div class="row ">




<div class="col-md-4"><br> <span class="navbar-brand" style="    font-size: 30px;color:black;" ><b style="color: rgb(30, 179, 30); font-size:35px;font-wieght:bolder;">Lab</b>Automation</span><br>
<br><p style="color: rgb(161, 161, 165); font-size:15px;">Welcome to LABAUTOMATION in this website we provide Data management and  Product  Testing system and send them to customers so that they can be assure that the product is 100% working this was developed by 'Hassan , Muhammad baluch and Muhammad Ali' in year 2022. </p>

<form action="">
<input type="text" class="input" placeholder="Search Products.." name="search">
<button type="submit" class="search1">Search</button>

</form>
</div> 
<div class="col-md-4">
<br> <h1 style="font-weight:bold;padding:10px;color:black;font-size:25px;">Server Link</h1>
  <div class="row">

<div class="col-md-6">

<ul class="footer-ul">


<li>


<a href="">Business
</a>

</li>

<li>


<a href="">Agency
</a>

</li>

<li>


<a href="">Social Media
</a>

</li>

<li>


<a href="">Branding
</a>

</li>

<li>


<a href="">Design
</a>

</li>

</ul>

</div>
<div class="col-md-6">


<ul class="footer-ul"> 


<li>


<a href="">About us
</a>

</li>

<li>


<a href="">About team
</a>

</li>

<li>


<a href="">Testing senario
</a>

</li>

<li>


<a href="">Users Management
</a>

</li>

<li>


<a href="">Product Management
</a>

</li>

</ul>



</div>
  </div>

</div>
<div class="col-md-4">
<br>
<h1 style="font-weight:bold;padding:10px;color:black;font-size:25px;">Information</h1>
<ul class="new">


<li>

<span style="color: rgb(30, 179, 30); white-space:nowrap;">Phone:&nbsp;<p style="
color: rgb(161, 161, 165);">+92 3030 239865</p></span>

</li>

<li>

<span style="color: rgb(30, 179, 30); white-space:nowrap;">Email:&nbsp;<p style="
color: rgb(161, 161, 165);">Aptechgdn@aptechgdn.net</p></span>

</li>
<li>

<span style="color: rgb(30, 179, 30); ">Address:&nbsp;<p style="
color: rgb(161, 161, 165);">APWA Complex, 1st Floor, Agha Khan 3 Rd
Garden East Saddar Town, Karachi, Sindh 74400
Pakistan</p></span>

</li>


</ul>



  



  <ul class="ul">

<li><a href=""><i class="fa-brands fa-linkedin i"></i></a></li>


  

<li><a href=""><i class="fa-brands fa-twitter i"></i></a></li>



<li><a href=""><i class="fa-brands fa-google i"></i></a></li>




<li><a href=""><i class="fa-brands fa-facebook i"></i></a></li>


  





  </ul>
  
</div>





</div>










</div>













</footer>




</section>
<!-- end -->

</body>
</html>

<script>
var preloader= document.getElementById('Loading');
function loader(){

preloader.style.display="none";

}


</script>
<script>

  
  window.addEventListener('scroll',reveal);
   
  function reveal(){
   
    var reveals=document.querySelectorAll('.reveal');
    for(var i = 0;i<reveals.length;i++){
  
  
  
  var windowheight= window.innerHeight;
  
  var revealtop=reveals[i].getBoundingClientRect().top;
  var revealpoint= 150;
  
  
  if(revealtop<windowheight -revealpoint){
  
  
    reveals[i].classList.add('active');
  
  
  
  }
  
  else{
  
    reveals[i].classList.remove('active');
  }
  
  
    }
  
  
  
  
  }
  
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
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
<link rel="stylesheet" href="../css/home.css">

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
  <span class="navbar-brand"  ><b>Lab</b>Automation</span>
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
<button class="search1">Search</button>
</form></nav>


<br><br>
<div class="row">

<div class="col-md-6 col9">

<h4 class="rty animated fadeInRight ">Maintain Your Career</h4>
<h2 class="r2 animated fadeInLeft ">Work With Professionals</h2>

<h6 class="r3 animated fadeInRight">Testing , Management and High Quality Products Thats what makes your a best seller in town working with LabAutomation Provides You Professionals for testing your Products and managing them in a great senario. </h6>
<button class="search animated fadeInLeft" >Explore More</button>

</div>


<div class="col-md-6">

<center><img class="hide" src="../images/homeback.png" class="animated fadeInDown" width="530px" height="
500px" alt=""></center>

</div>

</div>



</section>



<!-- Homesection -->


<section class="home">




<section class="table">
<div class="container-fluid">
<div class="row">


<div class="col-md-6 reveal">
    
<br><br>
<center><img src="../images/human.png" width="80%" alt=""></center>

</div>
<div class="col-md-6 reveal">

<h2>About Our Website And <b style="color:green;"> Software Firm</b>. </h2>

<center><p>
The SRS Electrical appliances are the manufacturers of some electrical products like switch gears, fuses, capacitors, resistors, etc…. These products after manufactured they are sent for testing where the product is subjected to some testing conditions, and then after the testing is successful at their laboratories they are sent to CPRI for further testing process, so that they can get it approved from CPRI and then release the product into the market. If the testing fails then the product is sent back for re-manufacturing it and then they are again subjected to tests.
</p></center>
<br> 
<p class="l"><i class="fa-solid fa-circle-check " style="color:green;font-size:20px;"></i>&nbsp;&nbsp;Testing Products By Professionals.</p>
<p class="l"><i class="fa-solid fa-circle-check " style="color:green;font-size:20px;"></i>&nbsp;&nbsp;Testing Products By Professionals.</p>

<p class="l"><i class="fa-solid fa-circle-check " style="color:green;font-size:20px;"></i>&nbsp;&nbsp;Testing Products By Professionals.</p>

<p class="l"><i class="fa-solid fa-circle-check " style="color:green;font-size:20px;"></i>&nbsp;&nbsp;Testing Products By Professionals.</p>
<br><button type="submit" class="search1" >Explore More</button>






</div>











</div>
</div>










</section>



</section>

<section class="boxes">
<div class="container">




<div class="row">



<div class="col-md-4 card3 reveal">

<h1>Digital Solutions</h1>
<p>managing products by professionals to provide best service for customers.</p>


<center><button>All solutions</button></center>






</div>

<div class="col-md-4 card2 reveal">
<center><img src="../images/prof.png" width="80px" alt=""></center>
<h4>Professional Testing</h4>
<p>Testing Products with professionals</p>







</div>
<div class="col-md-4 card3 reveal">
<center><img src="../images/a.png" width="80px" alt=""></center>
<h4>Accurate Test</h4>
<p>Testing Products with Accurate results</p>







</div>



<div class="col-md-4 card2 reveal">
<center><img src="../images/t.png" width="80px" alt=""></center>
<h4>Testing on Time</h4>
<p>Testing Products on time</p>







</div>

<div class="col-md-4 card3 reveal">
<center><img src="../images/m.png" width="80px" alt=""></center>
<h4>Managed Tests </h4>
<p>Testing Products with managed sanerio</p>







</div>
<div class="col-md-4 card2 reveal">
<center><img src="../images/u.png" width="80px" alt=""></center>
<h4>User-Friendly</h4>
<p>Testing Products in easy way for users.</p>







</div>


</div>





</div>





</section>




<br>
<section class="bottomnav">





    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active text-success a3 " id="home-tab" class="" data-toggle="tab" href="#home" role="tab" aria-controls="home"   aria-selected="true">Testing</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-success a3" id="profile-tab nav" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Products</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-success a3" id="contact-tab nav" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Users policy</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">



<section class="table1">
<div class="container-fluid">
<div class="row">


<div class="col-md-6 reveal">
    
<br><br>
<center><img src="../images/bnt.png" width="80%" alt=""></center>

</div>
<div class="col-md-6">

<h2>PRODUCTS <b style="color:green;"> TESTING</b>. </h2>

<center><p>
The SRS Electrical appliances are the manufacturers of some electrical products like switch gears, fuses, capacitors, resistors, etc…. These products after manufactured they are sent for testing where the product is subjected to some testing conditions, and then after the testing is successful at their laboratories they are sent to CPRI for further testing process, so that they can get it approved from CPRI and then release the product into the market. If the testing fails then the product is sent back for re-manufacturing it and then they are again subjected to tests.
</p></center>
<br> 
<p class="l"><i class="fa-solid fa-circle-check " style="color:green;font-size:20px;"></i>&nbsp;&nbsp;Testing Products By Professionals.</p>
<p class="l"><i class="fa-solid fa-circle-check " style="color:green;font-size:20px;"></i>&nbsp;&nbsp;Testing Products On Time.</p>

<p class="l"><i class="fa-solid fa-circle-check " style="color:green;font-size:20px;"></i>&nbsp;&nbsp;Testing Products At a managed senario.</p>

<p class="l"><i class="fa-solid fa-circle-check " style="color:green;font-size:20px;"></i>&nbsp;&nbsp;Testing Products By trust Employes.</p>
<br><button type="submit" class="search1" >Explore More</button>






</div>











</div>
</div>










</section>









  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      
<section class="table1">
<div class="container-fluid">
<div class="row">


<div class="col-md-6">
    
<br><br>
<center><img src="../images/bnp.png" width="80%" alt=""></center>

</div>
<div class="col-md-6">

<h2>Products <b style="color:green;">Quality </b>.</h2>

<center><p>
Providing Branded Quality Products for Customers with Testing And Assurance of products that thier functionality are working 100% so the customer won't have any issue while using or selling the product.
</p></center>
<br> 
<p class="l"><i class="fa-solid fa-circle-check " style="color:green;font-size:20px;"></i>&nbsp;&nbsp;100% Product Quality.</p>
<p class="l"><i class="fa-solid fa-circle-check " style="color:green;font-size:20px;"></i>&nbsp;&nbsp;Branded Products.</p>

<p class="l"><i class="fa-solid fa-circle-check " style="color:green;font-size:20px;"></i>&nbsp;&nbsp;Working functionality.</p>

<p class="l"><i class="fa-solid fa-circle-check " style="color:green;font-size:20px;"></i>&nbsp;&nbsp;Tested Products By Professionals.</p>
<br><button type="submit" class="search1" >Explore More</button>






</div>











</div>
</div>










</section>




  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">








<section class="table1">
<div class="container-fluid">
<div class="row">


<div class="col-md-6">
    
<br><br>
<center><img src="../images/bnf.png" width="80%" alt=""></center>

</div>
<div class="col-md-6">

<h2>Users<b style="color:green;"> Policy</b>. </h2>

<center><p>
The user Policies of this website Provied friendly using Web and Security For users data So no one can hack or interrupt in their Personal data.
</p></center>
<br> 
<p class="l"><i class="fa-solid fa-circle-check " style="color:green;font-size:20px;"></i>&nbsp;&nbsp;Friendly-using Website.</p>
<p class="l"><i class="fa-solid fa-circle-check " style="color:green;font-size:20px;"></i>&nbsp;&nbsp;100% security</p>

<p class="l"><i class="fa-solid fa-circle-check " style="color:green;font-size:20px;"></i>&nbsp;&nbsp;User data are in a managed senario.</p>

<p class="l"><i class="fa-solid fa-circle-check " style="color:green;font-size:20px;"></i>&nbsp;&nbsp;Easy to use website Features .</p>
<br><button type="submit" class="search1" >Explore More</button>






</div>











</div>
</div>










</section>






  </div>
</div>





</section>

<br><br><hr>
<section class="section2 mt-20">

<center><h1>Our Achievement</h1></center>
<center><p>Here are the Achievements Gained By our profession And by the Hardwrok of our team . </p></center><br><br><br>
<div class="container">


<div class="row">


<div class="col-md-4 reveal">


<div class="row ach">


<div class="col-md-4"><img src="../images/1yyr.png" width="100px" alt=""></div>
<div class="col-md-8"><h1>1+  </h1>
<h4>Years Experience</h4>

</div>

</div>


</div>

<div class="col-md-4  reveal">


<div class="row ach">


<div class="col-md-4"><img src="../images/world.png" width="100px" alt=""></div>
<div class="col-md-8"><h1>8+  </h1>
<h4>World-wide Websites</h4>

</div>

</div>


</div>

<div class="col-md-4 reveal">


<div class="row ach">


<div class="col-md-4"><img src="../images/expert.png" width="100px" alt=""></div>
<div class="col-md-8"><h1>14+  </h1>
<h4>Experts Teams</h4>

</div>

</div>


</div>




</div>
<br>
<hr><br>



<div class="row">



<div class="col-md-3 ach1 reveal">
  <center><img src="../images/prot.png" width="80px" alt="">
<h3>Products Testing</h3>
<p>Testing Products In time By Experts</p>

</center>
</div>


<div class="col-md-3 ach1 reveal">
  <center><img src="../images/sec.png" width="80px" alt="">
<h3>Security</h3>
<p>Your Details are 100% secured</p>

</center>
</div>
<div class="col-md-3 ach1 reveal">
  <center><img src="../images/cut.png" width="80px" alt="">
<h3>Customers Service</h3>
<p> 24hrs Customers care service</p>

</center>
</div>
<div class="col-md-3 ach1 reveal">
  <center><img src="../images/trust.png" width="80px" alt="">
<h3>Trusted By Users</h3>
<p>Trusted By Users Since 2022</p>

</center>
</div>


</div>
</div>
</section>

<!-- endsection -->

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
<div class="col-md-4 ">
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
  
var preloader= document.getElementById('Loading');
function loader(){

preloader.style.display="none";

}


</script>
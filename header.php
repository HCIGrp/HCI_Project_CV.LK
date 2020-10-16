<?php error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
<?php session_start();?>





<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--    <script src="js/jquery-3.5.1.min.js"></script> -->


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel = "stylesheet" href="css/navbar.css">


<style>
  
/* for Stick. */

#myTopnav {
  overflow: hidden;
}

.content {
    padding: 16px;
  }
  
  .sticky {
    position: fixed;
    top: 0;
    width: 100%;
  }
  
  .sticky + .content {
    padding-top: 60px;
  }


 
  
</style>
</head>
<body>






<!-- <div class="container-fluid">
<div class="row header">
<div class="col-sm-2">
<img src="assets/images/logo.png" alt="Logo" width="100px" height="75px"> 
</div>
<div class="col-sm-8">

<img src="assets/images/header_banner.jpg" alt="Banner" > 
</div>

<div class="col-sm-2 ">




</div>



</div>
</div> -->

  <div class="navbar2" id="myTopnav">
  <img src="assets/images/logo.png" alt="Logo" width="120px" height="40px" style="float: left;  padding:5px"> 
    <a href="index.php">Home</a>
    <a href="jobseeker.php">Job Seekers</a>
        <div class="dropdown2">
          <button class="dropbtn2">Vacancies <i class="fa fa-caret-down"></i></button>
            <div class="dropdown2-content">
              <a href="All_vacancy.php">All Vacancies</a>
              <a href="government_jobs.php">Government</a>
              <a href="Forieng_vacancy.php">Foreign</a>
            </div>
        </div>

  <?php if(! empty($_SESSION)) {?>
    <a href="vacancy_post.php">Post Vacancy</a>
  <?php } ?>  
    <a href="employers.php">Employers</a>
    <a href="promotions.php">Promotions</a>
    <a href="headhunter.php">Headhunter Team</a>
    <a href="contact_us.php">Contact</a>
   

    <?php if(empty($_SESSION)) {?>
    <a href="login.php"  style="float: right;"><i class="fa fa-fw fa-user"></i> Login</a>
    <a href="register.php"  style="float: right;"><i class="fa fa-fw fa-user"></i> Register</a>
    <?php }else{?>


      <a href="logout.php"  style="float: right;"> Logout</a>

    <?php }?>
    <a href="javascript:void(0);" style="font-size:14px;" class="icon" onclick="myFunction()">&#9776;</a>



</ul>





    </div>
 </div> 

  <!--Make Responsive header -->

  <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "navbar2") {
    x.className += " responsive";
  } else {
    x.className = "navbar2";
  }
}

/* Header Stick function. 

window.onscroll = function() {myFunctionstick()};

var navbar = document.getElementById("myTopnav");
var sticky = navbar.offsetTop;

function myFunctionstick() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

*/
</script>
<!--
  
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeaderr");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("stickyy");
  } else {
    header.classList.remove("stickyy");
  }
}

-->

</body>
</html>
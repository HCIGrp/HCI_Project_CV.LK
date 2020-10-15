<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--    <script src="js/jquery-3.5.1.min.js"></script> -->

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


<div class="container-fluid">
<div class="row header">
<div class="col-sm-2">
<img src="assets/images/logo.png" alt="Logo" width="100px" height="75px"> 
</div>
<div class="col-sm-8">

<img src="assets/images/header_banner.jpg" alt="Banner" > 
</div>

<div class="col-sm-2 ">


<div class="Login_Button_Div">
    <button type="button"  class="btn btn-primary float-right"> Login</button>
    <button type="button"  class="btn btn-primary float-right" > SignUp</button>


</div>

</div>



</div>
</div>

  <div class="navbar2" id="myTopnav">
    <a href="index.php">Home</a>
    <a href="jobseeker.php">Job Seekers</a>
        <div class="dropdown2">
          <button class="dropbtn2">Vacancies <i class="fa fa-caret-down"></i></button>
            <div class="dropdown2-content">
              <a href="All_vacancy.php">All Vacancies</a>
              <a href="#">Government</a>
              <a href="#">Foreign</a>
            </div>
        </div>
    <a href="vacancy_post.php">Post Vacancy</a>
    <a href="#">Employers</a>
    <a href="#">Promotions</a>
    <a href="headhunter.php">Headhunter Team</a>
    <a href="contact_us.php">Contact</a>
    <a href="javascript:void(0);" style="font-size:14px;" class="icon" onclick="myFunction()">&#9776;</a>
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
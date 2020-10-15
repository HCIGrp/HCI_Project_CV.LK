<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Job Seekers</title>
        <!-- Bootstrap CSS -->
       <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" /> -->
        <link rel='stylesheet' type='text/css' href='css/bg.css'/>
        <link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'/>
        <link rel='stylesheet' type='text/css' href='animate.css'/> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/jquery-3.5.1.min.js"></script>
       
        <script type='text/javascript' src="js/back_2top.js"></script>    
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>

        <!-- Additionally added to a collapse -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <link rel='stylesheet' type='text/css' href='new.css'/>    

<style>

/* collapse css */

.bs-example {
  margin: 30px;
  width: 25%;
}
.accordion .fa{
  margin-right: 0.5rem;
}
.bs-example2{
  margin: 30px;
  width: 25%;
}
.bs-example3{
  margin: 30px;
  width: 25%;
}

/* Back to top css */

.back-to-top {
    position: fixed;
    bottom: 25px;
    right: 25px;
    display: none;
    opacity: 0.8;
    transition: 0.3s;
}
.back-to-top:hover {opacity: 1}

.p3 {
  font-size: 17px;
  color: white;
}
</style>
<script>
    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
        	$(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
    });
</script>
</head>
<?php include('header.php'); ?>
<body class="bg-image" style="background-image: url('images/bg-01.jpg');">
<?php include('feedback-btn.php'); ?>

<div class="frame"></div>

<!--
<div class="slideshow-container1">

        <div class="mySlides1 fade1">
        <img src="images/rsz_rsz_24.jpg" style="width:100%" height:100%>
        <div class="text">Caption Text</div>
        </div>

        <div class="mySlides1 fade1">
        <img src="images/5.jpg" style="width:100%">
        <div class="text">Caption Two</div>
        </div>

        <div class="mySlides1 fade1">
        <img src="images/3.jpg" style="width:100%">
        <div class="text">Caption Three</div>
        </div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
-->

<p class="p3" style="text-align:center;color:white;">We bring you the best Job Opportunities through Employers, Headhunters, Recruitment Agents <br><br>
Upload Your CV in the preffered position</p>
<br>

<div class="bs-example" style="top: 52.3%;left: 600px">
    <div class="accordion" id="accordionExample">

    <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0"><button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"><i class="fa fa-plus"></i> Information Technology</button></h2>
            </div>
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    <ul>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="apply_form.php">Developers</a></ul>
                    <ul>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="apply_form.php">Designers</a></ul>
                    <ul>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="apply_form.php">Suitable Position</a></ul>
                  </div>
              </div>
    </div>
        

        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0"><button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo"><i class="fa fa-plus"></i> Human Resources Management</button></h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    <ul>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="apply_form.php">Manager & Above</a></ul>
                    <ul>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="apply_form.php">Executive & Above</a></ul>
                    <ul>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="apply_form.php">Suitable Position</a></ul>
                  </div>
            </div>
        </div>


        <div class="card">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0"><button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"><i class="fa fa-plus"></i> Marketing & Sales</button></h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <ul>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="apply_form.php">Manager & Above</a></ul>
                    <ul>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="apply_form.php">Executive & Above</a></ul>
                    <ul>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="apply_form.php">Suitable Position</a></ul>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="bs-example2" style="position: absolute;top: 119.7%;left: 475px;">
    <div class="accordion" id="accordionExample2">

    <div class="card">
            <div class="card-header" id="headingOneex2">
                <h2 class="mb-0"><button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOneex2"><i class="fa fa-plus"></i> Production Management</button></h2>
            </div>
              <div id="collapseOneex2" class="collapse" aria-labelledby="headingOneex2" data-parent="#accordionExample2">
                  <div class="card-body">
                    <ul>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="apply_form.php">Manager & Above</a></ul>
                    <ul>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="apply_form.php">Executive & Above</a></ul>
                    <ul>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="apply_form.php">Suitable Position</a></ul>
                  </div>
              </div>
    </div>
        

        <div class="card">
            <div class="card-header" id="headingTwoex2">
                <h2 class="mb-0"><button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseTwoex2"><i class="fa fa-plus"></i> Finance & Accounting</button></h2>
            </div>
            <div id="collapseTwoex2" class="collapse" aria-labelledby="headingTwoex2" data-parent="#accordionExample2">
                <div class="card-body">
                    <ul>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="apply_form.php">Manager & Above</a></ul>
                    <ul>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="apply_form.php">Accountant</a></ul>
                    <ul>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="apply_form.php">Suitable Position</a></ul>
                  </div>
            </div>
        </div>


        <div class="card">
            <div class="card-header" id="headingThreeex2">
                <h2 class="mb-0"><button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThreeex2"><i class="fa fa-plus"></i> Operation Management</button></h2>
            </div>
            <div id="collapseThreeex2" class="collapse" aria-labelledby="headingThreeex2" data-parent="#accordionExample2">
                <div class="card-body">
                    <ul>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="apply_form.php">Manager & Above</a></ul>
                    <ul>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="apply_form.php">Executive & Above</a></ul>
                    <ul>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="apply_form.php">Suitable Position</a></ul>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="bs-example3" style="position: absolute;top: 119.7%;left: 950px;">
    <div class="accordion" id="accordionExample3">

    <div class="card">
            <div class="card-header" id="headingOneex3">
                <h2 class="mb-0"><button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOneex3"><i class="fa fa-plus"></i> Engineering</button></h2>
            </div>
              <div id="collapseOneex3" class="collapse" aria-labelledby="headingOneex3" data-parent="#accordionExample3">
                  <div class="card-body">
                    <ul>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="apply_form.php">Civil Engineering</a></ul>
                    <ul>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="apply_form.php">Electrical Engineering</a></ul>
                    <ul>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="apply_form.php">Mechanical Engineering</a></ul>
                    <ul>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="apply_form.php">Suitable Position</a></ul>
                  </div>
              </div>
    </div>
        

        <div class="card">
            <div class="card-header" id="headingTwoex3">
                <h2 class="mb-0"><button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseTwoex3"><i class="fa fa-plus"></i> Maintenance Management</button></h2>
            </div>
            <div id="collapseTwoex3" class="collapse" aria-labelledby="headingTwoex3" data-parent="#accordionExample3">
                <div class="card-body">
                    <ul>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="apply_form.php">Manager & Above</a></ul>
                    <ul>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="apply_form.php">Executive & Above</a></ul>
                    <ul>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="apply_form.php">Suitable Position</a></ul>
                  </div>
            </div>
        </div>


        <div class="card">
            <div class="card-header" id="headingThreeex3">
                <h2 class="mb-0"><button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThreeex3"><i class="fa fa-plus"></i> Lecturers</button></h2>
            </div>
            <div id="collapseThreeex3" class="collapse" aria-labelledby="headingThreeex3" data-parent="#accordionExample3">
                <div class="card-body">
                    <ul>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="apply_form.php">Full Time</a></ul>
                    <ul>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="apply_form.php">Part Time</a></ul>
                </div>
            </div>
        </div>

    </div>
</div>

<br><br>


<!--
<script>

/* Function for animation */

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides1");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}

</script>
-->

<br><br><br><br><br><br>
   
<!--back to top -->
<a id="back-to-top" href="#" class="btn btn-dark btn-lg back-to-top" style='background-color:#00FEDE' role="button"><i class="fas fa-chevron-up" style="color:black"></i></a>
  
<?php include('footer1.php'); ?>
</body>
</html>
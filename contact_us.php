<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type='text/javascript' src="js/back_2top.js"></script>   

    <link rel="stylesheet" type="text/css" href="css/contact.css" />
    <link rel='stylesheet' type='text/css' href="css/bg.css" />

</head>
<?php  include 'header.php';?>
<?php if(! empty($_SESSION)) {?>
    <?php include('feedback-btn.php'); ?>
  <?php } ?> 

<body class="bg-image" style="background-image: url('images/bg-01.jpg');" >

<div class="container-fluid">
    <div class="row" id="row1">
        <!--
        <div class="col-sm-12" >
            <div class="card" id="card1">
                <img class="card-img" src="image/download.png" alt="Card image">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
        <div class="card text-center" id="card2" >
        <div class="card-body">
                    <h5 class="card-title">Contact Us</h5>
                    <hr>
                    <label for="mobile" class="dis">Mobile :</label>
                             +94 70 134 56 754 
                         <br>+94 71 432 89 802
                    <br>        
                    <label for="email" class="dis">Email : </lable> 
                            info@cv.lk 
                        <br>ads@cv.lk
                        <br>
                    <label for="reg_no" class="dis"> :</label> 
                             NO 176, 5th floor,
                        <br> WARD CITY COMPLEX,
                        <br> Queen Marry Road,
                        <br> Gampaha 
                    
</div>
</div>
        </div>
-->
<div class="header1">
   <h2> GET IN TOUCH</h2>       
   </div>
<div class="card-group text-center">
  <div class="card">
    <div class="card-body">
    <i class="fa fa-map-marker" style="font-size:36px"></i>
      <h4 class="card-title">Address</h4>
      <h5>cv.lk <br> Main branch</h5>
      <p class="card-text"> www.cv.lk
                        <br> NO 176, 5th floor,
                        <br> WARD CITY COMPLEX,
                        <br> Queen Marry Road,
                        <br> Gampaha,
                        <br> Sri Lanka.</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
    <i class="fa fa-phone" style="font-size:36px"></i>
      <h4 class="card-title">Phone</h4>
      <h5>cv.lk <br> Telephone <br> Numbers</h5>
      <p class="card-text"> +94 70 134 56 754 
                         <br>+94 71 432 89 802.</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
     <i class="fa fa-envelope" style="font-size:36px"></i>
     <h4 class="card-title">Email</h4>
     <h5>cv.lk <br> Email <br> Address</h5>
      <p class="card-text"> info@cv.lk 
                        <br>ads@cv.lk</p>
    </div>
  </div>
</div>
    </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-sm-5">
        <h3>Message Us</h3>
        
        <hr>
        <p>If you wish to be considered for employment at cv.lk, please do not send a message, insted send an email or letter to cv.lk and our Human Resources department will contact you after their review of your submitted information.</h2>
</p>
</div>
    </div>

    <a id="back-to-top" href="#" class="btn btn-dark btn-lg back-to-top" style='background-color:#d3d3d3' role="button"><i class="fas fa-chevron-up" style="color:black"></i></a>
  



</div>
</body>

<?php include('footer1.php'); ?>
</html>
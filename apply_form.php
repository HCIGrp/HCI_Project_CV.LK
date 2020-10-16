<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Job Form</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/form.css" />
    <script src="js/main.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bg.css"/>
    <script type='text/javascript' src="js/back_2top.js"></script>   


</head>
<?php  include 'header.php';?>
<?php include('feedback-btn.php'); ?>

<body class="bg-image" style="background-image: url('images/bg-01.jpg');">


<div class="container-fluid ">
    <div class="row">
    <div class="col-sm-12" id="col_2">
            <div class="card text-center" >
    
            <div class="card-header" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 20px;">
                
                <img class="card-img-top" src="image/download.png" alt="Card image cap">

                <br>
                <hr>

                <h5 class="card-title" style="font-size: 25px;">Human Resources Management </h5>
                <label for="job_position">Job Position : Manager & Above </label>
                
                <br>        
 
            </div>
 
            <div class="card-body ">
                <form action="mailto:someone@example.com" method="post" enctype="text/plain" name="applyform" id="applyform" class="form" style="font-family: Arial, Helvetica, sans-serif;"> 
                
                <div class="form-group">

               <label> Your Email : <br> <input id="youremail" name="youremail" type="email" class="form-control form-control-sm"> </label> 
               
               <br>	

               <label> Attach CV : <br> <input type="file" class="form-control-file" id="FormControlFile1"> </label>

                <br>

                <input id="btnSave" name="btnSave" type="button" value="Send" class="btn btn-primary">
            
            </div>
        
        </form>
        
        <div id="alertSuccess" class="alert alert-success"></div>
        <div id="alertError" class="alert alert-danger"></div>
    
    </div>
    <div class="card-footer text-left" style="text-decoration-color: black; font-style: italic; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"> 
        www.cv.lk | explore all job opportunities
    </div>

</div>

</div>

</div>


</div>
<a id="back-to-top" href="#" class="btn btn-dark btn-lg back-to-top" style='background-color:#00FEDE' role="button"><i class="fas fa-chevron-up" style="color:black"></i></a>

</body>


<?php include('footer1.php'); ?>

</html>
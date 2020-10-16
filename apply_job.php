<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Job</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/main.css" /> 
    <link rel='stylesheet' type='text/css' href='css/bg.css'/>
    <script type='text/javascript' src="js/back_2top.js"></script>   


</head>
<?php  include 'header.php';?>
<?php include('feedback-btn.php'); ?>
<body class="bg-image" style="background-image: url('images/bg-01.jpg');">


<div class="container-fluid" >
<div class="row2">
<div class="row">
        <div class="col-sm-12" id="col_2">
            <div class="card text-center" id="card_2" >
    
            <div class="card-header">
                
                <img class="card-img-top" src="image/download.png" alt="Card image cap">
 
            </div>
 
            <div class="card-body" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 20px;" >
    
                <h5 class="card-title" style="font-size: 25px;">Consolidated Printing Pvt Ltd</h5>

                <label for="job_position">Job Position : Accountant </label>
                <br>        
                <label for="closing_date" >Closing Date : 20/12/2020 </label>
                <br>
                <label for="reg_no">Reg No : AB1023 </label>
        

    
            <p class="card-text"></p>
        
            <a href="apply_job_form.php" class="btn btn-primary">Apply</a>
 
        </div>

    </div>

</div>

</div>

    <div class="row">
        <div class="col-sm-12" id="col_1">

            <div class="card mb-3" id="card_1">
                 <img class="card-img-top_1"  src="image/job1.png" alt="Card image cap">
            
             <div class="card-body">
                 <hr>
                 <span class="input-group-btn" >
                     <a href="apply_job_form.php" type="butoon" class="btn btn-outline-primary">Apply</a>
                     <a href="#" type="butoon" class="btn btn-outline-dark" onclick="window.print()">Print</a>
                     <a href="Forieng_vacancy.php" type="butoon" class="btn btn-warning">Close</a>
                 </span>
                 
              
              </div>
          
            </div>
        
        </div>
        
    </div>
    </div>

</div>
<a id="back-to-top" href="#" class="btn btn-dark btn-lg back-to-top" style='background-color:#00FEDE' role="button"><i class="fas fa-chevron-up" style="color:black"></i></a>

</body>

<?php include('footer1.php'); ?>


</html>
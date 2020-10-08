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
    <link rel="stylesheet" href="css/main.css" />
</head>
<?php  include 'header.php';?>
<body>


<div class="container-fluid">
<div class="row">
        <div class="col-sm-12" id="col_2">
            <div class="card text-center" >
    
            <div class="card-header">
                
                <img class="card-img-top" src="image/download.png" alt="Card image cap">
 
            </div>
 
            <div class="card-body">
    
                <h5 class="card-title">Consolidated Printing Pvt Ltd</h5>

                <label for="job_position">Job Position : Accountant </label>
                <br>        
                <label for="closing_date" >Closing Date : 20/12/2020 </label>
                <br>
                <label for="reg_no">Reg No : AB1023 </label>
        

    
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        
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
                     <a href="#" type="butoon" class="btn btn-warning">Close</a>
                 </span>
                 
              
              </div>
          
            </div>
        
        </div>
        
    </div>

</div>

</body>

<?php  include 'footer.php';?>



</html>

<?php include('config_vacancy.php'); ?>


<?php 
	if (isset($_GET['edit'])) {
		$Id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM vacancy_ad WHERE Id=$Id");
        
		if (count(array($record)) == 1 ) {
			$n = mysqli_fetch_array($record);
			$Position = $n['Position'];
            $Opendate = $n['Opendate'];
            $Closedate = $n['Closedate'];
            $Advertisement = $n['Advertisement'];
		}
	}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Update of vacancy</title>

        <!-- Bootstrap CSS -->
     <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" /> -->
     <!--   <link rel='stylesheet' type='text/css' href='css/vacancy.css'/>     -->
        <link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'/>
        <link rel='stylesheet' type='text/css' href='css/bg.css'/>
        <script src="js/jquery-3.5.1.min.js"></script>

        <!-- Added for validation part  -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"></link>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>

        <script type='text/javascript' src="js/back_2top.js"></script>    
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>

/*Include validation css */

/* body {
            background: #EECDA3;
            background: -webkit-linear-gradient(to top, #EF629F, #EECDA3);
            background: linear-gradient(to top, #EF629F, #EECDA3);
        }
*/
.container {
            max-width: 550px;
        }

        .has-error label,
        .has-error input,
        .has-error textarea {
            color: red;
            border-color: red;
        }

        .list-unstyled li {
            font-size: 13px;
            padding: 4px 0 0;
            color: red;
        }


/*Back to top css*/

.back-to-top {
    position: fixed;
    bottom: 25px;
    right: 25px;
    display: none;
    opacity: 0.8;
    transition: 0.3s;
}
.back-to-top:hover {opacity: 1}

</style>
</head>
<body class="bg-image" style="background-image: url('images/bg-01.jpg');">
<?php include('header.php'); ?>
<?php include('feedback-btn.php'); ?>

<!-- $date = DateTime::createFromFormat('d/m/Y', date);  -->
<div class="container mt-5">
        <div class="card" style="border: 1px solid #4115bb">
            <div class="card-body">
                <form action="config_vacancy.php" method="post" enctype="multipart/form-data" role="form" data-toggle="validator">
  

 <!-- <div class="container">       -->

 <div class="form-group">
<input type="hidden" name="Id" value="<?php echo $Id; ?>">
</div>

<div class="form-group">
    <label for="position">Position</label>
    <input type="text" name="Position" class="form-control" id="inputPosition" maxlength="80" minlength="5" pattern="^[a-z A-Z_.-]*$" name="Position" value="<?php echo $Position; ?>" required>
   <!-- <input type="text" placeholder="Enter position" name="Position" required>  -->

    <!-- Error -->
    <div class="help-block with-errors"></div>
</div>

<div class="form-group">
    <label for="opndate">Opening Date</label>
    <input type="date" class="form-control" name="Opendate" readonly="readonly" value="<?php echo $Opendate; ?>">

   <!-- <input type="date" value="<?php echo date('Y-m-d'); ?>" >  -->

   <!-- <input type="date" placeholder="Open date - YYYY/MM/DD" name="date" > -->
</div>

<div class="form-group">
    <label for="clsdate">Closing Date</label>
    <input type="date" class="form-control" id="inputDate" name="Closedate" value="<?php echo $Closedate; ?>" required>

    <!-- Error -->
    <div class="help-block with-errors"></div>
</div>

<div class="form-group"> 
   <label for="img">Advertisement</label>
   <input type="file" name="Advertisement" class="form-control" Id="Advertisement" accept="image/x-png,image/jpeg">
   <!-- <input type="file" name="fileToUpload" id="fileToUpload" >  -->
   <!-- <input type="submit" value="Upload Image" name="submit">    -->
    

</div>

<div class="form-group">
    <button class="btn btn-success btn-block" type="submit" name="update">Update</button>
</div>

</form>
         </div>
    </div>
</div>
<!--back to top -->
<a id="back-to-top" href="#" class="btn btn-dark btn-lg back-to-top" style='background-color:#00FEDE' role="button"><i class="fas fa-chevron-up" style="color:black"></i></a>
  
<?php include('footer1.php'); ?>

</body>

</html>
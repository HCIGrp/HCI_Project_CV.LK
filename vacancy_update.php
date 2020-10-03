
<?php include('config_vacancy.php'); ?>


<?php 
	if (isset($_GET['edit'])) {
		$Id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM vacancy_ad WHERE Id=$Id");

		if (count($record) == 1 ) {
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
        <title>Vacancy Advertisement Publish</title>

        <!-- Bootstrap CSS -->
     <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" /> -->
        <link rel='stylesheet' type='text/css' href='css/vacancy.css'/>
        <link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'/>
        <script src="js/jquery-3.5.1.min.js"></script>

      <!--  <link type='text' href='inc/config_vacancy.php'/>  -->
    </head>
<body style="background-color:#EDC7B7;">
<?php include('header.php'); ?>

<!-- $date = DateTime::createFromFormat('d/m/Y', date);  -->

<form action="config_vacancy.php" method="post" enctype="multipart/form-data">
  

 <!-- <div class="container">       -->

 <div class="input-group">
<input type="hidden" name="Id" value="<?php echo $Id; ?>">
</div>

 <div class="input-group">   
    <label for="position">Position</label>
    <input type="text" name="Position" value="<?php echo $Position; ?>">
   <!-- <input type="text" placeholder="Enter position" name="Position" required>  -->
</div>

<div class="input-group">
    <label for="opndate">Opening Date</label>
    <input type="date" name="Opendate" readonly="readonly" value="<?php echo $Opendate; ?>">

   <!-- <input type="date" value="<?php echo date('Y-m-d'); ?>" >  -->

   <!-- <input type="date" placeholder="Open date - YYYY/MM/DD" name="date" > -->
</div>

<div class="input-group">
    <label for="clsdate">Closing Date</label>
    <input type="date" name="Closedate" value="<?php echo $Closedate; ?>">
</div>

<div class="input-group">
    <label for="img">Select image to upload</label>
     <input type="file" name="Advertisement" accept="image/x-png,image/jpeg" />
   <!-- <input type="file" name="fileToUpload" id="fileToUpload" >  -->
   <!-- <input type="submit" value="Upload Image" name="submit">    -->
    </form>

    <div class="input-group">
    <button class="btn btn-success" type="submit" name="update">Update</button>
    </div>
</div>
</div>

</form>

</body>
</html>
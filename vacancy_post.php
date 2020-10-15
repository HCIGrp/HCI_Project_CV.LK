
<?php include('config_vacancy.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Vacancy Advertisement Publish</title>
        <!-- Bootstrap CSS -->
       <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" /> -->
        <link rel='stylesheet' type='text/css' href='css/vacancy.css'/>
        <link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'/>
        <script src="js/jquery-3.5.1.min.js"></script>
    </head>
<body style="background-color:;">
<?php include('header.php'); ?>

<!-- $date = DateTime::createFromFormat('d/m/Y', date);  -->

<form action="config_vacancy.php" method="post" enctype="multipart/form-data">
  

 <!-- <div class="container">       -->

 <div class="input-group">   
    <label for="position">Position</label>
    <input type="text" placeholder="Enter position" onfocus="this.placeholder =''" onblur="this.placeholder = 'Enter position'" name="Position" required> 
</div>

<div class="input-group">
    <label for="opndate">Opening Date</label>
    <?php $dat = date('Y-m-d'); ?>
    <input type="date" readonly="readonly" value="<?php echo $dat ?>" >  <!-- disabled="disabled"-->

   <!-- <input type="date" placeholder="Open date - YYYY/MM/DD" name="date" > -->
</div>

<div class="input-group">
    <label for="clsdate">Closing Date</label>
    <input type="date" name="Closedate" required>
</div>

<div class="input-group">
    <label for="img">Select image to upload</label>
  <!--  <img src="images/avatar.jpg" onClick="triggerClick()" id="profileDisplay"> --> <!-- newly added field-->
     <input type="file" name="Advertisement" Id="Advertisement" accept="image/x-png,image/jpeg" />
   <!-- <input type="file" name="fileToUpload" id="fileToUpload" >  -->
   <!-- <input type="submit" value="Upload Image" name="submit">    -->

    <div class="input-group">
        <button class="btn btn-primary" type="submit" name="save">Save</button>
    </div>
</div>
</div>
<button class="btn btn-info" type="submit" name="view" onclick="location.href='vacancy_details.php'" align-items="center;" >View Vacancies</button>

</form>

<?php include('footer1.php'); ?>
</body>

</html>

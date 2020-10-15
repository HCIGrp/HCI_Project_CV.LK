
<?php include('config_promotions.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Advertisement Publish</title>
        <!-- Bootstrap CSS -->
       <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" /> -->
      <!--  <link rel='stylesheet' type='text/css' href='css/vacancy.css'/>-->
        <link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'/>
        <script src="js/jquery-3.5.1.min.js"></script>
    </head>
<body style="background-color: #ebebe0">
<?php include('header.php'); ?>

<!-- $date = DateTime::createFromFormat('d/m/Y', date);  -->

<form action="config_promotions.php" method="post" enctype="multipart/form-data" style="width: 45%;
        margin: 50px auto;
        text-align: left;
        padding: 20px; 
        border: 1px solid black; 
        border-radius: 5px;">
  

 <!-- <div class="container">       -->

 <div class="input-group" style="margin: 12px 0px 10px 0px;
        color: black;">   
    <label for="company" style="display: block;
        text-align: left;
        margin: 3px; margin: 12px 0px 10px 0px;
        color: black;">Company Name</label>
    <input  style=" height: 40px;
        width: 95%;
        padding: 4px 10px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid gray;" type="text" placeholder="Enter company" onfocus="this.placeholder =''" onblur="this.placeholder = 'Enter company'" name="Company" required> 
</div>



<div class="input-group">
    <label for="publisheddate" style="display: block;
        text-align: left;
        margin: 3px; margin: 12px 0px 10px 0px;
        color: black;">Published Date</label>
    <input style=" height: 40px;
        width: 95%;
        padding: 4px 10px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid gray;" type="date" name="Publisheddate" required>
</div>

<div class="input-group">
    <label for="img" style="display: block;
        text-align: left;
        margin: 3px; margin: 12px 0px 10px 0px;
        color: black;">Select promotion image to upload</label>
  <!--  <img src="images/avatar.jpg" onClick="triggerClick()" id="profileDisplay"> --> <!-- newly added field-->
     <input style=" height: 40px;
        width: 95%;
        padding: 4px 10px;
        font-size: 16px;
        border-radius: 5px;
        background-color: white;
        border: 1px solid gray;" type="file" name="Advertisement" Id="Advertisement" accept="image/x-png,image/jpeg" />
   <!-- <input type="file" name="fileToUpload" id="fileToUpload" >  -->
   <!-- <input type="submit" value="Upload Image" name="submit">    -->

    <div class="input-group">
        <button class="btn btn-primary" type="submit" name="save" style= "color: white; padding: 10px;
    font-size: 15px;
    background: #004d00;
    border: none;
    border-radius: 5px;
    top: 191px;
    left: 420px;
    right: -420px;
    bottom: -191px; display: block;
        text-align: left;
        margin: 3px; margin: 12px 0px 10px 0px;
        ">Save</button>
    </div>
</div>
</div>
<!--<button style="padding: 10px;
        font-size: 15px;
        color: white;
        background: #008000;
        border: none;
        border-radius: 5px;" class="btn btn-info" type="submit" name="view" onclick="location.href='promotions.php'" align-items="center;" >View Promotions</button>-->

</form>

</body>
</html>

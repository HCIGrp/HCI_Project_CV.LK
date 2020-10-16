
<?php include('config_vacancy.php'); ?>


<?php
 $results = mysqli_query($db, "SELECT * FROM vacancy_ad"); 
 //$user_ad = mysqli_fetch_all($results,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
    <head>   
        <title>Published vacancies</title>
 <!-- Bootstrap CSS -->
 <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
<link rel='stylesheet' type='text/css' href='css/vacancy.css' />
<link rel='stylesheet' type='text/css' href='css/bg.css'/>
<link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'/>
<script src="js/jquery-3.5.1.min.js"></script>

<script type='text/javascript' src="js/back_2top.js"></script>    
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>

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
<?php if(! empty($_SESSION)) {?>
    <?php include('feedback-btn.php'); ?>
  <?php } ?> 

<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>

<?php if (isset($_SESSION['message1'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message1']; 
			unset($_SESSION['message1']);
		?>
	</div>
<?php endif ?>

<?php if (isset($_SESSION['message2'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message2']; 
			unset($_SESSION['message2']);
		?>
	</div>
<?php endif ?>
<br>
<table>
    <thead style="background-color:white;color:black">
        <tr>
            <th>Company</th>
            <th>Position</th>
            <th>Opening Date</th>
            <th>Closing Date</th>
            <th>Advertisement</th>
            <th colspan="2">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAction</th>
        </tr>
    </thead>

    <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
            <td><?php echo $row['Company']; ?></td>
            <td><?php echo $row['Position']; ?></td>
            <td><?php echo $row['Opendate']; ?></td>
            <td><?php echo $row['Closedate']; ?></td>
           <td><img src="<?php echo 'images/ad1.png' ?>" width="80" height="80" alt="Processing"></td>
         <!--   <td> <img src="<?php echo 'images/ad1.png' ?>" width="80" height="80" alt="Processing"> </td>-->
         <!-- <td><img src="upload/<?php echo $row['Id']; ?>" width="80" height="80" alt="Processing"> </td>    -->
       <!--  <td><img src='./vacancy_advertisements/ $row['Advertisement']; ?>" width="80" height="80" alt="Processing"> </td>    -->
         
            <td>
                <button onclick="location.href='vacancy_update.php?edit=<?php echo $row['Id']; ?>'" class="btn btn-warning" >Edit</button>
               <!-- <a href="vacancy_update.php?edit=<?php echo $row['Id']; ?>" class="edit_btn" >Edit</a> -->
            </td>

            <td>
                <button onclick="location.href='vacancy_details.php?del=<?php echo $row['Id']; ?>'" class="btn btn-danger" name="del">Delete</button>
               <!-- <a href="vacancy_details.php?del=<?php echo $row['Id']; ?>" class="del_btn" >Delete</a> -->
            </td>
        </tr>
    <?php } ?>
    </table>

<script type="text/javascript">
   /* $(".remove").click(function(){
        var Id = $(this).parents("tr").attr("Id");


        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
               url: '/config_vacancy.php',
               type: 'GET',
               data: {Id: Id},
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                    $("#"+Id).remove();
                    alert("Record removed successfully");  
               }
            });
        }
    });
*/
$(function() {
// setTimeout() function will be fired after page is loaded
// it will wait for 5 sec. and then will fire
// $("#successMessage").hide() function
    
    $(".msg").fadeOut(10000);

});

</script>

<!--back to top -->
<a id="back-to-top" href="#" class="btn btn-dark btn-lg back-to-top" style='background-color:#00FEDE' role="button"><i class="fas fa-chevron-up" style="color:black"></i></a>
  
<?php include('footer1.php'); ?>
</body>
</html>

<?php include('config_promotions.php'); ?>


<?php
 $results = mysqli_query($db, "SELECT * FROM promotion_ad"); 
 //$user_ad = mysqli_fetch_all($results,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
    <head>   
        <title>Published Information</title>
 <!-- Bootstrap CSS -->
 <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
<!--<link rel='stylesheet' type='text/css' href='css/vacancy.css' />-->
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
<button style="padding: 15px;
        font-size: 15px;
        color: white;
        background: #008000;
        border: none;
        border-radius: 5px;
        margin: 10px 1140px" onclick="location.href='promotion_post.php'" align-items="center;" >Add Promotions</button>



<?php if (isset($_SESSION['message'])): ?>
	<div class="msg" style="margin: 30px auto; 
        padding: 10px; 
        border-radius: 5px; 
        color: #3c763d; 
        background: #dff0d8; 
        border: 1px solid #3c763d;
        width: 50%;
        text-align: center;">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>

<?php if (isset($_SESSION['message2'])): ?>
	<div class="msg" style="margin: 30px auto; 
        padding: 10px; 
        border-radius: 5px; 
        color: #3c763d; 
        background: #dff0d8; 
        border: 1px solid #3c763d;
        width: 50%;
        text-align: center;">
		<?php 
			echo $_SESSION['message2']; 
			unset($_SESSION['message2']);
		?>
	</div>
<?php endif ?>
<br>
<table style="width: 80%;
        margin: 30px auto;
        border-collapse: collapse;
        text-align: left;"> 
    <thead style="background-color:black;color:white">
        <tr style="border-bottom: 1px solid #cbcbcb;">
            <th style="border: none;
        height: 30px;
        padding: 2px;">Company</th>
            <th style="border: none;
        height: 30px;
        padding: 2px;">Published Date</th>
            <th style="border: none;
        height: 30px;
        padding: 2px;">Advertisement</th>
            <th colspan="2" style="border: none;
        height: 30px;
        padding: 2px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAction</th>
        </tr>
    </thead>

    <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
            <td><?php echo $row['Company']; ?></td>
            <td><?php echo $row['Publisheddate']; ?></td>
            <td> <img src="<?php echo 'images/ad02.png' ?>" width="80" height="80" alt="Processing"> </td>
         <!-- <td><img src="upload/<?php echo $row['Id']; ?>" width="80" height="80" alt="Processing"> </td>    -->

           

            <td style="border: none;
        height: 30px;
        padding: 2px;">
                <button onclick="location.href='promotions.php?del=<?php echo $row['Id']; ?>'" class="btn btn-danger" name="del" style="text-decoration: none;
        padding: 2px 5px;
        color: white;
        border-radius: 3px;
        background: red;
        border: none;">Delete</button>
               <!-- <a href="promotions.php?del=<?php echo $row['Id']; ?>" class="del_btn" >Delete</a> -->
            </td>
        </tr>
    <?php } ?>
    </table>

    <script type="text/javascript">
    /*$(".remove").click(function(){
        var Id = $(this).parents("tr").attr("Id");


        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
               url: '/config_promotions.php',
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

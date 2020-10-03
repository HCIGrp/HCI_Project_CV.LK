
<?php include('config_vacancy.php'); ?>


<?php
 $results = mysqli_query($db, "SELECT * FROM vacancy_ad"); 
 //$user_ad = mysqli_fetch_all($results,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
    <head>   
        <title>Published Information</title>
 <!-- Bootstrap CSS -->
 <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
<link rel='stylesheet' type='text/css' href='css/vacancy.css' />
<link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'/>
<script src="js/jquery-3.5.1.min.js"></script>
</head>
<body style="background-color:#EDC7B7;">
<?php include('header.php'); ?>

</body>
</html>

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

<table>
    <thead>
        <tr>
            <th>Company</th>
            <th>Position</th>
            <th>Opening Date</th>
            <th>Closing Date</th>
            <th>Advertisement</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>

    <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
            <td><?php echo $row['Company']; ?></td>
            <td><?php echo $row['Position']; ?></td>
            <td><?php echo $row['Opendate']; ?></td>
            <td><?php echo $row['Closedate']; ?></td>
            <td> <img src="<?php echo 'images/' . $user_ad['Advertisement'] ?>" width="80" height="80" alt=""> </td>

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
    $(".remove").click(function(){
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


</script>

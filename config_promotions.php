
<?php
    session_start();
    $db = mysqli_connect('localhost','root','','hci');

    // initialize variables
    $Company = "";
    $Publisheddate = "";
   // $ad_path = $mysqli->real_escape_string('image/'.$_FILES['myImage']['name']);
    $Advertisement = "";
    $Id = 0;
    

    //copy image to images/ folder
  /*  if (copy($_FILES['myImage']['tmp_name'], $ad_path)) {
        $_SESSION['Position'] = $Position;
        $_SESSION['myImage'] = $ad_path;
    }
*/

if (isset($_POST['save'])) {
		$Company = $_POST['Company'];
		$Publisheddate = $_POST['Publisheddate'];
        $Advertisement = $_POST['Advertisement'];

        mysqli_query($db, "INSERT INTO promotion_ad (Company, Publisheddate, Advertisement)"
        . "VALUES ('$Company', '$Publisheddate', '$Advertisement')");
        $_SESSION['message'] = "Published Successfully";
        header('location: promotions.php');
    }

  /*  if (isset($_POST['update'])) {
        $Id = $_POST['Id'];
        $Position = $_POST['Position'];
        $Opendate = $_POST['Opendate'];
        $Closedate = $_POST['Closedate'];
        $Advertisement = $_POST['Advertisement'];
    
        mysqli_query($db, "UPDATE vacancy_ad SET Position='$Position', Closedate='$Closedate', Advertisement='$Advertisement' WHERE Id=$Id");
        $_SESSION['message1'] = "Updated Successfully!"; 
        header('location: vacancy_details.php');
    }*/

    if (isset($_GET['del'])) {
        $Id = $_GET['del'];

        mysqli_query($db, "DELETE FROM promotion_ad WHERE Id=$Id");
        $_SESSION['message2'] = "Removed Successfully!"; 
        header('location: promotions.php');
    }

    ?>
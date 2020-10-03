
<?php
    session_start();
    $db = mysqli_connect('localhost','root','','hci');

    // initialize variables
    $Company = "";
    $Position = "";
    $Opendate = "";
    $Closedate = "";
   // $ad_path = $mysqli->real_escape_string('image/'.$_FILES['myImage']['name']);
    $Advertisement = "";
    $Id = 0;
    $update = false;

    //copy image to images/ folder
  /*  if (copy($_FILES['myImage']['tmp_name'], $ad_path)) {
        $_SESSION['Position'] = $Position;
        $_SESSION['myImage'] = $ad_path;
    }
*/

if (isset($_POST['save'])) {
		$Company = $_POST['Company'];
		$Position = $_POST['Position'];
		$Opendate = $_POST['Opendate'];
		$Closedate = $_POST['Closedate'];
        $Advertisement = $_POST['Advertisement'];

        mysqli_query($db, "INSERT INTO vacancy_ad (Company, Position, Opendate, Closedate, Advertisement)"
        . "VALUES ('ABC (Pvt) Ltd', '$Position', curdate(), '$Closedate', '$Advertisement')");
        $_SESSION['message'] = "Published Successfully";
        header('location: vacancy_details.php');
    }

    if (isset($_POST['update'])) {
        $Id = $_POST['Id'];
        $Position = $_POST['Position'];
        $Opendate = $_POST['Opendate'];
        $Closedate = $_POST['Closedate'];
        $Advertisement = $_POST['Advertisement'];
    
        mysqli_query($db, "UPDATE vacancy_ad SET Position='$Position', Closedate='$Closedate', Advertisement='$Advertisement' WHERE Id=$Id");
        $_SESSION['message1'] = "Updated Successfully!"; 
        header('location: vacancy_details.php');
    }

    if (isset($_GET['del'])) {
        $Id = $_GET['del'];

        mysqli_query($db, "DELETE FROM vacancy_ad WHERE Id=$Id");
        $_SESSION['message2'] = "Removed Successfully!"; 
        header('location: vacancy_details.php');
    }

    ?>
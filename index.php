<?php
include("./inc/config.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel='stylesheet' type='text/css' href='table_css/table_category.css' />
</head>
<?php include 'header.php'; ?>

<body>
    <!-- punsala update-->
    <!-- new update-->










    <div class="container-fluid">


        <table class="table">
            <thead class="thead-dark">
                <tr>



                </tr>
            </thead>

            <tbody class="text-dark">
            <tr>
                <?php

                $sql = "SELECT * FROM job_categories";
                $result = $conn->query($sql);
               

                if ($result->num_rows > 0) {
                    $count = 1;

                    while ($row = $result->fetch_assoc()) {

                ?>
                
                      

                        <?php
                            if ($count <= 4) {
                                echo $count;
                            ?>

                        <td>
                         <a href=""><?php echo $row['description'] ?> </a> </td>  
                      
                     
                       
                       <?php 
                               if($count == 4){ ?>

                               </tr>
                             <?php   } 
                       
                       ?>             



<?php }else{ ?>


  
     
        <td>  <?php echo $row['description'] ?>  </td>  


<?php }?>



            <?php
          
            $count ++;

                    }
                } else {
                    echo "0 Result";
                }

            ?>


         
            </tbody>
        </table>












    </div>

</body>

<?php include 'footer.php'; ?>



</html>
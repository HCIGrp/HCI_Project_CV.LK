<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forieng Vacancy</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/forien_va.css" />
    

        <link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'/>
        <script src="js/jquery-3.5.1.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<?php  include 'header.php';?>
<body>
    <div class="container-fluid">
    <hr>
        <div class="row">
            <div class="col-sm-12">

            <form class="search" action="Forieng_vacancy.php" >
             <input type="text" id="myInput" onkeyup="myFunction()" placeholder="   Search.." name="search2"  class="fa fa-search" >        
            </form>
       
            <hr>

            <table class="table2" id="myTable">

            <tr>
                <th>Referene</th>
                <th>Company</th>
                <th>Position</th>
                <th>Opening Date</th>
                <th>Closing Date</th>
                <th>Details</th>


            </tr>
            <tr>
                <td>AB1023</td>
                <td>Consolidated Printing Pvt Ltd</td>
                <td>Accountant</td>
                <td>02/09/2020</td>
                <td>20/12/2020</td>
                <td><a href='apply_job.php'>Apply</a></td>


            </tr>
            <tr>
                <td>6572</td>
                <td>XYZ (Pvt) Ltd</td>
                <td>Engineer</td>
                <td>02/09/2020</td>
                <td>25/09/2020</td>
                <td><a href='#'>Apply</a></td>

            </tr>
            <tr>
                <td>7865</td>
                <td>Yum Yum (Pvt) Ltd</td>
                <td>Software Engineer</td>
                <td>02/09/2020</td>
                <td>01/10/2020</td>
                <td><a href='#'>Apply</a></td>

            </tr>
            <tr>
                <td>4521</td>
                <td>Telco</td>
                <td>Tech Lead</td>
                <td>05/09/2020</td>
                <td>01/10/2020</td>
                <td><a href='#'>Apply</a></td>

            </tr>
</table>

        <script>
        function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[2];
            if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
            }       
        }
        }
        </script>


            </div>
        </div>
    </div>

</body>

<?php include('footer1.php'); ?>

</html>
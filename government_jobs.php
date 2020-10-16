<!DOCTYPE html>
<html>
<head>
<title>Government Jobs</title>
<link rel="stylesheet" href="css\government_jobsCSS/government_jobs.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

</style>
</head>
<body>

<?php  include 'header.php';?>

<!-- <div class="bg-image" style="background-image: url('images/bg-01.jpg');"> -->

<h2 style="text-align:center">Government Vacancies</h2>
<br>

<div >
<form class="search" action="government_jobs.php" >
             <input type="text" id="myInput" onkeyup="myFunction()" placeholder="   Search.." name="search2"  class="fa fa-search" style="width:20%">        
            </form>
</div>


<table class="table2" id="myTable">


<tr>
                <th></th>
                <th>Company</th>
                <th>Position</th>
                <th>Opening Date</th>
                <th>Closing Date</th>
                <th></th>


            </tr>


        <tr>
            <div class="column"> 
            <div class="card">
                <div class="container">
                     <td><img src="css\government_jobsCSS/library1.jpg" alt="Jane" style="width:100%" ></td> 
                    <td>Central Environmental Authority</td>
                    <td>Librarian</td>
                    <td>19/10/2020</td>
                    <td>18/11/2020</td>
                    <td><a href='apply_job.php'><button class="button">Apply</button></a></td></div>
                </div>
            </div>
            </div>
         </tr>
           

         <tr>

<div class="column"> 
<div class="card">
    <div class="container">
         <td><img src="css\government_jobsCSS/projectmanager1.jpg" alt="Jane" style="width:100%"></td> 
        <td>Eastern University</td>
        <td>Project manager</td>
        <td>08/10/2020</td>
        <td>07/11/2020</td>
        <td><a href='apply_job.php'><button class="button">Apply</button></a></td></div>
    </div>
</div>
</div>
</tr>

<tr>

<div class="column"> 
<div class="card">
    <div class="container">
         <td><img src="css\government_jobsCSS/Analyst1.jpg" alt="Jane" style="width:100%"></td> 
        <td>Lanka Electricity Company</td>
        <td>Analyst Programmer</td>
        <td>02/10/2020</td>
        <td>01/11/2020</td>
        <td><a href='apply_job.php'><button class="button">Apply</button></a></td></div>
    </div>
</div>
</div>
</tr>

<tr>

<div class="column"> 
<div class="card">
    <div class="container">
         <td><img src="css\government_jobsCSS/civil-engineering.jpg" alt="Jane" style="width:100%"></td> 
        <td>Ministry of Agriculture</td>
        <td>Senior Enginer (PS3)</td>
        <td>01/10/2020</td>
        <td>01/11/2020</td>
        <td><a href='apply_job.php'><button class="button">Apply</button></a></td></div>
    </div>
</div>
</div>
</tr>

<tr>

<div class="column"> 
<div class="card">
    <div class="container">
         <td><img src="css\government_jobsCSS/it officer.jpg" alt="Jane" style="width:100%"></td> 
        <td>Ministry of Finance</td>
        <td>ICT Officer</td>
        <td>28/09/2020</td>
        <td>27/10/2020</td>
        <td><a href='apply_job.php'><button class="button">Apply</button></a></td></div>
    </div>
</div>
</div>
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


</body>
<?php include('footer1.php'); ?>
</html>








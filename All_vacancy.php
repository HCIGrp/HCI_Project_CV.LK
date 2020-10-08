

<!DOCTYPE html>
<html>
<head>

<link rel='stylesheet' type='text/css' href='table_css/table_category.css'/>
        <link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'/>
        <script src="js/jquery-3.5.1.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>
<title>Local vacancies</title>
</head>
<body style="background-color:;">
<?php include('header.php'); ?>

    <br><br>
 
<table class="table1">
  <tr>
    <td><a href="All_vacancy.php" onclick="check();">IT/web/Designing/Develop<a></td>
    <td><a href="#">Banking/Insurance</a></td>
    <td><a href="#">Hardware/Network/System</a></td>
    <td><a href="#">Accounting Audit/Finance</a></td>
    <td><a href="#">HR/Training</a></td>
  </tr>
  <tr>
  <td><a href="#">Management/Analysts</a></td>
    <td><a href="#">Production/Quality</a></td>
    <td><a href="#">Civil Construction/CAD</a></td>
    <td><a href="#">General/Secretary/Reception</a></td>
    <td><a href="#">Media /Advertising</a></td>
  </tr>
  <tr>
  <td><a href="#">Eng-Mech/Auto / Elec</a></td>
    <td><a href="#">Teachers/Lec/Acdemic</a></td>
    <td><a href="#">Manufacturing/Operations</a></td>
    <td><a href="#">Medical/Ayurvedic/Nurses</a></td>
    <td><a href="#">Travel/Tourism/Hotel</a></td>
  </tr>
  <tr>
  <td><a href="#">Agriculture/Dairy/Environment</a></td>
    <td><a href="#">Textile/Apparel/Industry</a></td>
    <td><a href="#">Beauty/Cosmetics/Fashion</a></td>
    <td><a href="#">Sales/Marketing/Merchand</a></td>
    <td><a href="#">Migrate/Foreign</a></td>
  </tr>
  <tr>
  <td><a href="#">Customer Care/Call Center</td>
    <td><a href="#">Legal/Law</td>
    <td><a href="#">Office/Clerical/Coordinate</td>
    <td><a href="#">Logistics/Transp/Drivers</td>
    <td><a href="#">Airline/Shipping/Cargo</td>
  </tr>
  <tr>
  <td><a href="#">Research/Project</a></td>
    <td><a href="#">BPO/KPO</a></td>
    <td><a href="#">Store-keepers/Data Entry</a></td>
    <td><a href="#">Electric/Mechanic/Tech</a></td>
    <td><a href="#">Government Jobs</a></td>
  </tr>
</table>



<br><br><br>
<form class="example" action="All_vacancy.php" style="margin:left;max-width:300px">
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search.." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
<br>
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
    <td>4521</td>
    <td>ABC (Pvt) Ltd</td>
    <td>Senoir Software Engineer</td>
    <td>02/09/2020</td>
    <td>01/10/2020</td>
    <td><a href='#'>Apply</a></td>


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
<?php include('footer1.php'); ?>

</body>
</html>
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

<div class="search">
<form class="search" action="government_jobs.php" >
             <input type="text" id="myInput" onkeyup="myFunction()" placeholder="   Search.." name="search2"  class="fa fa-search" >        
            </form>
</div>

<h2 style="text-align:center">Our Team</h2>

<table>


<div class="row">
  <div class="column">
    <div class="card">
      <img src="css\government_jobsCSS/project-manager.jpg" alt="Jane" style="width:100%">
      <div class="container">
      <h2>Project Manager</h2>
        <p class="title">Eastern University</p>
        <p>Open Date - 09/10/2020</p>
        <p>Closing Date - 16/10/2020</p>
        <p><button class="button">Apply</button></p>
      </div>
    </div>
  </div>
 





  <div class="column">
    <div class="card">
      <img src="css\government_jobsCSS/librarian - Copy.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Librarian</h2>
        <p class="title">Central Environmental Authority</p>
        <p>Open Date - 09/10/2020</p>
        <p>Closing Date - 16/10/2020</p>
        <p><button class="button">Apply</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="css\government_jobsCSS/Analyst.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Analyst Programmer</h2>
        <p class="title">Lanka Electricity Company</p>
        <p>Open Date - 19/10/2020</p>
        <p>Closing Date - 29/10/2020</p>
        <p><button class="button">Apply</button></p>
      </div>
    </div>
  </div>
</div>






<div class="row">
  <div class="column">
    <div class="card">
      <img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Jane Doe</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>jane@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="/w3images/team2.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>mike@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  

  <tr>
      <td>
  <div class="column">
    <div class="card">
      <img src="/w3images/team3.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>john@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
</td>
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
</html>








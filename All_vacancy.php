<!DOCTYPE html>
<html>
<head>

        <link rel='stylesheet' type='text/css' href='table_css/table_category.css'/>
        <link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'/>
        <link rel='stylesheet' type='text/css' href='css/jbcategory_btn.css'/>
        <link rel='stylesheet' type='text/css' href='css/bg.css'/>
        <script src="js/jquery-3.5.1.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        <!-- Bootstrap 4-->
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script> 
        
        <script type='text/javascript' src="js/back_2top.js"></script>    

        <link rel="stylesheet" type="text/css" href="searchfield.css"> 
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- Go to specific table -->
        <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script> <!-- JQuery CDN -->

<style>
/*Transparent content */

.content {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
  margin: 55vh 0;
  text-align: center;
}

/* For scroll down */
/*end */

table.table3 {
  display: none;
}
/* Background Blur */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.bg-imagee {
  /* The image used */
  background-image: url("images/bge.jpg");
  
  /* Add the blur effect */
/*  filter: blur(8px);
  -webkit-filter: blur(8px);*/
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.bg-textt {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #00fede;  /*#f1f1f1 */
  border-radius: 5px;
  position: absolute;
  top: 80%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 90%;
  padding: 130px;
  text-align: center;
}

/* End css for bg blur */

/* for search */
/*
form.example input[type=text] {
  padding: 10px;
  font-size: 14px;
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
  font-size: 14px;
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

*/

/* End */

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
<title>All vacancies</title>
</head>
<?php include('header.php'); ?>
<body>
<?php include('feedback-btn.php'); ?>

 <!--Blur background-->
  <!--  <br><br> -->
 <div class="bg-imagee"></div>

 <div class="content">
    <h1>Best Job opportunities by One Click</h1>
  </div>
 <!-- <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">

 <div class="btn-group mr-2" role="group" aria-label="First group">
 class="btn btn-secondary"
 -->
 <div class="bg-textt">

<button type="button" id="btn1" onclick="hide_all_tables();show_table(1);" class="btn-ct1">Information Technology</button>
<button type="button" id="btn2" onclick="hide_all_tables();show_table(2);" class="btn-ct2">Banking/Insurance</button>
<button type="submit" id="btn3" onclick="hide_all_tables();show_table(3);" class="btn-ct3">Hardware/Network</button>
<button type="submit" id="btn4" onclick="hide_all_tables();show_table(4);" class="btn-ct4">Accounting/Finance</button>
<button type="submit" id="btn5" onclick="hide_all_tables();show_table(5);" class="btn-ct5">HR/Training</button>
<button type="submit" id="btn6" onclick="hide_all_tables();show_table(6);" class="btn-ct6">Management/Analysts</button>
<button type="submit" id="btn7" onclick="hide_all_tables();show_table(8);" class="btn-ct7">civil Construction/CAD</button>
<button type="submit" id="btn8" onclick="hide_all_tables();show_table(9);" class="btn-ct8">Secretary/Reception</button>
<button type="submit" id="btn9" onclick="hide_all_tables();show_table(10);" class="btn-ct9">Media/Advertising</button>
<button type="submit" id="btn10" onclick="hide_all_tables();show_table(11);" class="btn-ct10">Mac-Eng/Automobile</button>
<button type="submit" id="btn11" onclick="hide_all_tables();show_table(12);" class="btn-ct11">Teachers/Lecturers</button>
<button type="submit" id="btn12" onclick="hide_all_tables();show_table(13);" class="btn-ct12">Manufacturing/Operations</button>
<button type="submit" id="btn13" onclick="hide_all_tables();show_table(14);" class="btn-ct13">Medical/Ayurvedic</button>
<button type="submit" id="btn14" onclick="hide_all_tables();show_table(15);" class="btn-ct14">Tourism/Hotel</button>
<button type="submit" id="btn15" onclick="hide_all_tables();show_table(16);" class="btn-ct15">Agriculture/Environment</button>
<button type="submit" id="btn16" onclick="hide_all_tables();show_table(17);" class="btn-ct16">Textile/Industry</button>
<button type="submit" id="btn17" onclick="hide_all_tables();show_table(18);" class="btn-ct17">Beauty/Cosmetics</button>
<button type="submit" id="btn18" onclick="hide_all_tables();show_table(19);" class="btn-ct18">Sales/Marketing</button>
<button type="submit" id="btn19" onclick="hide_all_tables();show_table(20);" class="btn-ct19">Migrate/Foreign</button>
<button type="submit" id="btn20" onclick="hide_all_tables();show_table(21);" class="btn-ct20">Customer Care/Call Center</button>
<button type="submit" id="btn21" onclick="hide_all_tables();show_table(22);" class="btn-ct21">Legal/Law</button>
<button type="submit" id="btn22" onclick="hide_all_tables();show_table(23);" class="btn-ct22">Office/Coordinate</button>
<button type="submit" id="btn23" onclick="hide_all_tables();show_table(24);" class="btn-ct23">Logistics/Drivers</button>
<button type="submit" id="btn24" onclick="hide_all_tables();show_table(25);" class="btn-ct24">Airline/Shipping</button>
<button type="submit" id="btn25" onclick="hide_all_tables();show_table(26);" class="btn-ct25">Research/Project</button>
<button type="submit" id="btn26" onclick="hide_all_tables();show_table(27);" class="btn-ct26">BPO/KPO</button>
<button type="submit" id="btn27" onclick="hide_all_tables();show_table(28);" class="btn-ct27">Store-keepers/Data Entry</button>
<button type="submit" id="btn28" onclick="hide_all_tables();show_table(29);" class="btn-ct28">Electric/Mechanic</button>
<button type="submit" id="btn29" onclick="hide_all_tables();show_table(7);" class="btn-ct29">Production/Quality</button>
<button type="submit" id="btn30" onclick="hide_all_tables();show_table(30);" class="btn-ct30">Security</button>

</div>
<div class="bg-image" style="background-image: url('images/bg-01.jpg');">

<br><br><br>

<!-- Search implementation -->
<!--
<form class="example" action="All_vacancy.php" style="margin:left;max-width:300px">
  <input type="text" id="myInput" onkeyup="myFunction();F1();F2();F3();F4();F5();F6();F7();F8();F9();F10();F11();F12();F13();F14();F15();F16();F17();F18();F19();F20();F21();F22();F23();F24();F25();F26();F27();F28();F29();F30();" placeholder="Search position" name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
<br>
-->
<div id="scrll" class="container">
  <input type="text" id="myInput" onkeyup="myFunctionn();F1();F2();F3();F4();F5();F6();F7();F8();F9();F10();F11();F12();F13();F14();F15();F16();F17();F18();F19();F20();F21();F22();F23();F24();F25();F26();F27();F28();F29();F30();" placeholder="Search Position">
  <div class="search"></div>
</div>


<table class="default" id="default_tab">
<thead>
  <tr>
    <th>Ref No.</th>
    <th>Employer</th>
    <th>Position</th>
    <th>Opening Date</th>
    <th>Closing Date</th>
    <th>Details</th>
  </tr>
</thead>

<tbody>
  <tr>
    <td>35237</td>
    <td>Finagle Lanka (Pvt) Ltd</td>
    <td>Crew Member</td>
    <td>07/10/2020</td>
    <td>06/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>
    <!--<td><a href='#'>View</a></td>-->


  </tr>
  <tr>
    <td>35238</td>
    <td>Company Name withheld</td>
    <td>Factory Manager</td>
    <td>07/10/2020</td>
    <td>06/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35239</td>
    <td>Sun Ray Enery (Pvt) Ltd</td>
    <td>Administrative Assistant - Male</td>
    <td>07/10/2020</td>
    <td>06/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35240</td>
    <td>Gamini Construction</td>
    <td>HR/Admin Officer</td>
    <td>07/10/2020</td>
    <td>06/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>
</tr>

<tr>
    <td>35241</td>
    <td>I S Pathiranage (Pvt) Ltd</td>
    <td>Technical Officer</td>
    <td>07/10/2020</td>
    <td>06/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>
</tr>

<tr>
    <td>35242</td>
    <td>Fintrex Finance Ltd</td>
    <td>Branch Manager - Kandy</td>
    <td>07/10/2020</td>
    <td>06/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>
</tr>

<tr>
    <td>35243</td>
    <td>Zentech Global</td>
    <td>Engineering Lead</td>
    <td>07/10/2020</td>
    <td>06/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>
</tr>

<tr>
    <td>35244</td>
    <td>Beam Hela Osu Lanka (Pvt) Ltd</td>
    <td>Sales Representatives</td>
    <td>06/10/2020</td>
    <td>05/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>
</tr>

<tr>
    <td>35245</td>
    <td>EPCI (Pvt) Ltd</td>
    <td>Quantity Surveyor - Male</td>
    <td>06/10/2020</td>
    <td>05/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>
</tr>

<tr>
    <td>35246</td>
    <td>Microtech Biological (Pvt) Ltd</td>
    <td>Marketing Executive</td>
    <td>06/10/2020</td>
    <td>05/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>
</tr>

<tr>
    <td>35247</td>
    <td>Edgeng (Pvt) Ltd</td>
    <td>Accounts Clerk</td>
    <td>06/10/2020</td>
    <td>29/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>
</tr>

<tr>
    <td>35248</td>
    <td>Euro Asia Packaging (Pvt) Ltd</td>
    <td>Book keeper / Sales Coordinator</td>
    <td>06/10/2020</td>
    <td>05/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>
</tr>

<tr>
    <td>35249</td>
    <td>Kandy Construction</td>
    <td>Project Engineer</td>
    <td>06/10/2020</td>
    <td>05/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>
</tr>

<tr>
    <td>35250</td>
    <td>Equaltee (Pvt) Ltd</td>
    <td>Quantity Surveyor - Male</td>
    <td>06/10/2020</td>
    <td>05/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>
</tr>

<tr>
    <td>35252</td>
    <td>Devi Trading Company</td>
    <td>Record Keeper</td>
    <td>14/10/2020</td>
    <td>13/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>
</tr>

<tr>
    <td>35253</td>
    <td>Devi Trading Company</td>
    <td>Cashier</td>
    <td>14/10/2020</td>
    <td>13/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>
</tr>

<tr>
    <td>35255</td>
    <td>Sri Lankan Granite & Marble</td>
    <td>Coordinator - Male</td>
    <td>14/10/2020</td>
    <td>13/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>
</tr>

<tr>
    <td>35256</td>
    <td>Sri Lankan Granite & Marble</td>
    <td>Showroom Marketing Executive - Female</td>
    <td>14/10/2020</td>
    <td>13/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>
</tr>

<tr>
    <td>35257</td>
    <td>S & K Construction Material (Pvt) Ltd</td>
    <td>HR & Payroll Executive</td>
    <td>14/10/2020</td>
    <td>13/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>
</tr>

<tr>
    <td>35258</td>
    <td>Samod Construction (Pvt) Ltd</td>
    <td>Technical Officer - Civil</td>
    <td>14/10/2020</td>
    <td>13/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>
</tr>

<tr>
    <td>35259</td>
    <td>Microtech Biological (Pvt) Ltd</td>
    <td>Biomedical Engineer</td>
    <td>13/10/2020</td>
    <td>12/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>
</tr>

<tr>
    <td>35260</td>
    <td>Expolanka (Pvt) Ltd</td>
    <td>Junior executive - Commercial</td>
    <td>12/10/2020</td>
    <td>11/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>
</tr><tr>
    <td>35262</td>
    <td>Rodney Foreign Employment Agency</td>
    <td>Mobile Phone Technician - Greece</td>
    <td>10/10/2020</td>
    <td>09/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>
</tr>

<tr>
    <td>35263</td>
    <td>VeracityAI</td>
    <td>Machine Learning Engineer</td>
    <td>10/10/2020</td>
    <td>05/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>
</tr>

<tr>
    <td>35264</td>
    <td>Jadon Software Solutions</td>
    <td>Wordpress Developers</td>
    <td>08/10/2020</td>
    <td>07/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>
</tr>

<tr style="border-bottom: 1px solid #FFFFFF">
    <td>35265</td>
    <td>Global Tote</td>
    <td>Customer Service Agent</td>
    <td>08/10/2020</td>
    <td>07/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>
</tr>

</tbody>
</table>


<table class="table3" id="table1">
<thead>
  <tr>
    <th>Ref No.</th>
    <th>Employer</th>
    <th>Position</th>
    <th>Opening Date</th>
    <th>Closing Date</th>
    <th>Details</th>
  </tr>

</thead>
  <tbody>
  <tr>
    <td>35280</td>
    <td>Zentech Global</td>
    <td>Engineering Lead</td>
    <td>07/10/2020</td>
    <td>06/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>


  </tr>
  <tr>
    <td>35285</td>
    <td>Javana Graphics (Pvt) Ltd</td>
    <td>Creative Graphic Designer</td>
    <td>02/10/2020</td>
    <td>01/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35340</td>
    <td>Effective Solutions (Pvt) Ltd</td>
    <td>Front End Developers</td>
    <td>30/09/2020</td>
    <td>29/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35343</td>
    <td>Colourcon (Pvt) Ltd</td>
    <td>Data Entry Operator cum Sales Coordinator</td>
    <td>25/09/2020</td>
    <td>24/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr style="border-bottom: 1px solid #FFFFFF">
    <td>35350</td>
    <td>Wiley</td>
    <td>Senior Data Engineer</td>
    <td>23/09/2020</td>
    <td>22/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

</tbody>
</table>

<table class="table3" id="table2">
<thead>
  <tr>
    <th>Ref No.</th>
    <th>Employer</th>
    <th>Position</th>
    <th>Opening Date</th>
    <th>Closing Date</th>
    <th>Details</th>
  </tr>

</thead>
  <tbody>
  <tr>
    <td>35466</td>
    <td>Ben Holdings (Pvt) Ltd</td>
    <td>Executive - Recovery</td>
    <td>30/09/2020</td>
    <td>29/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>


  </tr>
  <tr>
    <td>35530</td>
    <td>Fintrex Finance Ltd</td>
    <td>Senior Manager - Credit & Risk Management</td>
    <td>25/09/2020</td>
    <td>24/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35568</td>
    <td>AIA Insurance Lanka PLC</td>
    <td>Wealth Planner</td>
    <td>21/09/2020</td>
    <td>13/10/202</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35626</td>
    <td>Impra Tea</td>
    <td>Banking & Documentation Assistant</td>
    <td>16/09/2020</td>
    <td>15/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr>
    <td>35665</td>
    <td>Ideal Finance Ltd</td>
    <td>Recovery Officers</td>
    <td>11/09/2020</td>
    <td>10/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr>
    <td>35690</td>
    <td>Prime Residencies</td>
    <td>Banking & Documentation Assistant</td>
    <td>08/09/2020</td>
    <td>07/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr>
    <td>35694</td>
    <td>S & D Chemical (Pvt) Ltd</td>
    <td>B	Debt & Credit Controller</td>
    <td>04/09/2020</td>
    <td>03/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr style="border-bottom: 1px solid #FFFFFF">
    <td>35789</td>
    <td>Company Name withheld</td>
    <td>Farm Managers / Senior Agriculturalist</td>
    <td>31/08/2020</td>
    <td>30/09/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

</tbody>
</table>

<table class="table3" id="table3">
<thead>
  <tr>
    <th>Ref No.</th>
    <th>Employer</th>
    <th>Position</th>
    <th>Opening Date</th>
    <th>Closing Date</th>
    <th>Details</th>
  </tr>

</thead>
  <tbody>
  <tr>
    <td>35506</td>
    <td>Access Engineering PLC</td>
    <td>Junior Executive - Management Systems</td>
    <td>28/09/2020</td>
    <td>27/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>


  </tr>
  <tr>
    <td>35592</td>
    <td>Oak Intergrated Systems (Pvt) Ltd</td>
    <td>Network Engineer</td>
    <td>18/09/2020</td>
    <td>17/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35750</td>
    <td>NTP Ceylon (Pvt) Ltd</td>
    <td>Senior System Engineer</td>
    <td>14/09/2020</td>
    <td>13/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr style="border-bottom: 1px solid #FFFFFF">
    <td>35752</td>
    <td>We are Designers</td>
    <td>System Administrator</td>
    <td>10/09/2020</td>
    <td>09/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>
</tbody>
</table>

<table class="table3" id="table4">
<thead>
  <tr>
    <th>Ref No.</th>
    <th>Employer</th>
    <th>Position</th>
    <th>Opening Date</th>
    <th>Closing Date</th>
    <th>Details</th>
  </tr>

</thead>
  <tbody>
  <tr>
    <td>35755</td>
    <td>Edgeng (Pvt) Ltd</td>
    <td>Accounts Clerk</td>
    <td>06/10/2020</td>
    <td>29/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>


  </tr>
  <tr>
    <td>35756</td>
    <td>Winije International Company (Pvt) Ltd</td>
    <td>Accounts Assistant - Male</td>
    <td>06/10/2020</td>
    <td>05/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35759</td>
    <td>Sierra System Engineering (Pvt) Ltd</td>
    <td>Accountant</td>
    <td>05/10/2020</td>
    <td>04/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35761</td>
    <td>Atukorala Fashion</td>
    <td>Accounts Assistant (Female)</td>
    <td>02/10/2020</td>
    <td>04/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr style="border-bottom: 1px solid #FFFFFF">
    <td>35763</td>
    <td>Employees' Trust Fund Board</td>
    <td>Deputy General Manager (Finance)</td>
    <td>30/09/2020</td>
    <td>12/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

</tbody>
</table>

<table class="table3" id="table5">
<thead>
  <tr>
    <th>Ref No.</th>
    <th>Employer</th>
    <th>Position</th>
    <th>Opening Date</th>
    <th>Closing Date</th>
    <th>Details</th>
  </tr>

</thead>
  <tbody>
  <tr>
    <td>35765</td>
    <td>Sun Ray Enery (Pvt) Ltd</td>
    <td>Administrative Assistant - Male</td>
    <td>07/10/2020</td>
    <td>06/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>


  </tr>
  <tr>
    <td>35767</td>
    <td>Gamini Construction</td>
    <td>HR/Admin Officer</td>
    <td>07/10/2020</td>
    <td>06/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35769</td>
    <td>JNS Management Service (Pvt) Ltd</td>
    <td>Officer - Pay roll & Admin</td>
    <td>02/10/2020</td>
    <td>01/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr style="border-bottom: 1px solid #FFFFFF">
    <td>35773</td>
    <td>Diesel & Motor Engineering PLC</td>
    <td>Executive - Human Resources</td>
    <td>02/10/2020</td>
    <td>01/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>
</tbody>
</table>

<table class="table3" id="table6">
<thead>
  <tr>
    <th>Ref No.</th>
    <th>Employer</th>
    <th>Position</th>
    <th>Opening Date</th>
    <th>Closing Date</th>
    <th>Details</th>
  </tr>

</thead>
  <tbody>
  <tr>
    <td>35780</td>
    <td>Access Engineering PLC</td>
    <td>Junior Executive - Management Systems</td>
    <td>28/09/2020</td>
    <td>27/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>


  </tr>
  <tr>
    <td>35784</td>
    <td>Internship (Females)</td>
    <td>Internship (Females)</td>
    <td>25/09/2020</td>
    <td>24/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35785</td>
    <td>Fintrex Finance Ltd</td>
    <td>Senior Manager - Credit & Risk Management</td>
    <td>25/09/2020</td>
    <td>24/10/2020</td>
    <td><a href='#'>Apply</a></td>

  </tr>
  <tr>
    <td>35789</td>
    <td>YKK Lanka (Pvt) Ltd</td>
    <td>HR Intern</td>
    <td>24/09/2020</td>
    <td>23/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr>
    <td>35795</td>
    <td>Rhino Roofing Products Ltd</td>
    <td>Intern Market Research Analyst</td>
    <td>23/09/2020</td>
    <td>22/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr style="border-bottom: 1px solid #FFFFFF">
    <td>35798</td>
    <td>Sailan International School</td>
    <td>Student Counselor</td>
    <td>23/09/2020</td>
    <td>22/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

</tbody>
</table>

<table class="table3" id="table7">
<thead>
  <tr>
    <th>Ref No.</th>
    <th>Employer</th>
    <th>Position</th>
    <th>Opening Date</th>
    <th>Closing Date</th>
    <th>Details</th>
  </tr>

</thead>
  <tbody>
  <tr>
    <td>35800</td>
    <td>Employees' Trust Fund Board</td>
    <td>Deputy General Manager (Finance)</td>
    <td>30/09/2020</td>
    <td>12/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>


  </tr>
  <tr>
    <td>35803</td>
    <td>Employees' Trust Fund Board</td>
    <td>Deputy General Manager (Administration & HR)</td>
    <td>30/09/2020</td>
    <td>12/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35805</td>
    <td>Edgeng (Pvt) Ltd</td>
    <td>Production Trainee</td>
    <td>21/09/2020</td>
    <td>16/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr style="border-bottom: 1px solid #FFFFFF">
    <td>35826</td>
    <td>Business Systems Ltd</td>
    <td>Quality Controller</td>
    <td>21/09/2020</td>
    <td>20/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>
</tbody>
</table>

<table class="table3" id="table8">
<thead>
  <tr>
    <th>Ref No.</th>
    <th>Employer</th>
    <th>Position</th>
    <th>Opening Date</th>
    <th>Closing Date</th>
    <th>Details</th>
  </tr>

</thead>
  <tbody>
  <tr>
    <td>35830</td>
    <td>Equaltee (Pvt) Ltd</td>
    <td>Quantity Surveyor - Male</td>
    <td>06/10/2020</td>
    <td>05/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>


  </tr>
  <tr>
    <td>35832</td>
    <td>San Piling (Pvt) Ltd</td>
    <td>Civil Engineer / Assistant Engineer</td>
    <td>05/10/2020</td>
    <td>04/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35840</td>
    <td>International Construction Consortium (Pvt) Ltd</td>
    <td>Quantity Surveyors</td>
    <td>05/10/2020</td>
    <td>04/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35842</td>
    <td>International Construction Consortium (Pvt) Ltd</td>
    <td>Graduate Quantity Surveyors</td>
    <td>05/10/2020</td>
    <td>04/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr>
    <td>35844</td>
    <td>Prasad Surveys (Pvt) Ltd</td>
    <td>Draftsman</td>
    <td>02/10/2020</td>
    <td>01/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr>
    <td>35856</td>
    <td>Esteem Engineering (Pvt) Ltd</td>
    <td>Technical officer & Quantity Surveyor</td>
    <td>29/09/2020</td>
    <td>05/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr style="border-bottom: 1px solid #FFFFFF">
    <td>35858</td>
    <td>Asset Gold (Pvt) Ltd</td>
    <td>Quantity Surveyor - Canada - Migration Only</td>
    <td>29/09/2020</td>
    <td>19/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

</tbody>
</table>

<table class="table3" id="table9">
<thead>
  <tr>
    <th>Ref No.</th>
    <th>Employer</th>
    <th>Position</th>
    <th>Opening Date</th>
    <th>Closing Date</th>
    <th>Details</th>
  </tr>

</thead>
  <tbody>
  <tr>
    <td>35860</td>
    <td>Company Name withheld</td>
    <td>Desk Receptionist - Female</td>
    <td>06/10/2020</td>
    <td>05/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>


  </tr>
  <tr>
    <td>35864</td>
    <td>Employees' Trust Fund Board</td>
    <td>Deputy General Manager (Finance)</td>
    <td>30/09/2020</td>
    <td>12/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35865</td>
    <td>Employees' Trust Fund Board</td>
    <td>Deputy General Manager (Administration & HR)</td>
    <td>30/09/2020</td>
    <td>12/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35866</td>
    <td>Sojitz Kalanitissa (Pvt) Ltd</td>
    <td>Power Plant Operation Assistants</td>
    <td>14/09/2020</td>
    <td>13/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr style="border-bottom: 1px solid #FFFFFF">
    <td>35868</td>
    <td>SPM Corporate Accountants (Pvt) Ltd</td>
    <td>Office Coordinator cum Receptionist</td>
    <td>08/09/2020</td>
    <td>07/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

</tbody>
</table>

<table class="table3" id="table10">
<thead>
  <tr>
    <th>Ref No.</th>
    <th>Employer</th>
    <th>Position</th>
    <th>Opening Date</th>
    <th>Closing Date</th>
    <th>Details</th>
  </tr>

</thead>
  <tbody>
  <tr>
    <td>35870</td>
    <td>zMessenger (Pvt) Ltd</td>
    <td>Digital Marketing Executive</td>
    <td>08/10/2020</td>
    <td>13/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>


  </tr>
  <tr>
    <td>35878</td>
    <td>Sera Idea (Pvt) Ltd</td>
    <td>Creative Director / Art Director Junior / Art Director</td>
    <td>07/10/2020</td>
    <td>21/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35880</td>
    <td>Isso Restaurants (Pvt) Ltd</td>
    <td>Social Media Manager (Intern)</td>
    <td>07/10/2020</td>
    <td>21/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr style="border-bottom: 1px solid #FFFFFF">
    <td>35882</td>
    <td>Maritime Placements (Pvt) Ltd</td>
    <td>Call Centre Agent-Top Urgent</td>
    <td>07/10/2020</td>
    <td>15/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>
</tbody>
</table>

<table class="table3" id="table11">
<thead>
  <tr>
    <th>Ref No.</th>
    <th>Employer</th>
    <th>Position</th>
    <th>Opening Date</th>
    <th>Closing Date</th>
    <th>Details</th>
  </tr>

</thead>
  <tbody>
  <tr>
    <td>35885</td>
    <td>Zentech Global</td>
    <td>Engineering Lead</td>
    <td>07/10/2020</td>
    <td>06/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>


  </tr>
  <tr>
    <td>35887</td>
    <td>Kandy Construction</td>
    <td>Project Engineer</td>
    <td>06/10/2020</td>
    <td>05/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35889</td>
    <td>San Piling (Pvt) Ltd</td>
    <td>Civil Engineer / Assistant Engineer</td>
    <td>05/10/2020</td>
    <td>04/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35890</td>
    <td>Drivematic Services (Pvt) Ltd</td>
    <td>Sales Engineer / Marketing Executive</td>
    <td>05/10/2020</td>
    <td>04/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr style="border-bottom: 1px solid #FFFFFF">
    <td>35892</td>
    <td>Employees' Trust Fund Board</td>
    <td>Deputy General Manager (Administration & HR)</td>
    <td>30/09/2020</td>
    <td>12/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

</tbody>
</table>

<table class="table3" id="table12">
<thead>
  <tr>
    <th>Ref No.</th>
    <th>Employer</th>
    <th>Position</th>
    <th>Opening Date</th>
    <th>Closing Date</th>
    <th>Details</th>
  </tr>

</thead>
  <tbody>
  <tr>
    <td>35895</td>
    <td>Sailan International School</td>
    <td>Student Counselor</td>
    <td>23/09/2020</td>
    <td>22/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>


  </tr>
  <tr>
    <td>35896</td>
    <td>A Leading Education Company</td>
    <td>Educational Counselor - Gampaha</td>
    <td>22/09/2020</td>
    <td>21/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35899</td>
    <td>Carey College Colombo</td>
    <td>Physics Teacher</td>
    <td>21/09/2020</td>
    <td>20/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35903</td>
    <td>Highway International Pre School</td>
    <td>Pre School Teacher</td>
    <td>11/09/2020</td>
    <td>10/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr>
    <td>35908</td>
    <td>The British School in Colombo</td>
    <td>Class Teacher - Junior School</td>
    <td>09/09/2020</td>
    <td>08/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr style="border-bottom: 1px solid #FFFFFF">
    <td>35910</td>
    <td>University of Jaffna</td>
    <td>Temporary Assistant Lecture / Temporary Instructor</td>
    <td>04/09/2020</td>
    <td>15/09/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

</tbody>
</table>

<table class="table3" id="table13">
<thead>
  <tr>
    <th>Ref No.</th>
    <th>Employer</th>
    <th>Position</th>
    <th>Opening Date</th>
    <th>Closing Date</th>
    <th>Details</th>
  </tr>

</thead>
  <tbody>
  <tr>
    <td>35920</td>
    <td>TextWare</td>
    <td>Office Administration (Male)</td>
    <td>30/09/2020</td>
    <td>29/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>


  </tr>
  <tr>
    <td>35923</td>
    <td>Skyline Facility Management (Pvt) Ltd</td>
    <td>Facility Administration Coordinator</td>
    <td>29/09/2020</td>
    <td>05/09/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35925</td>
    <td>Consolidated Business Systems Ltd	</td>
    <td>Quality Controller</td>
    <td>21/09/2020</td>
    <td>20/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35926</td>
    <td>A S Agri Exports (Pvt) Ltd</td>
    <td>Quality Assurance Manager</td>
    <td>18/09/2020</td>
    <td>17/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr>
    <td>35928</td>
    <td>Jiffy Products SL (Pvt) Ltd</td>
    <td>Quality Assurance ManagerQuality Assurance Officer</td>
    <td>17/09/2020</td>
    <td>16/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr style="border-bottom: 1px solid #FFFFFF">
    <td>35929</td>
    <td>Watts Engineering</td>
    <td>Trainee Administration Officer</td>
    <td>15/09/2020</td>
    <td>14/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

</tbody>
</table>

<table class="table3" id="table14">
<thead>
  <tr>
    <th>Ref No.</th>
    <th>Employer</th>
    <th>Position</th>
    <th>Opening Date</th>
    <th>Closing Date</th>
    <th>Details</th>
  </tr>

</thead>
  <tbody>
  <tr>
    <td>35930</td>
    <td>Arc International Fertility & Research Center (Pvt) Ltd</td>
    <td>Hospital Administrator -HR / Nurse</td>
    <td>22/09/2020</td>
    <td>21/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>


  </tr>
  <tr>
    <td>35933</td>
    <td>Company Name withheld</td>
    <td>Medical Laboratory Technician</td>
    <td>16/09/2020</td>
    <td>15/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr style="border-bottom: 1px solid #FFFFFF">
    <td>35934</td>
    <td>New Arumed (Pvt) Ltd</td>
    <td>Medical Rep / Sales & Marketing Executive</td>
    <td>31/08/2020</td>
    <td>30/09/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
</tbody>
</table>

<table class="table3" id="table15">
<thead>
  <tr>
    <th>Ref No.</th>
    <th>Employer</th>
    <th>Position</th>
    <th>Opening Date</th>
    <th>Closing Date</th>
    <th>Details</th>
  </tr>

</thead>
  <tbody>
  <tr>
    <td>35938</td>
    <td>Emerald Isle</td>
    <td>Warehouse Workers - Romania</td>
    <td>05/10/2020</td>
    <td>04/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>


  </tr>
  <tr>
    <td>35940</td>
    <td>Emerald Isle</td>
    <td>Waiter - Saudi</td>
    <td>02/10/2020</td>
    <td>01/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35943</td>
    <td>Asset Gold (Pvt) Ltd</td>
    <td>Quantity Surveyor - Canada - Migration Only</td>
    <td>29/09/2020</td>
    <td>19/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35946</td>
    <td>Asset Gold (Pvt) Ltd</td>
    <td>Mechanical Engineer - Canada - Migration Only</td>
    <td>29/09/2020</td>
    <td>19/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr>
    <td>35947</td>
    <td>Asset Gold (Pvt) Ltd</td>
    <td>Mechanical Engineer - Canada - Migration Only</td>
    <td>29/09/2020</td>
    <td>19/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr>
    <td>35949</td>
    <td>Asset Gold (Pvt) Ltd</td>
    <td>Accountant  - Canada - Migration Only</td>
    <td>29/09/2020</td>
    <td>19/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr>
    <td>35952</td>
    <td>Asset Gold (Pvt) Ltd</td>
    <td>Store Manager - Canada - Migration Only</td>
    <td>29/09/2020</td>
    <td>19/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr>
    <td>35954</td>
    <td>Asset Gold (Pvt) Ltd</td>
    <td>IT Professionals - Canada - Migration Only</td>
    <td>29/09/2020</td>
    <td>19/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr>
    <td>35956</td>
    <td>Asset Gold (Pvt) Ltd</td>
    <td>Civil Engineer- Canada - Migration Only</td>
    <td>29/09/2020</td>
    <td>19/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr>
    <td>35957</td>
    <td>Asset Gold (Pvt) Ltd</td>
    <td>Electrical Engineer - Canada - Migration Only</td>
    <td>29/09/2020</td>
    <td>19/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr>
    <td>35959</td>
    <td>Asset Gold (Pvt) Ltd</td>
    <td>Drfatsman - Canada - Migration Only</td>
    <td>29/09/2020</td>
    <td>19/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr style="border-bottom: 1px solid #FFFFFF">
    <td>35956</td>
    <td>Asset Gold (Pvt) Ltd</td>
    <td>Bankers - Canada - Migration Only</td>
    <td>29/09/2020</td>
    <td>19/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

</tbody>
</table>

<table class="table3" id="table21">
<thead>
  <tr>
    <th>Ref No.</th>
    <th>Employer</th>
    <th>Position</th>
    <th>Opening Date</th>
    <th>Closing Date</th>
    <th>Details</th>
  </tr>

</thead>
  <tbody>
  <tr>
    <td>35960</td>
    <td>Euro Asia Packaging (Pvt) Ltd</td>
    <td>Book keeper / Sales Coordinator</td>
    <td>06/10/2020</td>
    <td>05/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>


  </tr>
  <tr>
    <td>35966</td>
    <td>Emerald Isle</td>
    <td>Operation  Coordinator</td>
    <td>05/10/2020</td>
    <td>04/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35968</td>
    <td>Emerald Isle</td>
    <td>Transport Coordinator</td>
    <td>05/10/2020</td>
    <td>04/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35969</td>
    <td>Panagoda & Liyange Group of Company</td>
    <td>Call Centre & Reception</td>
    <td>02/09/2020</td>
    <td>01/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr>
    <td>35970</td>
    <td>Ensured Quality Lanka (Pvt) Ltd</td>
    <td>Tamil Customer Care Assistant</td>
    <td>01/09/2020</td>
    <td>27/09/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr>
    <td>35972</td>
    <td>Steel Mart Holdings (Pvt) Ltd</td>
    <td>Customer Service Assistant</td>
    <td>10/09/2020</td>
    <td>09/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr style="border-bottom: 1px solid #FFFFFF">
    <td>35975</td>
    <td>Company Name withheld</td>
    <td>Customer Relations Officer</td>
    <td>17/09/2020</td>
    <td>16/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

</tbody>
</table>

<table class="table3" id="table22">
<thead>
  <tr>
    <th>Ref No.</th>
    <th>Employer</th>
    <th>Position</th>
    <th>Opening Date</th>
    <th>Closing Date</th>
    <th>Details</th>
  </tr>

</thead>
  <tbody>
  <tr>
    <td>35978</td>
    <td>Hitachi Digital Payment Solutions Ltd</td>
    <td>Junior Legal Officer</td>
    <td>11/09/2020</td>
    <td>10/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>


  </tr>
  <tr style="border-bottom: 1px solid #FFFFFF">
    <td>35980</td>
    <td>Company Name withheld</td>
    <td>Senior Legal Officer</td>
    <td>11/09/2020</td>
    <td>05/09/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
</tbody>
</table>

<table class="table3" id="table23">
<thead>
  <tr>
    <th>Ref No.</th>
    <th>Employer</th>
    <th>Position</th>
    <th>Opening Date</th>
    <th>Closing Date</th>
    <th>Details</th>
  </tr>

</thead>
  <tbody>
  <tr>
    <td>35984</td>
    <td>TextWare</td>
    <td>Office Administration (Male)</td>
    <td>30/09/2020</td>
    <td>29/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>


  </tr>
  <tr>
    <td>35985</td>
    <td>Skyline Facility Management (Pvt) Ltd</td>
    <td>Facility Administration Coordinator</td>
    <td>29/09/2020</td>
    <td>05/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35987</td>
    <td>Novelwall</td>
    <td>Sales Coordinator</td>
    <td>25/09/2020</td>
    <td>20/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr style="border-bottom: 1px solid #FFFFFF">
    <td>35988</td>
    <td>Colourcon (Pvt) Ltd</td>
    <td>Data Entry Operator cum Sales Coordinator</td>
    <td>25/09/2020</td>
    <td>24/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>
</tbody>
</table>
<table class="table3" id="table24">
<thead>
  <tr>
    <th>Ref No.</th>
    <th>Employer</th>
    <th>Position</th>
    <th>Opening Date</th>
    <th>Closing Date</th>
    <th>Details</th>
  </tr>

</thead>
  <tbody>
  <tr>
    <td>35990</td>
    <td>Emerald Isle</td>
    <td>Transport Coordinator</td>
    <td>05/10/2020</td>
    <td>04/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>


  </tr>
  <tr>
    <td>35991</td>
    <td>Emerald Isle</td>
    <td>Limousine Driver</td>
    <td>02/10/2020</td>
    <td>01/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35993</td>
    <td>NTP Ceylon (Pvt) Ltd</td>
    <td>Senior Power Supply Engineer</td>
    <td>28/09/2020</td>
    <td>27/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr style="border-bottom: 1px solid #FFFFFF">
    <td>35995</td>
    <td>Emerald Isle</td>
    <td>Heavy Drivers / Electricians - Qatar</td>
    <td>16/09/2020</td>
    <td>15/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>
</tbody>
</table>

<table class="table3" id="table25">
<thead>
  <tr>
    <th>Ref No.</th>
    <th>Employer</th>
    <th>Position</th>
    <th>Opening Date</th>
    <th>Closing Date</th>
    <th>Details</th>
  </tr>

</thead>
  <tbody>
  <tr style="border-bottom: 1px solid #FFFFFF">
    <td>35997</td>
    <td>Company Name withheld</td>
    <td>Shipping Documentation Executive</td>
    <td>21/09/2020</td>
    <td>20/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>


  </tr>
</tbody>
</table>

<table class="table3" id="table26">
<thead>
  <tr>
    <th>Ref No.</th>
    <th>Employer</th>
    <th>Position</th>
    <th>Opening Date</th>
    <th>Closing Date</th>
    <th>Details</th>
  </tr>

</thead>
  <tbody>
  <tr>
    <td>35999</td>
    <td>Kandy Construction</td>
    <td>Project Engineer</td>
    <td>06/10/2020</td>
    <td>05/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>


  </tr>
  <tr>
    <td>36001</td>
    <td>Sri Lanka Inventors Commission</td>
    <td>Research Assistant</td>
    <td>05/10/2020</td>
    <td>15/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>36004</td>
    <td>Saw Engineering (Pvt) Ltd</td>
    <td>Project Manager</td>
    <td>02/10/2020</td>
    <td>01/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35605</td>
    <td>Rhino Roofing Products Ltd</td>
    <td>Intern Market Research Analyst</td>
    <td>23/09/2020</td>
    <td>22/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr>
    <td>35607</td>
    <td>Aqua Care Engineering (Pvt) Ltd</td>
    <td>Trainee Manager - Research & Development</td>
    <td>09/09/2020</td>
    <td>08/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr style="border-bottom: 1px solid #FFFFFF">
    <td>35610</td>
    <td>Gajashakthi Security Services (Pvt) Ltd</td>
    <td>Project Manager MEP</td>
    <td>04/09/2020</td>
    <td>03/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

</tbody>
</table>

<table class="table3" id="table27">
<thead>
  <tr>
    <th>Ref No.</th>
    <th>Employer</th>
    <th>Position</th>
    <th>Opening Date</th>
    <th>Closing Date</th>
    <th>Details</th>
  </tr>

</thead>
  <tbody>
  <tr>
    <td>35620</td>
    <td>Legacy Healthcare (Pvt) Ltd</td>
    <td>Trainee Executive / Executive (Day Shift - Kandy Branch)</td>
    <td>08/10/2020</td>
    <td>16/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>


  </tr>
  <tr>
    <td>35623</td>
    <td>Tele Marketing Executive</td>
    <td>Graphic Designer</td>
    <td>08/10/2020</td>
    <td>09/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35624</td>
    <td>Novelwall Limited</td>
    <td>Tele Commuter</td>
    <td>08/10/2020</td>
    <td>09/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35627</td>
    <td>Synergen Health (Pvt) Ltd</td>
    <td>Associate Operations Analyst</td>
    <td>07/10/2020</td>
    <td>21/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr style="border-bottom: 1px solid #FFFFFF">
    <td>35628</td>
    <td>WNS Global Services (Pvt) Ltd</td>
    <td>Associate - Operations - ONFI0109 (40)</td>
    <td>06/10/2020</td>
    <td>26/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

</tbody>
</table>

<table class="table3" id="table28">
<thead>
  <tr>
    <th>Ref No.</th>
    <th>Employer</th>
    <th>Position</th>
    <th>Opening Date</th>
    <th>Closing Date</th>
    <th>Details</th>
  </tr>

</thead>
  <tbody>
  <tr>
    <td>35630</td>
    <td>Asset Gold (Pvt) Ltd</td>
    <td>Store Manager - Canada - Migration Only</td>
    <td>29/09/2020</td>
    <td>19/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>


  </tr>
  <tr>
    <td>35632</td>
    <td>Colourcon (Pvt) Ltd</td>
    <td>Data Entry Operator cum Sales Coordinator</td>
    <td>25/09/2020</td>
    <td>24/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35634</td>
    <td>Maga Engineering (Pvt) Ltd</td>
    <td>Storekeeper</td>
    <td>14/09/2020</td>
    <td>13/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35637</td>
    <td>Emerald Isle</td>
    <td>Assistant Storekeeper</td>
    <td>10/09/2020</td>
    <td>09/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr style="border-bottom: 1px solid #FFFFFF">
    <td>35639</td>
    <td>Super Colloids Lanka (Pvt) Ltd</td>
    <td>Storekeeper</td>
    <td>04/09/2020</td>
    <td>03/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

</tbody>
</table>

<table class="table3" id="table29">
<thead>
  <tr>
    <th>Ref No.</th>
    <th>Employer</th>
    <th>Position</th>
    <th>Opening Date</th>
    <th>Closing Date</th>
    <th>Details</th>
  </tr>

</thead>
  <tbody>
  <tr>
    <td>35645</td>
    <td>Zentech Global</td>
    <td>Engineering Lead</td>
    <td>07/10/2020</td>
    <td>06/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>


  </tr>
  <tr>
    <td>35647</td>
    <td>Esteem Engineering (Pvt) Ltd</td>
    <td>Technical officer & Quantity Surveyor</td>
    <td>29/09/2020</td>
    <td>05/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35648</td>
    <td>NTP Ceylon (Pvt) Ltd</td>
    <td>Senior Power Supply Engineer</td>
    <td>28/09/2020</td>
    <td>27/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35649</td>
    <td>TSR Technologies (Pvt) Ltd</td>
    <td>Mechanical  / Electrical Technician</td>
    <td>23/09/2020</td>
    <td>22/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr>
    <td>35650</td>
    <td>Sojitz Kalanitissa (Pvt) Ltd</td>
    <td>Power Plant Operation Assistants</td>
    <td>14/09/2020</td>
    <td>13/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

<tr style="border-bottom: 1px solid #FFFFFF">
    <td>35652</td>
    <td>R N Readymix (Pvt) Ltd</td>
    <td>Laboratory Technician</td>
    <td>11/09/2020</td>
    <td>10/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>

</tbody>
</table>

<table class="table3" id="table30">
<thead>
  <tr>
    <th>Ref No.</th>
    <th>Employer</th>
    <th>Position</th>
    <th>Opening Date</th>
    <th>Closing Date</th>
    <th>Details</th>
  </tr>

</thead>
  <tbody>
  <tr>
    <td>35655</td>
    <td>Maritime Placements (Pvt) Ltd</td>
    <td>CCTV Monitoring Officer/Batticaloa</td>
    <td>08/10/2020</td>
    <td>15/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>


  </tr>
  <tr>
    <td>35656</td>
    <td>Certis Lanka Group of Companies</td>
    <td>Assistant Manager - Biyagama</td>
    <td>05/10/2020</td>
    <td>18/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35658</td>
    <td>Sumathi Group</td>
    <td>Marketing Executive (1)</td>
    <td>02/10/2020</td>
    <td>16/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr style="border-bottom: 1px solid #FFFFFF">
    <td>35660</td>
    <td>Teardrop Boutique Management</td>
    <td>Security Officer - Kotugoda (1)</td>
    <td>28/09/2020</td>
    <td>28/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>
</tbody>
</table>

<table class="table3" id="table16">
<thead>
  <tr>
   <th>Ref No.</th>
    <th>Employer</th>
    <th>Position</th>
    <th>Opening Date</th>
    <th>Closing Date</th>
    <th>Details</th>
  </tr>

</thead>
  <tbody>
  <tr>
    <td>35662</td>
    <td>Emeral Isle</td>
    <td>Production Supervisor - Maldives</td>
    <td>30/09/2020</td>
    <td>29/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>


  </tr>
  <tr>
    <td>35664</td>
    <td>A Leading Education Company</td>
    <td>Educational Counselor - Gampaha</td>
    <td>22/09/2020</td>
    <td>21/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35665</td>
    <td>Highway International Pre School</td>
    <td>Pre School Teacher</td>
    <td>11/09/2020</td>
    <td>10/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr style="border-bottom: 1px solid #FFFFFF">
    <td>35667</td>
    <td>Company Name withheld</td>
    <td>Quality Control / Production Supervisors</td>
    <td>10/09/2020</td>
    <td>09/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>
</tbody>
</table>

<table class="table3" id="table17">
<thead>
  <tr>
   <th>Ref No.</th>
    <th>Employer</th>
    <th>Position</th>
    <th>Opening Date</th>
    <th>Closing Date</th>
    <th>Details</th>
  </tr>

</thead>
  <tbody>
  <tr>
    <td>35670</td>
    <td>Hela Clothing (Pvt) Ltd</td>
    <td>Chief Mechanic (1)</td>
    <td>08/10/2020</td>
    <td>18/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>


  </tr>
  <tr>
    <td>35672</td>
    <td>Hela Clothing (Pvt) Ltd</td>
    <td>Senior Executive - Industrial Engineering (1)</td>
    <td>08/10/2020</td>
    <td>18/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35674</td>
    <td>Union Apparels (Pvt) Ltd</td>
    <td>Work Study Officer - Maharagama (1)</td>
    <td>07/10/2020</td>
    <td>13/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr style="border-bottom: 1px solid #FFFFFF">
    <td>35675</td>
    <td>Rowanthi Garments Pvt Ltd</td>
    <td>Assistant Merchandiser</td>
    <td>07/10/2020</td>
    <td>21/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>
</tbody>
</table>

<table class="table3" id="table18">
<thead>
  <tr>
    <th>Ref No.</th>
    <th>Employer</th>
    <th>Position</th>
    <th>Opening Date</th>
    <th>Closing Date</th>
    <th>Details</th>
  </tr>

</thead>
  <tbody>
  <tr>
    <td>35677</td>
    <td>Ceylon Jewelry Manufacturers (Pvt) Ltd</td>
    <td>Jewellery Designer</td>
    <td>06/10/2020</td>
    <td>14/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>


  </tr>
  <tr style="border-bottom: 1px solid #FFFFFF">
    <td>35678</td>
    <td>Visual Studio Plus</td>
    <td>Art Director / Photo Retoucher - Immediate Hire</td>
    <td>28/09/2020</td>
    <td>12/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
</tbody>
</table>

<table class="table3" id="table19">
<thead>
  <tr>
    <th>Ref No.</th>
    <th>Employer</th>
    <th>Position</th>
    <th>Opening Date</th>
    <th>Closing Date</th>
    <th>Details</th>
  </tr>

</thead>
  <tbody>
  <tr>
    <td>35680</td>
    <td>Ceylinco General Insurance</td>
    <td>Marketing Executives</td>
    <td>08/10/2020</td>
    <td>07/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>


  </tr>
  <tr>
    <td>35682</td>
    <td>Anverally & Sons (Pvt) Ltd</td>
    <td>Assistant Manager - Local Sales</td>
    <td>08/10/2020</td>
    <td>07/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr>
    <td>35684</td>
    <td>Vajira House Builders</td>
    <td>Assistant Marketing Manager - Tamil</td>
    <td>08/10/2020</td>
    <td>07/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr style="border-bottom: 1px solid #FFFFFF">
    <td>35685</td>
    <td>Beam Hela Osu Lanka (Pvt) Ltd</td>
    <td>Sales Representatives</td>
    <td>06/10/2020</td>
    <td>05/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

</tr>
</tbody>
</table>


<table class="table3" id="table20">
<thead>
  <tr>
    <th>Ref No.</th>
    <th>Employer</th>
    <th>Position</th>
    <th>Opening Date</th>
    <th>Closing Date</th>
    <th>Details</th>
  </tr>

</thead>
  <tbody>
  <tr>
    <td>35687</td>
    <td>Emerald Isle</td>
    <td>Warehouse Workers - Romania</td>
    <td>05/10/2020</td>
    <td>04/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>


  </tr>
  <tr>
    <td>35690</td>
    <td>Emerald Isle</td>
    <td>Waiter - Saudi</td>
    <td>02/10/2020</td>
    <td>01/11/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
  <tr style="border-bottom: 1px solid #FFFFFF">
    <td>35692</td>
    <td>Emerald Isle</td>
    <td>Senior Cook / Cook - Saudi</td>
    <td>30/09/2020</td>
    <td>29/10/2020</td>
    <td><button type="button" onclick="location.href='Apply_job.php'" class="btn btn-primary"><i class="far fa-eye"></i></button></td>

  </tr>
</tbody>
</table>


<script>
/* Scroll for specific table */

$( document ).ready(function() {
        $("#btn1,#btn2,#btn3,#btn4,#btn5,#btn6,#btn7,#btn8,#btn9,#btn10,#btn11,#btn12,#btn13,#btn14,#btn15,#btn16,#btn17,#btn18,#btn19,#btn20,#btn21,#btn22,#btn23,#btn24,#btn25,#btn26,#btn27,#btn28,#btn29,#btn30").click(function() {
            $('html,body').animate({
                scrollTop: $("#scrll").offset().top},
                'slow');
        });              
    });

/* Function for search */


function myFunctionn() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("default_tab");
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



function F1() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table1");
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
function F2() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table2");
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
function F3() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table3");
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
function F4() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table4");
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
function F5() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table5");
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
function F6() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table6");
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
function F7() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table7");
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
function F8() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table8");
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
function F9() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table9");
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
function F10() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table10");
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
function F11() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table11");
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
function F12() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table12");
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
function F13() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table13");
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
function F14() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table14");
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
function F15() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table15");
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
function F16() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table16");
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
function F17() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table17");
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
function F18() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table18");
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
function F19() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table19");
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
function F20() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table20");
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
function F21() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table21");
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
function F22() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table22");
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
function F23() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table23");
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
function F24() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table24");
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
function F25() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table25");
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
function F26() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table26");
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
function F27() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table27");
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
function F28() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table28");
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
function F29() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table29");
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
function F30() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table30");
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

/*
const buttons = document.querySelectorAll('button');

buttons.forEach(button => {
  button.addEventListener('click', e => {
    showTable(e.target.dataset.table);
  });
});

function showTable(idTable) {
  const tables = document.querySelectorAll('table');
  tables.forEach(table => {
    table.id === idTable ? table.style.display = 'block' : table.style.display = 'none';
  });
}
*/

/* Function for vacancy table category, print specific table only*/

function hide_all_tables(){
    document.getElementById('default_tab').style.display='none';
    document.getElementById('table1').style.display='none';
    document.getElementById('table2').style.display='none';
    document.getElementById('table3').style.display='none';
    document.getElementById('table4').style.display='none';
    document.getElementById('table5').style.display='none';
    document.getElementById('table6').style.display='none';
    document.getElementById('table7').style.display='none';
    document.getElementById('table8').style.display='none';
    document.getElementById('table9').style.display='none';
    document.getElementById('table10').style.display='none';
    document.getElementById('table11').style.display='none';
    document.getElementById('table12').style.display='none';
    document.getElementById('table13').style.display='none';
    document.getElementById('table14').style.display='none';
    document.getElementById('table15').style.display='none';
    document.getElementById('table16').style.display='none';
    document.getElementById('table17').style.display='none';
    document.getElementById('table18').style.display='none';
    document.getElementById('table19').style.display='none';
    document.getElementById('table20').style.display='none';
    document.getElementById('table21').style.display='none';
    document.getElementById('table22').style.display='none';
    document.getElementById('table23').style.display='none';
    document.getElementById('table24').style.display='none';
    document.getElementById('table25').style.display='none';
    document.getElementById('table26').style.display='none';
    document.getElementById('table27').style.display='none';
    document.getElementById('table28').style.display='none';
    document.getElementById('table29').style.display='none';
    document.getElementById('table30').style.display='none';
}

function show_table(id){
    document.getElementById('table'+id).style.display='block';
}

</script>


<!--back to top -->
<a id="back-to-top" href="#" class="btn btn-dark btn-lg back-to-top" style='background-color:#00FEDE' role="button"><i class="fas fa-chevron-up" style="color:black"></i></a>
<?php include('footer1.php'); ?>
</div>
</body>
</html>

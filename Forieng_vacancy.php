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
    
    <link rel='stylesheet' type='text/css' href='css/bg.css'/>
    <script type='text/javascript' src="js/back_2top.js"></script>   
        <link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'/>
        <script src="js/jquery-3.5.1.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<?php  include('header.php');?>
<?php include('feedback-btn.php'); ?>
<body class="bg-image" style="background-image: url('images/bg-01.jpg');">
    <div class="container-fluid"  >
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
            <tr>
                <td>35237</td>
                <td>Finagle Lanka (Pvt) Ltd</td>
                <td>Crew Member</td>
                <td>07/10/2020</td>
                <td>06/11/2020</td>
                <td><a href='#'>Apply</a></td> <!--<td><a href='#'>View</a></td>-->


            </tr>
            <tr>
                <td>35238</td>
                <td>Company Name withheld</td>
                <td>Factory Manager</td>
                <td>07/10/2020</td>
                <td>06/11/2020</td>
                <td><a href='#'>Apply</a></td>
            </tr>
            <tr>
                <td>35239</td>
                <td>Sun Ray Enery (Pvt) Ltd</td>
                <td>Administrative Assistant - Male</td>
                <td>07/10/2020</td>
                <td>06/11/2020</td>
                <td><a href='#'>Apply</a></td>
            </tr>
            <tr>
                <td>35240</td>
                <td>Gamini Construction</td>
                <td>HR/Admin Officer</td>
                <td>07/10/2020</td>
                <td>06/11/2020</td>
                <td><a href='#'>Apply</a></td>
            
            </tr>

            <tr>
                <td>35241</td>
                <td>I S Pathiranage (Pvt) Ltd</td>
                <td>Technical Officer</td>
                <td>07/10/2020</td>
                <td>06/11/2020</td>
                <td><a href='#'>Apply</a></td>
            </tr>

            <tr>
                <td>35242</td>
                <td>Fintrex Finance Ltd</td>
                <td>Branch Manager - Kandy</td>
                <td>07/10/2020</td>
                <td>06/11/2020</td>
                <td><a href='#'>Apply</a></td>
            </tr>

            <tr>
                <td>35243</td>
                <td>Zentech Global</td>
                <td>Engineering Lead</td>
                <td>07/10/2020</td>
                <td>06/11/2020</td>
                <td><a href='#'>Apply</a></td>
                </tr>

            <tr>
                <td>35244</td>
                <td>Beam Hela Osu Lanka (Pvt) Ltd</td>
                <td>Sales Representatives</td>
                <td>06/10/2020</td>
                <td>05/11/2020</td>
                <td><a href='#'>Apply</a></td>
            </tr>

            <tr>
                <td>35245</td>
                <td>EPCI (Pvt) Ltd</td>
                <td>Quantity Surveyor - Male</td>
                <td>06/10/2020</td>
                <td>05/11/2020</td>
                <td><a href='#'>Apply</a></td>
            </tr>

            <tr>
                <td>35246</td>
                <td>Microtech Biological (Pvt) Ltd</td>
                <td>Marketing Executive</td>
                <td>06/10/2020</td>
                <td>05/11/2020</td>
                <td><a href='#'>Apply</a></td>
            </tr>

            <tr>
                <td>35247</td>
                <td>Edgeng (Pvt) Ltd</td>
                <td>Accounts Clerk</td>
                <td>06/10/2020</td>
                <td>29/10/2020</td>
                <td><a href='#'>Apply</a></td>
            </tr>

            <tr>
                <td>35248</td>
                <td>Euro Asia Packaging (Pvt) Ltd</td>
                <td>Book keeper / Sales Coordinator</td>
                <td>06/10/2020</td>
                <td>05/11/2020</td>
                <td><a href='#'>Apply</a></td>
            </tr>

            <tr>
                <td>35249</td>
                <td>Kandy Construction</td>
                <td>Project Engineer</td>
                <td>06/10/2020</td>
                <td>05/11/2020</td>
                <td><a href='#'>Apply</a></td>
            </tr>

            <tr>
                <td>35250</td>
                <td>Equaltee (Pvt) Ltd</td>
                <td>Quantity Surveyor - Male</td>
                <td>06/10/2020</td>
                <td>05/11/2020</td>
                <td><a href='#'>Apply</a></td>
            </tr>

            <tr>
                <td>35252</td>
                <td>Devi Trading Company</td>
                <td>Record Keeper</td>
                <td>14/10/2020</td>
                <td>13/11/2020</td>
                <td><a href='#'>Apply</a></td>
            </tr>

            <tr>
                <td>35253</td>
                <td>Devi Trading Company</td>
                <td>Cashier</td>
                <td>14/10/2020</td>
                <td>13/11/2020</td>
                <td><a href='#'>Apply</a></td>
            </tr>

            <tr>
                <td>35255</td>
                <td>Sri Lankan Granite & Marble</td>
                <td>Coordinator - Male</td>
                <td>14/10/2020</td>
                <td>13/11/2020</td>
                <td><a href='#'>Apply</a></td>
            </tr>

            <tr>
                <td>35256</td>
                <td>Sri Lankan Granite & Marble</td>
                <td>Showroom Marketing Executive - Female</td>
                <td>14/10/2020</td>
                <td>13/11/2020</td>
                <td><a href='#'>Apply</a></td>
            </tr>

            <tr>
                <td>35257</td>
                <td>S & K Construction Material (Pvt) Ltd</td>
                <td>HR & Payroll Executive</td>
                <td>14/10/2020</td>
                <td>13/11/2020</td>
                <td><a href='#'>Apply</a></td>
            </tr>

            <tr>
                <td>35258</td>
                <td>Samod Construction (Pvt) Ltd</td>
                <td>Technical Officer - Civil</td>
                <td>14/10/2020</td>
                <td>13/11/2020</td>
                <td><a href='#'>Apply</a></td>
            </tr>

            <tr>
                <td>35259</td>
                <td>Microtech Biological (Pvt) Ltd</td>
                <td>Biomedical Engineer</td>
                <td>13/10/2020</td>
                <td>12/11/2020</td>
                <td><a href='#'>Apply</a></td>
            </tr>

            <tr>
                <td>35260</td>
                <td>Expolanka (Pvt) Ltd</td>
                <td>Junior executive - Commercial</td>
                <td>12/10/2020</td>
                <td>11/11/2020</td>
                <td><a href='#'>Apply</a></td>
            </tr>
            
            <tr>
                <td>35262</td>
                <td>Rodney Foreign Employment Agency</td>
                <td>Mobile Phone Technician - Greece</td>
                <td>10/10/2020</td>
                <td>09/11/2020</td>
                <td><a href='#'>Apply</a></td>
            </tr>

            <tr>
                <td>35263</td>
                <td>VeracityAI</td>
                <td>Machine Learning Engineer</td>
                <td>10/10/2020</td>
                <td>05/11/2020</td>
                <td><a href='#'>Apply</a></td>
            </tr>

            <tr>
                <td>35264</td>
                <td>Jadon Software Solutions</td>
                <td>Wordpress Developers</td>
                <td>08/10/2020</td>
                <td>07/11/2020</td>
                <td><a href='#'>Apply</a></td>
            </tr>

            <tr>
                <td>35265</td>
                <td>Global Tote</td>
                <td>Customer Service Agent</td>
                <td>08/10/2020</td>
                <td>07/11/2020</td>
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
    <a id="back-to-top" href="#" class="btn btn-dark btn-lg back-to-top" style='background-color:#00FEDE' role="button"><i class="fas fa-chevron-up" style="color:black"></i></a>



</body>

<?php include('footer1.php'); ?>

</html>
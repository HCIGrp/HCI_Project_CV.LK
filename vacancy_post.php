
<?php include('config_vacancy.php'); ?>

<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vacancy Advertisement Publish</title>
        <!-- Bootstrap CSS -->
       <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" /> -->
       <!-- <link rel='stylesheet' type='text/css' href='css/vacancy.css'/>  -->
        <link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'/>
        <link rel='stylesheet' type='text/css' href='css/bg.css'/>
        <script src="js/jquery-3.5.1.min.js"></script>

        <script type='text/javascript' src="js/back_2top.js"></script>    
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>

        <!-- Added for validation part  -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"></link>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>

        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">        
<style>

/*------------------------------------------------------------------
[ Button ]*/
.container-login100-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.wrap-login100-form-btn {
  width: 100%;
  display: block;
  position: relative;
  z-index: 1;
  border-radius: 25px;
  overflow: hidden;
  margin: 0 auto;

  box-shadow: 0 5px 30px 0px rgba(3, 216, 222, 0.2);
  -moz-box-shadow: 0 5px 30px 0px rgba(3, 216, 222, 0.2);
  -webkit-box-shadow: 0 5px 30px 0px rgba(3, 216, 222, 0.2);
  -o-box-shadow: 0 5px 30px 0px rgba(3, 216, 222, 0.2);
  -ms-box-shadow: 0 5px 30px 0px rgba(3, 216, 222, 0.2);
}

.login100-form-bgbtn {
  position: absolute;
  z-index: -1;
  width: 300%;
  height: 100%;
  background: #a64bf4;
  background: -webkit-linear-gradient(right, #00dbde, #fc00ff, #00dbde, #fc00ff);
  background: -o-linear-gradient(right, #00dbde, #fc00ff, #00dbde, #fc00ff);
  background: -moz-linear-gradient(right, #00dbde, #fc00ff, #00dbde, #fc00ff);
  background: linear-gradient(right, #00dbde, #fc00ff, #00dbde, #fc00ff);
  top: 0;
  left: -100%;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.login100-form-btn {
  font-family: Poppins-Medium;
  font-size: 16px;
  color: #fff;
  line-height: 1.2;
  text-transform: uppercase;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  width: 100%;
  height: 50px;
}    
/*Header Sticky */

/* View button 
.butnview {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #43D58C	;
    border: none; /* newly added *
    top: 191px;
    left: 420px;
    right: -420px;
    bottom: -191px;
}
*/
/*Include validation css */
/*
 body {
            background: #EECDA3;
            background: -webkit-linear-gradient(to top, #EF629F, #EECDA3);
            background: linear-gradient(to top, #EF629F, #EECDA3);
        }
*/
.container {
            max-width: 550px;
        }

        .has-error label,
        .has-error input,
        .has-error textarea {
            color: red;
            border-color: red;
        }

        .list-unstyled li {
            font-size: 13px;
            padding: 4px 0 0;
            color: red;
        }

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
</head>
<body class="bg-image" style="background-image: url('images/bg-01.jpg');">
<?php include('header.php'); ?>
<?php if(! empty($_SESSION)) {?>
    <?php include('feedback-btn.php'); ?>
  <?php } ?> 
<!-- $date = DateTime::createFromFormat('d/m/Y', date);  -->
<div class="container mt-5">
        <div class="card" style="border: 1px solid #4115bb">
            <div class="card-body">
                <form action="config_vacancy.php" method="post" enctype="multipart/form-data" role="form" data-toggle="validator">
  
 <!-- <div class="container">       -->

                    <div class="form-group">
                        <label for="position">Position</label> 
                            <input type="text" class="form-control" id="inputPosition" placeholder="Enter position" onfocus="this.placeholder =''" onblur="this.placeholder = 'Enter position'" maxlength="80" minlength="5" pattern="^[a-z A-Z_.-]*$" name="Position" required>

                        <!-- Error -->
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <label for="opndate">Opening Date</label>
                            <?php $dat = date('Y-m-d'); ?>
                            <input type="date" class="form-control" readonly="readonly" value="<?php echo $dat ?>" >  <!-- disabled="disabled"-->
                    </div>

                    <div class="form-group">
                        <label for="clsdate">Closing Date</label>
                            <input type="date" name="Closedate" class="form-control" id="inputDate" required>

                        <!-- Error -->
                        <div class="help-block with-errors"></div>
                    </div>

                 <!--   <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" maxlength="10" minlength="3"
                            pattern="^[a-zA-Z0-9_.-]*$" id="inputUsername" placeholder="Username" required>

                         Error 
                        <div class="help-block with-errors"></div>
                    </div>
                -->
                    <div class="form-group">
                        <label for="img">Advertisement</label>
                            <input type="file" name="ad_img" onChange="displayImage(this)" class="form-control" data-error="You must select vacancy advertisement image." id="ad_img" accept="image/x-png,image/jpeg" required>

                        <!-- Error -->
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <button id="messag" class="btn btn-primary btn-block" type="submit" name="save">Save</button>
                    </div>
                </form>
                <div class="btnview">
                        <button class="btn btn-info btn-block" name="view" onclick="location.href='vacancy_details.php'">View Vacancies</button>
                    </div>
            </div>
        </div>
    </div>
    
<!--back to top -->
<a id="back-to-top" href="#" class="btn btn-dark btn-lg back-to-top" style='background-color:#00FEDE' role="button"><i class="fas fa-chevron-up" style="color:black"></i></a>

</body>

</html>
<?php include('footer1.php'); ?>

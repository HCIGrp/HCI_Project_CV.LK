<!DOCTYPE html>
<html lang="en">
<head>
    <title> Bootstrap 4 Form Validation with Validator.js Example | positronx.io</title>
    <link rel="stylesheet" type="text/css" href="my1.css">

<style>
/*
https://lidiascode.azurewebsites.net/how-to-create-an-animated-sticky-header/ 
*/

.navbar-default {
    border-color: transparent;
    background-color: #fff;
    border-bottom: 1px solid #aaaaaa;
}

@media(min-width:768px) {
    .navbar-default {
        padding: 25px 0;
        -webkit-transition: padding .3s;
        -moz-transition: padding .3s;
        transition: padding .3s;
    }

    .navbar-default .navbar-brand {
        font-size: 2em;
        -webkit-transition: all .3s;
        -moz-transition: all .3s;
        transition: all .3s;
    }

    .navbar-default.navbar-shrink {
        padding: 0 0;
    }

    .navbar-default.navbar-shrink .navbar-brand {
        font-size: 1.5em;
    }
}
</style>
</head>
<body>
<!--
https://lidiascode.azurewebsites.net/how-to-create-an-animated-sticky-header/
-->

<html>
<head>
    <meta charset="utf-8" />
    <title>Animated Sticky Header Demo</title>
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</head>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">My Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="hidden">
                    <a href="#"></a>
                </li>
                <li>
                    <a href="#"><span>About</span></a>
                </li>
                <li>
                    <a href="#"><span>Contact</span></a>
                </li>
            </ul>
        </div> <!--/.navbar-collapse-->
    </div><!-- /.container-fluid -->
</nav>
<div style="min-height: 1000px;">
    <p>This is the a demo for an animated sticky header </p>
</div>

</script>



<script>
  /*
https://lidiascode.azurewebsites.net/how-to-create-an-animated-sticky-header/ 
*/

$(window).scroll(function() {
if ($(this).scrollTop() > 1){  
    $('.navbar-default').addClass("navbar-shrink");
  }
  else{
    $('.navbar-default').removeClass("navbar-shrink");
  }
});

</script>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);

.feedback-button {
  transition: all .5s ease;
  height: 40px;
  border: solid 2px #00FEDE;
  width: 100px;
  line-height: 32px;
  -webkit-transform: rotate(-90deg);
  font-weight: 600;
  color: white;
  transform: rotate(-90deg);
  -ms-transform: rotate(-90deg);
  -moz-transform: rotate(-90deg);
  text-align: center;
  font-size: 17px;
  position: fixed;
  right: -40px;
  top: 45%;
  font-family:'Montserrat', sans-serif;
 /* text-transform: uppercase;*/
 /* font-family: "Roboto", helvetica, arial, sans-serif;*/
  z-index: 999;
  background-color : transparent;
  outline: none;
  border-radius: 5px;
}

.feedback-button:hover {
    background-color: white;
    color: black;
}

@media only screen and (max-width: 580px) {
  #feedback-div {
    left: 3%;
    margin-right: 3%;
    width: 88%;
    margin-left: 0;
    padding-left: 3%;
    padding-right: 3%;
  }
}
</style>
</head>
<body>
<button id="popup" class="feedback-button" onclick="location.href='add_feedback.php'">Feedback</button>
<script src="_include/js/feedback.js"></script>
<script>
/*
function toggle_visibility() {
       var e = document.getElementById('feedback-main');
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
*/
</script>

</body>
</html>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Feedback</title>
    <link rel="stylesheet" href="css/Feedback_CSS/add_feedback.css" />
    <?php  include 'header.php';?>
  </head>

  <div class="bg-image" style="background-image: url('images/bg-01.jpg');">
  <body onload='document.form1.email.focus()'>
<br>
<br>

    <div id="panel" class="panel-container">
      <strong
        >How satisfied are you with our<br />
        service?</strong
      ><br>

      <form name="form1" action="#"> 
      
    <input type="text" placeholder="Enter Email" name="email"  required>
    
</form>

      <div class="ratings-container">

        <div class="rating">
        <img class="angry" src="image/Feedback_images/Angry.png" alt=""/>
          <small>Unhappy</small>
        </div>

        <div class="rating">
        <img class="sad" src="image/Feedback_images/Sad.png" alt=""/>
          <small>Neutral</small>
        </div>

        <div class="rating ">
        <img class="neutral" src="image/Feedback_images/Neutral.png" alt=""/>
          <small>Satisfied</small>
        </div>

        <div class="rating ">
        <img class="happy" src="image/Feedback_images/Happy.png" alt=""/>
          <small>Satisfied</small>
        </div>

        <div class="rating ">
        <img class="love" src="image/Feedback_images/Love.png" alt=""/>
          <small>Satisfied</small>
        </div>


      </div>
      <!-- <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" ></textarea> -->
      <!-- <label for="review">Review</label> -->
      <form name="form2" >
      <input type="text" placeholder="Write your review.." name="review" style="height:100px" required>
      
</form>
      

      <br>


      <!-- <li class="submit"><input type="submit" name="submit" value="Submit" onclick="ValidateEmail(document.form1.email)"/></li> -->
      <button class="btn" id="send" onclick="ValidateEmail(document.form1.email)">Send review</button>
    </div>
  </body>


  <script >







function ValidateEmail(inputText)
{
var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
if(inputText.value.match(mailformat))
{


    const ratingsEl = document.querySelectorAll(".rating");
const sendBtn = document.querySelector("#send");
const panel = document.querySelector("#panel");

ratingsEl.forEach((el) => {
  el.addEventListener("click", () => {
    ratingsEl.forEach((innerEl) => {
      innerEl.classList.remove("active");
    });

    el.classList.add("active");
  });
});

sendBtn.addEventListener("click", () => {
  panel.innerHTML = `
		<i class="fas fa-heart"></i>
		<strong>Thank you!</strong>
		<p>We'll use your feedback to improve our performance.</p>
		<a href='feedback.php'><button class="btn">Done</button></a>
	`;
});



// alert("Valid email address!");
// document.form1.email.focus();
return true;
}
else
{
alert("You have entered an invalid email address!");
document.form1.email.focus();
return false;
}
}







  </script>
  <?php include('footer1.php'); ?>
</html>
















<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Feedback</title>


    <link rel="stylesheet" href="css/Feedback_CSS/add_feedback.css" />

</head>

<body>
<div>

    <div id="panel" class="panel-container">
    <strong>GIVE US FEEDBACK</strong>
    <br>
    <div >
    <textarea class="email" type="textarea" name="email" id="email" placeholder="Your Email" maxlength="500" rows="1"></textarea>
    </div>
        <div class="rating-container">
            <div class="rating">
                <img class="angry" src="image/Feedback_images/Angry.png" alt=""/>
                <br><small>Worst</small>
            </div>

            <div class="rating">
                <img class="sad" src="image/Feedback_images/Sad.png" alt=""/>
                <br><small>Bad</small>
            </div>

            <div class="rating">
                <img class="neutral" src="image/Feedback_images/Neutral.png" alt=""/>
                <br><small>Neutral</small>
            </div>

            <div class="rating">
                <img class="happy" src="image/Feedback_images/Happy.png" alt=""/>
                <br><small>Good</small>
            </div>

            <div class="rating">
                <img class="love" src="image/Feedback_images/Love.png" alt=""/>
                <br><small>excellent</small>
            </div>

        
        </div>

            <div>
           
            <textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Comments" maxlength="6000" rows="7"></textarea>
            </div>
            <br>
        <button class="btn" id="send">SEND</button>

    </div>

</div>
</body>

</html> -->
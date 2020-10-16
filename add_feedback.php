<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Feedback</title>
    <link rel="stylesheet" href="css/Feedback_CSS/add_feedback.css" />
    <?php  include 'header.php';?>
  </head>
  <body>
<br>
<br>
<!-- Design by Ildiesign - https://dribbble.com/shots/7292664-Survey-UI-Design -->
    <!-- Icons by - https://www.flaticon.com/authors/roundicons -->
    <div id="panel" class="panel-container">
      <strong
        >How satisfied are you with our<br />
        customer support performance?</strong
      ><br>


      
    <input type="text" placeholder="Enter Email" name="email" required>



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
      <input type="text" placeholder="Write your comments.." name="review" style="height:100px" required>
      <br>
      <button class="btn" id="send">Send review</button>
    </div>
  </body>


  <script >
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
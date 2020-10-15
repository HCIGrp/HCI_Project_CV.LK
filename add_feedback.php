<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/Feedback_CSS/add_feedback.css" />
</head>
<body>
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
</body>
</html>
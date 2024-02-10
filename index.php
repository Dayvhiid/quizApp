<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css"> 
    <title>Quiz App</title>
</head>
<body>
   <form method="post">
   <div class="quizContainer">
        <div class="timer"><h2>Quiz Application</h2> <h2>Time left: <label id="countdown">00</label></h2></div>
        <div class="questionTitle">
            <h2 id="quesNumber"><label id="qn"></label></h1>
                 <h2 id="question">Question placeholder</h1>
        </div>
        <div class="optionsDiv">
            <div class="options">
                <h3>Option One</h3>
            </div>
            <div class="options">
                <h3>Option Two</h3>
            </div>
            <div class="options">
                <h3>Option Three</h3>
            </div>
            <div class="options">
                <h3>Option Four</h3>
            </div>
        </div>
        <div class="controls">
            <button id="prevBtn">Previous</button>
            <label id="qcLabel" > <label id="qc"></label> of 5</label>
            <button id="nextBtn">Next</button>
            <button id="startBtn" name="start">Start</button>
        </div>
    </div>
   </form>
    <script>
        // Get the countdown element
        const countdownElement = document.getElementById('countdown');
    
        // Set the starting time in seconds
        let seconds = 60;
    
        // Function to update the countdown display
        function updateCountdown() {
          // Update the display with remaining seconds
          countdownElement.textContent = seconds;
    
          // Check if countdown is finished
          if (seconds === 0) {
            // End the countdown (e.g., display message, play sound)
            countdownElement.textContent = "Time's up!";
            clearInterval(interval); // Stop the interval
            <!-- window.location.href = "timeup.html" -->
          } else {
            // Decrement seconds
            seconds--;
          }
        }
    
        // Start the countdown with an interval of 1 second
        const interval = setInterval(updateCountdown, 1000);

      </script>
</body>
<script src="index.js"></script>
</html>

<?php 
        if(isset($_POST["start"])){
            $conn = mysqli_connect('localhost','david','test1234','quizApp',3308);
            //test the db connection
            if($conn){
              echo "Connection Succefull";
            }else{
              echo "Connection unsuccefull";
            }
            //fetch the data from the
            $sql = "SELECT * FROM questionBank";
            $result = mysqli_query($conn,$sql);
            $data = mysqli_fetch_assoc($result);
        }
      ?>
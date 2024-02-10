<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" placeholder="Enter Your Name" name="name" id="name">
        <input type="submit" value="submit" name="submit">
        <h1 id="tin" name="tin">still</h1>
    </form>
</body>
</html>

<?php
// echo "finally";
$conn = mysqli_connect('localhost','david','test1234','quizApp',3308);
$name = $_POST["name"];

if ($conn) {
    echo "Connection Succesful"."<br>";
} else{
    echo "Connection unsuccesful";
};

//  if(isset($_POST["submit"])){
//     echo $name;
//  }

  $sql = "SELECT * FROM questionBank";
  $result = mysqli_query($conn,$sql);
  $data = mysqli_fetch_assoc($result);
   $text = $_POST["tin"];
  if (mysqli_num_rows($result) > 0){
     echo $data["question"];
     $text = (string) $data["question"];
  } else {
    echo "Could not access data";
  }
?>
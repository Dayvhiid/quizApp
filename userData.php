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
    </form>
</body>
</html>

<?php
// echo "finally";
$conn = mysqli_connect('localhost','david','test1234','quizApp',3308);
$name = $_POST["name"];

if ($conn) {
    echo "Connection Succesful";
} else{
    echo "Connection Succesful";
};

 if(isset($_POST["submit"])){
    echo $name;
 }
?>
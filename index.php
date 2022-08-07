<?php

@include 'database.php';
if(mysqli_errno($conn)){
  echo'erroe';
}

if(isset($_GET['submit'])){
   $number = mysqli_real_escape_string($conn, $_GET['num']);
   $name = mysqli_real_escape_string($conn, $_GET['name']);
$insert = "INSERT INTO `Client`(`number`, `name`) VALUES('$number','$name')";
         $res=mysqli_query($conn, $insert);
          if($res){
            echo "<script type= 'text/javascript'>";
           echo "window.alert('Insert Successfully')";
           echo "</script>";
            }else{
          echo "<script type= 'text/javascript'>";
           echo "window.alert('No INSERT')";
           echo "</script>";
           }
     };
?>

<!DOCTYPE html>
<html>
<head>
  <title>Program</title>
  <link rel="stylesheet" type="text/css" href="styleWeb.css">
</head>
<body>
  <div class="form-container">
    <form action="" method="GET">
      <h3>Hello My page</h3>
      <input type="number" name="num" required placeholder="enter your  number">
      <input type="text" name="name" required placeholder="enter your name">
      <input type="submit" name="submit" value="register now" class="form-btn">
    </form>

    </div>
</body>
</html>
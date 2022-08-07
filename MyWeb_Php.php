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
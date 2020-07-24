<?php
  session_start();
  $email=$_SESSION['email'];
  echo($email);
  include("dbconnect.php");
  $name=$_GET['name'];
  $mob=$_GET['mob'];

  $query="DELETE FROM `contact` WHERE inserted_by='$email' and name='$name' and mob='$mob'";
  $result = mysqli_query($con,$query);
  header("location: profile.php");

 ?>

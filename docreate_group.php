<?php
  session_start();
  include("dbconnect.php");

  $email=$_SESSION['email'];
  $groupname=$_POST['name'];

  $query="INSERT INTO `groups` (`id`, `group_name`, `created_by`) VALUES (NULL, '$groupname', '$email');";

$result = mysqli_query($con,$query);

  header("location:profile.php");
 ?>

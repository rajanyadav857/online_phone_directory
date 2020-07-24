<?php
  session_start();
  include("dbconnect.php");

  $email=$_SESSION['email'];
  $group=$_GET['name'];
  echo ($email);
  echo ($group);

  $query="DELETE FROM `groups` Where group_name='$group' and created_by='$email';";
  $query2="DELETE FROM `contact` WHERE `contact`.`group` = '$group' and `contact`.`inserted_by` = '$email';";

  $result=mysqli_query($con,$query);

  $result2=mysqli_query($con,$query2);



  if($result)
    echo "Success";
    if($result2)
    echo "Success2 ";

    header("location:showgroups.php");
 ?>

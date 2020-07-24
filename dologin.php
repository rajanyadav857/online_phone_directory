<?php
session_start();

// check for session

if(isset($_POST['submit']))
{
  //connect to database online jobs
  include("dbconnect.php");

  //extract values which have came from form
  $email=$_POST['email'];
  $pass=$_POST['password'];

  // attach input values with the mysql query
  $query = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'" ;

  //execute query
  $result = mysqli_query($con,$query);

  // if only one account is available for the input details
  // means successfully login
  if ($result)
  {
    //create session
    $_SESSION['email']=$email;
    $_SESSION['pass']=$pass;

    //redirect to profile page
    header("location: profile.php");
  }
  else
  {
    echo("<script>alert('Invalid email or password');</script>");
  }

}



 ?>

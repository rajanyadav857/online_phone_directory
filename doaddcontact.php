<?php
  session_start();

  //if(isset($_POST['submit']))
  //{
    //connect to database online jobs
    include("dbconnect.php");

    print_r($_POST);

    //extract values which have came from form
    $email=$_SESSION['email'];
    $name=$_POST['name'];
    $mob=$_POST['mob'];
    $group=$_POST['group'];

    //Query to insert values in users table
    $query="INSERT INTO `contact` (`id`, `inserted_by`, `inserted_date`, `name`, `mob`, `group`) VALUES (NULL, '$email', CURRENT_TIMESTAMP, '$name', '$mob', '$group');";
    $result = mysqli_query($con,$query);

    if($result)
    {
      echo "<script>alert('Succesfully inserted');</script>";
      header("location: profile.php");
    }
    else {
      echo "Not inserted";
    }

  //}



 ?>

<?php


  session_start();
  if($_SESSION)
    header("location:profile.php");

//  if(isset($_POST['submit']))
//  {

    include("dbconnect.php");

    $name=$_POST['name'];

		  //$lname=$_POST['lname'];
		$email=$_POST['email'];
		$pass=$_POST['password'];
		$mob=$_POST['mob'];

    if($con)
		{

      //Query to insert values in users table
      $query1="INSERT INTO users (name,email,password,mob) VALUES ('$name','$email','$pass','$mob');";

      // check email or mob exists or not
      $query = "SELECT * FROM users WHERE email ='$email' and password='$pass'";
      $result = mysqli_query($con,$query);
      if (mysqli_num_rows($result) >= 1) {
        echo("<script>alert('You are already registered with this email address');</script>");
        //header("location:signup.php");
      }
      else
      {
        $res1=mysqli_query($con,$query1);
//		  	$res2=mysqli_query($con,$query2);
//		  	if($res1 && $res2)

        if($res1)
			  {
        echo("<script>alert('signup successful');</script>");

        //create session
        $email=$_POST['email'];
        $pass=$_POST['password'];

        $_SESSION['email']=$email;
        $_SESSION['pass']=$pass;

        //redirect to profile page
        header("location:profile.php");
			  }

      }

		}
//  }
?>

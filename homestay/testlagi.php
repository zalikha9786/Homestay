<?php

include('connection.php');
session_start();


if(isset($_POST["submit"]))
{
	$email = $_POST["email"];
	$password = $_POST["password"];

	if(ctype_digit($email))
	{
		$check_user = "SELECT * FROM admin WHERE email ='$email' AND password='$password'";
		$run=mysqli_query($connection,$check_user);

		if(mysqli_num_rows($run))
		{
			$role = $run->fetch_assoc();
      		$_SESSION['admin']=$email;
       		echo "<script>document.location='index.php'</script>";
		}
		else
		{
			echo "<script>alert('Invalid email address or Password')</script>";
		}
	}

	else if($email == "homestay_owner")
	{
		$check_user = "SELECT * FROM homestay_owner WHERE owner_email ='$email' AND password = '$password'";
      	$run=mysqli_query($connection,$check_user);
     	if(mysqli_num_rows($run))
     	{
     		$role = $run->fetch_assoc();
         	$_SESSION['homestay_owner']=$email;
         	echo "<script>document.location='index.php'</script>";
     	}
     	else
     	{
     		echo "<script>alert('Invalid email address or Password')</script>";
     	}
	}

	else
	{
		$check_user = "SELECT * FROM homestay_customer WHERE cust_email ='$email' AND password = '$password'";
    	$run=mysqli_query($connection,$check_user);
    	if(mysqli_num_rows($run))
    	{
    		$role = $run->fetch_assoc();
      		$_SESSION['homestay_customer']=$email;
      		echo "<script>document.location='index.php'</script>";
    	}
    	else
    	{
    		 echo "<script>alert('Invalid Email Address or Password')</script>";
    	}
	}
}	

?>
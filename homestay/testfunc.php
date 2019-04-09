
<?php

include('connection.php');
session_start();

if(isset($_POST["submit"]))
{
  $email = $_POST["email"];
  $owner_email = $_POST["owner_email"];
  $cust_email = $_POST["cust_email"];
  $pass = $_POST["password"];
  

  if (ctype_digit($email))
  {
     $check_user = "SELECT * FROM admin WHERE adminID ='$email' AND password= '$pass'";
     $run=mysqli_query($connection,$check_user);

     if(mysqli_num_rows($run))
     {
       $role = $run->fetch_assoc();
       $_SESSION['adminID']=$email;
       echo "<script>document.location='index.php'</script>";
     }
    else
    {
       echo "<script>alert('Invalid email address or Password')</script>";
     }
   }

   else if ($owner_email == "homestay_owner")
   {
      $check_user = "SELECT * FROM homestay_owner WHERE h_ownerID ='$owner_email' AND PWD = '$pass'";
      $run=mysqli_query($connection,$check_user);
     if(mysqli_num_rows($run))
       {
         $role = $run->fetch_assoc();
         $_SESSION['h_ownerID']=$owner_email;
         echo "<script>document.location='index.php'</script>";
       }
       else
       {
         echo "<script>alert('Invalid email address or Password')</script>";
       }
  }

  else {
    $check_user = "SELECT * FROM homestay_customer WHERE customerID ='$cust_email' AND PWD = '$pass'";
    $run=mysqli_query($connection,$check_user);
    if(mysqli_num_rows($run))
    {
      $role = $run->fetch_assoc();
      $_SESSION['customerID']=$cust_email;
      echo "<script>document.location='index.php'</script>";
    }
    else
    {
      echo "<script>alert('Invalid Email Address or Password')</script>";
    }
}



}


 ?>


<?php

include "connection.php";

$sql = "INSERT INTO homestay_customer(name,icno,cust_tel,secret_question,secret_answer,cust_email,password) 
VALUES ('".$_POST['name']."','".$_POST['icno']."','".$_POST['cust_tel']."','".$_POST['secret_question']."','".$_POST['secret_answer']."','".$_POST['cust_email']."','".$_POST['password']."')";

$r = mysqli_query($sql);
$sql_e ="SELECT * from homestay_customer WHERE cust_email='$cust_email'";
$res_e=mysqli_query($ink, $sql_e);

if(mysqli_query($link, $sql)){ 
	?><html><script>
        alert("Records added successfully.");
		window.location.href="signin.php";
      </script></html><?php
  }
 else{
	?><html><script>
        alert("<?php echo 'ERROR: Could not able to execute $sql. ' . mysqli_error($link)?>");
		window.location.href="customersignup.php";
      </script></html><?php
	}
 
// close connection
mysqli_close($link);
?>
<?php

include "connection.php";

$sql = "INSERT INTO admin(name,tel_num,secret_question,secret_answer,email,password) 
VALUES ('".$_POST['name']."','".$_POST['tel_num']."','".$_POST['secret_question']."','".$_POST['secret_answer']."','".$_POST['email']."','".$_POST['password']."')";

$r = mysqli_query($sql);
$sql_e ="SELECT * from admin WHERE email='$email'";
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
		window.location.href="signup.php";
      </script></html><?php
	}
 
// close connection
mysqli_close($link);
?>
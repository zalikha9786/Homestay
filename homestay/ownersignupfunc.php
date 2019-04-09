<?php

include "connection.php";

$sql = "INSERT INTO homestay_owner(name,owner_tel,secret_question,secret_answer,owner_email,password) 
VALUES ('".$_POST['name']."','".$_POST['owner_tel']."','".$_POST['secret_question']."','".$_POST['secret_answer']."','".$_POST['owner_email']."','".$_POST['password']."')";

$r = mysqli_query($sql);
$sql_e ="SELECT * from homestay_owner WHERE owner_email='$owner_email'";
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
		window.location.href="ownersignup.php";
      </script></html><?php
	}
 
// close connection
mysqli_close($link);
?>
<!DOCTYPE html>

<html lang="">
<title>Automated Homestay System</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
   
    <div class="fl_right">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-user"></i> <a href="signup.php">Register</a></li>
        <li><i class="fa fa-sign-in"></i> <a href="signin.php">Login</a></li>
      </ul>
    </div>
  </div>
</div>


</head>

<!-- ################################################################################################ -->

<div class="wrapper row1">
  <header id="" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a>Automated Homestay System</a></h1>
    </div>
    
  </header>
</div>

<!-- To check passwords -->
	<script lang="javascript">
	function checkpswd()
	{
		var pwd = document.getElementById('password').value;
		var conpwd = document.getElementById('password2').value;

		if(pwd == conpwd)
			return true;
		else
		{
			alert ("Both passwords did not match. Please try again.");
			return false;
		}
	}
	</script>



<!DOCTYPE HTML>
<html>

<head>
  <title>simplestyle_4 - contact us</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
  <div id="main">
  
    <div id="content_header"></div>
    <div id="site_content">
    <div id="content">
        <!-- insert the page content here -->
        <h1>SIGNUP</h1>
        <form action="signupfunc.php" method="post">
          <div class="form_settings">
            <p><span>NAME</span><input type="text" name="name" value="" required placeholder="Please insert  full name." /></p>
            <p><span>TEL.NUMBER</span><input type="number" name="tel" value="" required placeholder="Please insert phone number." /><//></p>
            <p><span>SECRET QUESTION</span><select id="secret_question" name="secret_question" value="" required placeholder="">
            		<option value="">Select Your Secret Question</option>
					<option value="What is your favourite color?">What is your favourite color?</option>
					<option value="What is your favourite food?">What is your favourite food?</option>
					<option value="What is your mom's name?">What is your mom's name?</option>
					<option value="What is your hobby?">What is your hobby?</option>
				</select>
			<p><span>SECRET ANSWER</span><input type="text" name="secret_answer" value="" required placeholder="Please insert your secret answer." /><//></p>
            <p><span>EMAIL</span><input type="text" name="email" value="" required placeholder="Please insert email." /></ /></p>
            <p><span>PASSWORD</span><input id="password" type="password" name="password" value="" required placeholder="Please insert password." /><//></p>
             <p><span>RETYPE PASSWORD</span><input id="password2" type="password" name="password2" value="" required placeholder="Please type your password again." /><//></p>
            <p style="padding-top: 10px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="SUBMIT" onclick="return checkpswd();" /></p>
            <!-- <p style="padding-top: 10px"><span>&nbsp;</span><input class="submit" type=button onClick="parent.location='ADDMIN.php'" value='VIEW'></p> -->
                                  
          </div>
        </form>
    </div>
    </div>
  </div>
   
    <div id="content_footer"></div>
    <div id="footer">
     
  </div>
</body>
</html>

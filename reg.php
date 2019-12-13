<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Registration</title>
	<link href="css/stylereg.css" rel="stylesheet" type="text/css">
	<link href="css/mode.css" rel="stylesheet">
    </head>
	<body>
	<div class="sign_up_form">
    <h1>Sign up</h1>
    
    <?php 
        if($_GET)
        if($_GET['error'] =='WrongUserNameFormat')
        echo '<p style="color:red">Wrong Username Format</p>';
        elseif($_GET['error'] =='UserNameTaken')
        echo '<p style="color:red">Username Already Taken</p>';
        elseif($_GET['error'] =='EmailTaken')
        echo '<p style="color:red">Email Already Taken</p>';
        elseif($_GET['error'] =='MobileTaken')
        echo '<p style="color:red">Mobile Already Taken</p>';
	?>
	<form method="post" action="processReg.php">

	<input type="name" class="input-box"  placeholder="Your Name..." name="name"maxlength="8"minlength="4"/required/>
	<input type="password" class="input-box"  placeholder="Password... "name="password" minlength="8" maxlength="16"/required/>
	<input type="password" class="input-box"  placeholder="Confirm Password..."name="cpassword"/required/>
	<input type="email" class="input-box"  placeholder="E-mail..."name="email" minlength="11"/required/>
	<input type="number" class="input-box"  placeholder="Mobile..."name="mobile" minlength="11"maxlength="11"/required/>
	<input type="address" class="input-box"  placeholder="Address..."name="address" minlength="15"/required/>

	<td>
	Male<input type="radio" name="Gender" value="male"/required/>
    Female<input type="radio" name="Gender" value="female"/required/>
    </td>



	<p><input type="checkbox"/required/></span>I agree on <a style="color:white" href="#" onclick="MyWindow=window.open('terms.html','MyWindow','width=400,hight=300');return false;"> Terms and conditions!</a></p>
	<td><button type="submit" class="signbtn">Sign up</button>
		

	<hr>
	<p class="or"></p>
	<p>Already have an account ? <a style="color:white" href="log.php">Sign in!</a></p>

	</form>
	</div>

	</body>
</html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Log in</title>
    <link href="css/stylereg.css" rel="stylesheet" type="text/css">
    </head>
	<body>
   
	<div class="sign_up_form">
    <h1>Log in</h1>
    
    <?php 
        if($_GET)
        if($_GET['error'] =='wrongusernamepass')
        echo '<p style="color:red">Wrong Username or Password</p>';
	?>
	<form id="login" method="post" action="processLog.php">
	
	<input type="name" class="input-box"  placeholder="Name Or Email..." name="name"/required/>
	<input type="password" class="input-box"  placeholder="Password... "name="password"/required/>

	<td><button id="log" type="submit" class="signbtn">Log in</button>

	</form>
    
	<hr>
	<p class="or"></p>
	<p>First Time ? <a style="color:white" href="reg.php">Sign up!</a></p>

    </div>
	</body>
</html>
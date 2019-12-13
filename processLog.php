
<?php

session_start();
require 'Connect.php';
include 'Untitled.php';

$name=$_POST['name'];
$pass= $_POST['password'];
$email=$_POST['name'];
if(strlen($_POST['name'])<8)
$_SESSION["name1"]=$name;
else

{
  $sql = "SELECT Username FROM register WHERE Email='$email' ";
  $result = $conn->query($sql);
 
  if ($result->num_rows > 0) {
     $row = $result->fetch_assoc();
     }
    $_SESSION["name1"]=$row['Username'];

}

 $sql = "SELECT * FROM register WHERE Username='$name' OR Email='$email' ";
 $result = $conn->query($sql);

 if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    }
    if($row['Username']==$name && $row['Password']==$pass || $row['Email']==$email && $row['Password']==$pass){
      alert( "Welcome back ".$_SESSION["name1"]." To Mamma Mia");
      header("refresh:1;url=mainafterlog.php");

    }else {
    alert( "Sorry you entered wrong Username or passowrd");
    header("refresh:1;url=log.php?error=wrongusernamepass");

}
 
$conn->close();

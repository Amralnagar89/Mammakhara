
<?php
session_start();

require 'Connect.php';
$pass=$_POST['password'];
$cpass=$_POST['cpassword'];
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$gender=$_POST['Gender'];

$_SESSION["name1"]=$name;


if(!preg_match("/^[a-zA-Z0-9]*$/",$name))
	{
        header("refresh:1;url=reg.php?error=WrongUserNameFormat");
        exit();
        
    }

$sqlname = "SELECT * FROM register WHERE Username='$name'";
$resultname = $conn->query($sqlname);

$sqlemail = "SELECT * FROM register WHERE Email='$email'";
$resultemail = $conn->query($sqlemail);

$sqlmobile = "SELECT * FROM register WHERE Mobile='$mobile'";
$resultmobile = $conn->query($sqlmobile);

if ($resultname->num_rows > 0) {
    $row = $resultname->fetch_assoc();
    }


    if($row['Username']==$name)
    {
      header("refresh:1;url=reg.php?error=UserNameTaken");
      exit();

    }
    else
    {
        if ($resultemail->num_rows > 0) {
            $row = $resultemail->fetch_assoc();
            }
        if($row['Email']==$email)
        {
          header("refresh:1;url=reg.php?error=EmailTaken");
          exit();

        }
        else
        {

            if ($resultmobile->num_rows > 0) {
                $row = $resultmobile->fetch_assoc();
                }

            if($row['Mobile']==$mobile)
            {
            header("refresh:1;url=reg.php?error=MobileTaken");
              exit();

            }

            else
            {
    
             if($pass!=$cpass) {
             header("refresh:1;url=reg.php?error=PasswordsDon'tMatch");
             exit();

             }
            else{
           
            $sql="INSERT INTO register(Username,Password,Email,Mobile,Address,Gender,Points) VALUES('$name','$pass','$email','$mobile','$address','$gender','50')";
           if($conn->query($sql)===TRUE)
           {
           
               alert ("Thanks you are now a member of our family :)");
               header("refresh:1;url=mainafterlog.html");
           
           
           }else{
               echo"ERROR!!!!!!!".$sql."<br>".$conn->error;
           }
           $conn->close();
            }
            
        }
    }
}




            
                
        
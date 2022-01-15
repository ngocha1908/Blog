<?php

include 'db.php';
include 'login.php';

$EmailErr =  "";
if((isset ($_POST['submit'])) && $_POST['username']!= '' && $_POST['Email']!= '' && $_POST['password']!= '' && $_POST['repassword']!='' )
{
    
    $seach= ['-','\'','#',''];
    $repalce='';

    $username   =htmlspecialchars(addslashes($_POST['username']));
    $Email      =htmlspecialchars(addslashes($_POST['Email']));
    $password   =htmlspecialchars(addslashes($_POST['password']));
    $repassword =htmlspecialchars(addslashes($_POST['repassword']));

    $filer_usr =str_replace($seach,$repalce,$username);
    echo $filer_usr;

    if (empty($_POST["Email"])) {
        //$EmailErr = "Email is required";
        echo "<script type='text/javascript'>alert('$EmailErr');</script>";
      } else {
        $Email = $_POST["Email"];
        // check if e-mail address is well-formed
        if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
          //$EmailErr = "Invalid email format";
        }
      }

    if(($repassword != $password) or ($username != $filer_usr))
    {
        
        header("location:sign_up.php");
    }
    $sql ="SELECT *FROM userss where username = '$username'";
    $old =mysqli_query($con,$sql);
    
    if ((mysqli_num_rows($old)>0))
   {    
       header("location:sign_up.php");
   }
   else
   {
    
    $password=password_hash($password, PASSWORD_DEFAULT);
    $sql =" INSERT INTO userss (username,password,email) values('$username','$password','$Email')";
    mysqli_query($con,$sql);
    
    ?>
        
    <?php
    header("location:login.php");
   }
    
}

else
{
    echo 0;
   // header("location:sign_up.php");
}
?>
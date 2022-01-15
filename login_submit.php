<?php
session_start();
    
include 'db.php';
include 'login.php';
if((isset ($_POST['submit'])) && $_POST['username']!= ''  && $_POST['password']!='' )
{
    $username = $_POST['username'];
    $pasword = $_POST['password'];
    #$username = htmlspecialchars(addslashes($_POST['username']));
    #$pasword = htmlspecialchars(addslashes($_POST['password']));
    
    $sql = "SELECT *from userss where username= '$username' ";

    $user =mysqli_query($con,$sql);
    
   
    if ((mysqli_num_rows ($user)>0))
    {
        $tmp = mysqli_fetch_array($user);
        
        $password_check = password_verify($pasword,$tmp['password']);
        if ($password_check)
        {
       
        $username_hash = password_hash($username,PASSWORD_DEFAULT);
        $_SESSION["user"] =$username_hash;//$username_hash;
        header("location:blog.php");
        }
        else
        {
            echo"Đăng nhập không thành công";
            header("location:login.php");
        }
        
    }
    else
    if (mysqli_num_rows($user)==0)
    {
    header("location:login.php");
    }
}
else
{
   header("location:login.php");
}
?>
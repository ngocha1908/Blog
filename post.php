<?php
include 'db.php';
session_start();

if( (isset($_POST['btn_post'])) && ($_POST['content']) !='' )
{
    //echo $_SESSION["user"];
    $seach= ['\''];
    $repalce='‘';

    $content = htmlspecialchars($_POST['content']);
    //$content =str_replace($seach,$repalce,$content);
    $content = addslashes($content);

    $user=$_SESSION['usr'];
    echo $user;
    echo $content;
    $sql =" INSERT INTO post (username_post,content_post) values('$user','$content')";
    mysqli_query($con,$sql);
}
else
{
    header("location:blog.php");
}
header("location:blog.php");
?>
<?php

?>
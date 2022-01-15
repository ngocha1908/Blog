<?php
include 'db.php';
session_start();

if( (isset($_POST['btn_send_cmt'])) && ($_POST['content_cmt']) !='' )
{
    
    $content = htmlspecialchars( $_POST['content_cmt']);
    $content = addslashes($content);
 
    $user=$_SESSION['usr'];
    $id_post=$_POST['id'];
    
    echo $id_post;
    $sql =" INSERT INTO cmt (id_post,username_cmt,content_cmt) values('$id_post','$user','$content')";
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
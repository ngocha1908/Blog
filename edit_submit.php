<?php
session_start();
include 'db.php';
$id_post= $_SESSION['id'];
$username_post= $_SESSION['usr'];
echo $username_post;
echo $id_post;
?>
<?php
//if($_POST['content']
$content = htmlspecialchars($_POST['content']);
$content = addslashes($content);
$content_post = $content;
echo $content_post;
$sql = "SELECT *FROM post WHERE id_post=$id_post";

$edit =mysqli_query($con,$sql);
if ((mysqli_num_rows($edit)>0))
    {
      
       $sql_edit = "UPDATE post SET content_post='$content_post' WHERE id_post=$id_post";
       $edit_1=mysqli_query($con,$sql_edit);
       echo $sql_edit;
       header("location:blog.php");
    }
    else
    {
        echo "khong";
    }
?>

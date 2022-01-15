<?php
session_start();
include 'db.php';
?>
<style>
input{
    margin-top: 20px;
    padding: 10px;
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 30%;
    background: #f1f1f1;
}
.btn_edit{
    margin-top: 20px;
    float: left;
    width: 5%;
    padding: 10px;
    background: #2e7e96;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
}

.btn_edit:hover{
  background: #2f778dc5;
}
  </style>
<?php
$id_post= $_SESSION['id'];
$username_post= $_SESSION['usr'];

$sql = "SELECT * FROM post WHERE id_post=$id_post";
$post =mysqli_query($con,$sql);
$tmp = mysqli_fetch_array($post);
$user_temo = array (
  'user'=>$tmp['username_post'],
  'id'=>$tmp['id_post'],
  'content'=>$tmp['content_post']
);
?>
<form action="edit_submit.php" method="POST" >
    <input name="content" type="text" placeholder=" Bạn đang nghĩ gì" value="<?php echo $tmp['content_post']?>">   
    <button name="btn_post" type="submit" class="btn_edit">Sửa</button>
</form>

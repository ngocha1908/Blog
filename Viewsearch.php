<style>
.btn_send_cmt{
    background-color: #205565;
    color: white;
    padding: 14px 20px;
    border: none;
    cursor: pointer;
    width: 10%;
}
.btn_send_cmt:hover {
    background: #205565c5;
}
.cmt {
    padding: 10px;
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 50%;
    background: #f1f1f1;
    
}
.post{
  margin-left: 20px;
  font-size: 1.5em;
}
.cmt_l{
  margin-left:30px ;
  font-size: 18px;
}
.btn_delete, .btn_edit{
    background-color: #2e7e96;
    color: white;
    padding: 10px 15px 10px 10px;
    border: none;
    cursor: pointer;
    border-radius: 3px;
    margin-bottom:10px ;
}

.btn_delete:hover, .btn_edit:hover{
  background: #2f778dc5;
}
  </style>
<?php
include 'db.php';
?>
<div>
    <!--lấy ảnh source ava-->
      <!--tên người đăng bài -->
      <a>
        <?php
         $seach= ['-','\'','#',''];
         $repalce='';
         //echo $_POST['find'];
         $search = htmlspecialchars($_SESSION['search']);
         $search = addslashes($search);
        // $search =str_replace($seach,$repalce,$search);
         
         $sql = "SELECT *from post where content_post LIKE '%$search%' ";
     
         $post =mysqli_query($con,$sql);
        
        //echo mysqli_num_rows($post);
         if ((mysqli_num_rows($post)>0))
         {
            $count = mysqli_num_rows($post);
            //echo $count;
            $i=0;
            $data =array();
            while ($tmp = mysqli_fetch_array($post))
            { 
                $i=$i+1;
                ?>
                <!--nội dung bài đăng -->
                <a >
                <?php
                 //user

                    $user_temo = array (
                        'user'=>$tmp['username_post'],
                        'id'=>$tmp['id_post'],
                        'content'=>$tmp['content_post']
                    );
                    $data[$i] =$user_temo;
                    
                    echo $data[$i]['user'];
                   
                ?>
                </a>
                <a>:</a>
              <a>
              <?php
              echo $data[$i]['content'];
               ?>
                <?php   
                   if ($_SESSION['usr']== $data[$i]['user'])
                   {
                       
                       ?>
                        <a href="edit.php" >
                          <?php 
                            $_SESSION["id"] =$data[$i]['id']; 
                          ?>
                          <button name="edit" type="submit" class="btn_edit">Sửa</button></a> 
                          <a href="delete_post.php">
                            <?php
                             $_SESSION["id"] =$data[$i]['id'];
                            ?>
                            <button name="delete" type="submit" class="btn_delete">Xóa</button></a>
                        
                       <?php

                   }
                    
                   ?>
              </a>
                
                <div class="cmt_l">
                  <!--cmt-->
                  <!--input nhập bình luật-->
                  <form action="comment.php" method="POST">
                    <?php
                        $t= $data[$i]['id'];
                         $sql = "SELECT *from cmt where id_post=$t";
                         $con_cmt =mysqli_query($con,$sql);
                         if ((mysqli_num_rows($con_cmt)>0))
                         {
                            $count = mysqli_num_rows($con_cmt);
                            $arcmt= array();
                            $j=0;
                            while ($tmp = mysqli_fetch_array($con_cmt))
                            {
                                $j++;
                                $cmt_temp = array (
                                    'user'=>$tmp['username_cmt'],
                                    'id'=>$tmp['id_post'],
                                    'content'=>$tmp['content_cmt']
                                );
                                $arcmt[$j]=$cmt_temp;
                                //$id_temp=$tmp['id_post'];
                                echo $arcmt[$j]['user'];
                                
                                ?> 
                                <a>:</a>
                                <?php
                                echo $arcmt[$j]['content'];  
                                ?>
                                </br>
                                <?php 
                            }
                        }
                    ?>
                    <input name="content_cmt" class="cmt" placeholder="Viết bình luận...">
                    <!--button đăng bình luận-->
                    <input name="id" hidden="" value="<?php echo $data[$i]['id']?>">
                    <button name="btn_send_cmt" type="submit" class="btn_send_cmt">Gửi</button>
    
                  </form>
                  
                </div>
            <?php }
         } else
         echo "không tìm thấy kết quả";
        ?>
      </a>
    </div>   
   
    
    
  </div>


<?php
include 'db.php';
//session_start();
if( (isset($_POST['search'])) && ($_POST['find']) !='' )
{
    $seach= ['\''];
    $repalce='‘';
    //echo $_POST['find'];
    $search = htmlspecialchars($_POST['find']);
    //$search =str_replace($seach,$repalce,$search);
    $search = addslashes($search);
    
    $sql = "SELECT *from post where content_post LIKE '%$search%' ";

    $find =mysqli_query($con,$sql);
    //echo mysqli_num_rows($find);
    //echo mysqli_num_rows($user);
    if ((mysqli_num_rows($find)>0))
    {
        
    
            $count = mysqli_num_rows($find);
            
            $i=0;
            $data =array();
            while ($tmp = mysqli_fetch_array($find))
            { 
                $i=$i+1;
               
                
               
                
                 //user

                    $user_temo = array (
                        'user'=>$tmp['username_post'],
                        'id'=>$tmp['id_post'],
                        'content'=>$tmp['content_post']
                    );
                    $data[$i] =$user_temo;
                    
                    
                            echo $data[$i]['user'];
                            echo $data[$i]['content'];
                            
            
                 //content
    
            }
    
    }  
    else
    {
        echo "không tìm thấy";
    }

   // header("location:find.php");
}
else
{
   header("location:find.php");
}
?>
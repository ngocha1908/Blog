<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<link rel="stylesheet" href="home.css">
<title>Home</title>
</head>

<body>
    <div id="navbar">
        <a id="logo" href="blog.php">BLOG</a>
        <div id="navbar-right">
            <a class="active" href="#home">Trang cá nhân</a>
            <a href="logout.php" method="POST">Đăng xuất</a>
            <a href="">Cài đặt</a>
        </div>
        </div>
    <div style="margin-top:210px;padding:15px 15px ;font-size:30px">
        <form class="find" action="find.php" method="POST">
            <input type="text" placeholder="Search.." name="find">
            <button type="submit" name="search"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!---------------------------------------POST---------------------------------->
    <div class="row">
        <div class="leftcolumn">
            <form class="card" action="post.php" method="POST">
                <div>
                    <input name="content" type="text" placeholder=" Bạn đang nghĩ gì">   
                    <button name="btn_post" type="submit">Đăng</button>
                </div>
            </form>
            <?php require_once "view.php" ?>
        </div>
        
    <script>
       
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
            if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            document.getElementById("navbar").style.padding = "30px 10px";
            document.getElementById("logo").style.fontSize = "25px";
            } else {
            document.getElementById("navbar").style.padding = "80px 10px";
            document.getElementById("logo").style.fontSize = "35px";
            }
        }
        </script>           
        
</body>
</html>
<html>

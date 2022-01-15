<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="home.css">
  <title>Sign up</title>
</head>
<body>
  <div class="main">
  <h1>ĐĂNG KÝ</h1>

<form action="sign_up_submit.php" method="POST" class="form">
    <label style="font-size: 1.2em"><i class="fas fa-user" style="color: #35849c" ></i> Tên đăng nhập<span style="color:crimson">*</span></label>
        <input class="un" name="username" required type="text"placeholder="Tên đăng nhập">
    <label style="font-size: 1.2em"><i class="fas fa-user" style="color: #35849c"></i> Email<span style="color:crimson">*</span></label>
        <input class="un" name="Email" required type="text"placeholder="Tài khoản email"> 
    <label style="font-size: 1.2em"><i class="fas fa-user-lock" style="color: #35849c"></i> Mật khẩu <span style="color:crimson">*</span></label>
        <input class="pass" name ="password" required type="password" placeholder="Mật khẩu">
    <label style="font-size: 1.2em"><i class="fas fa-user-lock" style="color: #35849c"></i> Nhập lại mật khẩu <span style="color:crimson">*</span></label>
        <input class="pass" name ="repassword" required type="password" placeholder="Nhập lại mật khẩu">
    <div><em>Bạn đã có tài khoản<a href="./login.php" style="color: #325e6b; text-decoration: underline;"> Đăng nhập</em></a></div>
    <button class="submit" type="submit" name="submit" style="font-size: 1.2em">Đăng Ký</button>
</form>
</div> 
</body>
</html>
<html>

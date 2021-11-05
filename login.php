
<?php 
ob_start();//tắt lỗi header
?>

<!DOCTYPE html>

<head>
    <title>Đăng nhập - QLSV</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>


<body>

<div class="center">
      <h1>Đăng Nhập</h1>
      <form method="post" action="logincheck.php">
        <div class="txt_field">
          <input type="text" name="user" required>
          <span></span>
          <label>Tài Khoản</label>
        </div>
        <div class="txt_field">
          <input type="password" name="pass" required>
          <span></span>
          <label>Mật Khẩu</label>
        </div>
        <input type="submit" value="Login">
        <div class="signup_link">
          không phải là thành viên? <a href="register.php">Đăng ký</a>
        </div>
        <div class="signup_link">
          <a>create by Vo Van Thang</a>
</div>
      </form>
    </div>

</body>

</html>



<?php 
ob_start();//tắt lỗi header
?>

<!DOCTYPE html>

<head>
    <title>Đăng nhập - QLSV</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="css/qlsv.css">
</head>


<body class="align">

  <div class="login">

    <header class="login__header">
      <h2><svg class="icon">
          <use xlink:href="#icon-lock" />
        </svg>Đăng Nhập</h2>
    </header>
 
    <form action="logincheck.php" class="login__form" method="POST">

      <div>
        <label for="text">tài khoản</label></br>
        <input type="text" id="text" name="user" placeholder="vui lòng nhập tài khoản">
      </div>

      <div>
        <label for="password">Mật Khẩu</label>
        <input type="password" id="password" name="pass" placeholder="Nhập mật khẩu">
      </div>

      <div>
        <input class="button" type="submit" value="Sign In">
        <a href='register.php' title='Đăng ký'>Đăng ký</a>
      </div>

    </form>

  </div>

  <svg xmlns="http://www.w3.org/2000/svg" class="icons">

    <symbol id="icon-lock" viewBox="0 0 448 512">
      <path d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z" />
    </symbol>

  </svg>

</body>

</html>


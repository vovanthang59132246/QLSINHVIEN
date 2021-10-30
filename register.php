<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Trang đăng lý</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="css/qlsv.css">
    </head>
    <body>

    <div class="center">
      <h1>Register</h1>
      <form method="post" action="xuly.php">
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
        <div class="txt_field">
          <input type="text" name="fullname" required>
          <span></span>
          <label>họ và tên</label>
        </div>
        <div class="">
        <label for="text">Giới tính</label>
        <select name="sex">
                            <option value=""></option>
                            <option value="Nam">Nam</option>
                            <option value="Nu">Nữ</option>
                        </select>
          <span></span>
          
        </div>
        <div>
       <input class="button" type="submit" value="Đăng ký" /></br>
</div>
      </form>
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
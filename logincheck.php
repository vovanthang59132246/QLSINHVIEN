<?php
 
    // Nếu không phải là sự kiện đăng ký thì không xử lý
    if (!isset($_POST['user'])){
        die('');
    }
     
    //Nhúng file kết nối với database
    include('config/constants.php');
          
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
          
    //Lấy dữ liệu từ file dangky.php
    $user   = $_POST['user'];
    $pass   = $_POST['pass'];
   
          
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$user || !$pass)
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    $pass= md5($pass);
    $sql = "SELECT * FROM member WHERE user='$user' and pass='$pass'";
    $rs = mysqli_query($conn,$sql);
    if(mysqli_num_rows($rs) > 0){
        echo "<h1>dang nhap thanh cong</h1>";
    }
    else{
        echo "<h2>dang nhap that bai</h2>";
    }

?>
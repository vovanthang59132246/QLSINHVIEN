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
    $fullname   = $_POST['fullname'];
    $sex        = $_POST['sex'];
          
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$user || !$pass || !$fullname || !$sex)
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    $pass = md5($pass);
          
        // Mã khóa mật khẩu
          
    //Kiểm tra tên đăng nhập này đã có người dùng chưa
    
    
          
 

          
    //Lưu thông tin thành viên vào bảng
    if($conn -> query("INSERT INTO `member`(`user`, `pass`, `fullname`, `sex`) 

    VALUES ('$user','$pass','$fullname','$sex')")){
                          
    //Thông báo quá trình lưu
    
        echo "Quá trình đăng ký thành công. <a href='/'>Về trang chủ</a>";}
    else
    {

        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='login.php'>Thử lại</a>";}
?>
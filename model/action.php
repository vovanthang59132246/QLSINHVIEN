<?php
include('config/constants.php'); 
        
    if(isset($_GET['message'])){
        $message = $_GET['message'];
        if($message == 'success'){
            $_SESSION['thongbao'] = "Đăng ký thành công !";
        }
    }

    if(isset($_POST['submit'])) {
        $MASV = $_POST['MASV'];
        $pass = $_POST['pass'];
        $_SESSION['MASV'] = $MASV;

        $query = "SELECT * FROM sinhvien WHERE MASV = '$MASV'";
        $result = $conn->query($query);
        if(!$result) echo 'Cau truy van bi loi';

        if(empty($MASV) || empty($pass))
        {
            $message = 'danger';
            $_SESSION['thongbao'] = "Vui lòng nhập email, password!";
            header('Location: login.php');
        }
        else if($result->num_rows == 0){
            $message = 'danger';
            $_SESSION['thongbao'] = "Tên tài khoản không tồn tại. Vui lòng kiểm tra lại!";
            header('Location: login.php');
        }
        else{
            $row = $result->fetch_assoc();
            $pass = md5($password);

            if($row['Passwords'] == $pass && $row['ID_Quyen'] == 1){
                $_SESSION['thongbao'] = "Đăng nhập thành công";
                $_SESSION['type'] = "success";
                $_SESSION['HoTen'] = $row['Ho_ten'];
                $_SESSION['ID_KH'] = $row['ID_KH'];
                header('Location: ../index.php');
            }
            else if($row['Passwords'] == $pass && $row['ID_Quyen'] == 2){
                $_SESSION['thongbao'] = "Đăng nhập thành công";
                $_SESSION['type'] = "success";
                $_SESSION['HoTen'] = $row['Ho_ten'];
                $_SESSION['ID_KH'] = $row['ID_KH'];

                $id_quyen = $row['ID_Quyen'];
                $query1 = "SELECT * FROM quyen_han WHERE ID_Quyen =  $id_quyen";
                $result1 = $conn->query($query1);
                if(!$result1) echo 'Cau truy van bi loi';
                $row1 = $result1->fetch_assoc();
                
                $_SESSION['Ten_quyen'] = $row1['Ten_quyen_han'];
                header('Location: ../Admin/index.php');
            }
            else{
                $message = 'danger';
                $_SESSION['thongbao'] = "Mật khẩu không đúng. Vui lòng nhập lại!";
                header('Location: ../login.php');
            }
        }
    }

    if(isset($_POST['register'])){
        header('Location: ../register.php');
    }

    if(isset($_GET['logout'])){
        session_destroy();
        $_SESSION['thongbao'] = "Bạn đã đăng xuất thành công !";
        // header('Location: ./login.php?message=success');
    }

?>
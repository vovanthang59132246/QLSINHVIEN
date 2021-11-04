<!DOCTYPE html>
<html>
<?php
	include('config/constants.php'); 
	mysqli_query($conn, 'SET NAMES UTF8');
?>

    <head>
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <script src="https://use.fontawesome.com/aefb9ecc2c.js"></script>
    
    <title>Lớp</title>
    <link rel="stylesheet" href="css/qlsvs.css">
    </head>
    <body>
	<header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">STUDENT MANAGER</h1>
        </div>
        <nav>
          <ul>
            
            <li><a>Xin chào</a></li>
            <li>          <a href="dangxuat.php" alt="Đăng xuất"> <img src="image/logout.png" width="25px"> </a></li>
          </ul>
        </nav>
      </div>
    </header>
        <!--endheader-->
        <div class="body">
			<div class="container"> 
				<div id="menu">
                  <ul>
				  <li><a  href="trangchu.php"><i class="fa fa-home" aria-hidden="true"></i></i>TRANG CHỦ</a></li>
                      <li><a  href="lop.php"><i class="fa fa-users" aria-hidden="true"></i>LỚP</a></li>
                      <li><a href="sinhvien.php" ><i class="fa fa-graduation-cap" aria-hidden="true"></i>SINH VIÊN</a></li>
                      <li><a href="giangvien.php"><i class="fa fa-users" aria-hidden="true"></i>GIẢNG VIÊN</a></li>
                      <li><a href="diemthi.php"><i class="fa fa-check" aria-hidden="true"></i>ĐIỂM THI</a></li>
                      <li><a id="current" href="contact.php"><i class="fa fa-address-book" aria-hidden="true"  ></i>CONTACT</a></li>
                      <li><a href="baitap.php"><i class="fa fa-book" aria-hidden="true"></i>BÀI TẬP</a></li>

                  </ul>

              </div>
              <div id="main-contain"> 
				  <h2>Thông tin cá nhân</h2></br>
				  <div id="contact-contain">
					<img src="image/logo.png" alt="khoacndttt"/ width="100px" height="100px"> 
					<br><big>
					<span style="color:red">Website quản lý sinh viên </span></big><br>
					Create by Vo Van Thang <br> 
					
					
					<b> Contact me: </b>
					<br> <u> Phonenumber </u>: 0395063590
					<br> <u> Email </u>: thang.vv.59cnot@ntu.edu.vn
					
					
			      </div>
		      </div>
                    
            </div>
           
        </div>
        <!--endbody-->
        <div>
      <?php include('footer.php');
      ?>
   </div>
       
    </body>
</html>
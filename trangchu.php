<?php 
ob_start();//tắt lỗi header
include('config/constants.php');
mysqli_query($conn,'SET NAMES UTF8');
$query = 'SELECT * FROM tintuc';
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <script src="https://use.fontawesome.com/aefb9ecc2c.js"></script>
    
    <title>Trang chủ</title>
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

</br>
    <div class="body">
      <div class="container"> 
        <div id="menu">
                  <ul>
                      <li><a  id="current" href="trangchu.php"><i class="fa fa-home" aria-hidden="true"></i></i>TRANG CHỦ</a></li>
                      <li><a href="lop.php"><i class="fa fa-users" aria-hidden="true"></i>LỚP</a></li>
                      <li><a href="sinhvien.php" ><i class="fa fa-graduation-cap" aria-hidden="true"></i>SINH VIÊN</a></li>
                      <li><a href="giangvien.php"><i class="fa fa-users" aria-hidden="true"></i>GIẢNG VIÊN</a></li>
                      <li><a href="diemthi.php"><i class="fa fa-check" aria-hidden="true"></i>ĐIỂM THI</a></li>
                      <li><a href="contact.php"><i class="fa fa-address-book" aria-hidden="true"  ></i>CONTACT</a></li>
                      <li><a href="baitap.php"><i class="fa fa-book" aria-hidden="true"  ></i>BÀI TẬP</a></li>

                      
                      

                  </ul>
          </br>
              </div>
        
        <div id="cthome">
			<div>
      <marquee width="80%"  scrollamount=”2″ behavior=”slide”  >
					<?php
						if(mysqli_num_rows($result)>0){
						$i = 0;
						while($r= mysqli_fetch_assoc($result)){
							$i++;
							$tin = $r['noidung'];
							echo $tin ;
							}
						}
					?>
	</marquee> 
  
      <img src="image/anhcover.jpg" width= "720px"> </br></br>
      <h3> Student Management Website</h3></br>
                     <a href="lop.php"><i class="fa fa-users"></i></a>
                    <a href="sinhvien.php"><i class="fa fa-graduation-cap"></i></a>
                    <a href="giangvien.php"><i class="fa fa-users"></i></a>
                    <a href="diemthi.php"><i class="fa fa-check"></i></a>
                    <a href="contact.php"><i class="fa fa-address-book"></i></a>
           
        </div>
            </div>
        </div>
  
    
        <div>
      <?php include('footer.php');
      ?>
   </div>
  </body>
   
</html>

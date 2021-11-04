<!DOCTYPE html>
<html>
	<?php
		include('config/constants.php');
        mysqli_query($conn,'SET NAMES UTF8');
		$query = 'SELECT * FROM giangvien '; 
		$result = mysqli_query($conn, $query);
		
 	
	?>
     <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <script src="https://use.fontawesome.com/aefb9ecc2c.js"></script>
    
    <title>Giảng Viên</title>
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
                      <li><a  href="trangchu.php"><i class="fa fa-home" aria-hidden="true"></i></i>TRANG CHỦ</a></li>
                      <li><a href="lop.php"><i class="fa fa-users" aria-hidden="true"></i>LỚP</a></li>
                      <li><a  href="sinhvien.php" ><i class="fa fa-graduation-cap" aria-hidden="true"></i>SINH VIÊN</a></li>
                      <li><a id="current"  href="giangvien.php"><i class="fa fa-users" aria-hidden="true"></i>GIẢNG VIÊN</a></li>
                      <li><a href="diemthi.php"><i class="fa fa-check" aria-hidden="true"></i>ĐIỂM THI</a></li>
                      <li><a href="contact.php"><i class="fa fa-address-book" aria-hidden="true"  ></i>CONTACT</a></li>
					  <li><a href="baitap.php"><i class="fa fa-book" aria-hidden="true"></i>BÀI TẬP</a></li>

                      

                  </ul>

							</div>
							<div id="main-contain"> 
							<h2>GIẢNG VIÊN KHOA </h2>
								
								
										<?php
												if( mysqli_num_rows($result) > 0 )
												{
													$i = 0; 
													while($row= mysqli_fetch_assoc($result))
													{
														$i++;
														$maso = $row['masoGV'];
														$hotenGV = $row['hoten'];
														$trinhdoGV = $row['trinhdo'];
														$chuyenmonGV = $row['chuyenmon'];
														$email = $row['email'];
														$sdt = $row['sdt'];
														$avt = $row['link_avt_GV'];
														echo '<div class="infGiangvien">
																	<div>
																	<a href="thongtingiangvien.php?id='.$maso.'"><img src="image/';
																	
																if ($avt == '') {
																	echo 'test.jpg';
																}
																else{
																echo $avt;}

																echo '" width="120px" height = "120px">  </a>
																	</div>
																<div>
																';
															echo "<b>$hotenGV</b><br>";
															echo "<i><small>$maso</small></i><br>";
															echo "<i><small>$trinhdoGV</small></i><br>";
															echo "<i><small>email: $email</small></i><br>";
															echo "</div>";
														echo "</div>";
													}
												}
										?>
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
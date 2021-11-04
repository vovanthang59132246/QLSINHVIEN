
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
                      <li><a   href="trangchu.php"><i class="fa fa-home" aria-hidden="true"></i></i>TRANG CHỦ</a></li>
                      <li><a href="lop.php"><i class="fa fa-users" aria-hidden="true"></i>LỚP</a></li>
                      <li><a href="sinhvien.php" ><i class="fa fa-graduation-cap" aria-hidden="true"></i>SINH VIÊN</a></li>
                      <li><a id="current" href="giangvien.php"><i class="fa fa-users" aria-hidden="true"></i>GIẢNG VIÊN</a></li>
                      <li><a href="diemthi.php"><i class="fa fa-check" aria-hidden="true"></i>ĐIỂM THI</a></li>
                      <li><a href="contact.php"><i class="fa fa-address-book" aria-hidden="true"  ></i>CONTACT</a></li>
					  <li><a href="contact.php"><i class="fa fa-book" aria-hidden="true"  ></i>BÀI TẬP</a></li>

                      

                  </ul>
              </div>
              <div id="main-contain"> 
			  <h2>GIẢNG VIÊN - Thông tin giảng viên </h2>
			  	<div id="thongtin">
			  			<div id="avtGiangvien">
			  				<?php 
			  					include('config/constants.php'); 
                                  mysqli_query($conn, 'SET NAMES UTF8');
								if (isset($_POST['upload'])){
									$file = $_FILES['avt'];
									move_uploaded_file($file['tmp_name'], "upload/".$file['name']);
									$link_avt = $file['name'];
									$query = 'UPDATE giangvien SET link_avt_GV = "'.$link_avt.'" WHERE  masoGV ="'.$_GET['id'].'"';
									mysqli_query($conn, $query) or die('không thành công');
								}
								$query = 'SELECT * FROM giangvien WHERE masoGV = "'.$_GET['id'].'" '; 
								$result = mysqli_query($conn, $query);
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
										}
									}
			  					if ($avt == '') {
												echo '<img src= "image/test.jpg" width="200px" height="200px">';
											}
			  					else echo '<img src= "upload/'.$avt.'" width="200px" height="200px">';
			  					echo " <br><b> ".$hotenGV."</b>";
			  				?>
			  				<form method="post" name="upload_avt" enctype="multipart/form-data">
			  					<input type="file" name = "avt" id="file" class="input_file"> 
			  					<label for ="file"> Chọn ảnh</label>
			  					<input type="submit" name = "upload" value= "Thay đổi">

			  				</form>
			  				
			  			</div>
			  			<div id="chi_tiet">
			  				 <?php
			  				  
			  				  echo "<big>".$hotenGV. "</big><br><br>";
			  				  echo $trinhdoGV . "<br>";
			  				  echo "MSGV: " .$maso . "<br>";
			  				  echo "Email: " .$email . "<br>";
			  				  echo "Điện thoại: " .$sdt. ".";
			  				?>
			  			</div>
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
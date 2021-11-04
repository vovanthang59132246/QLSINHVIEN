<?php
	include('config/constants.php'); 
	mysqli_query($conn, 'SET NAMES UTF8');
?>

<head>
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <script src="https://use.fontawesome.com/aefb9ecc2c.js"></script>
    
    <title>Sinh Viên</title>
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
                      <li><a href="trangchu.php"><i class="fa fa-home"></i>TRANG CHỦ</a></li>
                      <li><a href="lop.php"><i class="fa fa-users"></i>LỚP</a></li>
                      <li><a id="current" href="sinhvien.php" ><i class="fa fa-graduation-cap"></i>SINH VIÊN</a></li>
                      <li><a href="giangvien.php"><i class="fa fa-users"></i>GIẢNG VIÊN</a></li>
                      <li><a href="diemthi.php"><i class="fa fa-check"></i>ĐIỂM THI</a></li>
                      <li><a href="contact.php"><i class="fa fa-address-book"></i>CONTACT</a></li>
					  <li><a href="baitap.php"><i class="fa fa-book" aria-hidden="true"  ></i>BÀI TẬP</a></li>

                  </ul>

              </div>
              <div id="main-contain"> 
			  <h2>SINH VIÊN - Thông tin sinh viên</h2>
			  	<div id="thongtin">
			  			<div id="avtGiangvien">
			  				<?php 
			  						
			  						if (isset($_POST['upload'])){
			  						$file = $_FILES['avt'];
			  						// echo $file['name'];
			  						// exit();
			  						move_uploaded_file($file['tmp_name'],"upload/".$file['name']);
			  						$link_avt = $file['name'];
			  						$q = 'UPDATE sinhvien SET avt = "'.$link_avt.'" WHERE  sinhvienID = "'.$_GET['id'].'"';
			  						mysqli_query($conn, $q) or die('không cập nhật được');
			  						echo "<div>Đã cập nhật</div>";
			  						}

				  					$query = 'SELECT * FROM sinhvien WHERE sinhvienID = "'.$_GET['id'].'" '; 
									$result = mysqli_query($conn, $query);
									if( mysqli_num_rows($result) > 0 )
										{
											$i = 0; 
											while($r= mysqli_fetch_assoc($result))
											{
												$i++;
												$lopID = $r['lopID'];
												$masv=$r['sinhvienID'];
												$ten= $r['name'];
												$ngaysinhsql =$r['birthday'];
												$ngaysinh = date("d-m-Y", strtotime($ngaysinhsql));
												$sdt = $r['phonenumber'];
												$quequan = $r['address'];
												$sotruong = $r['so_truong'];
												$avt = $r['avt'];
											}
										}
																	
									$q = 'SELECT tenlop FROM lophoc WHERE lopID = "'.$lopID.'" '; 
									$rs = mysqli_query($conn, $q);
									$r1= mysqli_fetch_assoc($rs);
									$tenlop = $r1['tenlop'];
									//echo $tenlop;
			  				
			  					if($avt == ""){
			  						echo '<img src= "image/test.jpg" width="200px" height="200px">';
			  					}
			  					else{
			  					echo '<img src= "upload/'.$avt.'" width="200px" height="200px">';
			  					}
			  					echo " <br><b> ".$ten."</b>";
			  					echo "<br> MSSV: ".$masv;
			  				?>
			  				<form method="post" name="upload_avt" enctype="multipart/form-data">
			  					<input type="file" name = "avt" id="file" class="input_file"> 
			  					<label for ="file"> chọn file</label>
			  					<input type="submit" name = "upload" value= "upload">

			  				</form>
			  				
			  			</div>
			  			<div id="chi_tiet">
			  				 <?php
			  				  echo "<big>Họ tên: ";
			  				  echo $ten. "</big>";
							  echo "<br>Lớp: " .$tenlop. "<br>";
			  				  echo "<br>Ngày sinh: " .$ngaysinh. "<br>";
			  				  echo "Số điện thoại: " .$sdt . "<br>";
			  				  echo "Quê quán: " .$quequan . "<br>";
			  				  if ($sotruong == ""){
			  				  	echo 'Sở trường: Chưa cập nhật <br>
			  				  		<br> <span style="color:red">Cập nhật sở trường:</span> <br>
						  			<form method="post">
									<textarea name="so_truong"> </textarea>
									<input id="btnChapNhan" type="submit" value="Hoàn tất" name="thaydoi"/> ';
								if(isset($_POST['thaydoi']))
										{
											$so_truong = $_POST['so_truong'];
											$query = "UPDATE sinhvien SET so_truong = '$so_truong' WHERE name = '$ten'";
											mysqli_query($conn, $query) or die ('thay đổi không thành công');
											header('location:sinhvien.php');
											
										}

			  				  }
			  				  else 
			  				  echo "Sở trường: " .$sotruong . "<br>";
			  				?>
					<form>
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
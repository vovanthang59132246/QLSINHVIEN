<!DOCTYPE html>
<html>
<?php
	include('config/constants.php');
    mysqli_query($conn,'SET NAMES UTF8');
    
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <script src="https://use.fontawesome.com/aefb9ecc2c.js"></script>
    
    <title>Điểm thi</title>
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
			  			<h2>BẢNG ĐIỂM </h2></br>
			  		<div id="listSV">
			
							  <table width = "70%">
								<tr>
									<th>STT</th>
									
									<th>Sinh viên</th>
									<th>Lập trình ứng dụng</th>
									<th>Lập trình vi mạch</th>
									<th>Hệ thống viễn thông</th>
									<th>TBC</th>
								</tr>
							 
							<?php
								
								$query = "SELECT sinhvien.name, diemthi.ltud, diemthi.ltvm, diemthi.htvt FROM sinhvien, diemthi WHERE sinhvien.sinhvienID = diemthi.sinhvienID";
								$result = mysqli_query($conn, $query);
								if(mysqli_num_rows($result) > 0){
									$i=0;
									while ($r = mysqli_fetch_assoc($result)){
										$i++;
										
										$ten= $r['name'];
										$ltud=$r['ltud'];
										$ltvm = $r['ltvm'];
										$htvt = $r['htvt'];
										$TBC = ($ltud + $ltvm +$htvt)/3;
										echo "<tr> ";
											echo "<td>$i</td>";	
											echo "<td>$ten</td>";
											echo "<td align= 'center'>$ltud</td>";	
											echo "<td align= 'center'>$ltvm</td>";
											echo "<td align= 'center'>$htvt</td>";
											echo "<td align= 'center'>$TBC</td>";
									}
								}
							?>
							</table>
					  </div>
						<form id="formChucnang">
							<a href="chucnang/themdiem.php" ><input  id="btnThemSV" type="button" value="THÊM ĐIỂM"> </a>
						</form>
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
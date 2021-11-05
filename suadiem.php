<!DOCTYPE html>
<html>
<?php
	include('config/constants.php');
  
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
                  <li><a  href="trangchu.php"><i class="fa fa-home" aria-hidden="true"></i></i>TRANG CHỦ</a></li>
                      <li><a href="lop.php"><i class="fa fa-users" aria-hidden="true"></i>LỚP</a></li>
                      <li><a  href="sinhvien.php" ><i class="fa fa-graduation-cap" aria-hidden="true"></i>SINH VIÊN</a></li>
                      <li><a  href="giangvien.php"><i class="fa fa-users" aria-hidden="true"></i>GIẢNG VIÊN</a></li>
                      <li><a id="current"  href="../diemthi.php"><i class="fa fa-check" aria-hidden="true"></i>ĐIỂM THI</a></li>
                      <li><a href="contact.php"><i class="fa fa-address-book" aria-hidden="true"  ></i>CONTACT</a></li>
					            <li><a href="baitap.php"><i class="fa fa-book" aria-hidden="true"  ></i>BÀI TẬP</a></li>
                      

                  </ul>

              </div>
              <div id="main-contain"> 
			  <h2>CHỌN SỬA Ở CỘT CHỨC NĂNG </h2><br>
			  <div id="listSV">
				

							  <table width = "70%">
								<tr>
									<th>STT</th>
									
									<th>Sinh viên</th>
									<th>Lập trình ứng dụng</th>
									<th>Lập trình vi mạch</th>
									<th>Hệ thống viễn thông</th>
									<th>Chức năng</th>
								</tr>
							 
							<?php
								
										$query = " SELECT *  FROM sinhvien INNER JOIN diemthi ON sinhvien.sinhvienID = diemthi.sinhvienID ";
									
									
										$result = mysqli_query($conn, $query);
										if(mysqli_num_rows($result) > 0){
											$i=0;
											while ($r = mysqli_fetch_assoc($result)){
												$i++;
												$sinhvienID = $r['sinhvienID'];
												$diemthiID = $r['IDDiem'];
												$ten= $r['name'];
												$ltud=$r['ltud'];
												$ltvm = $r['ltvm'];
												$htvt = $r['htvt'];
												$TBC = ($ltud + $ltvm +$htvt)/3;
												echo "<tr> ";
												echo "<td>$i</td>";	
												echo "<td>$ten</td>"	;
												echo "<td>$ltud</td>";
												echo "<td>$ltvm</td>";	
												echo "<td>$htvt</td>"	;
											
												echo "<td style='text-align: center;'> <a href='chucnang/formsuadiem.php?id=$sinhvienID'><input id='btnSua' type='button' value='sửa' '></a> </td>";

												}
											}
									
								
								
							?>
							</table>
					  </div>
					
			  <br>
			
		
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

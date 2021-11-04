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
                      <li><a id="current" href="lop.php"><i class="fa fa-users" aria-hidden="true"></i>LỚP</a></li>
                      <li><a href="sinhvien.php" ><i class="fa fa-graduation-cap" aria-hidden="true"></i>SINH VIÊN</a></li>
                      <li><a href="giangvien.php"><i class="fa fa-users" aria-hidden="true"></i>GIẢNG VIÊN</a></li>
                      <li><a href="diemthi.php"><i class="fa fa-check" aria-hidden="true"></i>ĐIỂM THI</a></li>
                      <li><a href="contact.php"><i class="fa fa-address-book" aria-hidden="true"  ></i>Contact</a></li>
					  <li><a href="contact.php"><i class="fa fa-address-book" aria-hidden="true"  ></i>BÀI TẬP</a></li>

                  </ul>
              </div>
              <div id="main-contain"> 
			  <h2>DANH SÁCH LỚP </h2><br>
			  <div id="listSV">
			
							  <table width = "70%">
								<tr>
									<th>STT</th>
									<th>Lớp </th>
									<th>Chủ nhiệm</th>
									<!-- <th>Phòng học</th> -->
									<th>Chức năng</th>
								</tr>
							 
							<?php
								
								$query = "SELECT * FROM lophoc";
								$result = mysqli_query($conn, $query);
								if(mysqli_num_rows($result) > 0){
									$i=0;
									while ($r = mysqli_fetch_assoc($result)){
										$i++;
										$idlop = $r['lopID'];
										$lop = $r['tenlop'];
										$GVchunhiem= $r['chunhiem'];
										// $phongHoc=$r['phonghoc'];
										
										echo "<tr> ";
											echo "<td>$i</td>";	
											echo "<td>$lop</td>";	
											echo "<td>$GVchunhiem</td>"	;
											// echo "<td>$phongHoc</td>";	
											echo " <td style='text-align: center;'> <a href='chucnang/sualop.php?id=$idlop'><input id='btnSua' type='button' value='sửa' '></a>   <a href='chucnang/xoalop.php?id=$idlop'><input id='btnXoa' type='button' value='xóa'></a>  <a href='chucnang/dslop.php?id=$idlop'><input id='btnChitiet' type='button' value='xem danh sách' '></a> </td>";
									}
								}
							?>
							</table>
					  </div>
			<form id="formChucnang">
				<a href="chucnang/themlop.php" ><input  id="btnThemSV" type="button" value="THÊM LỚP"> </a>
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

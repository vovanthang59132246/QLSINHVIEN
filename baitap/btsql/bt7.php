<?php include('config.php'); ?>
<!DOCTYPE html>

<head>
    <title>Quản lí bán sữa</title>
</head>

<body>

    <h3 align="center" style="color: red; font-family: Verdana, Geneva, Tahoma, sans-serif;">THÔNG TIN CÁC SẢN PHẨM</h3>
   
    <?php
        //
        //phan trang
        $query = "select * from sua s   join loai_sua ls on s.Ma_loai_sua = ls.Ma_loai_sua
        join hang_sua hs on s.Ma_hang_sua = hs.Ma_hang_sua
        LIMIT 10
";
$result = $conn->query($query);
if($result){
while ($row = $result->fetch_array()) {
echo "<tr>";
echo "<td width='150px'><img src='hinhsua/{$row['Hinh']}' width='100px' height='100px'>

<h5>{$row['Ten_sua']}</h5>
<div> {$row['Ten_hang_sua']}</div>
<div> {$row['Ten_loai']} - {$row['Trong_luong']} gr - {$row['Don_gia']} VNĐ</div>

</td>";
echo "</tr>";
}
}
        ?>
    
</div>
</html>
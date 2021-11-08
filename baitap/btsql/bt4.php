<?php include('config.php'); ?>
<!DOCTYPE html>

<head>
    <title>Quản lí bán sữa</title>
</head>
<body>
<?php
if (!function_exists('currency_format')) {
    function currency_format($number, $suffix = 'VNĐ') {
        if (!empty($number)) {
            return number_format($number, 0, ',', '.') . "{$suffix}";
        }
    }
}
$sn=1;
?>
    <h3 align="center" style="color: red; font-family: Verdana, Geneva, Tahoma, sans-serif;">THÔNG TIN SỮA</h3>
    <table align="center" border="1">
        <tr style="color: red">
            <th>STT</th>
            <th>Tên Sữa</th>
            <th>Hãng Sữa</th>
            <th>Loại Sữa</th>
            <th>Trọng lượng</th>
            <th>Đơn giá</th>
        </tr>
        <?php
           $rowsPerPage = 5;
           if (!isset($_GET['page'])) {
               $_GET['page'] = 1;
           }
           $offset = ($_GET['page'] - 1) * $rowsPerPage;

           $sql="SELECT * FROM sua LIMIT $offset, $rowsPerPage";
           $res=mysqli_query($conn, $sql);
           $count = mysqli_num_rows($res);
           $maxPage=ceil($count / $rowsPerPage);
           if($res==true){
               while($row=mysqli_fetch_assoc($res)){
                   $ten_sua=$row['Ten_sua'];
                   $ma_hang_sua=$row['Ma_hang_sua'];
                   $ma_loai_sua=$row['Ma_loai_sua'];
                   $trong_luong=$row['Trong_luong'];
                   $don_gia=$row['Don_gia'];
                   $sql2="SELECT Ten_hang_sua FROM hang_sua WHERE Ma_hang_sua='$ma_hang_sua' ";
                   $res2=mysqli_query($conn, $sql2);
                   $row2=mysqli_fetch_assoc($res2);
                   $ten_hang_sua=$row2['Ten_hang_sua'];
                   $sql3="SELECT Ten_loai FROM loai_sua WHERE Ma_loai_sua='$ma_loai_sua' ";
                   $res3=mysqli_query($conn, $sql3);
                   $row3=mysqli_fetch_assoc($res3);
                   $ten_loai=$row3['Ten_loai'];
                   echo "<tr>";
                   echo "<td>".$sn++."</td>";
                   echo "<td>".$ten_sua."</td>";
                   echo "<td>".$ten_hang_sua."</td>";
                   echo "<td>".$ten_loai."</td>";
                   echo "<td>".$trong_luong." gram</td>";
                   echo "<td class ='dg'>".currency_format($don_gia)."</td>";
                   echo "</tr>";
               }
           }
        
        ?>
    </table>
</body>
<div style="text-align: center;">
<?php
    $re = mysqli_query($conn, 'select * from sua');
    $numRows = mysqli_num_rows($re);
    $maxPage = floor($numRows/$rowsPerPage) + 1;
    if ($_GET['page'] > 1){
        echo "<a href=" .$_SERVER['PHP_SELF']."?page=".(1)."> << </a> ";
        echo "<a href=" .$_SERVER['PHP_SELF']."?page=".($_GET['page']-1)."> < </a> "; //gắn thêm nút Back
    }
    for ($i=1 ; $i<=$maxPage ; $i++)
    {
        if ($i == $_GET['page'])
        {
            echo '<b>'.$i.'</b> '; //trang hiện tại sẽ được bôi đậm
        }
        else echo "<a href=" .$_SERVER['PHP_SELF']. "?page=".$i."> ".$i."</a> ";
    }
    if ($_GET['page'] < $maxPage) {
        echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=".($_GET['page'] + 1) . "> > </a>";  //gắn thêm nút Next
        echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=".($maxPage) . "> >> </a>";
    }
    ?>
</html>
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
?>
    <h3 align="center" style="color: red; font-family: Verdana, Geneva, Tahoma, sans-serif;">THÔNG TIN CHI TIẾT LOẠI SỮA</h3>
   
    <?php

        
        if ( ! isset($_GET['page']))
        {
            $_GET['page'] = 1;
        }
        $rowsPerPage=2;
        $perRow =$_GET['page']*$rowsPerPage - $rowsPerPage;

        $sql="Select * from sua LIMIT $perRow, $rowsPerPage";
        $result = $conn->query($sql);
        $totalRow=$conn->query("SELECT * FROM sua")->num_rows;
        $totalPages=($totalRow/$rowsPerPage);
        if($result){

        while ($row = $result->fetch_array()) {
            echo "
                <tr class='title'>
                    <td align='center' colspan ='2' ><h3>{$row['Ten_sua']}</h3></td>
                </tr>
                <tr class='box-wrap'>
                        <td class='image'>
                            <img src='hinhsua/{$row['Hinh']}' class='image'>
                        </td>
                        <td>
                            <div class='label'>Thành phần dinh dưỡng:</div>
                            <div>{$row['TP_Dinh_Duong']}</div>
                            <div class='label'>Lợi ích:</div>
                            <div>{$row['Loi_ich']}</div>
                            <div class='back'><span class='label'>Trọng lượng: </span>{$row['Trong_luong']} gr - <span class='label'>Đơn giá:</span> {$row['Don_gia']} VNĐ </div>
                        </td>
                </tr>
            ";
        }}
    ?>
</table>
<?php
    $re = mysqli_query($conn, 'select * from sua');
    $numRows = mysqli_num_rows($re);
    $maxPage = floor($numRows/$rowsPerPage) + 1;
    if ($_GET['page'] > 1){
        echo "<a href=" .$_SERVER['PHP_SELF']."?page=".(1)."> << </a> ";
        echo "<a href=" .$_SERVER['PHP_SELF']."?page=".($_GET['page']-1)."> < </a> "; 
    for ($i=1 ; $i<=$maxPage ; $i++)
    {
        if ($i == $_GET['page'])
        {
            echo '<b>'.$i.'</b> '; 
        }
        else echo "<a href=" .$_SERVER['PHP_SELF']. "?page=".$i."> ".$i."</a> ";
    }
    if ($_GET['page'] < $maxPage) {
        echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=".($_GET['page'] + 1) . "> > </a>"; 
        echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=".($maxPage) . "> >> </a>";
    }
}
    ?>
</html>
    
</div>
</html>
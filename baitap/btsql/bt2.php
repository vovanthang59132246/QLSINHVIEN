<?php include('config.php'); ?>
<!DOCTYPE html>

<head>
    <title>Quản lí bán sữa</title>
</head>
<body>
    <h3 align="center"  >THÔNG TIN KHÁCH HÀNG</h3>
    <table align="center" border="1">
        <tr style="color: red">
            <th>Mã khách hàng</th>
            <th>Tên khách hàng</th>
            <th>Giới tính</th>
            <th>Địa chỉ</th>
            <th>Điện thoại</th>
        </tr>
        <?php
        $sql ="SELECT * FROM khach_hang";
        $res = mysqli_query($conn, $sql);
        if($res == true)
        {
            $count = mysqli_num_rows($res);
            if($count >=1)
            {
                while($rows = mysqli_fetch_assoc($res))
                {
                    $gt="0";
                    if($rows['Phai'] == 1)
                    {
                        $gt="1";
                    }
                    echo "<tr>";
                    echo "<td>".$rows['Ma_khach_hang']."</td>";
                    echo "<td>".$rows['Ten_khach_hang']."</td>";
                    echo "<td style='text-align:center'>".$gt."</td>";
                    echo "<td>".$rows['Dia_chi']."</td>";
                    echo "<td>".$rows['Dien_thoai']."</td>";
                    echo "</tr>";
                }
            }
        }
        
        ?>
    </table>
</body>

</html>
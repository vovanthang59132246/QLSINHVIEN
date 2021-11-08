<?php include('config.php'); ?>
<!DOCTYPE html>

<head>
    <title>Quản lí bán sữa</title>
</head>
<body>

    <h3 align="center" style="color: red; font-family: Verdana, Geneva, Tahoma, sans-serif;">THÔNG TIN CÁC SẢN PHẨM</h3>
   
    <?php
    
        $query = "select * from sua s   join loai_sua ls on s.Ma_loai_sua = ls.Ma_loai_sua
                                        join hang_sua hs on s.Ma_hang_sua = hs.Ma_hang_sua
                                        LIMIT 12;
                                        ";
        $result = $conn->query($query);
        if(!$result) echo "Query failed: ".$conn->error;

        while ($row = $result->fetch_array()) {
            echo "<tr class='box-wrap'>";
                echo "<td class='box'>
                        <p class='ten-sua'><a href='./index.php?page_layout=baitap&page_bt=3&bai=bai7_ctsp.php&Ma_sp=".$row['Ma_sua']."'>{$row['Ten_sua']}</a></p>
                        <p>{$row['Trong_luong']} gr - {$row['Don_gia']} VNĐ</p>
                        <img src='hinhsua/{$row['Hinh']}' class='image'>
                </td>";
            echo "</tr>";
        }
    ?>
    
</div>
</html>
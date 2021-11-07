<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bai3</title>
</head>
<body>
<?php
if (isset($_POST['submit'])){
    $son=$_POST['son'];
    if (is_numeric($son)&& is_int(0+$son)&& $son>0){
        $arr=array();
        for($i=0;$i<$son;$i++)
        {
            $x=rand(0,20);
            $arr[$i]=$x;
        };
        $kq=implode(",",$arr)."\n";
        $ln=0;
        $nn=$i;
        $sum=0;
        foreach ($arr as $i){
            if($i>$ln){
                $ln=$i;
            }
            else{
                $i++;
            }
        }
        foreach ($arr as $i){
            if($i<$nn){
                $nn=$i;
            }
            else{
                $i++;
            }
        }
        foreach ($arr as $i) $sum=$sum+$i;
    }
}
?>

<form action="" method="post">
<table align="center" bgcolor="#a9a9a9">
    <th colspan="3" style="text-transform: uppercase" bgcolor="purple">
        PHÁT SINH MẢNG VÀ TÍNH TOÁN
    </th>
    <tr>
        <td>Nhap số phần tử</td>
        <td> <input type="text" name="son" value="<?php if(isset($_POST['son'])) echo $son; ?>"></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" name="submit" value="phát sinh và tính toán">
        </td>
        <td></td>
    </tr>
    
    <tr>
        <td>Mảng</td>
        <td>
        <input type="text" name="kq" value="<?php if(isset($_POST['kq'])) echo $kq; ?>">
        </td>
        <td></td>
    </tr>
    <tr>
        <td>GTLN(MAX) trong mảng</td>
        <td>
        <input type="text" name="ln" value="<?php if(isset($_POST['ln'])) echo $ln; ?>">
        </td>
        <td></td>
    </tr>
    <tr>
        <td>GTNN(MIN) trong mảng</td>
        <td>
        <input type="text" name="nn" value="<?php if(isset($_POST['nn'])) echo $nn; ?>">
        </td>
        <td></td>
    </tr>
    <tr>
        <td>tổng mảng</td>
        <td>
        <input type="text" name="sum" value="<?php if(isset($_POST['sum'])) echo $sum; ?>">
        </td>
        <td></td>
    </tr>

    <tr>
        <td colspan="3" style="text-align: center">
            <b style="color: red">(ghi chú:</b> các phần tử trong mảng có giá trị từ 0 đến 20)</b>
        </td>
    </tr>
</table>
</form>
</body>
</html>
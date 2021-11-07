<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bai 1</title>
    <link href="../baitap.css" rel="stylesheet" type="text/css">

</head>
<body>

<?php

if (isset($_POST['submit'])){
    $son=$_POST['son'];
    if (is_numeric($son)&& is_int(0+$son)&& $son>0){
        $arr=array();
        for($i=0;$i<$son;$i++)
        {
            $x=rand(-100,200);
            $arr[$i]=$x;
        }
        $kq="Mảng được tạo là:\n" .implode(" ",$arr)."\n";
        $dem=0;
        foreach ($arr as $i){
            if($i%2==0) $dem++;
        }
        if ($dem==2) $kq.="Co $dem so chan trong mang \n";

        $dem=0;
        foreach ($arr as $i){
            if($i<100) $dem++;
        }
        $kq.="Co $dem phần tử trong mảng nhỏ hơn 100 \n";
        $sum=0;
        foreach ($arr as $i){
            if($i<0) $sum=$sum+$i;
        }
        $kq.="Tổng của các phần tử số âm là: $sum \n";
        $index=0;
        foreach ($arr as $key=>$value){
            if ($value==0) $index=$key;
        }
        if ($index!=0) $kq.="vị trí của các phần tử trong mảng có giá trị bằng 0 la: $index \n";
        else $kq.="Khong co phan tu co gia tri bang 0 \n";
        asort($arr);
//        print_r($arr);
        $kq.="Mang sap xep la: \n" .implode(" ",$arr)."\n";


    } else $kq="$son khong phai la so nguyen duong";
};
?>

<form action="" method="post">
<table width="500" border="0" align="center">
        <tr align="center">
        <td class="a1" colspan="2">bài 1</td>
</tr>
<tr>
    <td>nhập vào số n</td>
    <td> <input type="text" name="son" value="<?php if(isset($_POST['son'])) echo $son; ?>"></td>
</tr>
<tr>
    <tr>
   <td> Ket qua:</td>
    <td><textarea cols="50" rows="10" name="kq"><?php if (isset($_POST['kq'])) echo $kq?></textarea><tr>
</tr>
<tr>
    <td></td>
    <td> <input type="submit" value="Thuc hien" name="submit"></td>
</tr>
</form>

</body>
</html>
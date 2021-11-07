<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../baitap.css" rel="stylesheet" type="text/css">

    <title>bai 4</title>
</head>
<body>
<?php
$text="";
$arr=array();
if (isset($_POST['submit'])){
$text=$_POST['dayso'];
$arr=explode(",",$text);
$kq=1;
$so1=$_POST['so1'];
foreach ($arr as $i){
    if($i!=$so1)
    {
        $kq=$kq+1;
    }
    else{
        $tk="tim thay $i tai vi tri thu $kq cua mang";
    }
    
}
}

?>


<form action="" method="post">
<table align="center" bgcolor="#a9a9a9">
    <th colspan="3" style="text-transform: uppercase" bgcolor="turquoise" class="a2">
       tÌM KIẾM
    </th>
   
        <tr>
            <td>Nhập mảng</td>
            <td><input type="text" name="dayso" size="30"
                value="<?php if(isset($_POST['dayso'])) echo  $text;?>"></td>
        </tr>
        <tr>
            <td>Nhập số cần tìm</td>
            <td><input type="text" name="so1"
                value="<?php if(isset($_POST['so1'])) echo  $so1;?>"></td>
        </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" name="submit" value="tìm kiếm">
        </td>
        <td></td>
    </tr>
    
    <tr>
        <td>Mảng</td>
        <td>
        <input type="text" name="vv" value="<?php echo  $text; ?>">
        </td>
        <td></td>
    </tr>
   
    <tr>
        <td>kết quả tìm kiếm</td>
        <td>
        <input type="text" name="tk" size="30" value="<?php if(isset($_POST['tk'])) echo $tk; ?>" readonly="readonly>
        </td>
        <td></td>
    </tr>

    <tr>
        <td colspan="3" style="text-align: center">
            <b>các phần tử trong mảng phải cách nhau bằng dấu ","</b>
        </td>
    </tr>
</table>
</form>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bai5</title>
</head>
<body>

<?php
function thaythe($arr,$so1,$so2)
{
    foreach ($arr as $key => &$value) {
        if($so1==$value) {
            $value=$so2;
            #var_dump($value);
            #var_dump($thaythe);
        }
    }
    #var_dump($mangso);
    return $arr;
}
$text="";
$arr=array();
if (isset($_POST['submit'])){
$text=$_POST['dayso'];
$arr=explode(",",$text);
$so1=$_POST['so1'];
$so2=$_POST['so2'];
$tt=thaythe($arr,$so1,$so2);

}
?>

<form action="" method="post">
<table align="center" bgcolor="#a9a9a9">
    <th colspan="3" style="text-transform: uppercase" bgcolor="purple">
       THAY THẾ
    </th>
    <tr>
        <td>Nhap các phần tử</td>
        <td><input type="text" name="dayso" size="30"
                value="<?php if(isset($_POST['dayso'])) echo  $text;?>"></td>
    </tr>
    <tr>
            <td>Nhập giá trị cần thay thế</td>
            <td><input type="text" name="so1"
                value="<?php if(isset($_POST['so1'])) echo  $so1;?>"></td>
        </tr>
        <tr>
            <td>Giá trị thay thế</td>
            <td><input type="text" name="so2"
                value="<?php if(isset($_POST['so2'])) echo  $so2;?>"></td>
        </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" name="submit" value="thay thế">
        </td>
        <td></td>
    </tr>
    
    <tr>
        <td>Mảng cũ</td>
        <td>
        <input type="text" name="vv" value="<?php echo  $text; ?>" readonly="readonly">
        </td>
        <td></td>
    </tr>
    <tr>
        <td>mảng sau khi thay thế</td>
        <td>
        <input type="text" name="tt" value="<?php if(isset($_POST['submit'])) print implode('  ',$tt); ?>" readonly="readonly">
        </td>
        <td></td>
    </tr>
    

    <tr>
        <td colspan="3" style="text-align: center">
            <b style="color: red">(ghi chú:</b> các phần tử trong mảng cach nhau bằng dấu ",")</b>
        </td>
    </tr>
</table>
</form>
</body>
</html>
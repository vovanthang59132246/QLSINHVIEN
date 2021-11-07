<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../baitap.css" rel="stylesheet" type="text/css">

    <title>bai 7</title>
</head>
<body>
<?php
if (isset($_POST['submit'])) {
    $duonglich = $_POST['duonglich'];
    $mangcan = array("Quý", "Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm");
    $mangchi = array("Hợi", "Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất");
    $manghinh = array("hoi.png", "ty.png", "suu.png", "dan.png", "mao.png", "thin.png", "ti.png", "ngo.png", "mui.png", "than.png", "dau.png", "tuat.png");
    $namtinh=$duonglich-3;
    $can = $namtinh%10;
    $chi = $namtinh%12;
    $namal = $mangcan[$can];
    $namal = $namal." ".$mangchi[$chi];
    $hinh = $manghinh[$chi];
    $hinhanh = "<img src='../../image/$hinh'>";
}
?>

<form method="post" action="" name="formtinhnamamlich">
    <table align="center" style="background-color: blue;width: 60%;">
    <th colspan="3" style="text-transform: uppercase" bgcolor="purple">
       TÍNH NĂM ÂM LỊCH
    </th>
        <tr>
            <td>Năm dương lịch</td>
            <td> </td>
            <td>Năm âm lịch</td>
        </tr>
        <tr>
            <td>
                <input type="text" style="width: 100%;" name="duonglich" value="<?php if(isset($duonglich)) echo $duonglich; ?>">
            </td>
            <td>
                <input type="submit" style="background-color: #fab1a0; color: red;" name="submit" value="=>">
            </td>
            <td>
                <input type="text" style="background-color: #fab1a0; color: red;" name="amlich" readonly
                value="<?php if(isset($namal)) echo $namal;  ?>">
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center"><?php if(isset($hinhanh)) echo $hinhanh; ?></td>
        </tr>
    </table>
</form>
    </div>
</body>
</html> 
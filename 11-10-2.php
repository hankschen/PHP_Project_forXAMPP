<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
//設定帳號密碼
$servername = "localhost";
$username = "root";
$password = "1234";
$database = "product";

//creat connection
$conn = new mysqli($servername, $username, $password, $database);

//check connection
if($conn->connect_error)
    echo 'Fail to connect to mysql:' . mysqli_connect_error();
else
    echo '建立成功.<br>';

//撈資料庫資料(注意sql語法裡面的名稱要用(反引號``)
mysqli_query($conn, "SET NAMES utf8"); //要加這行將編碼轉成unicode,下一行的中文字才會認的正確執行
$sql = "SELECT * FROM `price` WHERE `category`='主機板'";
//$sql = "SELECT * FROM `price`";
if($result = mysqli_query($conn, $sql)){
    $row1 = mysqli_fetch_row($result);
    $row2 = mysqli_fetch_row($result);
    $row3 = mysqli_fetch_row($result);
    $row4 = mysqli_fetch_row($result);
    $row5 = mysqli_fetch_row($result);
//    for($i = 0;$i < $row1.mssql_field_length();$i++){
//        echo $row1[$i]." ";
//    }
    echo $row2[3]."<br>";
    echo $row3[0]."<br>";
    echo $row3[2]."<br>";
    echo $row3[5]."<br>";
    mysqli_free_result($result);
}
$conn->close();
?>
</body>
</html>

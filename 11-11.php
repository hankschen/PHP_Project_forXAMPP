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
    while ($row_reault = mysqli_fetch_assoc($result)){ //用欄位名稱當索引值
        foreach ($row_reault as $item => $value){
            //echo "<tr>";
            //echo "$item => $value <br>";//換行
            echo "$item => $value <br>";//換行
            //echo "</tr>";
        }
        echo "<hr>";//畫線
    }
    mysqli_free_result($result);
}
$conn->close();
?>
</body>
</html>

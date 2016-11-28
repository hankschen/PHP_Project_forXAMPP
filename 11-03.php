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

//撈資料庫資料
if($result = mysqli_query($conn, "SELECT DATABASE()")){
    $row = mysqli_fetch_row($result); //mysqli_fetch_row()是將得到的結果$result轉存成陣列$row
    //print_r($row);
    echo "Default database is : ".$row[0];
    mysqli_free_result($result);
}

$conn->close();
?>
</body>
</html>

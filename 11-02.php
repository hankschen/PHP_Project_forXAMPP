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
//$conn = mysqli_connect($servername, $username, $password, $database);
$conn = new mysqli($servername, $username, $password, $database);

//check connection
//if(mysqli_connect_error())
if($conn->connect_error)
    echo 'Fail to connect to mysql:' . mysqli_connect_error();
else
    echo '建立成功.<br>';

//切換資料庫
if($conn->select_db("class"))
    echo "資料庫切換成功";
else
    echo "資料庫切換失敗";

//mysqli_close($conn);
$conn->close();
?>
</body>
</html>

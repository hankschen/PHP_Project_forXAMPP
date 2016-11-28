<?php
//設定帳號密碼
$servername = "localhost";
$username = "root";
$password = "1234";
$database = "class"; //資料庫名稱
$conn = mysqli_connect($servername, $username, $password, $database);
//check connection
if(mysqli_connect_errno())
    echo 'Fail to connect to mysql:' . mysqli_connect_errno();
else
    //echo '建立成功.<br>';

mysqli_query($conn, "SET NAMES utf8"); //要加這行將編碼轉成unicode,下一行的中文字才會認的正確執行

?>
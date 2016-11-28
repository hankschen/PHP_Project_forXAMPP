<?php
require_once '../connMysql.php'; //連接資料庫
$sql = "SELECT * FROM `students` ORDER BY `cID`"; //查詢資料庫內容語法
if($result = mysqli_query($conn, $sql)){ //判斷是否有連接到資料庫
    //echo "ok";
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ //一列一列取出資料
        $json_arr[] = $row; //一列資料存入一維陣列
    }
    //print_r($json_arr); //檢查有沒有取出資料用
    $json_result = json_encode($json_arr); //將資料編碼成json格式,以利傳送(例如傳送給手機)
    print $json_result; //印出資料庫編碼後的json code
}else{
    print "資料庫讀取錯誤....!";
}
mysqli_close($conn); //關閉資料庫
?>
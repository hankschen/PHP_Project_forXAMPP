<?php
require_once 'connMysql.php';
if (isset($_POST["action"]) && $_POST["action"] == 'delete'){ //判斷變數是否存在and變數值是否等於'add'
    //echo 'ok';
    $sql_delete = "DELETE FROM `students` WHERE `cID`=" . $_GET["id"] ;
    //echo "$sql_query"; //這行是用來確認程式打的sql語法是否正確
    mysqli_query($conn,$sql_delete); //執行sql語法
    mysqli_close($conn);
    header("Location:data.php"); //後端導向首頁
}
$sql_db = "SELECT * FROM `students` WHERE `cID`=" . $_GET["id"];
//echo $sql_db; //檢查用
$result = mysqli_query($conn, $sql_db);
$row_result = mysqli_fetch_array($result, MYSQLI_ASSOC);
//print_r($row_result); //檢查用
mysqli_free_result($result);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <script>
        function myFunction() {
            if (confirm("\n您確定要刪除這筆資料嗎?\n刪除後將無法恢復..\n")) return true;
            return false;
        }
    </script>
</head>
<body>
<h1 align="center">學生資料管理系統-刪除資料</h1>
<p align="center"><a href="data.php"><回主畫面</a></p>
<form action="" method="post" name="formadd" id="formadd">
    <table border="1" align="center" cellpadding="4">
        <tr>
            <th>欄位</th><th>資料</th>
        </tr>
        <tr>
            <td>姓名</td><td><?php echo $row_result["cName"];?></td>
        </tr>
        <tr>
            <td>性別</td>
                <td><?php if($row_result["cSex"] == "M") echo "男";else echo "女";?></td>
        </tr>
        <tr>
            <td>生日</td><td><?php echo $row_result["cBirthday"];?></td>
        </tr>
        <tr>
            <td>電子郵件</td><td><?php echo $row_result["cEmail"];?></td>
        </tr>
        <tr>
            <td>電話</td><td><?php echo $row_result["cPhone"];?></td>
        </tr>
        <tr>
            <td>住址</td><td><?php echo $row_result["cAddr"];?></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input name="action" type="hidden" value="delete">
                <input name="cID" type="hidden" value="<?php echo $row_result["cID"];?>">
                <!--<input type="submit" name="button" id="button" value="確定刪除這筆資料嗎?">-->
                <button onclick="return myFunction();">刪除這筆資料?</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
<?php
require_once 'connMysql.php'; //先連結資料庫
//if(isset($_POST["action"])){
//    switch ($_POST["action"]) {
//        case "update":
//            $sql_query = "UPDATE `students` SET";
//            $sql_query .= "`cName`='" . $_POST["cName"] . "',";
//            $sql_query .= "`cSex`='" . $_POST["cSex"] . "',";
//            $sql_query .= "`cBirthday`='" . $_POST["cBirthday"] . "',";
//            $sql_query .= "`cEmail`='" . $_POST["cEmail"] . "',";
//            $sql_query .= "`cPhone`='" . $_POST["cPhone"] . "',";
//            $sql_query .= "`cAddr`='" . $_POST["cAddr"] . "'";
//            $sql_query .= "WHERE `cID`=" . $_POST['cID'];
//            mysqli_query($conn, $sql_query);
//            mysqli_close($conn);
//            header("Location:data.php"); //後端導向首頁(按下更新資料按鈕後返回首頁)
//            break;
//        case "clean":
//            $sql_db = "SELECT * FROM `students` WHERE `cID`=" . $_GET["id"];
//            $result = mysqli_query($conn, $sql_db);
//            $row_result = mysqli_fetch_array($result, MYSQLI_ASSOC);
//            mysqli_free_result($result);
//            mysqli_close($conn);
//            break;
//    }
//}
if(isset($_POST["action"]) && $_POST["action"] == "update"){
    //echo "ok"; //檢查用
    $sql_query = "UPDATE `students` SET";
    $sql_query .="`cName`='" . $_POST["cName"] . "',";
    $sql_query .="`cSex`='" . $_POST["cSex"] . "',";
    $sql_query .="`cBirthday`='" . $_POST["cBirthday"] . "',";
    $sql_query .="`cEmail`='" . $_POST["cEmail"] . "',";
    $sql_query .="`cPhone`='" . $_POST["cPhone"] . "',";
    $sql_query .="`cAddr`='" . $_POST["cAddr"] . "'";
    $sql_query .="WHERE `cID`=" . $_POST['cID'];
    //echo $sql_query; //檢查用
    mysqli_query($conn, $sql_query);
    mysqli_close($conn);
    header("Location:data.php"); //後端導向首頁(按下更新資料按鈕後返回首頁)
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
    </head>
    <body>
    <h1 align="center">學生資料管理系統-修改資料</h1>
    <p align="center"><a href="data.php"><回主畫面</a></p>
    <form action="" method="post" name="formadd" id="formadd">
        <table border="1" align="center" cellpadding="4">
            <tr>
                <th>欄位</th><th>資料</th>
            </tr>
            <tr>
                <td>姓名</td><td><input type="text" name="cName" id="cName" value="<?php echo $row_result["cName"];?>"></td>
            </tr>
            <tr>
                <td>性別</td><td>
                    <input type="radio" name="cSex" id="cSex" value="M" <?php if($row_result["cSex"] == "M") echo "checked";?>>男
                    <input type="radio" name="cSex" id="cSex" value="F" <?php if($row_result["cSex"] == "F") echo "checked";?>>女
                </td>
            </tr>
            <tr>
                <td>生日</td><td><input type="date" name="cBirthday" id="cBirthday" value="<?php echo $row_result["cBirthday"];?>"></td>
            </tr>
            <tr>
                <td>電子郵件</td><td><input type="text" name="cEmail" id="cEmail" value="<?php echo $row_result["cEmail"];?>"></td>
            </tr>
            <tr>
                <td>電話</td><td><input type="text" name="cPhone" id="cPhone" value="<?php echo $row_result["cPhone"];?>"></td>
            </tr>
            <tr>
                <td>住址</td><td><input type="text" name="cAddr" id="cAddr" value="<?php echo $row_result["cAddr"];?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input name="action" type="hidden" value="update">
                    <input name="cID" type="hidden" value="<?php echo $row_result["cID"];?>">
                    <input type="submit" name="button" id="button" value="更新資料">
                    <input type="reset" name="reset" id="reset" value="重新填寫">
                </td>
            </tr>
        </table>
    </form>
    </body>
    </html>
<?php
if (isset($_POST["action"]) && $_POST["action"] == 'add'){ //判斷變數是否存在and變數值是否等於'add'
    //echo 'ok';
    require_once 'connMysql.php';
    $sql_query = "INSERT INTO `students` (`cName`,`cSex`,`cBirthday`,`cEmail`,`cPhone`,`cAddr`) VALUES (";
    $sql_query .= "'" . $_POST["cName"] . "',";
    $sql_query .= "'" . $_POST["cSex"] . "',";
    $sql_query .= "'" . $_POST["cBirthday"] . "',";
    $sql_query .= "'" . $_POST["cEmail"] . "',";
    $sql_query .= "'" . $_POST["cPhone"] . "',";
    $sql_query .= "'" . $_POST["cAddr"] . "')";
    //echo "$sql_query"; //這行是用來確認程式打的sql語法是否正確
    mysqli_query($conn,$sql_query); //執行sql語法
    mysqli_close($conn);
    header("Location:data.php"); //後端導向首頁
}
//if($_POST["action"] == 'ret'){
//    echo 'clean';
//}
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1 align="center">學生資料管理系統-新增資料</h1>
        <p align="center"><a href="data.php"><回主畫面</a></p>
        <form action="" method="post" name="formadd" id="formadd">
            <table border="1" align="center" cellpadding="4">
                <tr>
                    <th>欄位</th><th>資料</th>
                </tr>
                <tr>
                    <td>姓名</td><td><input type="text" name="cName" id="cName"></td>
                </tr>
                <tr>
                    <td>性別</td><td>
                        <input type="radio" name="cSex" id="cSex" value="M" checked>男
                        <input type="radio" name="cSex" id="cSex" value="F" >女
                    </td>
                </tr>
                <tr>
                    <td>生日</td><td><input type="date" name="cBirthday" id="cBirthday"></td>
                </tr>
                <tr>
                    <td>電子郵件</td><td><input type="text" name="cEmail" id="cEmail"></td>
                </tr>
                <tr>
                    <td>電話</td><td><input type="text" name="cPhone" id="cPhone"></td>
                </tr>
                <tr>
                    <td>住址</td><td><input type="text" name="cAddr" id="cAddr"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input name="action" type="hidden" value="add">
                        <input type="submit" name="button" id="button" value="新增資料">
                        <input name="ret" type="hidden" value="ret">
                        <input type="reset" name="reset" id="reset" value="重新填寫">
                    </td>
                </tr>
            </table>
        </form>
    </body>
    </html>
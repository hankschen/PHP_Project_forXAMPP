<?php
require_once 'connMysql.php';
$sql = "SELECT * FROM `students`";
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            if($result = mysqli_query($conn, $sql)){
                $total_records = mysqli_num_rows($result);
                //echo $total_records;
        ?>
        <h1 align="center">學生管理系統</h1>
        <p align="center">目前資料筆數:<?php echo $total_records;?> ; <a href="add.php">新增學生資料</a></p>
        <table border="1" align="center">
            <tr>
                <th>座號</th>
                <th>姓名</th>
                <th>性別</th>
                <th>生日</th>
                <th>電子郵件</th>
                <th>電話</th>
                <th>住址</th>
                <th>功能</th>
            </tr>
        <?php
                while ($row_result = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<tr>";
                    echo "<td>".$row_result["cID"]."</td>";
                    echo "<td>".$row_result["cName"]."</td>";
                    echo "<td>".$row_result["cSex"]."</td>";
                    echo "<td>".$row_result["cBirthday"]."</td>";
                    echo "<td>".$row_result["cEmail"]."</td>";
                    echo "<td>".$row_result["cPhone"]."</td>";
                    echo "<td>".$row_result["cAddr"]."</td>";
                    echo "<td><a href='update.php?id=". $row_result["cID"] ."'>修改</a>";
                    echo "<a href='delete.php?id=". $row_result["cID"] ."'> 刪除</a>";
                    echo "</td>";
                    echo "</tr>";
                }
        echo "</table>";
            }
        ?>
    </body>
    </html>
<?php
mysqli_close($conn);
?>
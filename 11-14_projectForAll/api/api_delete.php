<?php
if(isset($_GET["cID"])) {
    require_once '../connMysql.php';
    $sql_delete = "DELETE FROM `students` WHERE `cID`='" . $_GET["cID"] . "'";
    mysqli_query($conn, $sql_delete);
    mysqli_close($conn);
    echo '["Delete ok"]';
}else
    echo '["No Delete"]';
?>
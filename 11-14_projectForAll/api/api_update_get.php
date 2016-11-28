<?php
if(isset($_GET['cID']) && isset($_GET['cName']) && isset($_GET['cSex']) && isset($_GET['cBirthday']) && isset($_GET['cEmail']) && isset($_GET['cPhone']) && isset($_GET['cAddr'])) {
    require_once "../connMysql.php";
    $sql_query = "UPDATE `students` SET";
    $sql_query .= "`cName`='" . $_GET["cName"] . "',";
    $sql_query .= "`cSex`='" . $_GET["cSex"] . "',";
    $sql_query .= "`cBirthday`='" . $_GET["cBirthday"] . "',";
    $sql_query .= "`cEmail`='" . $_GET["cEmail"] . "',";
    $sql_query .= "`cPhone`='" . $_GET["cPhone"] . "',";
    $sql_query .= "`cAddr`='" . $_GET["cAddr"] . "'";
    $sql_query .= "WHERE `cID`=" . $_GET['cID'];
    echo "ok";
    mysqli_query($conn, $sql_query);
    mysqli_close($conn);
}
?>
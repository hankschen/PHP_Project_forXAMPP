<?php
if(isset($_POST['cID']) && isset($_POST['cName']) && isset($_POST['cSex']) && isset($_POST['cBirthday']) && isset($_POST['cEmail']) && isset($_POST['cPhone']) && isset($_POST['cAddr'])) {
    require_once "../connMysql.php";
    $sql_query = "UPDATE `students` SET";
    $sql_query .= "`cName`='" . $_POST["cName"] . "',";
    $sql_query .= "`cSex`='" . $_POST["cSex"] . "',";
    $sql_query .= "`cBirthday`='" . $_POST["cBirthday"] . "',";
    $sql_query .= "`cEmail`='" . $_POST["cEmail"] . "',";
    $sql_query .= "`cPhone`='" . $_POST["cPhone"] . "',";
    $sql_query .= "`cAddr`='" . $_POST["cAddr"] . "'";
    $sql_query .= "WHERE `cID`=" . $_POST['cID'];
    echo "ok";
    mysqli_query($conn, $sql_query);
    mysqli_close($conn);
}
?>
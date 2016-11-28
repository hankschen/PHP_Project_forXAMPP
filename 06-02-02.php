<!DOCTYPE html>
<?php
if($_POST["account"] == "Hanks" && $_POST["passwd"] == "1234"){
    $login = "Yes";
}else {
    $login = "No";
}
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if($login == "Yes")
            echo "登入成功!";
        else
            echo '登入失敗!';
        ?>
    </body>
</html>

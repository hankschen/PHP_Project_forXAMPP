<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $count = 0;
        do{
            if($_POST["account"] == "Hanks" && $_POST["passwd"] == "1234")
                echo "登入成功!";
            else
                $count++;
                echo '帳號密碼錯誤!登入失敗!請從新輸入<br>';
                echo "你還有 ".(3-$count)." 次機會!<br>";
        }while($count<3);
        echo '帳號鎖住,請洽專櫃';
        ?>
    </body>
</html>

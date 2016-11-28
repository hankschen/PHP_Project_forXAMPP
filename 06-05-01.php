<!DOCTYPE html>
<?php
    //include 'share/inc1.inc';
    //require 'share/inc1.inc';
    //include_once 'share/inc1.inc'; //只引用引入檔一次
    //include 'inc2.inc';
    //require 'inc2.inc';
    require_once 'share/inc1.inc'; //只引用引入檔一次
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo "兩數相加 = ".add(100, 200)."<br>";
            echo "兩數相減 = ".minus(500, 300)."<br><hr>";
            echo add(10000, 500)."<br>";
            echo minus(650, 300);
            //echo "第二次呼叫兩數相加 = ".add(500,300)."<br>";
            //echo '第二次呼叫兩數相減 = '.  minus(1000, 500)."<br><hr>";
        ?>
    </body>
</html>

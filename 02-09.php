<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $num = 1;
        echo "第一次: ". $num . "<br>"; //1
        $num += 1;
        echo "第二次: ". $num . "<br>"; //2
        $num ++;
        echo "第三次: ". $num . "<br>"; //3
        echo "第四次: ". ++$num . "<br>"; //4
        echo "第五次: ". $num++ . "<br>"; //4
        echo "第六次: ". $num . "<br>"; //5
        $num += 12;
        echo "第七次: ". $num . "<br>"; //17
        $num /= 17;
        echo "第八次: ". $num . "<br>"; //1
        ?>
    </body>
</html>

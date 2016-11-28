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
        //變數
        $name = "hanks";
        $user1 = "marry";
        $user2 = "bill";
        
        //使用echo
        echo ("測試使用echo<br>");
        echo "測試使用echo<br>"; //常用寫法
        echo $user1,$user2,"<br>";
        echo "Hi! ".$name."<br>";
        echo "Hi! ".$name." ".$user1." ".$user2."<br>";
        echo "Hi! $name     $user1$user2<br>"; //常用寫法
        echo "Hi! $name<br><br><br>";
        
        //使用print
        print ("測試使用print<br>");
        print "測試使用print<br>";
        //print $user1,$user2,"<br>"; //print不能使用","
        print "Hi! ".$name."<br>";
        print "Hi! ".$name." ".$user1." ".$user2."<br>";
        print "Hi! $name     $user1$user2<br>";
        print "Hi! $name<br>"
        ?>
    </body>
</html>

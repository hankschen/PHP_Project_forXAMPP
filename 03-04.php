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
        date_default_timezone_set("Asia/Taipei");
        $hour = date("H");
        $str = ($hour >= 12) ? "PM" : "AM";
        $hour = ($hour >= 12) ? $hour - 12 : "$hour";
        print "<br>目前時間為: ".$hour." ".$str;
        
        ?>
    </body>
</html>

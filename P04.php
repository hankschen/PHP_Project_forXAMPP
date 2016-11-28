<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<table border=1><tr>";
        for($i=2;$i<=9;$i++){
            for($j=1;$j<=9;$j++){
                echo "<td width=100>$i*$j=".$i*$j."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </body>
</html>

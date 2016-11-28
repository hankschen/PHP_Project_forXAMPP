<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        for($i=2;$i<=9;$i++){
            for($j=1;$j<=9;$j++){
                echo $i."*".$j."=".$i*$j."<br>";
            }
            echo "<hr>";
        }
        ?>
    </body>
</html>

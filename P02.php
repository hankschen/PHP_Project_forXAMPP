<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $i=2;
        while($i <= 9){
            $j=1;
            while($j <= 9){
                echo $i."*".$j."=".$i*$j."<br>";
                $j++;
            }
            echo "<hr>";
            $i++;
        }
        ?>
    </body>
</html>

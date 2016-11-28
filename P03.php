<!DOCTYPE html>
en the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $i=2;
        do{
            $j=1;
            do{
                echo $i."*".$j."=".$i*$j."<br>";
                $j++;
            }while($j <= 9); 
            echo"<hr>";
            $i++;
        }while($i <= 9);
        ?>
    </body>
</html>

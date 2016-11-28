<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //二維陣列定義,用foreach走訪
        $row0 = array(64,65);
        $row1 = array(77,78);
        $row2 = array(100,99);
        $grades = array($row0,$row1,$row2);
        echo $grades[2][1]."<br>";
        $total = 0;
        foreach ($grades as $matrix1){
            $sum = 0;
            foreach ($matrix1 as $element){
                print"$element"." ";
                $sum += $element;
                $total += $element;
            }
            echo "成績小計: ".$sum."<br>";
        }
        echo "全班總成績: ".$total."<br>";
        ?>
    </body>
</html>

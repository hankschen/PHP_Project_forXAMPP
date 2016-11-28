<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //二維陣列定義,用for走訪
        $row0 = array(64,65);
        $row1 = array(77,78);
        $row2 = array(100,99);
        $grades = array($row0,$row1,$row2);
        echo $grades[2][1]."<br>";
        $total = 0;
        for($i=0;$i<count($grades);$i++){
            $sum = 0;
            for($j=0;$j<count($grades[$i]);$j++){
                print $grades[$i][$j]." ";
                $sum += $grades[$i][$j];
                $total += $grades[$i][$j];
            }
            echo "成績小計: ".$sum."<br>";
        }
        echo "全班總成績: ".$total."<br>";
        
        ?>
    </body>
</html>

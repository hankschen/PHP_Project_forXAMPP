<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $grades = array(78,55,89,93);
        $grade[2] = 60; //改值
        $total = 0;
        for($i=0;$i<count($grades);$i++){
            echo "$i = $grades[$i]<br>";
            $total += $grades[$i];
        }
        echo "<br>成績總分:".$total."<br><hr>";
        
        $weekArray[] = "Sun"; //$weekArray[0]給值
        $weekArray[] = "Mon"; //$weekArray[1]給值
        $weekArray[] = "Tue"; //$weekArray[2]給值
        $weekArray[] = "Wed"; //$weekArray[3]給值
        $weekArray[] = "Thu"; //$weekArray[4]給值
        $weekArray[] = "Fri"; //$weekArray[5]給值
        $weekArray[] = "Sat"; //$weekArray[6]給值
        $weekArray[2] = "Tuesday"; //修改$weekArray[2]值
        foreach($weekArray as $element){ //走訪全部陣列
            echo "$element<br>";
        }
        
        ?>
    </body>
</html>

<?php

//無輸入無輸出函數
function showHeader() {
    echo"<hr>";
    echo"<h3>自訂function</h3>";
}
//輸入兩個變數,輸出一個變數
function sumN2N($brgin, $end) {
    $sum = 0;
    for ($i = $brgin; $i <= $end; $i++) {
        $sum += $i;
    }
    return $sum;
}
//輸入2變數,輸出4變數
function test($num1, $num2) {
    $sunMun = $num1 + $num2;
    $cutNum = $num1 - $num2;
    $output1 = $num1 * $num2;
    $output2 = $num1 / $num2;
    return array($num1, $num2, $sunMun, $cutNum, $output1, $output2); //用陣列方式返回結果值
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        showHeader();
        echo "<hr>";
        $sum1 = sumN2N(100, 200);
        $sum2 = sumN2N(1, 100);
        echo "100 加到 200 = " . $sum1 . "</p>";
        echo "1 加到 100 = ", $sum2, "<br>";
        echo "<hr>";
        $return_value = test(50, 20);
        $return_value_count = count($return_value); //取出回傳陣列數量
        echo $return_value_count; //印出陣列長度
        for ($i = 2; $i < $return_value_count; $i++) { //印出陣列內容
            echo "<p>答案: " . $return_value[$i] . "</p>";
        }
        echo "<p>$return_value[0] + $return_value[1] = ".$return_value[2]."</p>";
        echo "<p>$return_value[0] - $return_value[1] = ".$return_value[3]."</p>";
        echo "<p>$return_value[0] * $return_value[1] = ".$return_value[4]."</p>";
        echo "<p>$return_value[0] / $return_value[1] = ".$return_value[5]."</p>";
        echo "<hr>";
        
        //轉址
        header("Location:http://www.yahoo.com.tw");
        //每5秒自動重新整理
        header('refresh:5 ; url="http://www.yahoo.com.tw"')
        ?>
    </body>
</html>

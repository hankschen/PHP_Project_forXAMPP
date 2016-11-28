<!DOCTYPE html><!-- 宣告文件類型 -->
<html lang="zh-tw"><!-- 指定網頁使用的語言 -->
<head><!-- 文件的標頭 -->
<meta charset="utf-8"><!-- 指定網頁編碼 -->
<title>網頁標題文字</title><!-- 文件標題 -->
</head>
<body><!-- 文件主體 -->
<?php
$weekArray = array('星期日'=>'Sunday', '星期一'=>'Monday', '星期二'=>'Tuesday', '星期三'=>'Wednesday', '星期四'=>'Thursday', '星期五'=>'Friday', '星期六'=>'Saturday');
print "<table border = 1><tr>";
foreach ($weekArray as $key => $value)
    echo "<td width = 500>$key 的英文是 ".$value."<br></td>";
echo "</tr>";
echo "</table>";
print_r($weekArray);
?>
</body>
</html>


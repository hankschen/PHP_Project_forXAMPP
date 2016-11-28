<?php
print_r("陣列  json編碼");
echo "<br>";
//$arr = array('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>10);
$arr = array("a"=>1,"b"=>2,"c"=>3,"d"=>4,"e"=>10);
$result = json_encode($arr); //json編碼
echo $result;
echo "<hr>";
print_r("解碼");
echo "<br>";
$object = json_decode($result); //json解碼
print_r($object);
echo "<hr>";
echo $object->a . "<br>";
echo $object->b . "<br>";
echo "<hr>";
//array
print_r("陣列解碼");
echo "<br>";
$arr = json_decode($result, true); //true時傳回陣列
print_r($arr);
echo "<br>";
echo $arr['a'] . "<br>";
echo $arr['b'] . "<br>";
?>
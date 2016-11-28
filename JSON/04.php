<?php
$char = array('orderID' => 1245,
    'shopperName'=> "John Smith",
    'shopperEmail'=>"johnsmith@wxample.com",
    'contents'=>array(
        array(
            'productID'=>34,
            'productName'=>"Superwidget",
            'quantity'=>1
        ),
        array('productID'=>56,
            'productName'=>"wonderwidget",
            'quantity'=>3)
    ),
    "orderComplete"=>true
);
$result = json_encode($char);
echo $result; //json½s½X
echo "<hr>";
//decode for object
$object = json_decode($result);
print_r($object);
echo "<hr>";
echo $object->orderID . "<br>";
echo $object->shopperEmail . "<br>";
echo $object->contents[0]->productID . "<br>";
echo $object->contents[0]->productName . "<br>";
echo $object->contents[1]->productID . "<br>";
echo $object->contents[1]->productName ."<br>";
echo "<hr>";

//decode for array
$arr = json_decode($result, true); //true®É¶Ç¦^°}¦C
print_r($arr);
echo "<hr>";
echo $arr["orderID"] . "<br>";
echo $arr["shopperEmail"] . "<br>";
echo $arr["contents"][0]['productID'] . "<br>";
echo $arr["contents"][1]['productName'] . "<br>";
echo $arr["contents"][1]['quantity'] . "<br>";

?>
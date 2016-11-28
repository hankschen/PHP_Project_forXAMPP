<?php
//$arr = array('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>1);
$arr = array("a"=>1,"b"=>2,"c"=>3,"d"=>4,"e"=>1);
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
echo json_encode($arr);  //json½s½X
echo json_encode($char); //json½s½X
?>
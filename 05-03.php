<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //第一種結合陣列
        $arr["color"] = "紅色";
        $arr["name"] = "江小魚";
        $arr["shape"] = "圓形";
        $arr[] = 50;
        $arr[] = 100;
        echo "arr1[]陣列長度 = ".count($arr1)."<br>";
        echo "arr[]陣列長度 = ".count($arr)."<br>";
        echo "arr[0] = ".$arr[0]." , "."arr[1] = ".$arr[1]."<br>";
        echo "color ".$arr["color"]." , "."name ".$arr["name"]." , "."shape ".$arr["shape"]."<br><hr>";
        
        //第二種結合陣列
        $arr1 = array("color"=>"黑色","name"=>"Hanks","shape"=>"正方形",1000,500,1500);
        if(!isset($arr1["type"])){
            $arr1["type"]="PHP";
            echo "新增成功<br>";
        }
        foreach ($arr1 as $key => $value)
            echo "$key => $value<br>";
        echo "<hr>";
        
        unset($arr1["shape"]); //刪除元素
        print_r("刪除shape後陣列內容為 "); //列出元素
        print_r($arr1);
        ?>
    </body>
</html>

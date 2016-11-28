<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $mf = $_GET["mf"];
            if($mf == "m")
                $mf1 = '先生';
            else
                $mf1 = '小姐';
            echo '<h1>';
            echo $_GET["UserName"]." ".$mf1."您好 !"."</h1><br>";
            echo "<h2>您的學歷為 : ".$_GET["UserNumber"]."<br>";
            echo "您喜歡的活動如下 : <br>";
            echo '<ul>';
            //echo "<li>".$_GET["UserHoby"]."</li><br>";
            echo '<li>';
            foreach($_GET["UserHoby"] as $value)
                echo $value."</li>";
            echo '</ul>';
            echo '您對於使用臉書經營社群有何看法 : <br>';
            echo $_GET["UserThink"]."<br>";
            echo '</h2>';
        ?>
    </body>
</html>

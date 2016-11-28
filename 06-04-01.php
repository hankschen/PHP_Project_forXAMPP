<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!-- 複選 -->
        <form method="GET" action="06-04-02.php">
        <!-- <form method="POST" action="06-03-02.php"> -->
            您學會的程式語言 :
            <!-- <select name="item[]" size="6" multiple="multiple"> size參數可不用設定 -->
            <select name="item[]" multiple="multiple">
                <option value="Linux" selected>Linux</option> <!--selected參數為設定預設選項-->
                <option value="Apache">Apache</option>
                <option value="PHP" selected>PHP</option>
                <option value="MySQL">MySQL</option>
            </select><br>
            <input type="submit" value="送出">
        </form>
    </body>
</html>
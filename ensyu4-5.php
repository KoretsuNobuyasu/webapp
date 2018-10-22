<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
    echo date("Y年m月d日");
    echo "<br />";
    $week = array(0 =>"月",1 =>"火",2 =>"水",3 =>"木",4 =>"金",5 =>"土",6 =>"日");
    echo "一週間は";
    foreach($week as $value){
        print "$value ,";
    }
    echo count($week),"日です";
    ?>
    <br>
    <a href="http://localhost/~nobu/webapp/test.php">if文</a>
    <form action="ensyu4-5.php" method="GET">
        <input type="number" name="month" value="0">
        <input type="submit" value="送信">
    </form>
    <?php
        if (!empty($_POST["month"])) {
            $month = $_POST['month'];
            if ($month == 0) {
                echo "0以上の数値を入力してください。";
            }
            else {
                switch ($month) {
                    case $month >= 4 && $month <= 6:
                        echo "春です";
                        break;
                    case $month >= 7 && $month < 10:
                        echo "夏です";
                        break;
                    case $month >= 10 && $month < 12:
                        echo "秋です";
                        break;
                    case $month >= 1 && $month < 4 || $month == 12:
                        echo "冬です";
                        break;
                    case $month == 0:
                        echo "0以上で入力してください";
                        break;
                    default:
                        echo "数値を入力してください。";
                        break;
                }
            }
        }
    ?>
</body>
</html>
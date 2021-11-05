<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>迴圈來計算連續五個周一的日期</title>
</head>
<body>
    <h1>迴圈來計算連續五個周一的日期</h1>
    <h3>時間的平移</h3>
    <?php
    date_default_timezone_set('Asia/Taipei');
    $now=strtotime('now');
    echo $now;
    echo "<br>";
    echo date("Y-m-d H:i:s");
    echo "<br>";
    $tomorrow=strtotime("+1 day");
    echo "<br>";
    echo "明天".date("Y-m-d H:i:s",$tomorrow);
    echo "<br>";
    $nextMonth=strtotime("+1 month");
    echo "下個月".date("Y-m-d H:i:s",$nextMonth);
    echo "<hr>";
    $weekstr=['星期天','星期一','星期二','星期三','星期四','星期五','星期六'];
    $start=strtotime('2021-10-4');

    for($i=0;$i<5;$i++){
        $secs=strtotime("+".($i*7). "days",$start);
        echo date("Y-m-d",$secs). " " .$weekstr[date("w",$secs)];
        echo "<br>";
    }
    
    ?>
    
</body>
</html>
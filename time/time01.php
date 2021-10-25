<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>給定兩個日期，計算中間間隔天數</title>
</head>
<body>
    <h1>給定兩個日期，計算中間間隔天數</h1>
    <span>開始日期:2021-10-1</span><br>
    <span>開始日期:2021-11-3</span>
    <hr>
    <?php
        date_default_timezone_set('Asia/Taipei');
        //調整台灣時區要背 ↑
        $start=strtotime('2021-10-1');
        $end=strtotime('2021-11-3');
        $ans=($end-$start)/(60*60*24);
        echo "中間間隔天數 $ans 天";
        ?>
</body>
</html>
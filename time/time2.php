<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算距離自己下一次生日還有幾天</title>
</head>
<body>
    <h1>計算距離自己下一次生日還有幾天</h1>
    <?php
    date_default_timezone_set('Asia/Taipei');
    $today=strtotime(date("Y/m/d"));
    $birthday=strtotime(date("Y/7/22"));

    if($today>$birthday){
        $birthday=strtotime(date("Y/7/22",strtotime('+1 years')));

    }
    $ans=($birthday-$today)/(60*60*24);
    echo "下次生日還有 $ans 天";
    echo "<br>";
    echo floor($ans)."天";
    echo "<br>";
    $year=floor(floor($ans)/365);
    echo $year;
    echo "<br>";
    $month=floor(floor(floor($ans)%365)/30);
    echo $month;
    echo "<br>";
    $days=floor(floor($ans)%365)%30;
    echo $days;
    echo "<br>";
    echo "距離我下次生日還有".$year."年".$month."月".$days."日";
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$high=$_GET['high'];
$weight=$_GET['weight'];
$high=($high/100);
$BMI=$weight/($high*$high);

echo "<span>";
echo '你的BMI為：'.$BMI;
echo '<br>';
echo "</span>";
if($BMI>=35){
    echo '過度肥胖';
}elseif(30<=$BMI and $BMI<35){
    echo '中度肥胖';
}elseif(27<=$BMI and $BMI<30){
    echo '輕度肥胖';
}elseif(24<=$BMI and $BMI<27){
    echo '過重';
}elseif(18.5<=$BMI and $BMI<24){
    echo '輕度肥胖';
}elseif(18.5>$BMI) {
    echo '過輕';
}

?>
    <a href="index.php?bmi<?=$bmi;?>">回首頁</a>
</body>
</html>

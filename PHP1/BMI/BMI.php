<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算BMI</title>
</head>
<body>
<h1>計算BMI</h1>
<?php
if(!empty($_GET['bmi'])){
    echo "你上次計算的BMI為".$_GET['bmi'];
}
?>
    <form action='BMI_1.php' method='GET'>
    身高：<input type='text' name='high' >
    體重：<input type='text' name='weight' >
    <input type='submit' value='送出'>
</body>
</html>


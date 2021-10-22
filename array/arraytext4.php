<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>找出五百年內的閏年</title>
</head>
<body>
<?php
$years = 2021;
$leaps=[];
for($i=$years;$i<=($years+500);$i++){
    if(($i%4 == 0) and ($i%100 != 0) or ($i%400 == 0)){
        $leaps[]=$i;
}
}
$i=2152;
// echo "<pre>";
// echo print_r($leaps);
// echo "</pre>";
if(in_array($i,$leaps)){
    echo $i . "是閏年";
}else{
    echo $i . "不是閏年";
}
?>
</body>
</html>
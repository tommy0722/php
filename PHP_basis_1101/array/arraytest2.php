<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>程式來產生陣列</title>
</head>
<body>
    <?php
    $nine=[];
   // $a=$i*$j; 帶有變數很容易出錯
    for($i=1;$i<10;$i++){
        for($j=1;$j<10;$j++){
            $nine[]="$j X $i =" . ($j*$i);
        }
    }
    // echo "<pre>";
    // print_r($nine);
    // echo "</pre>";
    for($i=0;$i<count($nine);$i++){
        echo $nine[$i];
        if($i%9==8){
            //if(($i+1)%9==0)
            echo '<br>';
        }
    }
    ?>
</body>
</html>
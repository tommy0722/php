<?php
// 輸出九九乘法表，要求行列對齊
for ($i = 1; $i < 10; $i++) {
	for ($j = 1; $j <= $i; $j++) {
		echo $i . '*' . $j . '=' . $i * $j . '　　';
	}
	echo '<br>';
}
echo '<br>';
?>

<?php
for($i=1;$i<10;$i++){
    for($j=1;$j<10;$j++){
    echo "$i*$j=$i*$j&nbsp&nbsp&nbsp";
    }
    echo '<br>';
}
?>

// 直角三角形 <br>
<?php
$n = 5;
for ($i = 1; $i <= $n; $i++) {
	for ($j = 1; $j <= $i;$j++) {
		echo '*';
	}
	echo '<br>';
}
?>
// 倒直角三角形
<br>
<?php
$n = 5;
for ($i = 1; $i <= $n; $i++) {
	for ($j = 5; $j >= $i; $j--) {
		echo '*';
	}
	echo '<br>';
}
?>
// 正三角形
<br>
<?php
$n = 5;
for ($i = 1; $i <= $n; $i++) {
	for($k=5;$k>=$i;$k--){
		echo "&nbsp;&nbsp;";
	}
	for ($j = 1; $j <= 2*$i-1; $j++) {
		echo '*';
	}
	echo '<br>';
}
?>

//菱形

<br>
<?php
$n = 5;
for ($i=1;$i<=$n;$i++){
	for($k=5;$k>=$i;$k--){
		echo "&nbsp;&nbsp;";
	}
	for ($j = 1; $j <= 2*$i-1; $j++) {
		echo '*';
	}
	echo '<br>';
}
for ($i = 1; $i <= $n-1; $i++) {
	for($k=1;$k<=$i+1;$k++){
		echo "&nbsp;&nbsp;";
	}
	$a=2*($n-1)+1;
	for ($j =$a ; $j >= 2*$i+1; $j--) {
		echo '*';
	}
	echo '<br>';
}
?>


空心矩形
<br>
<?php
$n=7;
$a=$n-2;
for($i=1;$i<=$n;$i++){
	if($i==1 or $i==7){
		for($j=1;$j<=$n;$j++){
			echo '*';
		}
	}else{
		for($j=1;$j<=$n;$j++){
			if($j==1 or $j==7){
				echo '*';
			}else{
				echo '&nbsp&nbsp';
			}				
	}
}
	echo '<br>';
}
?>
<hr>

<?php
$n=7;
$a=$n-2;
for($i=1;$i<=$n;$i++){
	if($i==1 or $i==7){
		for($j=1;$j<=$n;$j++){
			echo '*';
		}
	}else{
		for($j=1;$j<=$n;$j++){
			if($j==1 or $j==7 or $j==$i or $i+$j==8){
				echo '*';
			}else{
				echo '&nbsp&nbsp';
			}				
	}
}
	echo '<br>';
}
    echo '<hr>';
$n=10;
for($i=0;$i<$n;$i++){
    for($j=5;$j>$i;$j--){
        echo '*';
    }
    echo '<br>';
}
    echo '<hr>';

for($i=6;$i>0;$i=$i-1){
    for($j=1;$j<=$i;$j++){
        echo '*';
    }
    echo '<br>';
}


?>

<style> 
span{ 
    color:red;
    font-size: 20px;
    
}

</style> 
<?php
$n=5;
for($i=0;$i<=$n;$i++){
    for($j=$n;$j>$i;$j--){
        echo '&ensp;';
    }
    for($j=0;$j<(2*$i-1);$j++){
        echo '*';
    }
    echo '<br>';
}
echo "<hr>";
// 老師解題
$row = 5;
for($j=1;$j<=$row;$j++){
    $fontsize=30-(2*$j);
    for($i=0;$i<($row-$j);$i++){
        echo  '&ensp;';
    }
    for($i=0;$i<(2*$j-1);$i++){
        $color=($i*2).($i*2).($i*2);
        echo "<span style=color:#$color;font-size:{$fontsize}px;>*</span>";
    }
    echo '<br>';
}

?>
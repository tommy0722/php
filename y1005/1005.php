<?php
$a = 10;
echo $a;

echo "<br>" . $a;

echo "Hello world";

$cc = rand(1, 49);

echo "<br>" . $cc;
echo "<hr>";
define("PI", 3.1415926);
echo PI . "<br>"
?>

<?php
echo "何誠信";
echo "<br>";
$fname = "何";
$lname = "誠信";
echo $fname . $lname . "<br>";
echo "<br>" . "<br>" . "<br>" . "<br>";
$a = 10;
echo "++a=" . ++$a;
echo "<br>";
$a = 10;
echo "a++=" . $a++;

?>
<br><br><br>


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
	for($k=$n;$k>=$i;$k--){
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

<?php
$n=5;
if($n%2 == 0){
	$n=$n+1;
}
for($i=1;$i<=$n;$i++){
	$mid=($n+1)/2;
	if($i<=$mid){
		$stars=2*$i-1;
		$space=$mid-$i;
	}else{
		$stars=($n-$i)*2+1;
		$space=($mid-1)-($n-$i);
	}
	for($j=1;$j<=$space;$j++){
		echo "&ensp;";
	}		
	for($j=1;$j<=$stars;$j++){
		echo '*';
	}
	echo "<br>";
}
?>
<?php

$n=5;
if($n%2 == 0){
	$n=$n+1;
}
for($i=1;$i<=$n;$i++){
	$mid=($n+1)/2;
	if($i<=$mid){
		$stars=2*$i-1;
		$space=$mid-$i;
	}else{
		$stars=($n-$i)*2+1;
		$space=($mid-1)-($n-$i);
	}
	for($j=1;$j<=$space;$j++){
		echo "&ensp;";
	}		
	for($j=1;$j<=$stars;$j++){
		echo '*';
	}
	echo "<br>";
}
?>

空心矩形
<br>

<?php
$n=7;
$a=$n-2;
for($i=1;$i<=$n;$i++){
	if($i==1 or $i==$n){
		for($j=1;$j<=$n;$j++){
			echo '*';
		}
	}else{
		for($j=1;$j<=$n;$j++){
			if($j==1 or $j==$n){
				echo '*';
			}else{
				echo '&nbsp&nbsp';
			}				
	}
}
echo '<br>';
}
//老師解答
$n=7;
$a=$n-2;
for($i=1;$i<=$n;$i++){
	for($j=1;$j<=$n;$j++){
		if($i==1 or $i==$n){
			echo '*';	
	}else{
		if($j==1 or $j==$n){
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
<!-- 老師解答 -->
<?php
$n=7;
for($i=1;$i<=$n;$i++){
	for($j=1;$j<=$n;$j++){
	if($i==1 or $i==7){
			echo '*';
		
	}else{		
		if($j==1 or $j==7 or $j==$i or $i+$j==($n+1)){
			echo '*';
		}else{
			echo '&nbsp&nbsp';
			}				
	}
}
	echo '<br>';
}

?>

<?php
for ($i = 1; $i < 10; $i++) {
    // 控制層數
    for ($k = 1; $k <= $i; $k++) {
    // 控制數量
        echo $k . '*' . $i . '=' . $i * $k . '　　';
    }
    echo "<br>";
}
echo "<br>";
?>
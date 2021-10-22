<?php
$b = array();
for ($i = 0; $i <= 6; $i++) {
    $b[] = mt_rand(1, 38);
    // $b=array_unique($b);
    echo "$b[$i],";
}
?>
<hr>
<?php
$tmp = array();
while (count($tmp) < 5) {
    $tmp[] = mt_rand(1, 20);
    $tmp = array_unique($tmp);
}
print_r($tmp);
?>
<br>
<?php
$row=6;
for($j=0;$j<$row;$j++){
	for($i=0;$i<$row-$j;$i++){
	  echo "&nbsp;&nbsp;";
	}
	for($i=0;$i<$row;$i++){
		if($j==0||$j==$row-1){
	        echo "#";
		}else{
			if($i==0||$i==$row-1){
				echo "#";
				
			}else{
				echo "&nbsp;&nbsp;";
			}
		}
	}
	echo "<br>";
}

  ?>
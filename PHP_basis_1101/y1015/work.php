<?php
$n=5;
for($i=0;$i<$n;$i++){
    for($j=$n;$j>$i;$j--){
        echo '*';
    }
    echo '<br>';
}
?>

<hr>
<?php
for($i=0;$i<$n;$i++){
    for($j=0;$j<$i;$j++){
        echo '&ensp;';
    }
    for($j=$n*2-1;$j>$i*2;$j--){
        echo '*';
    }
    echo '<br>';
}
?>
<hr>
<?php
$n=5;
// if($n%2 ==0){
//     $n=$n+1;
// }
for($i=1;$i<$n;$i++){

}
?>
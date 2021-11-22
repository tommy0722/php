<?php
function stars($row){
    for($i=1;$i<$row;$i++){
        for($j=0;$j<($row-$i);$j++){
        echo "&ensp;";
    }
    for($j=0;$j<(2*$i-1);$j++){
        echo "*";
    }
        echo "<br>";
    }

}

for($i=5;$i<20;$i=$i+3){
    stars($i);
}
?>
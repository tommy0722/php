<style>
    table {
        border-collapse: collapse;
        border: 2px double grey;
        width: 500px;
    }


</style>

<?php
$a=['國文','英文','數學','地理','歷史'];
$grades=[[95,64,70,90,84],[88,78,54,81,71],[45,60,68,70,62],[59,32,77,54,42],[71,62,80,62,64]];
$name=['judy','amo','john','peter','hebe'];
$count=count($a);
$i=$count+1;
echo "<table>";
for($j=0;$j<$i;$j++){
    echo "<tr></tr>";
    for($k=0;$k<$i;$k++){
        if($k==0 and $j==0){
            echo "<td></td>";
        }elseif($j==0){
            echo "<td>".$a[$k-1]."</td>";
        }
        elseif($k==0){
            echo "<td style='border:1px solid grey';'padding: 10px;'>".$name[$j-1]."</td>";
        }
        else{
        echo "<td style='border:1px solid grey';'padding: 10px;'>".$grades[$j-1][$k-1]."</td>";
        
    }
    
    }
    echo "<br>";
    
}
echo "</table>";
?>
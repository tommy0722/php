<?php
$str="today is a good day to play";
 
echo $str;
/* $i=3;
$sub=mb_substr($str,$i,1);
echo "<hr>";
echo $sub;
$sub=mb_substr($str,$i,1);
echo "<hr>";
echo $sub;
$sub=mb_substr($str,$i,1);
echo "<hr>";
echo $sub;
$sub=mb_substr($str,$i,1);
echo "<hr>";
echo $sub;
 */

$find="good";

$pos=0;

/* 只找單一字元

while(mb_substr($str,$pos,1)!=$find){
    $pos=$pos+1;
    echo $pos;
} */

while(mb_substr($str,$pos,mb_strlen($find))!=$find){
    $pos=$pos+1;

}



echo "<hr>";
echo "你要找的字:".$find;
echo " 位置在字串「".$str."」的第".$pos."個位置";

echo "<hr>";
echo strpos($str,$find);

echo "<hr>";

for($i=0;$i<mb_strlen($str);$i++){

    if(mb_substr($str,$i,mb_strlen($find))==$find){
        echo "<hr>";
        echo "你要找的字:".$find;
        echo " 位置在字串「".$str."」的第".$i."個位置";
        break;
    }
}
?>
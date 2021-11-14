<?php
$str = "今天天氣好好唷";
$find = "氣";
echo "<hr>";
$str1 = "today is a good day to play";
$find1 = "good";

// while 迴圈
$pos = 0;
while (mb_substr($str1, $pos, strlen($find1)) != $find1) {
    $pos=$pos+1;
}
echo "你要找的是" . $find1;
echo " 位置在字串【" . $str1 . "】的第" . ($pos) . "個位置";
echo "<hr>";
echo "你要找的是$find1 位置在字串【$str1 】第".strpos($str1, $find1)."的位置";
?>

<hr>
<!-- For迴圈 -->
<hr>
<?php
for ($i = 0; $i <= mb_strlen($str); $i++) {
    if (mb_substr($str, $i,mb_strlen($find)) == $find) {
        echo "你要找的是" . $find;
        echo " 位置在字串【" . $str . "】的第" . ($i + 1) . "個位置";

    }

}
?>
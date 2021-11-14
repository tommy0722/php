<?php
$years = date("Y");
$month = date("m");
// 每個月幾天
$days = date("t", strtotime("$years-$month-1"));
$firstday = date("Y-m-1");
$week = date("w", strtotime("$years-$month-1"));
// 第一天的位置
$first = 1 - $week;

// echo "$years <br>";
// echo "$month<br>";
// echo "$days<br>";
// echo "$firstday<br>";
// echo "$week<br>";
$weekend = ["日", "一", "二", "三", "四", "五", "六"];
$lastmonth = $month - 1;
$nextmonth = $month + 1;
$lastyears = $years;
$nextyears = $years;
if(isset($_GET['month'])){
    $month=$_GET['month'];
    $year=$_GET['year'];
}else{
    $month=date("m");
    $year=date("Y");
}


if ($month == 12) {
    $lastmonth = $month - 1;
    $lastyears = $years;
    $nextmonth = 1;
    $nextyears = $years + 1;
} elseif ($month == 1) {
    $lastmonth = 12;
    $lastyears = $years - 1;
    
    $nextmonth = $month + 1;
    $nextyears = $years;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>萬年曆</title>
</head>

<body>
    <h1><?= $years ?>年<?= $month ?>月</h1>
    <table>
        <tr>
            <?php
            for ($i = 0; $i < 7; $i++) {
                echo "<td>$weekend[$i]</td>";
            }
            ?>
        </tr>
        <?php
        for ($i = $first; $i < $days;) {
            echo '<tr>';
            for ($j = 0; $j < 7; $j++) {
                if ($i <= $days and $i > 0) {
                    echo "<td>{$i}</td>";
                } else {
                    echo "<td>&nbsp;</td>";
                }
                $i++;
            }
            echo "</tr>";
        }

        ?>
    </table>
    <a href="index.php?years<?=$lastyears; ?>&month<?= $lastmonth; ?>">上個月</a>
    <a href="index.php?years<?=$nextyears; ?>&month<?= $nextmonth; ?>">下個月</a>
</body>

</html>
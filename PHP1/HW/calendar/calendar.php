<?php



// echo "$years <br>";
// echo "$month<br>";
// echo "$days<br>";
// echo "$firstday<br>";
// echo "$week<br>";
$weekend = ["日", "一", "二", "三", "四", "五", "六"];
if(isset($_GET['month'])){
    $month=$_GET['month'];
    $years=$_GET['years'];
}else{
    $month=date("m");
    $years=date("Y");
}

$lastmonth = $month - 1;
$nextmonth = $month + 1;
$lastyears = $years;
$nextyears = $years;

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


// 每個月幾天
$days = date("t", strtotime("$years-$month-01"));
$firstday = date("$years-$month-01");
$week = date("w", strtotime("$years-$month-01"));
// 第一天的位置
$first = 1 - $week;

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
    <a href="calendar.php?years=<?=$lastyears; ?>&month=<?= $lastmonth; ?>">上個月</a>
    <a href="calendar.php?years=<?=$nextyears; ?>&month=<?= $nextmonth; ?>">下個月</a>
</body>

</html>
<?php



// echo "$years <br>";
// echo "$month<br>";
// echo "$days<br>";
// echo "$firstday<br>";
// echo "$week<br>";
$weekend = ["日", "一", "二", "三", "四", "五", "六"];
if (isset($_GET['month'])) {
    $month = $_GET['month'];
    $years = $_GET['years'];
} else {
    $month = date("m");
    $years = date("Y");
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
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        .main{
            background-image: url(./SAO/ymu.jpg);
        }
        table,
        tr,
        td {
            border: 1px solid black;
            text-align: center;
        }

        table {
            width: 50%;
            height: 50%;

        }

        * {
            margin: 0px auto;
            text-align: center;
        }

        header>h1 {
            margin: 0px auto;
        }
    </style>
</head>

<body class="main">
    <header>
        <h1><?= $years ?>年<?= $month ?>月</h1>
    </header>
    <a href="calendar.php?years=<?= $lastyears; ?>&month=<?= $lastmonth; ?>">上個月</a>
    <a href="calendar.php?years=<?= $nextyears; ?>&month=<?= $nextmonth; ?>">下個月</a>

    <form action="./calendar.php" method="GET">
        <select name="years" style="font-size:24px;width: 10%;">
            <?php
            // echo "<option value='$years' selected>$years</option>";
            for ($i = 1900; $i <= 2400; $i++) {
                $nextyears = $i;
                if ($nextyears == $years) {
                    echo "<option value='$nextyears' selected>$nextyears</option>";
                }else{
                    echo "<option value='$nextyears'>$nextyears</option>";
                }
            }
            ?>
            <label for="username">年</label>
        </select>
        <select name="month" style="font-size:24px;width: 10%;">
            <?php
            for ($i = 1; $i <= 12; $i++) {
                $nextmonth = $i;
                if ($nextmonth == $month) {
                    echo "<option value='$nextmonth' selected>$nextmonth</option>";
                }else{
                    echo "<option value='$nextmonth'>$nextmonth</option>";
                }
            }
            ?>
            <label for="username">月</label>
        </select>
        <input type="submit" value="submit">
    </form>
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
                    if ($j == 0 or $j == 6) {
                        echo "<td style='background-color:red;'>{$i}</td>";
                    } elseif ($j > 0 and $j < 6) {
                        echo "<td>{$i}</td>";
                    }
                } else {
                    echo "<td>&nbsp;</td>";
                }
                $i++;
            }
            echo "</tr>";
        }


        ?>
    </table>

</body>

</html>
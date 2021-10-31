<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>萬年曆</title>
    <style>
        *{
            text-align: center;
        }
        table {
            width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid black;
        }
        td {
            box-sizing: border-box;
            padding: 5px;
            border: 1px solid black;
        }
    </style>
    <?php
    date_default_timezone_set('Asia/Taipei');
    $year = date('Y');
    $month = date('m');

    // 星期日~六做成陣列
    $daysOfWeek = array('日', '一', '二', '三', '四', '五', '六');
    echo '<pre>';
    print_r($daysOfWeek);
    echo '</pre>';

    // 創造當月一號的資料  mktime(H, i, s, m, d, Y)
    $firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);

    // 將當月一號的資料存成陣列
    $dateComponents = getdate($firstDayOfMonth);
    // 取得$dateComponents陣列中key=>month的值(英文月份全名)
    $monthName = $dateComponents['month'];    
    // 取得$dateComponents陣列中key=>wday的值(星期0~6)
    $dayOfWeek = $dateComponents['wday'];
    echo '<pre>';
    print_r($dateComponents);
    echo '</pre>';

    // 抓當月有幾天
    $numberDays = date('t', $firstDayOfMonth);

    // 印出表格及標題
    $calendar = "<table>" .
        "<b> $monthName $year </b>" .
        "<tr>";
    foreach ($daysOfWeek as $day) {
        $calendar .= "<th>$day</th>";
    }
    $calendar .= "</tr><tr>";

    // 根據$dayOfWeek的值(0~6)決定colspan要拉多長
    if ($dayOfWeek > 0) {
        $calendar .= "<td colspan= '$dayOfWeek' ></td>";
    }
    for ($i = 1; $i <= $numberDays; $i++, $dayOfWeek++) {
        // $dayOfWeek達到7即歸零換行
        if ($dayOfWeek == 7) {
            $dayOfWeek = 0;
            $calendar .= "</tr><tr>";
        }
        $calendar .= "<td> $i </td>";
    }
    // 補足剩餘的空格
    if ($dayOfWeek != 7) {
        $calendar .= "<td colspan= " . (7 - $dayOfWeek) . "></td>";
    }
    $calendar .= "</tr></table>"; 
    ?>
</head>

<body>
    <?php
        echo $calendar;
    ?>    
</body>
</html>
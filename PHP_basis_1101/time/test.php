<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <style>
    *{
        text-align: center;
    }
    h1{
        color: #555;
    }
    a{
        color: #99f;
    }
    table{
        margin: 0 auto;
        width: 500px;
        border: 2px solid #272822;
        border-collapse: collapse;
    }
    td,th{
        border: 2px solid #272822;
        
    }
    th{
        color:#c00;
        font-weight: bold;
    }
        
    </style> -->
</head>
<body>
    <form action="">
        <select name="" id="">1</select>
    </form>
    <?php
    $years=date('Y');
    $month=date('m');
    $day=date('t');
    // 本月1號是周幾
    $week=date('w',strtotime("$years-$month-1"));
    // 真正的第一天
    $first=1-$week;

    // 測試
    // for($i=1900;$i<2050;$i++){
    //     $i;
    // }
    // 測試結束
    $weeks=["日","一","二","三","四","五","六"];
    echo "<H1>$years 年 $month 月萬年曆</H1>";
    echo "<table>";
    echo "<tr>";
    for($i=0;$i<7;$i++){
        echo"<th>$weeks[$i]</th>";
    }

    echo "</tr>";
for($i=$first;$i<=$day;){
    echo "<tr>";
    for($j=0;$j<7;$j++){
        if($i<=$day and $i>0){
            echo "<td>$i</td>";
        }else{
            echo "<td>&nbsp;</td>";
        }
        $i++;
    }
    echo '</tr>';
}
    
echo "</table>";
    ?>
    
</body>
</html>
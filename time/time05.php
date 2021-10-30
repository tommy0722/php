<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>月曆製作</title>
    <style>
        table{
            width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid black;
        }
        td{
            padding: 5px;
            text-align: center;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>月曆製作</h1>
    <ul>
        <li>以表格方式呈現整個月份的日期</li>
        <li>可以在特殊日期中顯示資訊(假日或紀念日)</li>
        <li>嘗試以block box或flex box的方式製作月曆</li>
    </ul>
    <?php
    echo "<table>",
        "<tr>",
        "<td>日</td>",
        "<td>一</td>",
        "<td>二</td>",
        "<td>三</td>",
        "<td>四</td>",
        "<td>五</td>",
        "<td>六</td>",
        "</tr>";
    for($i=0;$i<6;$i++){
        echo "<tr>";
        for($j=0;$j<7;$j++){
            if($i==0 and $j<5){
                echo"<td>";
                echo"&nbsp;";
                echo"</td>";
            }elseif($i==5 and $j>0){
                echo"<td>";
                echo"&nbsp;";
                echo"</td>";
            }else{
                echo "<td>".($i*7+$j-4)."</td>";
            }

        }
        echo "<tr>";
    }
    echo "</table>";
    ?>
</body>
</html>
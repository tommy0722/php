 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>陣列練習</title>
     <style>
         table,tr ,td{
             border: 1px solid black;
         }
         
     </style>
 </head>
 <body>
<h1>array練習題1</h1>
<p>建立一個學生成績陣列</p>
 <?php

$score=[[95,88,45,59,71],
[88,78,54,81,71],
[45,60,68,70,62],
[59,32,77,54,42],
[71,62,80,62,64]];
$name=['judy','amo','john','peter','hebe'];
$subject=['國文','英文','數學','地理','歷史'];
echo "<table>";
for ($i = 0; $i <= 5; $i++) {
    echo '<tr>';
    for ($j = 0; $j <= 5; $j++) {
        if ($j == 0 && $i == 0) {
            echo "<td></td>";
        } else if ($i == 0) {
            echo "<td style='background-color: #ddd'>" . $subject[$j-1] . "</td>\n";
        } else {
            if ($j == 0) {
                echo "<td style='background-color: #ddd'>" . $name[$i-1] . "</td>";
            } else {
                echo "<td>" . $score[$i-1][$j-1] . "</td>\n";
            }
        }
    }
    echo "</tr>\n";
}
?>

 </body>
 </html>
 
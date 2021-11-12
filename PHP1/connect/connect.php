<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=students";
$pdo=new PDO($dsn,'root','');

$sql="SELECT * FROM `students` WHERE `id`<200";
$rows=$pdo->query($sql)->fetchAll();
?>
<table>
    <tr>
        <td>學號</td>
        <td>座號</td>
        <td>姓名</td>
        <td>生日</td>
        <td>畢業國中</td>
    </tr>

<?php
// echo $rows
// print_r($rows)
// var_dump($rows);
foreach($rows as $row){
    echo "<tr>";
    echo "<td>" . $row['uni_id'] ."</td>";
    echo "<td>" . $row['seat_num'] ."</td>";
    echo "<td>" . $row['name'] ."</td>";
    echo "<td>" . $row['birthday'] ."</td>";
    echo "<td>" . $row['secondary'] ."</td>";
    echo "</tr>";
}
//$pdo=new PDO('資料庫的連線資訊','帳號','密碼','[其他參數]');
?>
</table>
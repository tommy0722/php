<?php
$rows=all('students');
// echo "<pre>";
// print_r(all('students'));
// echo "</pre>";

foreach($rows as $row){
    echo $row['name']."-".$row['telphone']."<br>";
}
// 取出指定資料表的所有資料
function all($table){
    $dsn="mysql:host=localhost;charset=utf8;dbname=students";
    $pdo=new PDO($dsn,'root','');
    $sql="SELECT * FROM `$table`";
    $row=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $row;
}

?>
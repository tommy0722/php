<?php
$account=$_POST['account'];
$password=$_POST['password'];
$sql="SELECT count(*) FROM `account` WHERE `account`='{$_POST['account']}' && `password`='{$_POST['password']}'";
echo $sql;
// SELECT * FROM `account` WHERE `account`='$_POST['account']' && `password`='$_POST['password']
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');

// echo "<br>";
// $result=$pdo->query($sql);
// var_dump($result);
// echo "<br>";

$result=$pdo->query($sql)->fetchColumn();
var_dump($result);

// echo $result['account'];
// echo $result['password'];

if($result>0){
    header("localtion:../dashboard.php");
}else{
    header("localtion:../index.php?err=1");
}
?>
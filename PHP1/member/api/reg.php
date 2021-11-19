<?php
$account=$_POST['account'];
$password=$_POST['password'];
// $password=md5($_POST['password']);
$mail=$_POST['mail'];
$name=$_POST['name'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$birthday=$_POST['birthday'];

$sql_account="insert into `account`(`account`,`password`,`mail`) values('$account','$password','$mail')";
$sql_member="insert into `member`(`name`,`address`,`mobile`,`birthday`) values('$name','$address','$mobile','$birthday')";

$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');
// echo $sql_account;
// echo $sql_member;
// echo "<hr>";
// $pdo->exec($sql_account);
// $pdo->exec($sql_member);

header("localtion:../index.php");


// setcookie("account",$account,time()+60);
// setcookie("password",$password,time()+60);
// setcookie("mail",$mail,time()+60);
// setcookie("name",$name,time()+60);
// setcookie("address",$address,time()+60);
// setcookie("mobile",$mobile,time()+60);
// setcookie("birthday",$birthday,time()+60);




?>
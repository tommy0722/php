<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
    <?php include "./include/head.php";?>
</head>
<body>
 <?php include "./include/header.php";?>
 <?php include "./include/nav.php";?>
 <?php include "./include/side_bar.php";?>
<div class="content">
<h3>會員中心</h3>
<?=$_GET['user'];?> xxx歡迎你：
<?php
$dsn="mysql:host=localhost;chartset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');
$sql="SELECT *FROM `account`,`member` WHERE `account`.`id`=`member`.`id`&&`account`.`account`='{$_GET['user']}'";
$user=$pdo->query($sql)->fetch();
// echo "個人資料：$_COOKIE["name"];";
// echo "帳號：$_COOKIE["account"];";
// echo "地址：$_COOKIE["address"];";
// echo "電話：$_COOKIE["mobile"];";
// echo "mail：$_COOKIE["mail"];";
// echo "生日：$_COOKIE["birthday"];";
?>
<br>
個人資料:
<li>帳號：<?=$user["account"]?></li>
<li>地址：<?=$user["address"]?></li>
<li>電話：<?=$user["mobile"]?></li>
<li>mail：<?=$user["mail"]?></li>
<li>生日：<?=$user["birthday"]?></li>

</div>

 <?php include "./include/footer.php";?>
</body>
</html>
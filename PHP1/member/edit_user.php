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
編輯會員資料

<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');
$sql="SELECT * FROM `account`,`member`
                WHERE `account`.`id`=`member`.`id`&&`account`.`account`='{$_GET['user']}';";
// echo $sql;
$user=$pdo->query($sql)->fetch()
?>
<form action="./api/edit_user.php?user=<?=$_GET['user']?>" method="post">

<p>id：<?=$user['id']?><input type="hidden" name="id" id="" value="<?=$user['id']?>"></p>
<p>地址：<input type="text" name="address" id="" value="<?=$user['address']?>"></p>
<p>電話：<input type="text" name="mobile" id="" value="<?=$user['mobile']?>"></p>
<p>mail：<input type="text" name="mail" id="" value="<?=$user['mail']?>"></p>
<p>生日：<input type="text" name="birthday" id="" value="<?=$user['birthday']?>"></p>
<input type="submit" value="修改">
</form>
</div>

<?php include "./include/footer.php";?>
</body>
</html>
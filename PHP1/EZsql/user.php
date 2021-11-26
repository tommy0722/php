<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=s1100414";
$pdo=new PDO($dsn,'s1100414','s1100414');

$sql="SELECT * FROM user WHERE id='1'";
$user=$pdo->query($sql)->fetch();

echo "<pre>";
print_r($user);
echo "</pre>";

?>
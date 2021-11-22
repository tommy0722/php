<?php

$dsn = "mysql:host=localhost;charset=utf8;dbname=students";
$pdo = new PDO($dsn, 'root', '');

function find($table, $id)
{   global $pdo;
    $dsn = "mysql:host=localhost;charset=utf8;dbname=students";
    $pdo = new PDO($dsn, 'root', '');
    $sql = "SELECT * FROM `$table` WHERE `id`='$id'";

    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}

// 取出指定資料表的所有資料
function all($table)
{   global $pdo;
    $dsn = "mysql:host=localhost;charset=utf8;dbname=students";
    $pdo = new PDO($dsn, 'root', '');
    $sql = "SELECT * FROM `$table`";
    $row = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $row;
}

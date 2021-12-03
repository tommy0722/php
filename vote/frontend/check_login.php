<?php include_once "db.php";

if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}

// >0代表登入成功
if(rows('user',$_POST)>0){
    $_SESSION['user']=$_POST['account'];
    to("../index.php");
}else{
    to("../index.php?do=login");
    $_SESSION['error']="帳號或密碼錯誤";
}

?>
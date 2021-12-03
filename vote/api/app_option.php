<?php include_once "db.php";?>
<?php
$id=$_GET['id'];
insert('options',['opt'=>"",'topic_id'=>$id]);
// 未完成
to("../backend/?do=edit_subject&id=")
?>
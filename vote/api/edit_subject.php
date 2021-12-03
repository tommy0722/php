<?php
include_once "db.php";

/**
 * 資料表的欄位名稱=>資料內容
 * 
 */

$topic=$_POST['topic'];
$topic_id=$_POST['topic_id'];

update('topics',['topic'=>$topic],['id'=>$topic_id]);

$options=$_POST['options'];
$opt_id=$_POST['opt_id'];
foreach ($options as $key => $opt) {
    if($opt!=""){
        update('options',['opt'=>$opt],['id'=>$opt_id[$key]]);
        // 如果為空字串則刪除
    }else{
        del('option',$opt_id[$key]);
    }

}
to("../backend/index.php")

?>
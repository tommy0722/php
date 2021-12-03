<h1 class="text-center font-weight-bold">新增問卷</h1>
<form action="../api/new_" method='post' class='col-6 m-auto'>
    <label>問卷主題: <input type="text" name="subject" ></label>
<!-- 新增選項 -->
<!-- <a href="../api/add_option.php?id=<?$subject['id'];?>">
<input type="botton" class="bg-info text-light roundrd " value="+">
</a> -->
<?php
// 依據選項數產生選項($_SESSION['option'])來產生選項
// if(isset($_SESSION['option'])){

//     for($i=1;$i<=$_SESSION['option'];$i++) {
//         echo "<label class='list-group-item'>\n";
//         echo   "選項" . $i."\n";
//         echo   "<input type='text' name='options[]' value=''>\n";
//         echo "</label>\n";
//     }
//     }
?>
<input type="submit" value="送出">
</form>

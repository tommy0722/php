<?php include_once "db.php";?>

<?php
$stu=find('students',105);
echo $stu['name'];
?>
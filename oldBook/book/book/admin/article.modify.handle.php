<?php
require_once('../connect.php');
session_start();
if (isset($_SESSION['employeeName'])) {

	//把传过来的信息入库 入库之前对所有的信息进行校验
	if (!isset($_POST['textBookName'])|| empty($_POST['textBookName'])
		||!isset($_POST['major']) || empty($_POST['major'])
		||!isset($_POST['unitPrice']) || empty($_POST['unitPrice'])
		||!isset($_POST['quantitgOnHand']) || empty( $_POST['quantitgOnHand'])) {
		echo "<script>alert('信息没有写全，请写全');window.location.href='index.php';</script>";
	    return ;
	}
	$textBookNo = $_POST['textBookNo'];
	$textBookName = $_POST['textBookName'];
	$major = $_POST['major'];
	$unitPrice = $_POST['unitPrice'];
	$quantitgOnHand = $_POST['quantitgOnHand'];
	$inset = "update textbook set textBookName='$textBookName',major='$major',unitPrice='$unitPrice',quantitgOnHand='$quantitgOnHand' where textBookNo = '$textBookNo' ";
    if (mysql_query($inset)) {
    	echo "<script>alert('修改成功');window.location.href='index.php';</script>";
    } else {
    	echo mysql_error();
    	echo "<script>alert('修改失败');window.location.href='index.php'</script>";		    	
    }
		
}else{
	  echo "<div id='check'>";
      echo "你没有权限插入文章，点击下方的链接进行验证<br>";
      echo "<a class='again'href='index.php'>点击验证</a>";
      echo "</div>";
}


?>
<style type="text/css">
	
</style>
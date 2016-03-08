<?php
require_once('connect.php');
session_start();
if (isset($_SESSION['employeeName'])) {
	$textBookNo = $_GET['textBookNo'];
	$delete = "delete from textbook where textBookNo=$textBookNo";
	if (mysql_query($delete)) {
	  	echo "<script>alert('删除成功');window.location.href='index.php';</script>";
	} else {
	  	echo "<script>alert('删除失败');window.location.href='index.php';</script>";
	}
}else{
	  echo "<div id='check'>";
      echo "你没有权限删除文章，点击下方的链接进行验证<br>";
      echo "<a class='again'href='index.php'>点击验证</a>";
      echo "</div>";
}

  
  
?>

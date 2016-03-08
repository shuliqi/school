<?php
require_once('connect.php');
session_start();
if (isset($_SESSION['userName'])) {

	//把传过来的信息入库 入库之前对所有的信息进行校验
	if (!isset($_POST['textBookNo'])|| empty($_POST['textBookNo'])
		||!isset($_POST['textBookName'])|| empty($_POST['textBookName'])) {
		echo "<script>alert('信息没有写全，请写全');window.location.href='index.php';</script>";
	    return ;
	}
	$textBookNo = $_POST['textBookNo'];
	$textBookName = $_POST['textBookName'];
	$time = date("Y/m/d");
	$freighCharge = 0;
	$query = mysql_query("select * from textbook where $textBookNo=$textBookNo");
    $data = mysql_fetch_assoc($query);
	$quantitgOnHand = $data['quantitgOnHand'];
	if(!$quantitgOnHand){
       echo "<script>alert('查找失败');window.location.href='index.php';</script>";
	}else{
		$quantitgOnHand = $quantitgOnHand-1;
	    $inset = "update textbook set quantitgOnHand='$quantitgOnHand' where textBookNo = '$textBookNo' ";
	    if (mysql_query($inset)) {
	    	$add = "insert into purchase(textBookNo,textBookName,orderDate,freighCharge) values('$textBookNo','$textBookName','$time','$freighCharge')";
	    	if (mysql_query($add)) {
	    		echo "<script>alert('购买成功');window.location.href='index.php';</script>";
	    	}
	    	else{
	    		echo mysql_error();
	    	}       
	    } else {
	    	echo mysql_error();
	    	echo "<script>alert('购买失败');window.location.href='index.php';</script>";		    	
	    }
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
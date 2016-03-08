<?php
	session_start();
	$user = $_SESSION['employeeName'];
	echo $user;
	unset($_SESSION['employeeName']);
    echo "<script>window.location.href='../index.php';</script>";
?>
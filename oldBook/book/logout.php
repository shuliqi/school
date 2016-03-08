<?php
	session_start();
	$user = $_SESSION['userName'];
	echo $user;
	unset($_SESSION['userName']);
    echo "<script>window.location.href='index.php';</script>";
?>

<?php
	header("Content-Type:text/html;charset=utf8");
	if (isset($_POST["sub"]) || $_POST["sub"] == "注册") {
		$user = $_POST["username"];
		$pass = $_POST["password"];
		$psw_confirm = $_POST["confirm"]; 
		$position = $_POST["position"];
		if ($user == "" || $pass == "" ||$psw_confirm == "" || $position=="" ) {
			echo "<script>alert('请填写完信息!')</script>";
		}else{
			if ($position == "工作人员") {
				if ($pass == $psw_confirm) {
					require_once('connect.php');
					$result = mysql_query("select employeeName from employee where employeeName = '$user'");
					$num = mysql_num_rows($result);
					if ($num) {
						echo "<script>alert('工作用户名已存在!');<script/>";
					}else{
						$insert = mysql_query("insert into employee(employeeName,employeePassword) values('$user','$pass')");
						if ($insert) {
							 echo "<script>alert('工作人员注册成功！'); history.go(-1);</script>";  
						}else{
							echo "<script>alert('系统繁忙！'); history.go(-1);</script>";  
						}
					}
				}else{
					echo "<script>alert('两次输入的密码不一致');</script>";
				}
			}
			else{
				if ($pass == $psw_confirm) {
					require_once('connect.php');
					$result = mysql_query("select userName from user where userName = '$user'");
					$num = mysql_num_rows($result);
					if ($num) {
						echo "<script>alert('用户用户名已存在!');<script/>";
					}else{
						$insert = mysql_query("insert into user(userName,userPass) values('$user','$pass')");
						if ($insert) {
							 echo "<script>alert('用户人员注册成功！'); history.go(-1);</script>";  
						}else{
							echo "<script>alert('系统繁忙！'); history.go(-1);</script>";  
						}
					}

				
				}else{
					echo "<script>alert('两次输入的密码不一致');</script>";
				}
			}

		}
	}else{
		echo "<script>alert('提交未成功');</script>";
	}
?>
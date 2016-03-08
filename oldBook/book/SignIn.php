<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/zuce.css"/>
	</head>
	<body>
	   <div class="box" id="lina">
			<div class="mask_header">
				<div id="guanbi"></div>
				<div class="kuai">
					<span>登录</span>
				</div>
			</div>
			<div class="mask_body_sigin">
				<form action="SignInProcess.php" method="post" id="form" enctype="multipart/form-data">
					<ul>
						<li>
							<label>你的名字：</label>
							<input type="text"name="name" placeholder="名字"><img src="images/xinhao.png">
							<p>请输入用户名</p>
							<p>0个字符</p>
						</li>
						<li>
							<label>登录密码：</label>
							<input type="password"name="password" placeholder="密码"><img src="images/xinhao.png">
							<p></p>
						</li>
						<li>
							您的身份：<label><input style="margin-left:3px;" name="ss" type="radio" value="工作人员" />工作人员 </label> 
							<label><input style="margin-left:90px;" name="ss" type="radio" value="用户人员" />用户人员 </label> 
						</li>
						<li>
							<input class="submit"type="submit" name="submit" value="登陆">
						</li>
					</ul>
				</form>
			</div>
	    </div>
	</body>
</html>

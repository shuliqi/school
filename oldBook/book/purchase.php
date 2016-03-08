<?php
	session_start();
    require_once('connect.php');
	$No = $_GET['No'];
	$sql = "select * from textbook where textBookNo = $No";
	$result = mysql_query($sql);
	if ($result && mysql_num_rows($result)) {
	 	$row = mysql_fetch_assoc($result);
	 }else{
	 	echo "这篇文章不存在";
		exit;
	 }
?>
<style type="text/css">
    /*身份验证*/
.from{
  width: 100%;
}
.from form{
  width: 20%;
  color: #009df5;
  margin: 150px auto;
}
.from form input{
  width: 100%;
  height: 32px;
  background: white;
    margin-bottom: 20px;
}
.from form input[type=submit]{
    height: 39px;
    width: 101%;
    margin-left: 0.5%;
    background: #009df5;
    outline: none;
    border: none;
}
.check{
	width:30%;
	text-align: center;
	margin: 90px auto;
	color: #009df5;
	font-weight: bolder;
	letter-spacing: 5px;
}
</style>
 <?php
	if (isset($_SESSION['userName'])) {
	?>
	<!DOCTYPE html>
		<html>
		<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/index.css"/>
		<script src="js/index.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/move2.js" type="text/javascript" charset="utf-8"></script>
		<!-- <link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" /> -->
		<script type="text/javascript" src="js/jquery-1.11.2.js"></script>
		<script type="text/javascript"src="js/index.js"></script>
		<link rel="stylesheet" type="text/css" href="images/engine/style.css" media="screen" />
		<script type="text/javascript" src="images/engine/jquery.js"></script>
		</head>

		<body>
		<div class="zong">
			<div class="section section1">
				<nav id="menu">
					<a href="index.php"><img src="images/logon.png"></a> 
						<ol>
							<li>
								<!-- <form id="search" >
								    <input id="button" type="text" />
								    <input id="submit" type="submit" value="搜索"/>
								</form> -->
								<!-- <div id="searchsuggest">
								    <div id="search-suggest" >
								    </div>
								</div> -->
							</li>
							<li><a style="width:50px;height:25px;color:#00CCFF !important;"href="purchaseConfirm.php">我的订单</a></li>
							<li><a style="width:50px;height:25px;color:#00CCFF !important;"href="logout.php">用户：<?php echo($_SESSION['userName'])?> 退出</a></li>
						</ol>	
				</nav>
		    </div>
			</div>	
		
				<div class="section section2">
				<section class="show_right">
					<div class="box15">
						<div class="purchase">
							<h1>购买订单</h1>

								<p class="le"><span>教材代号：</span><?php echo $row['textBookNo']; ?></p>
								<p class="ri"><span>教材名字：</span><?php echo $row['textBookName']; ?></p>
								<p class="le"><span>教材专业：</span><?php echo $row['major']; ?></p>
								<p class="ri"><span>教材单价：</span><?php echo $row['unitPrice']; ?>元</p>
							    <form action="update.handle.php" method="post" enctype="multipart/form-data">
							    	<input name="textBookNo" type="hidden" value="<?php echo $row['textBookNo']; ?>" />
							    	<input name="textBookName" type="hidden" value="<?php echo $row['textBookName']; ?>" />
							    	<input class="yes"type="submit" value="确认购买">
							    </form>
					    </div>
						
					</div>
				</section>
			</div>
		</div>
	  <?php
    	}else{
    		if (isset($user)) {
    			echo "<div class='check'>您的身份验证失败，无法进入后台</div>";
    		}else{
    			echo "<div class='check'>购买前！请您先登录</div>";
    		}
    		?>
    		<div class="from">
	    		<form method="post" action="SignInProcess.php">
	    			用户名：<br>
	    			<input type="text"name="name" placeholder="名字"><br>
	    			 密码：<br>
	    			<input type="password"name="password" placeholder="密码"><br>
	    			<input name="ss" type="hidden" value="用户人员" />
	    			<input class="submit"type="submit" name="submit" value="登陆">
	    		</form>
    		</div>
	    	<?php
    	}
    ?>	
</body>
</html>      

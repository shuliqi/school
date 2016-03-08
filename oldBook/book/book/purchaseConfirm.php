<?php
require_once('connect.php');
session_start();
$websql = "select * from purchase order by 	purchaseNo ASC ";
$webresult = mysql_query($websql);
if ($webresult && mysql_num_rows($webresult)) {
	while ($webrow = mysql_fetch_assoc($webresult)) {
		$webdata[]= $webrow;
	}
}
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
 <?php
	if (isset($_SESSION['userName'])) {
	?>	
	<div class="zong">
	<div class="section section1">
		<nav id="menu">
			<a href="index.php"><img src="images/logon.png"></a> 
				<ol>
				<!-- 	<li>
						<form id="search" >
						    <input id="button" type="text" />
						    <input id="submit" type="submit" value="搜索"/>
						</form>
						<div id="searchsuggest">
						    <div id="search-suggest" >
						    </div>
						</div>
					</li> -->
					<li><a style="width:50px;height:25px;color:#00CCFF !important;"href="index.php">主菜单</a></li>
							<li><a style="width:50px;height:25px;color:#00CCFF !important;"href="logout.php">用户：<?php echo($_SESSION['userName'])?> 退出</a></li>
				</ol>	
		</nav>
    </div>
	</div>
	<div class="section section2" id="div">
		<div class="m_title">您的订单</div>
		<div class="grid">
			 <ul>
			 	<li class="ss">
	        		<span class="s1">购买代码</span>
	        		<span class="s2">教材代码</span>
	        		<span class="s3">教材名字</span>
	        		<span class="s4">订货日期</span>
        	    </li>
        	<?php 
	            if (empty($webdata)) {
	            	echo "当前没有教材";
	            }else{
	            	foreach ($webdata as $key => $value) {	            			         
            ?>
        	<li>
        		<span class="no1"><?php echo $value['purchaseNo'];?></span>
        		<span class="sink sink1"><?php echo $value['textBookNo'];?></span>
        		<span class="no1 no2"><?php echo $value['textBookName'];?></span>
        		<span class="sink sink3"><?php echo $value['orderDate'];?></span>

        	</li>
        	<?php
					}
			   }
			?>
        </ul>
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
<?php include 'footer.php';?>
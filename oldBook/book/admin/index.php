<?php
	require_once('connect.php');
	session_start();
	// echo $_SESSION['employeeName'];
    require_once('connect.php');
	$websql = "select * from textbook order by 	textBookNo ASC ";
	$webresult = mysql_query($websql);
	if ($webresult && mysql_num_rows($webresult)) {
		while ($webrow = mysql_fetch_assoc($webresult)) {
			$webdata[]= $webrow;
		}
    }
?>
<?php
//     require_once('connect.php');
//  	$data = page("web");
//  	$web_banner = $data['banner'];
//  	$webdata = $data['data'];

//     $data = page("jishu");
//  	$jishu_banner = $data['banner'];
//  	$jishudata = $data['data'];

//     $data = page("anli");
//  	$anli_banner = $data['banner'];
//  	$anlidata = $data['data'];
// function page($type){
// 	 	/** 传入页码 **/
// 	 if (isset($_GET['p1'])) {
// 	 	$p1 =  intval($_GET['p1']);
// 	 }else{
// 	 	$p1 = 1;
// 	 }
// 	 // 查询的起始位置
// 	 $position1 = ($p1-1)*3;
// 	 // 每页显示的条数
// 	 $pagesize1 = 3;
// 	 /**根据页码取出数据：php mysql处理**/
// 	// 编写sql获取分页数据 "select form 表名 limit".起始位置，显示的条数
// 	 $sql1 = "select * from $type limit $position1, $pagesize1";
// 	 $webresult = mysql_query($sql1);
// 	 if ($webresult && mysql_num_rows($webresult)) {
// 	 	while ($webrow = mysql_fetch_assoc($webresult)) {
// 	 		$data[] = $webrow;
// 	 	}
// 	 } else {
// 	 	    $data = array();
// 	 }
// 	 /**获取数据总数 计算总页数**/
// 	 $total_sql1 = "select count(*) from $type";
// 	 $total_result1 = mysql_fetch_array( mysql_query($total_sql1));
// 	 $total1 =  $total_result1[0];
// 	 // 总页数
// 	 $total_pages1 =  ceil($total1/$pagesize1);
// 	 /** 显示页码 **/
// 	 // 显示页码数
// 	 $showpage1 = 5;
// 	 // 计算偏移量 就是当前页前面有多少页 后面有多少页
// 	 $pageoffet1 = ($showpage1 -1)/2;
// 	// 初始化数据
// 	 $start1 =1;
// 	 $end1 = $total_pages1;
// 	 /**显示数据 + 分页条**/
// 	 $page_banner1 = "";
// 	 if ($p1 >1) {
// 	 	 $page_banner1 .= "<a href='".$_SERVER['PHP_SELF']."?p1=1'>首页</a>";
// 	 	 $page_banner1 .= "<a href='".$_SERVER['PHP_SELF']."?p1=".($p1-1)."'><上一页</a>";
// 	 }else{
// 	 	 $page_banner1 .= "<a class='disable'>首页</a>";
// 	 	 $page_banner1 .= "<a class='disable'><上一页</a>";
// 	 }
// 	/**显示页码**/
// 	// 总页数大于我们要显示的页数
// 	if ($total_pages1 > $showpage1 ) {
// 		// 当前页大于偏移量+1 也就是当前页 大于 3 就出现省略号
// 		if ($p1 >  $pageoffet1 + 1) {
// 			 $page_banner1 .= "<a class='sheng'>...</a>";
// 		}
// 		// 当前页大于偏移量
// 		if ($p1 > $pageoffet1) {
// 			$start1 =  $p1 - $pageoffet1;
// 			$end1 = $total_pages1 > $p1 + $pageoffet1 ? $p1 + $pageoffet1:$total_pages1;
// 		}else{
// 			$start1 =  1;
// 			$end1 = $total_pages1 > $showpage1 ? $showpage1:$total_pages1;
// 		}
// 		if ($p1 + $pageoffet1 > $total_pages1) {
// 			$start1 =  $start1 - ($p1 + $pageoffet1 - $end1);
// 		}
// 	}
// 	// 显示页码
// 	for ($i=$start1; $i <= $end1; $i++) {
// 		if ($p1 == $i) {
// 		 	$page_banner1 .= "<a class='current'>{$i}</a>";
// 		 }else{
// 		 	$page_banner1 .= "<a href='".$_SERVER['PHP_SELF']."?p1=".$i."'>{$i}</a>";
// 		 }
// 	}
// 	// 尾部省略
// 	if ($total_pages1 > $showpage1 && $total_pages1 > $p1 + $pageoffet1) {
// 		 $page_banner1 .= "<a class='sheng'>...</a>";
// 	}
// 	if ($p1 < $total_pages1) {
// 	 	$page_banner1 .= "<a href='".$_SERVER['PHP_SELF']."?p1=".($p1+1)."'>下一页></a>";
// 	 	$page_banner1 .= "<a href='".$_SERVER['PHP_SELF']."?p1= $total_pages1 '>尾页</a>";
// 	}else{
// 		$page_banner1 .= "<a class='disable'>下一页></a>";
// 	 	$page_banner1 .= "<a class='disable'>尾页</a>";
// 	}
// 	$page_banner1 .="<a>共".$total_pages1."页</a>";
// 	$page_banner1.="<form action='index.php' method='get'>";
// 	$page_banner1.="到<input type='text' size='2' class='text'  name='p1'>页";
// 	$page_banner1.="<input type='submit' class='text'value='确定'>";
// 	$page_banner1.="</form>";
// 	$arry = array('banner' =>$page_banner1,'data' =>$data);
// 	return $arry;
//  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>舒丽琦的博客后台</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script type="text/javascript" src="js/index.js"></script>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
</head>
	 <?php
    	if (isset($_SESSION['employeeName'])) {
        ?>	
			<div class="all">
				<header>
					<nav>
						<ul id="ul">
							<li style="margin-left:-37px;">民大二手教材后台管理</li>
							<li><!-- 技术 --></li>
							<li><!-- 案例 --></li>
							<a style="margin-left:1200px"class="out"href="logout.php">管理员:<?php echo $_SESSION['employeeName'];?>退出</a>
						</ul>

					</nav>
				</header>
				<section id="web">
					<div class="top">
						<p id="webcon">数据库教材</p>
						<span id="webbtn">添加教材</span>
					</div>
					<ul id="ul1">
					   <li class="ss">
			        		<span class="s1">代码</span>
			        		<span class="s2">名称</span>
			        		<span class="s3">专业</span>
			        		<span class="s4">单价</span>
			        		<span class="s5">现存量</span>
			        		<span class="s6">操作</span>
        	    		</li>
						<?php 
							if (empty($webdata)) {
								echo "当前没有文章";
							} else {
								foreach ($webdata as $key => $value) {	
						 ?>
						<li>
			        		<span class="no1"><?php echo $value['textBookNo'];?></span>
			        		<span class="sink"><?php echo $value['textBookName'];?></span>
			        		<span  class="sink"><?php echo $value['major'];?></span>
			        		<span  class="no"><?php echo $value['unitPrice'];?></span>
			        		<span  class="sink"><?php echo $value['quantitgOnHand'];?>本</span>
			       			<div> 
			       				<a href="article.del.handle.php?textBookNo=<?php echo $value['textBookNo'];?>">删除</a>
			       			</div>
						    <a href="article.modify.php?textBookNo=<?php echo $value['textBookNo'];?>&textBookName=<?php echo $value['textBookName']?>">修改</a>
			
						<?php
					            }
					      }
						?>
					</ul>
					<!-- <div class="page" id="page1"><?php echo $web_banner;?></div> -->
					<div id="webtian">
						<div class="content">
							<form action="article.add.handle.php" method="post" enctype="multipart/form-data" >
								<input id ="author" name="textBookName" placeholder="教材名字" />
								<input id ="tips" name="major" placeholder="教材专业" />
								<input id ="title" name="unitPrice" placeholder="教材单价" />
								<input id ="author" name="quantitgOnHand" placeholder="现存数量" />
								<div class="sub">
									<input  id="tijiao"class="submit submit1" type="submit" name="sub" value="提交">
									<input  id="chongzhi"class="submit submit2" type="submit" name="ok" value="重置">
							    </div>
							 </form>
						</div>
					</div>
				</section>
			</div>
	  <?php
    	}else{
    		if (isset($user)) {
    			echo "<div class='check'>您的身份验证失败，无法进入后台</div>";
    		}else{
    			echo "<div class='check'>请您进行身份验证</div>";
    		}
    		?>
    		<div class="from">
	    		<form method="post" action="../SignInProcess.php">
	    			用户名：<br>
	    			<input type="text"name="name" placeholder="名字"><br>
	    			 密码：<br>
	    			<input type="password"name="password" placeholder="密码"><br>
	    			<input name="ss" type="hidden" value="工作人员" />
	    			<input class="submit"type="submit" name="submit" value="登陆">
	    		</form>
    		</div>
	    	<?php
    	}
    ?>
</body>
</html>
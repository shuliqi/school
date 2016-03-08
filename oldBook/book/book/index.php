<?php
require_once('connect.php');
$websql = "select * from textbook order by 	textBookNo ASC ";
$webresult = mysql_query($websql);
if ($webresult && mysql_num_rows($webresult)) {
	while ($webrow = mysql_fetch_assoc($webresult)) {
		$webdata[]= $webrow;
	}
}
?>
<?php include 'indexHeader.php';?>
	<div class="section section2" id="div">
		<div class="m_title">购买教材</div>
		<div class="grid">
			 <ul>
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
	            	echo "当前没有教材";
	            }else{
	            	foreach ($webdata as $key => $value) {	            			         
            ?>
        	<li>
        		<span class="no1"><?php echo $value['textBookNo'];?></span>
        		<span class="sink"><?php echo $value['textBookName'];?></span>
        		<span  class="sink"><?php echo $value['major'];?></span>
        		<span  class="no"><?php echo $value['unitPrice'];?></span>
        		<span  class="sink"><?php echo $value['quantitgOnHand'];?>本</span>
        		<a href="purchase.php?No=<?php echo $value['textBookNo'];?>">购买</a>
        	</li>
        	<?php
					}
			   }
			?>
        </ul>
		</div>
	</div>
<?php include 'footer.php';?>
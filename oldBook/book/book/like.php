<?php
  //error_reporting(0);屏蔽所有的错误
  $keyword = isset($_GET['keyword']) ?trim($_GET['keyword']):'';
  require_once('connect.php');
  mysql_select_db('web');
  mysql_query('set names utf8');
  $sql = "select textbook.textBookNo,textbook.textBookName from textbook where textbook.textBookName like '%{$keyword}%' ";
  // $sql =" select * from web where title like '%{$keyword}%'";
  $result = mysql_query($sql);
  if (!empty($keyword)) {
     while ($row = mysql_fetch_assoc($result)) {
        $title[] = $row;
      }
  }
echo json_encode($title);
  // print_r($title);

?>
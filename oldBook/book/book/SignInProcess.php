<?php 
header("Content-Type:text/html;charset=utf8");
    session_start();
    // 注册会话 
    if(isset($_POST["submit"]) && $_POST["submit"] == "登陆"){  
        $user = $_POST["name"];  
        $psw = $_POST["password"];
        $position = $_POST["ss"];
        if($user == "" || $psw == "" || $position = "")  
        {  
            echo "<script>alert('请输入用户名,密码或选择身份！'); history.go(-1);</script>";  
        }  
        else  
        {  
            require_once('connect.php');
            if ($_POST["ss"] == "工作人员") {
                $sql = "select employeeName,employeePassword from employee where employeeName = '$user' and employeePassword = '$psw'";  
                $result = mysql_query($sql);  
                $num = mysql_num_rows($result);  
                if($num)  
                {   

                    $row = mysql_fetch_array($result);  //将数据以索引方式储存在数组中 
                    $_SESSION['employeeName'] = $user; 
                    echo "<script>alert('工作人员登陆成功！');window.location.href='admin/index.php';</script>";

                }  
                else  
                {  
                    echo "<script>alert('工作人员用户名或密码不正确！');history.go(-1);</script>";  
                }  
            }
            else{
                $sql = "select userName,userPass from user where userName = '$user' and userPass = '$psw'";  
                $result = mysql_query($sql);  
                $num = mysql_num_rows($result);  
                if($num)  
                {  
                    $row = mysql_fetch_array($result);  //将数据以索引方式储存在数组中 
                    $_SESSION['userName'] = $user;
                    echo "<script>alert('用户人员登陆成功！');window.location.href='index.php';</script>";  
                }  
                else  
                {  
                    echo "<script>alert('用户人员用户名或密码不正确！');history.go(-1);</script>";  
                }  
            }
           
        }  
    }  
    else{  
        echo "<script>alert('提交未成功！'); history.go(-1);</script>";  
    }  
  
?>  
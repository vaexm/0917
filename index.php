<?php
session_start();
header("Content-Type:text/html;charset=utf-8");
if(isset($_POST["btn"])){
// 	echo "123";
	$tel=$_POST["utel"];
	$_SESSION["utel"]=$tel;
	if($tel==""){
		echo "<script>alert('请输入手机号');</script>";		
	}else{
		//判断用户是否已经注册过e+优品
		$link=mysql_connect("117.34.95.168","wm","") or die("数据库连接失败".mysql_error());
		mysql_select_db("wanmeng") or die("找不到指定的数据库");
		$sql="select count(userid) as num from cas_user  where username={$tel}";
		$res=mysql_query($sql);
		if($res){
			$arr=mysql_fetch_assoc($res);
//  			print_r($arr);
            
            if($arr['num']){
               //判断该用户是否已经抽过奖
               $link1=mysql_connect("localhost","root","123456") or die("数据库连接失败".mysql_error());
               mysql_select_db("wm") or die("找不到指定的数据库");
               $sql1="select COUNT(id) as num1 from pusers WHERE tel='{$tel}'";
               $res1=mysql_query($sql1);
               if($res1){
               	$arr1=mysql_fetch_assoc($res1);
               	if($arr1['num1']){
               		//说明该用户已经抽过奖
               		echo "<script type='text/javascript'>
               				alert('亲,你已经参与过本次活动，每位用户仅限参与一次奥!');
               				</script>";
               		
               	}
               	else{
               		echo "<script>
               		window.location.href='prize.php?utel={$tel}';
               		</script>";              		
               	}
               }
              
            }else{
            	echo "<script>
            	alert('亲，请先进入下载界面下载e+优品app并且成功注册之后才可以参与抽奖奥！');
            	window.location.href=' http://a.app.qq.com/o/simple.jsp?pkgname=com.bm.customer.wm';	
            	</script>";
//               header("Loaction.href=' http://a.app.qq.com/o/simple.jsp?pkgname=com.bm.customer.wm'");
            	
            }
			
		}
		
	}
	
}


?>
<html>
<head>
<title>无标题文档</title>
<style type="text/css">
body{
	margin: 0;
	padding: 0;	
	}
.div_top{
	width:100%;
	height:900px;
	background-image:url(./images/Prize.jpg);
	background-size:100% 100%;
	}
.div_form{
	background-color:#F5524B;
	width:100%; height:300px;
	}
#prize{
	width:47%;
	height:50px; /*background-image:url(cycj.png);*/
	background-color:#FFF521; font-size:20px; color:red; font-weight:bold;
	}
#tel{
	text-align:center; height:40px; font-size:14px; width:47%;
	}
</style>
</head>

<body>
<div class="div_top">
</div>
<div class="div_form">
<form  action="#" method="post"><br/>
  <br/>
  <br/>
  <br/>
  <span style="margin-left:25%;"><input name="utel"  type="text" id="tel" placeholder="请输入手机号进行抽奖" autocomplete="on"/></span>
  <br/><br><br/>
  <span style="margin-left:25%;"><input type="submit" name="btn" id="prize" value="点击抽奖"/></span>
</form>
</div>
</body>
</html>

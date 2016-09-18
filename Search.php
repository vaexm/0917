<?php
header("Content-Type:text/html;charset=utf-8");
//修改成功
if(isset($_GET["success"])){
	echo "<script type='text/javascript'>alert('发放成功!');</script>";
	header("Location:search.php");

}else if(isset($_GET["error"])){
	echo "<script type='text/javascript'>alert('发放失败!');</script>";
	header("Location:search.php");
}
?>
<html>
<head>
<style type="text/css">
body{
/* background-image:url('./images/search.jpg');
background-size:100% 100%; */
}
#div_form{
margin-left:30%;margin-top:15px;;
}
#div1{
width:80%; height:60%; margin-left:10%; marign-top:20%;
border:1px solid black;
}
#tb1{
width:80%;
border-collapse:collapse;
}
#tb1 tr th,#tb1 tr td{
border:1px solid black;
text-align:center;
}
a{
text-decoration:none;
color:red;
}
</style>
<script type="text/javascript" src="./js/jquery-1.7.1.js"></script>
<script type="text/javascript"></script>
</head>
<body>
<div id="div_form">
<form method="post" action="#">
<input type="text" name="tel" placeholder="请输入手机号进行搜索" />
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="search" value="搜索" id="search"/>&nbsp;&nbsp;&nbsp;&nbsp;
</form>
</div>
<?php 
if(isset($_POST["search"])){
	$tel=$_POST["tel"];
	// 	echo $tel;
	$link=mysql_connect("localhost","root","123456") or die("数据库连接失败".mysql_error());
	mysql_select_db("wm");
	mysql_query("set names utf8");
	$sql="select id,tel,pname,state from pusers where tel='{$tel}'";
	$res=mysql_query($sql);
	echo "<div id='div1'><table id='tb1' align='center'>
	<tr><th>编号</th><th>手机号</th><th>奖品名称</th><th>是否领取</th><th>发放奖品</th></tr>";
	if($res){
		if(($arr=mysql_fetch_assoc($res))!=false)
		{
         echo "<tr>
		<td>{$arr['id']}</td>
		<td>{$arr['tel']}</td>
		<td>{$arr['pname']}</td>
		<td>{$arr['state']}</td>
		<td><a href='proPrize.php?id={$arr["id"]}&pname={$arr['pname']}'>发放奖品</a></td>
		</tr>";
        }else{
	        echo "<script type='text/javascript'>
		     alert('你输入的手机号码有误，请重新输入');
				</script>";
		    echo "<tr text-align='center'><td colspan='5'>
				<h2>该用户没有参与本次活动</h2>
		     </td></tr>";
	     }

	}
	echo "</table></div>";
}

?>

</body>
</html>
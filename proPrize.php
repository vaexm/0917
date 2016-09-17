<?php
if(isset($_GET['id'])){
	$uid=$_GET['id'];
	$pname=$_GET["pname"];
	$link=mysql_connect("localhost","root","123456") or die("数据库连接失败".mysql_error());
	mysql_select_db("wm");
	mysql_query("set names utf8");
	$sql="update pusers set state='已领取' where id={$uid}";
	
	$res=mysql_query($sql);
	$affRows=mysql_affected_rows($link);
	$sql1="update prize set pnum=pnum-1 where pname='{$pname}'";
	$res1=mysql_query($sql1);
	$affRows1=mysql_affected_rows($link);
	echo $affRows1;
	if($affRows1){
		echo "<script>alert('修改成功');<script>";	
	}else{
		echo "<script>alert('修改失败');<script>";
	}
	
	if($affRows){
		//回到之前的页面    说明发放成功
		header("location:Search.php?success=1");		
	}else{
		//发放失败
		header("location:Search.php?error=1");
	}
	
	
	
}
?>
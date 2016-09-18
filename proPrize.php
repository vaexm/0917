<?php
header("Content-Type:text/html;charset=utf8;");
if(isset($_GET['id'])){
	$uid=$_GET['id'];
	$pname=$_GET["pname"];
	
	$link=mysql_connect("localhost","root","123456") or die("数据库连接失败".mysql_error());
	mysql_select_db("wm");
	mysql_query("set names utf8");
	$sql2="select state from pusers where id={$uid}";
	$res2=mysql_query($sql2);
	if($res2){
		$arr=mysql_fetch_assoc($res2);
		if($arr['state']=="未领取"){
			$sql="update pusers set state='已领取' where id={$uid}";
			$res=mysql_query($sql);
			$affRows=mysql_affected_rows($link);
			$sql1="update prize set pnum=pnum-1 where pname='{$pname}'";
			$res1=mysql_query($sql1);
			$affRows1=mysql_affected_rows($link);
			// 	echo $affRows1;
			if($affRows){
				echo "<script>alert('修改成功');<script>";
			}else{
				echo "<script>alert('修改失败');<script>";
			}
			
			if($affRows1){
//  				echo "<script type='text/javascript'>alert('发放成功!');</script>";
                header("location:search.php?success=1");
				//回到之前的页面    说明发放成功
			}else{
//  				echo "<script type='text/javascript'>alert('发放失败!');</script>";
				//发放失败
				header("location:search.php?error=1");
			}
// 			header("Location:search.php");
			
		}else{
			echo "<script type='text/javascript'>alert('你已经为该用户发放过奖品，不能重复发放');</script>";
			echo "<script type='text/javascript'>history.back();</script>";
			
		}
 	
		
	}
// 	header("location:search.php");
	
	
	
	
	
}
?>
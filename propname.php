<?php
session_start();
$pname=$_POST["pname"];
$tel=$_SESSION["utel"];
$link=mysql_connect("localhost","root","123456") or die("数据库连接失败".mysql_error());
mysql_select_db("wm") or die("找不到指定的数据库");
//     $pname=$_POST["pname"];
// 	 echo $pname;
mysql_query("set names utf8");
$sql="insert into pusers(tel,pname) value('{$tel}','{$pname}')";
$res=mysql_query($sql);
if($res){
	$affRows=mysql_affected_rows($link);
// 	echo $affRows;
	if($affRows){
// 		echo "<script type='text/javascript'>alert('添加成功');</script>";
        echo "1";
	}else{
// 		echo "<script type='text/javascript'>alert('添加失败');</script>";
        echo "0";
	}
}


/* if($isClick){
	echo $isClick;
	//  echo "2223";
	if(isset($_GET["utel"])){
		// 	echo "111"."<br/>";
		$pname="<script type='text/javascript'>document.write(pname);</script>";
		// 	echo $pname;
		$tel=$_GET["utel"];
		$link=mysql_connect("localhost","root","123456") or die("数据库连接失败".mysql_error());
		mysql_select_db("wm") or die("找不到指定的数据库");
		//     $pname=$_POST["pname"];
		// 	 echo $pname;
		mysql_query("set names utf8");
	 $sql="insert into pusers(tel,pname) value('{$tel}','{$pname}')";
	 print_r($sql);
	 $res=mysql_query($sql);
	 if($res){
	 	$affRows=mysql_affected_rows($link);
	 	echo $affRows;
	 	if($affRows){
	 		echo "<script type='text/javascript'>alert('添加成功');</script>";
	 	}else{
	   echo "<script type='text/javascript'>alert('添加失败');</script>";
	 	}
	 }


	}

} */
?>
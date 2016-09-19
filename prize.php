<?php
session_start();
header("Content-Type:text/html;charset=utf-8");
/* echo "<script type='text/javascript'>";
echo "alert($_SESSION[userTel]);";
echo "</script>"; */
// echo $_COOKIE["pname"];
// echo $_SESSION["utel"];

?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="./css/style.css"/> 
  <script type="text/javascript" src="./js/jquery-1.7.1.js"></script>
  <script type="text/javascript" src="./js/Rotate.js"></script>
  <script type="text/javascript" src="./js/prize.js"></script>
  <script type="text/javascript">
  </script>
 
</head>
<?php 
/* $isClick= "<script type='text/javascript'>document.write(isClick);</script>";
// echo $isClick;
// var_dump($isClick);
if($isClick==true){
echo "1234";
}else{
echo "2345";
} */

?>
<body>
	<div class="banner">
		<div class="turnplate" style="background-image:url(./images/trunplate.jpg);background-size:100% 100%;">
			<canvas class="item" id="wheelcanvas" width="422px" height="422px">
            </canvas>
			 <img class="pointer" name="pointer" src="./images/turnplate-pointer.png"/>
			<!--<input type="image" class="pointer" src="./images/turnplate-pointer.png" onclick="document.my.submit()"/>-->
		</div>
		<div class="rules">
		<p>小提示:各位用户你好，在参与完抽奖活动之后，请你前往中瑞购物广场一楼找我们的工作人员领取，
		你只需要告诉我们的工作人员你的手机号，我们就会为你发放你抽到的相应的奖品。如果因为我们的库存问题，会由
		我们的工作人员为你兑换为其他同类的奖品，请你谅解！</p>
		</div>
	</div>
</body>
</html>

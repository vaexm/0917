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
	</div>
</body>
</html>

<?php
include('config.php');
session_start();
?>
<html>
<head>
<title>Rút tiền</title>
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Classy Login form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<!--header start here-->
<div class="header">
		<div class="header-main">
        <div align="center">
		       <h1>Rút tiền </h1>
               <form method="post">
               <h3>Nhập số tiền muốn rút</h3><br>
               			<input type="text" size="40" name="txttien" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'User name';}"/>
                        <br>
                        <div class="header-left-bottom agileinfo">
                        <input type="submit" name="ok4" value="Rút tiền" /> <br>
                        </div>
                      </form>
                      <br>

<?php
	$tien=0;
	if (isset($_POST["ok4"]))
	{
	$sql="select * from atmls where account='".$_SESSION['account']."'";
	$run=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($run);
	if ($row['money'] > $_POST['txttien']) 
	{
		$tien=$row['money']	- $_POST['txttien']; 
		$sql_up="update atmls set money = $tien where account='".$_SESSION['account']."'";
		$run_up=mysqli_query($conn,$sql_up);
		echo "<font color=#FFFFFF>Rút tiền thành công";
	}
	}
?>
<div class="header-main"><a href="trangchu.php">Trở lại</a></div>
</div>
</body>
</html>
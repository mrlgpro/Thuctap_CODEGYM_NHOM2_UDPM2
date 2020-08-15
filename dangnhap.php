<?php session_start();?>
<html>
<head>
<title>Đăng nhập</title>
<script src="jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="style.css" rel="stylesheet" type="text/css" media="all"/>
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
		<div align="center">
        <div class="header-main">
		       <h1>Đăng nhập hệ thống</h1>
		<div class="header-left-bottom agileinfo">	
		  <form method="post">
						<input type="text"  value="User name" name="txtten" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'User name';}"/>
						<input type="password"  value="Password" name="txtpw" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'password';}"/><br>
						 <input type="submit" name="ok" value="Đăng nhập" />
					</form>
		</div>
				</div>
				</div>
			  
			</div>
		</div>
</div>
</div>
<!--header end here-->
<!--PHP-->
	<div align="center">
<?php
	include('config.php');
	if (isset($_POST["ok"]))
	{
		$ten=$_POST['txtten'];
		$pass=$_POST['txtpw'];
		if(empty($ten) || empty($pass)) echo "<font color=White size=+3>Chưa nhập đủ dữ liệu!</font> ";
		else
			{
				$sql="select * from login where account='$ten'";
				$run=mysqli_query($conn,$sql);
				$num=mysqli_num_rows($run);
				$row=mysqli_fetch_array($run);
				if($row['account']=='admin@admin.com')
				{
					$_SESSION['account']='admin@admin.com'; //echo "dang nhap khong";
					header('location:webadmin.php');	
				}
				else
				{
				if($num>=1)
				{
					
					$_SESSION['account']=$ten;							
					$pw=$row['password'];
					if($pass=$pw) header('location:index.php');
					else echo "<font color=White size=+3>Sai mật khẩu</font>"; 					
				}
				else echo "<font color=White size=+3>Sai tài khoản</font>";
			}
	} }
?>	
</div>
</body>
</html>

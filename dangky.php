<?php
include('config.php');
?>
<html>
<head>
<title>Đăng ký</title>
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
               <h1>Đăng ký hệ thống</h1>
				<div class="header-left-bottom agileinfo">	
					 <form action="#" method="post">
						<input type="text"  value="Nhập tên tài khoản" name="txtten" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'User name';}"/>
                        <input type="password"  value="Nhập password" name="txtpw" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'User name';}"/>
                        <input type="text"  value="Nhập số tiền" name="txttien" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'User name';}"/><br>
                         <input type="submit" name="ok" value="Thêm mới" />
                        
 </form>
 </div>
 </div>
 </div>
 <div align="center">
<?php
	if (isset($_POST["ok"]))
	{
		$ten=$_POST['txtten'];
		$matkhau=$_POST['txtpw'];
		$money=$_POST['txttien'];
		if (($ten=="")||($matkhau=="")||($money=="")) echo "<font color=RED size=+3>Chưa nhập đủ dữ liệu!</font> ";
		else 
		$sql="insert into atmls ( account, password, money) values ('$ten','$matkhau','$money') ";
		$run=mysqli_query($conn,$sql);
		$sql_dn="insert into login (account, password) values ('$ten','$matkhau')";
		$run_dn=mysqli_query($conn,$sql_dn);
			if ($run) echo "<font color=RED size=+3>Thêm mới thành công</font>";
				}
				
?>
</div>                        
</body>
</html>

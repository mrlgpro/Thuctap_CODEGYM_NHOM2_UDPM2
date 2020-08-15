<?php
    session_start();
	include('config.php');
	echo "Chào: " .$_SESSION['account'];
		echo "<a href='exit.php'>  Thoát</a>"
?>
<BR />
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Web Admin</title>
<style>
.grid-container
{
	display: grid;
	width: 100%;
	margin-left: 0px;
	grid-gap: 10px;
	padding: 10px;
	background-image: url(images/banner3.jpg);
	height: 100%;
}
.grid-container > div
{
	font-family:"Courier New", Courier, monospace;
	font-size:18px;
	color:#FFFFFF;
	border:1px solid #000;
	text-align:left;
	background-color:rgba (255,255,255,0.6)
	
}
</style>
</head>
<body>
<div align="center">
<div class="grid-container">
<?php
	$sql="select * from atmls";
	$run=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($run))
	{
?>
<div>
	Tên khách hàng : <?php echo $row['account']; ?> <br>
    Số tiền : <?php echo $row['money']; ?><br>

<?php
}
?>
</div>
<div><a href="trangchu.php">Trở lại</a></div>
</div>
</div>
</body>
</html>
<?php
$server='localhost';
$user='root';
$pass='';
$data='atm';
$conn=mysqli_connect($server,$user,$pass,$data) or die ('Notconnect');
mysqli_query($conn,'set names"utf8"');
?>
<?php

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'propay');

extract($_POST);

if(isset($_POST['submit'])){


	$l = " insert into login (email,password) values('$mail','$pass')";

	$query = mysqli_query($con,$l);

	header('location:recharge.php');

	header("refresh:2; url=recharge.php");

?>
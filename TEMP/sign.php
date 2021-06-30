<?php

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'propay');

extract($_POST);

if(isset($_POST['submit1'])){

	$s = " insert into signup (name,email,password) values('$name','$email','$password')";

	$query = mysqli_query($con,$s);
	header('location:recharge.php');

}

?>
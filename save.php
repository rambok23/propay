<?php

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'propay');

extract($_POST);

if(isset($_POST['sub'])){

	$s = " insert into credit (cnum,name,cvv) values('$cnum','$name','$cvv')";

	$query = mysqli_query($con,$s);
	header('location:pay.php');

}

?>
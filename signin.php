<?php
if(isset($_POST['button'])){
	$username=$_POST['user'];
	setcookie("username",$username);
	

	$password=$_POST['pass'];
	setcookie("password",$password);
	echo "<h1 align='center'>WELCOME $username To RADAN Shopping</h1>";
	echo "<h3 align='center'>You have successfully signed-in</h3>";
	echo "<nav align='center'><a href='front.html'><big><b>START SHOPPING</b></big></a></nav>";
}
?>

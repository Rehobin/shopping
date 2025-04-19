<?php
if(isset($_GET['add']))
{
	$pro1 = $_GET['pro1'];
	echo "</br><center><b style='background:orange; padding:50px'> The total amount of ice-cream is  ";
	echo $pro1*2000;
	echo "</br></center>";
}
?>
<?php
if($_SERVER['REQUEST_URI']=="/searchcontent/"){
	include 'controller/allcontroller.php';
	$ob = new AllController();
	$ob -> index();
}
else echo "obiekt nie załadował się";
?>
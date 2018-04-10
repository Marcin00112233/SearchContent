<?php
if($_SERVER['REQUEST_URI']=="/searchcontent/" or $_SERVER['REQUEST_URI']=="/searchcontent/index.php" ){
	include 'controller/allcontroller.php';
	$ob = new AllController();
	$ob -> index();
}
else if($_GET['module']== 'all' && $_GET['proc'] == 'result'){
	include 'controller/allcontroller.php';
	$ob = new AllController();
	echo $_POST['search'];
} else echo "obiekt nie załadował się";
?>
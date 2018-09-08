<?php
if($_SERVER['REQUEST_URI']=="/searchcontent/" or $_SERVER['REQUEST_URI']=="/searchcontent/index.php" ){
	include 'controller/allcontroller.php';
	$ob = new AllController();
	$ob -> index();
        //echo 'test2';
}else if($_GET['module']== 'all' && $_GET['proc'] == 'result'){
	include 'controller/allcontroller.php';
	$ob = new AllController();
	//echo 'test2';
} else if ($_GET['module']== 'admin' && $_GET['proc']== 'show_form_add'){
    include 'controller/exemplary_data_controller.php';
    $ob = new exemplary_data_controller();
    $ob->show_form();
    //echo 'test3';
} else if ($_GET['module']== 'admin' && $_GET['proc']== 'proc_add'){
    include 'controller/exemplary_data_controller.php';
    $ob = new exemplary_data_controller();
    $ob->load_data_controller();
}
else echo "obiekt nie załadował się";
?>
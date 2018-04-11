<?php
include "controller.php";

class exemplary_data_controller extends controller{
	public function show_form(){
		$view = $this->loadView('exemplary_data_');
		$view->load_url_form();
	}
	
}
?>
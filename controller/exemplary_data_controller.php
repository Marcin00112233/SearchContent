<?php
include "controller.php";

class exemplary_data_controller extends controller{
	public function show_form(){
		$view = $this->loadView('exemplary_data_');
		$view->load_url_form();
	}
        public function load_data_controller(){
            $model = $this->loadModel('exemplary_data_');
            $data = $this->loadModel('load_data_');
            $model->load_catalog();
            $model->get_all_links();
            $model->show_data();
            
        }
	
}
?>
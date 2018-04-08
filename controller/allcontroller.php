<?php
include 'controller.php';
class AllController extends Controller {
	public function index(){
		$view=$this->loadview('All');
		$view->index();
	}
	
	public function result(){
		$model = $this->loadModel('All');
	}
}
?>
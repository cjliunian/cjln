<?php

namespace Admin\Controller;

/**
* 
*/
class MenuController extends AdminController
{
	
	public function index() {
	
		

		$this->display();
	}

	public function mlist() {

		$this->display('index');
	}

	public function getJson()
	{
		exit('xxxx');
	}
}

?>
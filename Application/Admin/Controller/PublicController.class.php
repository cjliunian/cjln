<?php

/**
 * @author cjln
 * 
 */

namespace Admin\Controller;


class PublicController extends \Think\Controller {

	public function index() {
	
		echo "Public index";
	}

	public function login() {
		
		if (IS_POST) {
			$this->redirect('Index/index');
		} else {
			
			$this->display();
		}
		
	}
}

?>
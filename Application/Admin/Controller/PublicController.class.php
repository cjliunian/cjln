<?php

/**
 * @author cjln
 * 
 */

namespace Admin\Controller;


class PublicController extends AdminController {

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

	public function logout() {
	
		
	}

	public function checkpwd() {
		echo "y";
	}

	public function verify(){
        $verify = new \COM\Verify();
        $verify->entry(1);
    }
}

?>
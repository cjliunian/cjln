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
			
			$this->display('login2');
		}
		
	}

	public function logout() {
	
		
	}

	public function checkpwd() {
		echo "y";
	}

	public function verify(){
        $verify = new \COM\Verify();
        $verify->imageL = 165;
        $verify->fontSize = 20;
        $verify->useCurve = false;
        $verify->useNoise = false;
        $verify->length = 4;
        $verify->fontttf = '4.ttf';
        $verify->bg = array(249,249,249);
        $verify->entry(1);
    }
}

?>
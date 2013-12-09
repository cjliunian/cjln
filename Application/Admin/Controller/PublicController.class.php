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
			// $this->display();
		}
		
	}

	public function logout() {
	
		
	}

	public function checkpwd() {
		echo "y";
	}

	public function verify(){
        $verify = new \COM\Verify();
        // $verify->imageL = 120;
        // $verify->imageH = 35;
        $verify->fontSize = 16;
        $verify->useCurve = false;
        $verify->useNoise = false;
        $verify->length = 4;
        $verify->fontttf = '4.ttf';
        // $verify->bg = array(255,255,255);
        // $verify->bg = array(0,0,0);
        $verify->entry(1);
    }
}

?>
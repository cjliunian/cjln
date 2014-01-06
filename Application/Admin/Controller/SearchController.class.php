<?php

namespace Admin\Controller;

/**
* 
*/
class SearchController extends AdminController {

	
	public function index($keyword) {
		
		// $arrayName = array('data' );

		$data = array();

		$this->assign(array(
			'keyword' => $keyword,
			'data' => $data
		));
		
		$this->display();
	}

	

	
}

?>
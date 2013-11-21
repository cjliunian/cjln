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

	public function getMenuJson() {
		$fields = "id,pid,name as text,iconCls,url,status";
		$list = M('menu')->field($fields)->select();
		$tree = list_to_tree($list,'id','pid','children');
		$this->ajaxReturn($tree);

	}

	public function add() {
		$id = I('get.id') ? I('get.id'): 1;
		$this->id = $id;
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
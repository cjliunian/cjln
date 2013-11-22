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
		$id = I('get.id',0);
		$this->id = $id;
		$this->display();
	}

	public function addMenuSave() {
		$post = I('post.');

		$rs = M('Menu')->add($post);

		if($rs) {
			$info['status'] =   true;
	        $info['info']   =   '添加成功!';
			
		} else {
			$info['status'] =   false;
	        $info['info']   =   '添加失败!';
		}
		$this->ajaxReturn($info);
	}

	public function editSave () {
		var_dump($_POST);
		var_dump($_GET);

		exit('xxxxxxxxxxx......');
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
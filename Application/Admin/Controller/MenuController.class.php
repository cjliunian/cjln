<?php

namespace Admin\Controller;
/**
* 
*/
class MenuController extends AdminController
{
	
	public function index() {
	
		// echo "string";exit();

		$this->display();
	}

	public function getMenuJson() {
		$fields = "id,pid,name as text,iconCls,url,status";
		$list = M('menu')->field($fields)->select();
		$tree = list_to_tree($list,'id','pid','children');
		$this->ajaxReturn($tree);

	}

	public function add() {
		$id = I('get.id');
		$this->id = $id;
		// echo "string";exit();
		$this->display('add');
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

	public function delMenu() {
		$id = I('post.id');
		$rs = M('Menu')->delete($id);
		if($rs) {
			$info['status'] =   true;
	        $info['info']   =   '删除成功!';
		} else {
			$info['status'] =   false;
	        $info['info']   =   '删除失败!';
		}
		$this->ajaxReturn($info);
	}

	public function editSave () {
		$data = I('post.');
		$data['name'] = $data['text'];
		$rs = M('Menu')->where('id='.$data['id'])->save($data);
		// $sql = M()->_sql();
		// $info['tip']   =   $sql;
		if($rs >= 0) {
			$info['status'] =   true;
	        $info['info']   =   '修改成功!';
		} else {
			$info['status'] =   false;
	        $info['info']   =   '修改失败!';
		}
		$this->ajaxReturn($info);
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
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

	

	public function add($id='', $ac='') {
		if($ac) {
			$data = D('Menu')->where('id='.$id)->find();

			$this->assign(array(
				'id' => $data['pid'],
				'data'=>$data
			));
		} else {
			$this->assign('id',$id);
		}
		
		// echo "string";exit();
		$this->display('add');
	}

	public function edit() {

		$this->display();
	}

	public function addMenuSave() {
		$post = I('post.');

		$rs = M('Menu')->add($post);
		$info['tip'] = $rs;
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

	/**
	 * 菜单拖拽操作
	 */
	public function dnd(){
		$data = I('post.');
		$rs = M('Menu')->where('id='.$data['id'])->save($data);
		if($rs >= 0) {
			$info['status'] =   true;
	        $info['info']   =   '修改成功!';
		} else {
			$info['status'] =   false;
	        $info['info']   =   '修改失败!';
		}
		$this->ajaxReturn($info);
	}

	public function editSave () {
		$data = I('post.');
		$rs = M('Menu')->where('id='.$data['id'])->save($data);
		if($rs >= 0) {
			$info['status'] =   true;
	        $info['info']   =   '修改成功!';
		} else {
			$info['status'] =   false;
	        $info['info']   =   '修改失败!';
		}
		$this->ajaxReturn($info);
	}
	

	public function getJson()
	{
		exit('xxxx');
	}

	public function getMenuJson() {
		$fields = "id,pid,name as text,iconCls,url,status";
		$list = M('menu')->field($fields)->select();
		$tree = list_to_tree($list,'id','pid','children');
		$this->ajaxReturn($tree);

	}

	public function get_menu_json() {
		$fields = "id,pid,name as text,iconCls,url,status";
		$list = M('menu')->field($fields)->select();
		// var_dump($list);exit();
		$tree = list_to_tree($list,'id','pid','children');
		$this->ajaxReturn($tree);
	}
}

?>
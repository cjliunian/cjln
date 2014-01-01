<?php

namespace Admin\Controller;

/**
* 
*/
class NodeController extends AdminController {

	
	public function index() {
	
		
		$this->display();
	}

	public function add() {
		
		if(IS_POST) {
			$post = I('post.');
			if(M('AuthRule')->create($post)) {
				$rs = M('AuthRule')->add();
			} else {
				// --- 
				$info['tip'] = M()->_sql();
			}
			
			if($rs) {
				$info['status'] =   true;
		        $info['info']   =   '添加成功!';
			} else {
				$info['status'] =   false;
		        $info['info']   =   '添加失败!';
			}
			$this->ajaxReturn($info);
		} else {
			$id = I('get.id');
			$this->id = $id;
			$this->display();
		}
	}

	public function del() {
		$id = I('post.id');
		$rs = M('AuthRule')->delete($id);
		if($rs) {
			$info['status'] =   true;
	        $info['info']   =   '删除成功!';
		} else {
			$info['status'] =   false;
	        $info['info']   =   '删除失败!';
		}
		$this->ajaxReturn($info);
	}



	public function get_node_json($page="1",$row="10",$id=0) {
		
		$fields = "id,pid,title as text,name,module,status";
		if(I('get.isCombo')) {
			$data = M('AuthRule')->field($fields)->select();
			$data = list_to_tree($data,'id','pid','children');
		} else {


			$map = array('pid'=>$id);
			if($id == 0) {
				$offset = ($page-1)*$row;
				$data['total'] = M('AuthRule')->where($map)->count();
				$list = M('AuthRule')->field($fields)->where($map)->limit($offset,$row)->select();
				foreach ($list as $key => $line) {
					if(M('AuthRule')->where('pid ='.$line['id'])->find()) {
						$list[$key]['state']  = 'closed';
					} else {
						$list[$key]['state']  = 'open';
					}
				}
				$data['rows'] = list_to_tree($list,'id','pid','children');
			} else {
				$data = M('AuthRule')->field($fields)->where($map)->select();
				foreach ($data as $key => $line) {
					if(M('AuthRule')->where('pid ='.$line['id'])->find()) {
						$data[$key]['state']  = 'closed';
					} else {
						$data[$key]['state']  = 'open';
					}
				}
			}
		}
		$this->ajaxReturn($data);
	}

	
}

?>
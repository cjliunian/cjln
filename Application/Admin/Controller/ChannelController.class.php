<?php

namespace Admin\Controller;

/**
*  栏目管理
*/
class ChannelController extends AdminController {

	public function index() {
		// echo C('DEFAULT_LANG');exit();
		$toolbar = array(
			array('text'=>L('_CHANNEL_ADD_'),'iconCls'=>'icon-cologne-plus','handler'=>'add','name'=>'channel-index-tb-add-btn'),
			array('text'=>L('del'),'iconCls'=>'icon-cologne-bank','handler'=>'del','name'=>'channel-index-tb-del-btn'),
			array('-'),
			array('text'=>L('refresh'),'iconCls'=>'icon-cologne-refresh','handler'=>'doRefresh'),
		);

		foreach ($toolbar as $key => $line) {
			if($line['name'] && !authentication($line['name'], UID,2,'nourl')) {
				unset($toolbar[$key]);
			}
		}
		$toolbar = array_values($toolbar);
		$toolbar = json_encode($toolbar);

		$this->assign(array(
			'toolbar' => $toolbar
		));
		// exit();
		
		
		$this->display();
	}

	public function add() {
		
		if(IS_POST) {
			$post = I('post.');
			if(D('Channel')->create($post)) {
				$rs = D('Channel')->add();
			} else {
				$rsp['tip'] = D('Channel')->getError();
			}
			
			if($rs) {
				$rsp['status'] =   true;
		        $rsp['info']   =   '添加成功!';
			} else {
				$rsp['status'] =   false;
		        $rsp['info']   =   '添加失败!';
			}
			$this->ajaxReturn($rsp);
		} else {
			$id = I('get.id');

			$this->assign(array(
				'id' =>$id,
			));
			$this->display('edit');
		}
	}

	public function del() {
		$id = I('post.id');
		$rs = D('Channel')->delete($id);
		if($rs) {
			$info['status'] =   true;
	        $info['info']   =   '删除成功!';
		} else {
			$info['status'] =   false;
	        $info['info']   =   '删除失败!';
		}
		$this->ajaxReturn($info);
	}


	public function get_channel_json() {
		$mdl = D('Channel');

		
		$fields = "chanid as id,pid,name as text,url,status,sort,type";
		$map = "status = 1";
		$list = $mdl->lists($fields,$map);
		$tree = list_to_tree($list,'id','pid','children');
		$this->ajaxReturn($tree);
		
	}

	
}
?>
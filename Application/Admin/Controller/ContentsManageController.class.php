<?php

namespace Admin\Controller;

/**
*  内容发布管理
*/
class ContentsManageController extends AdminController {

	public function index() {
		

		
		// $fields = "chanid as id,pid,name as text,url,status,sort";
		// $map = "status = 1";
		// $list = D('Channel')->lists($fields,$map);
		// foreach ($list as $k => $line) {
		// 	# code...
		// }
		// dump($list);


		// exit();
		
		
		$this->display();
	}


	public function cmAbc($type,$chaid) {
		$$issgl = I('issgl');
		$p = array('chaid' => $chaid,'type'=>$type,'issgl'=>$issgl);
		// echo $chaid;exit();
		if($type) {
			$this->redirect('ContentsManage/cmAdd',$p);
		} else {
			$this->redirect('ContentsManage/cmCate',$p);
		}
		// $this->display();
	}


	public function cmAdd($type,$chaid ='') {
		
		if(IS_POST) {

			$posts = I('post.');
			if($posts['id']) {
				$rs = M('Article')->save($posts);
			} else {
				$rs = M('Article')->add($posts);
			}
			
			if($rs || $rs >=0) {
				$rsp['status'] = true;
				$rsp['info'] = L('_EDIT_SUCC_');
			} else {
				$rsp['status'] = false;
				$rsp['info'] = L('_EDIT_FAIL_');
			}
			$this->ajaxReturn($rsp);
		} else {
			// $issgl = I('issgl');
			var_dump($issgl);
			if($issgl) {
				$this->assign(array(
					'type' => $type,
					'chaid' => $chaid,
				));
			} else {
				$map = "chaid =".$chaid;
				$data = M('Article')->where($map)->find();
				$this->assign(array(
					'data' => $data,
					'type' => $type,
					'chaid' => $chaid,
				));
			}
			$this->display();	
		}
	}

	public function cmCate($chaid) {
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
			'toolbar' => $toolbar,
			'chaid' => $chaid,
		));

		$this->display();
	}


	public function get_articl_json($chaid) {
		$map = "chaid =".$chaid;
		$list = M('Article')->where($map)->select();

		$this->ajaxReturn($list,'JSON');
	}





	
}
?>
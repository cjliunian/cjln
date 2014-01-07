<?php

namespace Admin\Controller;

/**
*  配置管理
*/
class ConfigController extends AdminController {

	public function index() {
		// echo C('DEFAULT_LANG');exit();
		// $toolbar = array(
		// 	array('text'=>L('_CHANNEL_ADD_'),'iconCls'=>'icon-cologne-plus','handler'=>'add','name'=>'channel-index-tb-add-btn'),
		// 	array('text'=>L('del'),'iconCls'=>'icon-cologne-bank','handler'=>'del','name'=>'channel-index-tb-del-btn'),
		// 	array('-'),
		// 	array('text'=>L('refresh'),'iconCls'=>'icon-cologne-refresh','handler'=>'doRefresh'),
		// );

		// foreach ($toolbar as $key => $line) {
		// 	if($line['name'] && !authentication($line['name'], UID,2,'nourl')) {
		// 		unset($toolbar[$key]);
		// 	}
		// }
		// $toolbar = array_values($toolbar);
		// $toolbar = json_encode($toolbar);

		// $this->assign(array(
		// 	'toolbar' => $toolbar
		// ));
		// exit();
		
		
		$this->display();
	}





	
}
?>
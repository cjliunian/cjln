<?php

namespace Admin\Model;
use Think\Model;

class MenuModel extends Model {

	protected $_map = array(
        'text' =>'name',
    );
	public function getMenu() {
	
		echo "menus";
	}

	public function getTopMenu() {
		$fields = "id,name as text,iconCls,url,status";
		$data = $this->field($fields)->where('pid=0 and status=1')->select();
		return $data;
	}

	

}
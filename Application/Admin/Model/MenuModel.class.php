<?php

namespace Admin\Model;
use Think\Model;

class MenuModel extends Model {


	public function getMenu()
	{
		echo "menus";
	}

	public function getTopMenu() {
		$fields = "id,name as text,icon,url,status";
		$data = $this->field($fields)->where('pid=0 and status=0')->select();
		return $data;
	}

	

}
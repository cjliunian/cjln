<?php


namespace Admin\Controller;


class IndexController extends AdminController {

	/* 保存禁止通过url访问的公共方法,例如定义在控制器中的工具方法 ;deny优先级高于allow*/
    static protected $deny  = array('xxx','userList');

    /* 保存允许访问的公共方法 */
    static protected $allow = array();

    public function index(){
		

		$this->display();
    }

    public function userList()
    {
    	
    }
}
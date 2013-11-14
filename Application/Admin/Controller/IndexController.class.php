<?php


namespace Admin\Controller;


class IndexController extends AdminController {

	/* 保存禁止通过url访问的公共方法,例如定义在控制器中的工具方法 ;deny优先级高于allow*/
    static protected $deny  = array();

    /* 保存允许访问的公共方法 */
    static protected $allow = array();

    public function index(){
		


		$this->display();
    }

    public function userList() {
    
    	
    }

    public function getTopMenuJson() {
        $topMenu = D('Menu')->getTopMenu();
        if(!empty($topMenu)) $this->ajaxReturn($topMenu,'JSON');
    }

    public function getMenuJson($id) {
        $pid = I('id',$id);
        $menus = D('Menu')->field('id,name as text,icon,url')->where('pid='.$pid.' and status = 0')->select();
        foreach ($menus as $key => $line) {
            // if($this->authcheck($line['url'],session('uid'))){
                $hasChild = D('Menu')->field('id')->where('pid='.$line['id'])->find();
                $menus[$key]['state'] = empty($hasChild) ? 'open' : 'closed';
                $menus[$key]['iconCls'] = $line['icon'];
                $menus[$key]['attributes'] = array('url'=> U($line['url']));
            // }
        }
        if(!empty($menus)) $this->ajaxReturn($menus,'JSON');
    }

    public function test() {


        // $menus = D('Menu')->getMenu();
        
        // echo $menus;   
    }
}
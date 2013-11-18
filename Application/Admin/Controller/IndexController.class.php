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


    public function getMenu($id) {
        $pid = I('id',$id,'int');
        if (!$pid) { // 获取顶级菜谱
            $menus = D('Menu')->getTopMenu();
        } else {
            $menus = D('Menu')->field('id,name as text,icon,url')->where('pid='.$pid.' and status = 0')->select();
            foreach ($menus as $key => $line) {
                // 后面可增加权限检测
                $hasChild = D('Menu')->field('id')->where('pid='.$line['id'])->find();
                $menus[$key]['state'] = empty($hasChild) ? 'open' : 'closed';
                $menus[$key]['iconCls'] = $line['icon'];
                $menus[$key]['attributes'] = array('url'=> U($line['url']));
            }
        }
        if(!empty($menus)) $this->ajaxReturn($menus,'JSON');
        
    }

    public function test() {


        // $menus = D('Menu')->getMenu();
        
        // echo $menus;   
    }
}
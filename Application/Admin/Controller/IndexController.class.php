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
            $menus = D('Menu')->field('id,name as text,iconCls,url')->where('pid='.$pid.' and status = 0')->select();
            foreach ($menus as $key => $line) {
                // 后面可增加权限检测
                $hasChild = D('Menu')->field('id')->where('pid='.$line['id'])->find();
                $menus[$key]['state'] = empty($hasChild) ? 'open' : 'closed';
                $menus[$key]['attributes'] = array('url'=> U($line['url']));
            }
        }
        if(!empty($menus)) $this->ajaxReturn($menus,'JSON');
        
    }

    public function add() {
    
        # code...
        echo "string";
        $this->display();
    }

    public function dashboard() {

        
        $this->display();
    }

    public function board() {
        // dump($_SERVER);
        echo '<p>服务器环境:' .$_SERVER['SERVER_SOFTWARE'].'</p>';
        echo "<p>PHP运行环境:" .PHP_SAPI. '   PHP'.PHP_VERSION.'</p>';
    }
}
<?php


namespace Admin\Controller;


class IndexController extends AdminController {

	/* 保存禁止通过url访问的公共方法,例如定义在控制器中的工具方法 ;deny优先级高于allow*/
    static protected $deny  = array();

    /* 保存允许访问的公共方法 */
    static protected $allow = array();

    public function index(){
        // var_dump($_SESSION);exit();
        // var_dump(UID);exit();
        // $allRules = $this->getAllRules();

        // 屏幕锁        
        $this->isLockScreen = session('?lockscreen') && session('lockscreen') == 1 ? 1 : 0;
		$this->display();
    }


    public function getMenu($id) {
        
        $pid = I('id',$id,'int');
        if (!$pid) { // 获取顶级菜谱
            $menus = D('Menu')->getTopMenu();
        } else {
            $menus = D('Menu')->field('id,name as text,iconCls,url')->where('pid='.$pid.' and status = 1')->select();
            if($menus) {
                foreach ($menus as $key => $line) {
                    // 后面可增加权限检测
                    if(authentication($line['url'], UID, array('in','1,2'))){
                        $hasChild = D('Menu')->field('id')->where('pid='.$line['id'].' and status = 1')->find();
                        $menus[$key]['state'] = empty($hasChild) ? 'open' : 'closed';
                        $menus[$key]['attributes'] = array('url'=> U($line['url']));
                    } else {
                        unset($menus[$key]);
                    }
                }
            }
        }
        $menus = array_values($menus);
        $this->ajaxReturn($menus,'JSON');
    }

    public function add() {
        echo "string";
        $this->display();
    }

    public function dashboard() {

        
        $this->display();
    }

    public function board() {
        echo '<p>服务器环境:' .$_SERVER['SERVER_SOFTWARE'].'</p>';
        echo "<p>PHP运行环境:" .PHP_SAPI. '   PHP'.PHP_VERSION.'</p>';
    }
}
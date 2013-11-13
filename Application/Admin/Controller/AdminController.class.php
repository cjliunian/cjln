<?php

namespace Admin\Controller;
use Think\Controller;

/**
* 后台公共控制器
* 
*/
class AdminController extends Controller {

	/* 保存禁止通过url访问的公共方法,例如定义在控制器中的工具方法 ;deny优先级高于allow*/
    static protected $deny  = array();

    /* 保存允许访问的公共方法 */
    static protected $allow = array();
	
	protected function _initialize() {
		// 
		// 是否是超级管理员
        define('IS_ROOT',   false);
		// 检测访问权限
        $access =   $this->accessControl();

        if ($access === false) {
        	$this->error('403:禁止访问');
        } else {
        	# code...
        }
        
	}


	/**
     * action访问控制,在 **登陆成功** 后执行的第一项权限检测任务
     *
     * @return boolean|null  返回值必须使用 `===` 进行判断
     *
     *   返回 **false**, 不允许任何人访问(超管除外)
     *   返回 **true**, 允许任何管理员访问,无需执行节点权限检测
     *   返回 **null**, 需要继续执行节点权限检测决定是否允许访问
     * @author 朱亚杰  <xcoolcc@gmail.com>
     */
    final protected function accessControl(){
    	
        if(IS_ROOT){
            return true;//管理员允许访问任何页面
        }
        $controller = 'Admin\\Controller\\'.CONTROLLER_NAME.'Controller';
        if ( !is_array($controller::$deny)||!is_array($controller::$allow) ){
            $this->error("内部错误:{$controller}控制器 deny和allow属性必须为数组");
        }
        $deny  = $this->getDeny();
        $allow = $this->getAllow();
        
        
        if ( !empty($deny)  && in_array(ACTION_NAME,$deny) ) {
            return false;//非超管禁止访问deny中的方法
        }
        if ( !empty($allow) && in_array(ACTION_NAME,$allow) ) {
            return true;
        }
        return null;//需要检测节点权限
    }


    /**
     * 获取控制器中允许禁止任何人(超管除外)通过url访问的方法
     * @param  string  $controller   控制器类名(不含命名空间)
     * @author 朱亚杰  <xcoolcc@gmail.com>
     */
    final static protected function getDeny($controller=CONTROLLER_NAME){
        $controller =   'Admin\\Controller\\'.$controller.'Controller';
        $data       =   array();
        if ( is_array( $controller::$deny) ) {
            $deny   =   array_merge( $controller::$deny, self::$deny );
            foreach ( $deny as $key => $value){
                if ( is_numeric($key) ){
                    // $data[] = strtolower($value);
                    $data[] = $value;
                }else{
                    //可扩展
                }
            }
        }
        return $data;
    }

    /**
     * 获取控制器中允许所有管理员通过url访问的方法
     * @param  string  $controller   控制器类名(不含命名空间)
     * @author 朱亚杰  <xcoolcc@gmail.com>
     */
    final static protected function getAllow($controller=CONTROLLER_NAME){
        $controller =   'Admin\\Controller\\'.$controller.'Controller';
        $data       =   array();
        if ( is_array( $controller::$allow) ) {
            $allow  =   array_merge( $controller::$allow, self::$allow );
            foreach ( $allow as $key => $value){
                if ( is_numeric($key) ){
                    // $data[] = strtolower($value);
                    $data[] = $value;
                }else{
                    //可扩展
                }
            }
        }
        return $data;
    }
}

?>
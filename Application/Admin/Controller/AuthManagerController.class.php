<?php


namespace Admin\Controller;
// use Admin\Model\AuthGroupModel;

/**
 * 权限管理控制器
 * Class AuthManagerController
 * @author 朱亚杰 <zhuyajie@topthink.net>
 */
class AuthManagerController extends AdminController{

    /* 因为updateRules要供缓存管理模块内部使用,无需通过url访问;*/
    static protected $deny  =   array();

    /* 保存允许所有管理员访问的公共方法 */
    static protected $allow =   array();

    public function index() {


    	echo "权限管理";
    }

    public function userGroup() {

    	$this->display();
    }

    public function addUsergroup($title ='',$description='') {
    	if(IS_POST) {
    		$post['title'] = $title;
    		$post['description'] = $description;
    		$AuthGroup = D('AuthGroup');
    		if ($AuthGroup->create($post)) {
    			$rs = $AuthGroup->add();
    			if($rs>0) {
    				$this->success('增加成功!');
    			} else {
    				$this->error('增加成功!');
    			}
    		} else {
    			return $AuthGroup->getError();
    		}
    		
    	} else {
    		$this->display();	
    	}
    }

    public function get_usergroup_json() {
    	$data = M('AuthGroup')->select();

    	$this->ajaxReturn($data);
    }

    

}

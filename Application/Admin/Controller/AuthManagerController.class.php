<?php


namespace Admin\Controller;
// use Admin\Model\AuthGroupModel;

/**
 * 权限管理控制器
 * Class AuthManagerController
 * @author 
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

    public function addUsergroup($title ='',$description='',$id='') {
    	if(IS_POST) {
            $post['title'] = $title;
            $post['description'] = $description;
            if($id) {
                $map['id'] = $id;
                if($this->AuthGroup->where($map)->save($post) === false) {
                    $this->error('修改失败!');
                } else {
                    $this->success('修改成功!');
                }
            } else {
                if ($this->AuthGroup->create($post)) {
                    $rs = $this->AuthGroup->add();
                    if($rs>0) {
                        $this->success('增加成功!');
                    } else {
                        $this->error('增加失败!');
                    }
                } else {
                    $this->error($this->AuthGroup->getError());
                }
            }
    		
    	} else {
            $id = I('get.id');
            if($id) {
                $data = $this->AuthGroup->where('id='.$id)->find();
                $this->assign('data',$data);
            }

    		$this->display();	
    	}
    }

    // 成员管理
    public function groupMebManager($groupid='') {

        // $data = D('Member')->getUserByGroupid($groupid);

        // dump($data);

        $this->assign('groupid',$groupid);

        $this->display();
    }

    public function delUserGroup($id='') {
        if(empty($id)) {
            return false;
        } else {
            
            if($this->AuthGroup->delete($id)) {
                $this->success('删除成功!');
            } else {
                $this->error('删除失败!');
            }
        }
    }

    // 将用户从用户组中移除
    public function removeUserFromGroup($uid,$groupid){
        $map['uid'] = array('in',$uid);
        $map['group_id'] = $groupid;
        $rs = M('AuthGroupAccess')->where($map)->delete();
        // echo M('AuthGroupAccess')->_sql();
        // var_dump($rs);exit();
        if($rs) {
            // $rsp['status'] = 1;
            // $rsp['info'] = '移除成功！';
            $this->success('移除成功！');
        } else {
            // $rsp['status'] = 0;
            // $rsp['info'] = '移除失败！';
            $this->error('移除失败！!');
        }
    }

    public function addUserToGroup() {
        $groupid = I('post.groupid');
        $uids = I('post.uids');
        $data['group_id'] = $groupid;
        foreach ($uids as $line) {
            $data['uid'] = $line;
            D('AuthGroupAccess')->add($data);
        }
        $rsp['status'] = 1;
        $rsp['info'] = '添加成功！';
        $this->ajaxReturn($rsp);
    }

    public function authSet() {

        if (IS_POST) {
            
        } else {
            
            $this->display();    
        }
        
    }

    public function get_usergroup_json() {
    	$data = $this->AuthGroup->select();

    	$this->ajaxReturn($data);
    }

    public function get_group_user_json($groupid,$page =1,$rows=10) {
        if(!$groupid) return false;
        $uid = M('AuthGroupAccess')->where('group_id ='.$groupid)->getField('uid',true);
        if($uid) {
            foreach ($uid as $key => $line) {
                $uids .= "'".$line."',";
            }
            $uids = substr($uids, 0, -1);

            $data['total'] = M('Member')->where(" uid IN (".$uids.")")->count();
            if(!$data['total']) $data['total'] = 0;
            $data['rows'] = M('Member')->where(" uid IN (".$uids.")")->limit(($page-1)*$rows,$rows)->select();
            $this->ajaxReturn($data);
        } else {
            $data['total'] = 0;
            $data['rows'][0] = array();
        }
    }


    public function get_user_json() {

        $map['uid'] = array('neq',4);
        $data = D('Member')->getUser($map);
        $this->ajaxReturn($data);
    }

    public function get_user_combogrid_json() {
        $groupid = I('get.groupid');
        $map['group_id'] = $groupid;
        $uid = D('AuthGroupAccess')->getUid($map);

        if($uid) {
            foreach ($uid as $line) {
                $uids .= $line['uid'].",";
            }
            $uids = substr($uids, 0, -1);

            $map['uid'] = array('not in',$uids);

            $data = D('Member')->getUser($map);
            
        } else {
            $data = D('Member')->getUser();
        }
        if($data)
            $this->ajaxReturn($data);
        
    }

    public function get_rules_json() {
        $list = $this->AuthRule->select();
        $rules = list_to_tree($list,'id','pid','children');
        $this->ajaxReturn($rules);
    }

    
    public function temp() {
        $menus = D('Menu')->select();
        // dump($menus);exit();
        $count = 0;
        foreach ($menus as $key => $line) {
            $data['name'] = empty($line['url']) ? $key.'aa': $line['url'];
            $data['title'] = $line['name'];
            $data['pid'] = $line['pid'];
            $data['id'] = $line['id'];
            $data['type'] = 1;
            $data['status'] = 1;
            $data['module'] = 'admin';
            if($this->AuthRule->add($data)){
                $count++;
                echo $count.'<br>';
            } else {
                echo $this->AuthRule->_sql().'--<br>';
            }

        }
        
    }
    

    public function _initialize(){
        $this->AuthGroup = D('AuthGroup');
        $this->AuthRule = D('AuthRule');
        // parent::_initialize();
    }
    

}

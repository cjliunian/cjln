<?php

namespace Admin\Controller;
use User\Api\UserApi;
/**
* 
*/
class UserController extends AdminController
{
	public function index() {
		
		
		$this->display();
	}

	public function add($username = '', $password = '', $repassword = '', $email = '') {
		if(IS_POST) {
			/* 调用注册接口注册用户 */
            $User = new UserApi;
            $uid = $User->register($username, $password, $email);
            if(0 < $uid){ //注册成功
                $user = array('uid' => $uid, 'nickname' => $username, 'status' => 1);
                if(!D('Member')->create($user)){
                    $this->error(D('Member')->getError());
                } else { 
                    
                    if(D('Member')->add()) {
                        $this->success('用户添加成功！');
                    } else {
                        $this->error('用户添加失败！');
                    }
                	
                }
            } else { //注册失败，显示错误信息
                $this->error($this->showRegError($uid));
            }
		} else {
			$this->display('edit');
		}
	}

	public function del($uid='') {
		if (empty($uid)) {
			return false;
		}
		$User = new UserApi;
		$rs = $User->delete($uid);
		if($rs) {
			if (M('Member')->delete($uid)) {
				$this->success('删除成功!');
			} else {
				$this->error('删除失败!');
			}
		}
	}


	public function getUserJson($page =1,$rows=10) {
		$data['total'] = M('Member')->count();
		$data['rows'] = M('Member')->limit(($page-1)*$rows,$rows)->select();
		$this->ajaxReturn($data);
	}

	/**
     * 获取用户注册错误信息
     * @param  integer $code 错误编码
     * @return string        错误信息
     */
    private function showRegError($code = 0){
        switch ($code) {
            case -1:  $error = '用户名长度必须在16个字符以内！'; break;
            case -2:  $error = '用户名被禁止注册！'; break;
            case -3:  $error = '用户名被占用！'; break;
            case -4:  $error = '密码长度必须在6-30个字符之间！'; break;
            case -5:  $error = '邮箱格式不正确！'; break;
            case -6:  $error = '邮箱长度必须在1-32个字符之间！'; break;
            case -7:  $error = '邮箱被禁止注册！'; break;
            case -8:  $error = '邮箱被占用！'; break;
            case -9:  $error = '手机格式不正确！'; break;
            case -10: $error = '手机被禁止注册！'; break;
            case -11: $error = '手机号被占用！'; break;
            default:  $error = '未知错误';
        }
        return $error;
    }
}
?>
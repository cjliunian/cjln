<?php

/**
 * @author cjln
 * 
 */

namespace Admin\Controller;
use Think\Controller;
use User\Api\UserApi;


class PublicController extends Controller {

	public function index() {
	
		echo "Public index";
	}

	public function login() {
		
		if (IS_POST) {
			
			$posts = I('post.');
			if(!check_verify($posts['verifycode'])) {
				$rsp['status'] = 0;
				$rsp['info'] = '验证码错误！';
			} else {
				/* 调用UC登录接口登录 */
	            $User = new UserApi;
	            $uid = $User->login($posts['username'], $posts['password']);
	            if(0 < $uid){ //UC登录成功
	                /* 登录用户 */
	                $Member = D('Member');
	                if($Member->login($uid)){ //登录用户
	                    //TODO:跳转到登录前页面
	                    $rsp['status'] = 1;
	                    $rsp['info'] = '登录成功！';
	                    $rsp['url'] = U('Index/index');
	                } else {
	                    // $this->error($Member->getError());
	                    $rsp['status'] = 0;
	                    $rsp['info'] = $Member->getError();
	                }

	            } else { //登录失败
	                switch($uid) {
	                    case -1: $error = '用户不存在或被禁用！'; break; //系统级别禁用
	                    case -2: $error = '密码错误！'; break;
	                    default: $error = '未知错误！'; break; // 0-接口参数错误（调试阶段使用）
	                }
	                // $this->error($error);
	                $rsp['status'] = 0;
	                $rsp['info'] = $error;
	            }
			}
			$this->ajaxReturn($rsp);
		} else {
			if(is_login()){
                $this->redirect('Index/index');
            }else{
                /* 读取数据库中的配置 */
                // $config	=	S('DB_CONFIG_DATA');
                // if(!$config){
                //     $config	=	D('Config')->lists();
                //     S('DB_CONFIG_DATA',$config);
                // }
                // C($config); //添加配置
                
                $this->display('login2');
            }
		}
		
	}

	/* 退出登录 */
    public function logout(){
        if(is_login()){
            D('Member')->logout();
            session('[destroy]');
            $this->success('退出成功！', U('login'));
        } else {
            $this->redirect('login');
        }
    }

	public function lockScreen($islock,$password) {
		if($islock) {
			session('lockscreen',1);
		} else {
			$User = new UserApi;
			if($User->verifyUserPwd(session('user_auth.uid'), $password)){
				session('lockscreen',0);
				$rsp['status'] = 1;
			} else {
				session('lockscreen',1);
				$rsp['status'] = 0;
			}
			$this->ajaxReturn($rsp);
		}
	}

	public function verify(){
        $verify = new \Think\Verify();
        // $verify->imageL = 120;
        // $verify->imageH = 35;
        $verify->fontSize = 16;
        $verify->useCurve = false;
        $verify->useNoise = false;
        $verify->length = 4;
        $verify->fontttf = '4.ttf';
        $verify->bg = array(255,255,255);
        // $verify->bg = array(0,0,0);
        $verify->entry(1);
    }
}

?>
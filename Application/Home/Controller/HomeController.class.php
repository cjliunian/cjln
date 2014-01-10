<?php

namespace Home\Controller;
use Think\Controller;


class HomeController extends Controller {

    protected function _initialize(){
        
        $channels = M('Channel')->where('pid = 0')->select();


        // var_dump($channels);
        $this->assign('channels',$channels);
       
    }
}
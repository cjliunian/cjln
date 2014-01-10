<?php

namespace Home\Controller;



class IndexController extends HomeController {

    public function index(){
		
    	$cMdl = M('Channel');
    	$aMdl = M('Article');
    	$chanids = $cMdl->where('pid = 2')->getField('chanid',true);
    	$chaids = implode(',', $chanids);
    	// echo $chaids;

    	$lastNews = $aMdl->where(array('chaid'=>array('in',$chaids)))->order('inputtime desc')->find();

    	// var_dump($lastNews);

    	// 首页产品
    	// $products = 
    	$pChans = $cMdl->field('chanid,name,remark')->where('pid =11')->select();
    	// foreach ($pChans as $k => $line) {
    	// 	// $tmp = $aMdl->where('chaid='.$line['chanid'].' and  find_in_set(1,posids)')->find();
    	// }
    	
    	// var_dump($pChans);

    	$this->assign(array(
    		'lastNews' =>$lastNews,
    		'pChans' =>$pChans,
    	));


		$this->display();
    }


    public function aboutUs() {
    	$chanid = I('chanid');
    	// if($chanid != 0) {
    	// 	$chanid
    	// }
    	// echo $chanid;
    	$list = M('Channel')->where('pid =1')->select();
    	$data = M('Channel')->where('chanid ='.$chanid)->find();

    	$contents = M('Article')->where('chaid = '.$chanid)->find();

    	$data = array_merge($data,$contents);

    	// var_dump($data);

    	$this->assign(array(
    		'chanid' => $chanid,
    		'subChan' => $list,
    		'data' => $data,
    	));

    	$this->display();
    }

    public function newsCenter() {
    	$chanid = I('chanid');
    	$list = M('Channel')->where('pid =2')->select();
    	$data = M('Channel')->where('chanid ='.$chanid)->find();
    	$aMdl = M('Article');
    	$page = I('p',1);
    	$arLists = $aMdl->where('chaid = '.$chanid)->page($page,10)->order('inputtime desc')->select();
    	
    	

    	 $count = $aMdl->where('chaid = '.$chanid)->count();// 查询满足要求的总记录数

		$pager = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $pager->show();// 分页显示输出
		$this->assign('page',$show);// 赋值分页输出
    	// $data = array_merge($data,$contents);

    	// var_dump($data);

    	$this->assign(array(
    		'chanid' => $chanid,
    		'subChan' => $list,
    		'data' => $data,
    		'arLists' => $arLists,
    	));
    	$this->display();	
    }

    public function newsShow() {
    	$chanid = I('chanid');
    	$list = M('Channel')->where('pid =2')->select();
    	$data = M('Channel')->where('chanid ='.$chanid)->find();
    	$id = I('id');
    	$arDetial = M('Article')->where('id = '.$id)->find();

    	$data = array_merge($data,$arDetial);

    	// var_dump($data);

    	$this->assign(array(
    		'chanid' => $chanid,
    		'subChan' => $list,
    		'data' => $data,
    		'arLists' => $arLists,
    	));
    	$this->display();	
    }

    public function groupCy() {
    	$chanid = I('chanid');
    	// if($chanid != 0) {
    	// 	$chanid
    	// }
    	// echo $chanid;
    	$list = M('Channel')->where('pid =3')->select();
    	$data = M('Channel')->where('chanid ='.$chanid)->find();

    	$contents = M('Article')->where('chaid = '.$chanid)->find();

    	$data = array_merge($data,$contents);

    	// var_dump($data);

    	$this->assign(array(
    		'chanid' => $chanid,
    		'subChan' => $list,
    		'data' => $data,
    	));

    	$this->display();
    }

    public function products() {
    	$chanid = I('chanid');
    	$list = M('Channel')->where('pid =11')->select();
    	$data = M('Channel')->where('chanid ='.$chanid)->find();
    	$aMdl = M('Article');
    	$page = I('p',1);
    	$arLists = $aMdl->where('chaid = '.$chanid)->page($page,10)->order('inputtime desc')->select();
    	
    	

    	 $count = $aMdl->where('chaid = '.$chanid)->count();// 查询满足要求的总记录数

		$pager = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $pager->show();// 分页显示输出
		$this->assign('page',$show);// 赋值分页输出
    	// $data = array_merge($data,$contents);

    	// var_dump($data);

    	$this->assign(array(
    		'chanid' => $chanid,
    		'subChan' => $list,
    		'data' => $data,
    		'arLists' => $arLists,
    	));
    	$this->display();	
    }

    public function techSup() {
    	$chanid = I('chanid');
    	
    	$list = M('Channel')->where('pid =12')->select();
    	$data = M('Channel')->where('chanid ='.$chanid)->find();

    	$contents = M('Article')->where('chaid = '.$chanid)->find();

    	$data = array_merge($data,$contents);

    	// var_dump($data);

    	$this->assign(array(
    		'chanid' => $chanid,
    		'subChan' => $list,
    		'data' => $data,
    	));

    	$this->display();
    }

    public function devStr() {
    	$chanid = I('chanid');
    	
    	$list = M('Channel')->where('pid =13')->select();
    	$data = M('Channel')->where('chanid ='.$chanid)->find();

    	$contents = M('Article')->where('chaid = '.$chanid)->find();

    	$data = array_merge($data,$contents);

    	

    	$this->assign(array(
    		'chanid' => $chanid,
    		'subChan' => $list,
    		'data' => $data,
    	));

    	$this->display();
    }


    public function contusUs() {
    	$chanid = I('chanid');
    	
    	$list = M('Channel')->where('pid =10')->select();
    	$data = M('Channel')->where('chanid ='.$chanid)->find();

    	$contents = M('Article')->where('chaid = '.$chanid)->find();

    	$data = array_merge($data,$contents);

    	

    	$this->assign(array(
    		'chanid' => $chanid,
    		'subChan' => $list,
    		'data' => $data,
    	));

    	$this->display();
    }

    public function gestBook() {


    	$chanid = I('chanid');
    	$list = M('Channel')->where('pid =10')->select();
    	$data = M('Channel')->where('chanid ='.$chanid)->find();
    	$aMdl = M('Article');
    	$page = I('p',1);
    	$arLists = $aMdl->where('chaid = '.$chanid)->page($page,10)->order('inputtime desc')->select();
    	
    	// var_dump(count($arLists));

    	 $count = $aMdl->where('chaid = '.$chanid)->count();// 查询满足要求的总记录数

		$pager = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $pager->show();// 分页显示输出
		$this->assign('page',$show);// 赋值分页输出
    	

    	$this->assign(array(
    		'chanid' => $chanid,
    		'subChan' => $list,
    		'data' => $data,
    		'arLists' => $arLists,
    	));
    	$this->display();	
    }

    public function addGestbook() {
    	$posts = I('post.');
    	$posts['chaid'] = 33;
    	$posts['inputtime'] = time();
    	$rs = M('Article')->add($posts);

    	if($rs) {
    		$rsp['status'] = true;
    		$rsp['info'] = '留言成功！';
    		
    	} else {
    		$rsp['status'] = false;
    		$rsp['info'] = '留言成功！';
    	}
    	$this->ajaxReturn($rsp);

    	
    }

    public function mapp() {

    	$this->display();
    }

    public function panorama() {

    	$this->display();
    }
}
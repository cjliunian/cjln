<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>正东农牧</title>
<link href="/Public/Home/css/style.css" rel="stylesheet" type="text/css">
<link href="/Public/Home/css/foucs.css" rel="stylesheet" />

<script type="text/javascript" src="/Public/Static/jquery-1.10.2.min.js"></script>
<script src="/Public/Home/js/jquery.foucs.js" type="text/javascript"></script>


<script type="text/javascript">
	$(document).ready(function(){
		$('.box a').mouseover(function(){
			$(this).stop().animate({"top":"-114px"}, 200); 
		})
		$('.box a').mouseout(function(){
			$(this).stop().animate({"top":"0"}, 200); 
		})
	});
</script>

</head>

<body>
<!--头部开始-->
<div class="w_100 fleft head">
	<div class="w1000 center">
		<div class="hd_xd_w">
			<div class="logo">
				<a href="#">
					<img src="/Public/Home/images/logo.png"  border="0"/>
				</a>
			</div>
			<div class="daohang_w">
				<ul>
					<li>
						<a href="#" class="select">网站首页</a>
					</li>
				    <?php if(is_array($channels)): foreach($channels as $key=>$vo): ?><li chaid="<?php echo ($vo["chanid"]); ?>" >
						<a href="<?php echo ($vo["url"]); ?>" ><?php echo ($vo["name"]); ?></a>
					</li><?php endforeach; endif; ?>
					

				</ul>
			</div>
		</div>
	</div>
</div>
<!--头部结束-->


	<!--中间开始-->

    <!--banner开始-->
    <div class="w_100 fleft">
		
		 
		  <!-- 代码 开始 -->
			<div id="main">
				<div id="index_b_hero">
					<div class="hero-wrap">
						<ul class="heros clearfix">
							<li class="hero"><img src="/Public/Home/images/b1.jpg" class="thumb" /> </li>
							<li class="hero"><img src="/Public/Home/images/b2.jpg" class="thumb" /></li>
							<li class="hero"><img src="/Public/Home/images/b3.jpg" class="thumb" /></li>
							<li class="hero"><img src="/Public/Home/images/b4.jpg" class="thumb" /></li>
							<li class="hero"><img src="/Public/Home/images/b5.jpg" class="thumb" /></li>
						</ul>
					</div>
					<div class="helper">
						<div class="mask-left">
						</div>
						<div class="mask-right">
						</div>
						<a href="#" class="prev icon-arrow-a-left"></a>
						<a href="#" class="next icon-arrow-a-right"></a>
					</div>
				</div>
			</div>
			<script type="text/javascript">
				$.foucs({ direction: 'right' });
			</script>
			<!-- 代码 结束 -->
		 
		
    </div>
   <!--banner结束-->
   
   <!--新闻开始-->
   <div class="w_100 fleft synews">
       <div class="w1000 center">
	      <div class="xinwen_w">
		     <div class="xwleft">新闻：</div>
			 <div class="xwcon"><a href="#">2013年3月1日-3月15日我国肉制品进口情况</a>   &nbsp;&nbsp;&nbsp;&nbsp;[2013.4.1]</div>
		  </div>
		  <div class="guanzhu_w"> 
			  <div class="gzwm_icon"><img src="/Public/Home/images/txweibo.png"/></div>
			   <div class="gzwm_icon"><img src="/Public/Home/images/sinaicon.png"/></div>
			  <div class="gzwm_txt">关注我们：</div>
		  </div>
	   </div>
   </div>
   <!--新闻结束-->
   
   <div class="w_100 fleft main_bg">
   
      <div class="w1000 center main_1000bg">
	    
		<!--第一行 开始-->
		<div class="w1000 fleft">
		    <div class="sy_gywm_w">
			   <div class="title_bg">
			      <span class="title_txt">关于我们</span>
				  <span class="more"><a href="#" target="_blank">more ></a></span>
			   </div>
			   <div class="content_w"><img src="/Public/Home/images/gywmpic.jpg" class="tupian"/>四川正东农牧集团有限责任公司是集羊业、猪业、饲料、生物、生态、种植、食品科研于一体的综合性农牧企业。专注于为社会提供优质种猪、种羊、生态精品猪肉、羊肉、新型无公害饲料等系列产品。</div>
			</div>
			
			<div class="sy_kj_w">
			   <div class="title_bg">
			       <img src="/Public/Home/images/kjjfxr.gif"/>
			   </div>
			   
			   <div class="kj_item">
			       <ul class="box">
				      <li>
					      <a href="#" target="_blank">
					       <div class="toll_img"><img src="/Public/Home/images/swqj.gif"/></div>
						   <div class="toll_info"><img src="/Public/Home/images/swqj.gif"/></div>
						   </a>					  
					 </li>
				      <li>
					       <a href="#" target="_blank">
					       <div class="toll_img"><img src="/Public/Home/images/sjkhd.gif"/></div>
						   <div class="toll_info"><img src="/Public/Home/images/sjkhd.gif"/></div>
						   </a>					 
					</li>
				   </ul>
			   </div>
	      </div>
		</div>
		<!--第一行 结束-->
		
		
		<!--正东产品 开始-->
		<div class="sy_cp_w">
		    <div class="title_bg">
			      <span class="title_txt">正东产品</span>
				  <span class="more"><a href="#" target="_blank">more ></a></span>
			</div>
			
			<div id="demo" class="sy_cp_lb" >
			 <table cellspacing="0" cellpadding="0" align="center" border="0">
			  <tbody>
			   <tr>
				<td id="marquePic1" valign="top">
			   <ul>
			     <li>
				    <div class="sy_cp_list">
					   <div class="sy_cp_pic"><a href="#" target="_blank"><img src="/Public/Home/images/chanpin1.jpg"/></a></div>
					   <div class="sy_cp_title">生态苗木</div>
					   <div class="sy_cp_ms">
					        <div class="sy_cp_ms_txt">以简阳市“丹景正东国际生态产业园”和雅安市“宝兴正康林牧产业园”为基地，发展生态养殖业，开发乡村旅游，弘扬民俗文化。</div>
							<div class="sy_cp_ckcp"><a href="#" target="_blank">查看产品</a></div>
					   </div>
					</div>
				 </li>
				 <li>
				    <div class="sy_cp_list">
					   <div class="sy_cp_pic"><a href="#" target="_blank"><img src="/Public/Home/images/chanpin2.jpg"/></a></div>
					   <div class="sy_cp_title">生物菌肥</div>
					   <div class="sy_cp_ms">
					        <div class="sy_cp_ms_txt">以简阳市“丹景正东国际生态产业园”和雅安市“宝兴正康林牧产业园”为基地，发展生态养殖业，开发乡村旅游，弘扬民俗文化。</div>
							<div class="sy_cp_ckcp"><a href="#" target="_blank">查看产品</a></div>
					   </div>
					</div>
				 </li>
				 <li>
				    <div class="sy_cp_list">
					   <div class="sy_cp_pic"><a href="#" target="_blank"><img src="/Public/Home/images/chanpin3.jpg"/></a></div>
					   <div class="sy_cp_title">饲料</div>
					   <div class="sy_cp_ms">
					        <div class="sy_cp_ms_txt">以简阳市“丹景正东国际生态产业园”和雅安市“宝兴正康林牧产业园”为基地，发展生态养殖业，开发乡村旅游，弘扬民俗文化。</div>
							<div class="sy_cp_ckcp"><a href="#" target="_blank">查看产品</a></div>
					   </div>
					</div>
				 </li>
				 <li>
				    <div class="sy_cp_list">
					   <div class="sy_cp_pic"><a href="#" target="_blank"><img src="/Public/Home/images/chanpin4.jpg"/></a></div>
					   <div class="sy_cp_title">种羊</div>
					   <div class="sy_cp_ms">
					        <div class="sy_cp_ms_txt">以简阳市“丹景正东国际生态产业园”和雅安市“宝兴正康林牧产业园”为基地，发展生态养殖业，开发乡村旅游，弘扬民俗文化。</div>
							<div class="sy_cp_ckcp"><a href="#" target="_blank">查看产品</a></div>
					   </div>
					</div>
				 </li>
				 <li>
				    <div class="sy_cp_list">
					   <div class="sy_cp_pic"><a href="#" target="_blank"><img src="/Public/Home/images/chanpin5.jpg"/></a></div>
					   <div class="sy_cp_title">种猪</div>
					   <div class="sy_cp_ms">
					        <div class="sy_cp_ms_txt">以简阳市“丹景正东国际生态产业园”和雅安市“宝兴正康林牧产业园”为基地，发展生态养殖业，开发乡村旅游，弘扬民俗文化。</div>
							<div class="sy_cp_ckcp"><a href="#" target="_blank">查看产品</a></div>
					   </div>
					</div>
				 </li>
				 <li>
				    <div class="sy_cp_list">
					   <div class="sy_cp_pic"><a href="#" target="_blank"><img src="/Public/Home/images/lmr.jpg"/></a></div>
					   <div class="sy_cp_title">老牧人新生态猪肉</div>
					   <div class="sy_cp_ms">
					        <div class="sy_cp_ms_txt">以简阳市“丹景正东国际生态产业园”和雅安市“宝兴正康林牧产业园”为基地，发展生态养殖业，开发乡村旅游，弘扬民俗文化。</div>
							<div class="sy_cp_ckcp"><a href="#" target="_blank">查看产品</a></div>
					   </div>
					</div>
				 </li>
			   </ul>
			   
			   </td>
				<td id="marquePic2" valign="top"></td>
			  </tr>
			</tbody>
		  </table>
			</div>
			
		</div>
		 <script type=text/javascript> 
var speed=30 
marquePic2.innerHTML=marquePic1.innerHTML 
function Marquee(){ 
if(demo.scrollLeft>=marquePic1.scrollWidth){ 
demo.scrollLeft=0 
}else{ 
demo.scrollLeft++ 
}} 
var MyMar=setInterval(Marquee,speed) 
demo.onmouseover=function() {clearInterval(MyMar)} 
demo.onmouseout=function() {MyMar=setInterval(Marquee,speed)} 
  </script>
  
		<!--正东产品 结束-->
		<div class="clear"></div>
	  </div>
	
      <div class="clear"></div>
   </div>
   
<!--中间结束-->



<!--底部开始-->
<div class="w_100 fleft dibu ">
	  <div class="foot">
	  Copyright © 2012 sczdnm All rights reserved. 蜀ICP备05000199号-1
      </div>
	
</div>
<!--底部结束-->

</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- saved from url=(0053)http://free.68ecshop.com/hechaw2013/category.php?id=1 -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="Generator" content="ECSHOP v2.7.3">
<meta name="Keywords" content="">
<meta name="Description" content="">
<title>手机类型_ECSHOP演示站 - </title>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
<link rel="shortcut icon" href="">
<link rel="icon" href="" type="image/gif">
<link href="/Public/Home/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="head-bar clearfix">
<div class="block1">
    <div class="site-bar">        <?php if(check()): ?>您好:<font color="red">
                <b><?php echo (cookie('username')); ?></b></font>欢迎光临本店！
                | <a href="<?php echo U('Home/user/logout');?>">登出</a>
                <?php else: ?>
                <a href="<?php echo U('Home/user/login');?>" style="color:#50884b">登录</a> |
       <a href="<?php echo U('Home/user/reg');?>" style="color:#50884b">免费注册</a><?php endif; ?>
        </div>
      <ul class="sitelinks">
        <li><a href=""></a><a href="<?php echo U('Home/order/checkout');?>" title="查看购物车">购物车有 <?php echo ($count['num']); ?> 件</a></li>
        <li><a href="<?php echo U('Home/order/checkout');?>">查看购物车</a> </li>
        <li style=" margin-top:0px;*margin-top:-2px;">|</li>
        <li><a href="">选购中心</a> </li>
        <li style=" margin-top:0px;*margin-top:-2px;">|</li>
        <li><a href="">帮助中心</a> </li>
     </ul>
  </div></div>
<div class="page-header clearfix">
  <div class="block1 clearfix" style="position:relative;">
    <div class="logo fl"><a href="" title=""><img src="/Public/Home/images/logo.gif" width="311" height="55" alt=""></a></div>
      <div class="btMap">
        <div class="search ">
          <form id="searchForm" name="searchForm" method="get" action="">
            <div class="sideShadow"></div>
            <input type="text" name="keywords" class="keyWord" value="" id="keyword">
            <input type="submit" class="submit" value="">
          </form>
        </div>
          <div class="guanjianzi">
  		<ul>
	        <li>热门搜索：</li>
	      	<li><a href="">大屏手机</a></li>
	      	<li><a href="">智能机</a></li>
	      	<li><a href="">茉莉花茶</a></li>
	      	<li><a href="">龙井</a></li>
        </ul>
  </div>
      </div>
        <div class="tel">
	       	<p>
	      		400-8899-379
	    	</p>
    	</div>
    </div>
  </div>
<div class="globa-nav clearfix" style="position:relative">
<div class="block1">
  <div class="allMenu fl"> <a href="/" title="" style="font-size:15px;" class="index current">首页</a>
    <a href="" style="font-size:15px;" title="GSM手机">GSM手机</a>
    <a href="" style="font-size:15px;" title="双模手机">双模手机</a>
    <a href="" style="font-size:15px;" title="手机配件">手机配件</a>
    <a href="" style="font-size:15px;" title="团购商品">团购商品</a>
    <a href="" style="font-size:15px;" title="优惠活动">优惠活动</a>
  </div>
</div>
</div>

	<div class="block1 clearfix">
	<div class="ur_here blank">
		当前位置:<a href="/">首页</a> <code>&gt;</code>
    <?php if(is_array($catfamliy)): foreach($catfamliy as $key=>$m): ?><a href="<?php echo U('Home/cat/cat',array('cat_id'=>$m['cat_id']));?>"><?php echo ($m['cat_name']); ?></a> <code>&gt;</code><?php endforeach; endif; ?>
	</div>  <div id="pageLeft" class="fl">
	 <h1 style="background:url(/Public/Home/images/sdgg.gif) repeat-x; height:27px; line-height:27px; padding-left:10px;"><a href=""><font style="color:#000; font-size:14px;">所有分类</font></a></h1>
	<div class="mod1 mod2 blank" id="historybox">
	<span class="lb"></span><span class="rb"></span>
	<div class="cagegoryCon clearfix">
 	<dl>
 	<dt><a href="">手机类型</a></dt>
    <?php if(is_array($cattree)): foreach($cattree as $key=>$v): if($v["lv"] == 0): ?><dl>
         <dt><?php echo ($v["cat_name"]); ?></dt>
        <dd class="clearfix">
            <?php if(is_array($cattree)): foreach($cattree as $key=>$s): if($v[cat_id] == $s[parent_id]): ?><p class=""><a href="<?php echo U('Home/cat/cat',array('cat_id'=>$s['cat_id']));?>" title="<?php echo ($s["cat_name"]); ?>" class="txtdot"><?php echo ($s["cat_name"]); ?></a></p><?php endif; endforeach; endif; ?>

        </dd>
      </dl><?php endif; endforeach; endif; ?>
	</div>
	<div class="blank"></div>
	</div>
	<h1 class="mod2tit" style="background:url(/Public/Home/images/sdgg.gif) repeat-x; height:27px; color:#000">销售排行</h1>
	<div class="mod1 mod2 blank" id="topbox">
	<span class="lb"></span><span class="rb"></span>
	 <ul id="top10">
		 	<li>
			 <div class="first">
			  <div class="fl">
				<font style="color:#F00; font-weight:bold">1.</font> <a href="" title="">ECSHOP模板中心68ecs...</a>
				</div>
				<div class="fr"><b class="f1">￥68元</b></div>
			 </div>
	
			</li>
      
		 	
		 </ul>
</div>
	 <h1 class="mod2tit" style="background:url(themes/68ecshop_hechafree/images/sdgg.gif) repeat-x; height:27px;"><font style="color:#000">浏览历史</font></h1>
<div id="history_div">
<div class="mod1 mod2 blank" id="historybox">
	<span class="lb"></span><span class="rb"></span>
	<div id="history_list" class="history_list mod2con">
	   </div>
</div>
</div>
	</div>
	<div id="pageRight" class="fr">
	<div class="goodsTitle clearfix blank"> <span class="fl">商品列表</span>
  <form method="GET" class="sort fr" name="listform">
    显示方式：
    <a href=""><img src="/Public/Home/images/display_mode_list.gif" alt=""></a>
    <a href=""><img src="/Public/Home/images/display_mode_grid_act.gif" alt=""></a>
    <a href=""><img src="/Public/Home/images/display_mode_text.gif" alt=""></a>&nbsp;&nbsp;
    <a href=""><img src="/Public/Home/images/goods_id_DESC.gif" alt="按上架时间排序"></a>
    <a href=""><img src="/Public/Home/images/shop_price_default.gif" alt="按价格排序"></a>
    <a href=""><img src="/Public/Home/images/last_update_default.gif" alt="按更新时间排序"></a>
    <input type="hidden" name="category" value="1">
    <input type="hidden" name="display" value="grid" id="display">
    <input type="hidden" name="brand" value="0">
    <input type="hidden" name="price_min" value="0">
    <input type="hidden" name="price_max" value="0">
    <input type="hidden" name="filter_attr" value="0">
    <input type="hidden" name="page" value="1">
    <input type="hidden" name="sort" value="goods_id">
    <input type="hidden" name="order" value="DESC">
  </form>
</div>
<div class="clearfix modContent">
    <form name="compareForm" action="" method="post">
        <div class="clearfix grid">
            <?php if(is_array($goodslist)): foreach($goodslist as $key=>$g): ?><div class="goodsbox1" style="margin: 5px 9px 8px 8px;*margin:5px 6px 10px 14px;">
                <div class="imgbox1"><a href="<?php echo U('Home/goods/goods',array('goods_id'=>$g['goods_id']));?>"><img src="/<?php echo ($g[thumb_img]); ?>" alt="<?php echo ($g['goods_name']); ?>"></a></div>
                <a href="<?php echo U('Home/goods/goods',array('goods_id'=>$g['goods_id']));?>" title="ECSHOP模板中心68ecshop.com测试商品"><?php echo ($g[goods_name]); ?></a><br>
                <font class="market">￥<?php echo ($g['market_price']); ?>元</font>
                <b class="f1">￥<?php echo ($g['shop_price']); ?>元</b><br>
            </div><?php endforeach; endif; ?>

    </div>
      </form>
</div>

<div class="pagebar">
<form name="selectPageForm" action="http://free.68ecshop.com/hechaw2013/category.php" method="get">
 <div id="pager">
  总计 <b><?php echo ($co); ?></b>  个记录  <?php echo ($page); ?></div>
</form>
</div>
	</div>
</div>
<div class="pageFooter">
  <div class="artBox ">
    <div class="artList">
      <div class="list">
        <h4>新手上路 </h4>
        <ul>
          <li><a href="" target="_blank" title="售后流程">售后流程</a> </li>
          <li><a href="" target="_blank" title="购物流程">购物流程</a> </li>
          <li><a href="" target="_blank" title="订购方式">订购方式</a> </li>
        </ul>
      </div>
      <div class="list">
        <h4>手机常识 </h4>
        <ul>
          <li><a href="" target="_blank" title="如何分辨原装电池">如何分辨原装电池</a> </li>
          <li><a href="" target="_blank" title="如何分辨水货手机 ">如何分辨水货手机</a> </li>
          <li><a href="" target="_blank" title="如何享受全国联保">如何享受全国联保</a> </li>
        </ul>
      </div>
      <div class="list">
        <h4>配送与支付 </h4>
        <ul>
          <li><a href="" target="_blank" title="货到付款区域">货到付款区域</a> </li>
          <li><a href="" target="_blank" title="配送支付智能查询 ">配送支付智能查询</a> </li>
          <li><a href="" target="_blank" title="支付方式说明">支付方式说明</a> </li>
        </ul>
      </div>
      <div class="list">
        <h4>会员中心</h4>
        <ul>
          <li><a href="" target="_blank" title="资金管理">资金管理</a> </li>
          <li><a href="" target="_blank" title="我的收藏">我的收藏</a> </li>
          <li><a href="" target="_blank" title="我的订单">我的订单</a> </li>
        </ul>
      </div>
      <div class="list">
        <h4>服务保证 </h4>
        <ul>
          <li><a href="" target="_blank" title="退换货原则">退换货原则</a> </li>
          <li><a href="" target="_blank" title="售后服务保证 ">售后服务保证</a> </li>
          <li><a href="" target="_blank" title="产品质量保证 ">产品质量保证</a> </li>
        </ul>
      </div>
      <div class="list">
        <h4>联系我们 </h4>
        <ul>
          <li><a href="" target="_blank" title="网站故障报告">网站故障报告</a> </li>
          <li><a href="" target="_blank" title="选机咨询 ">选机咨询</a> </li>
          <li><a href="" target="_blank" title="投诉与建议 ">投诉与建议</a> </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="block tc" style=""> <img src="/Public/Home/images/serviceImg1.jpg"> </div>
<div class="block tc" style="margin-bottom:20px;">
  <a href="">免责条款</a>|
  <a href="">隐私保护</a>|
  <a href="">咨询热点</a>|
  <a href="">联系我们</a>|
  <a href="">公司简介</a>|
  <a href="">批发方案</a>|
  <a href="">配送方式</a>
<br>
<br>
   <a href="" style="display:none;">68ECSHOP模版中心</a>
<br>
  共执行 5 个查询，用时 0.021133 秒，在线 17 人，Gzip 已禁用，占用内存 3.415 MB<img src="./api/cron.php-t=1452023217" alt="" style="width:0px;height:0px;"><br>
</div>
</body></html>
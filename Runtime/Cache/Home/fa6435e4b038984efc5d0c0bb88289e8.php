<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta name="Generator" content="ECSHOP v2.7.3">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="Keywords" content="">
<meta name="Description" content="">
<title>购物流程_ECSHOP演示站 - </title>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
<link rel="shortcut icon" >
<link rel="icon"  type="image/gif">
<link href="/Public/Home/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="head-bar clearfix">
<div class="block1">
    <div class="site-bar"><font id="ECS_MEMBERZONE">         
			<?php if(check()): ?>您好:<font color="red">
                <b><?php echo (cookie('username')); ?></b></font>欢迎光临本店！
                | <a href="<?php echo U('Home/user/logout');?>">登出</a>
                <?php else: ?>
                <a href="<?php echo U('Home/user/login');?>" style="color:#50884b">登录</a> |
       <a href="<?php echo U('Home/user/reg');?>" style="color:#50884b">免费注册</a><?php endif; ?>
				</div>
      <ul class="sitelinks">
        <li><a href=""></a><a href="" title="查看购物车">购物车有<?php echo ($count['num']); ?> 件</a></li>
        <li><a href="">查看购物车</a> </li>
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
  <div class="allMenu fl"> <a href="" title="" style="font-size:15px;" class="index current">首页</a>
    <a href="" style="font-size:15px;" title="GSM手机">GSM手机</a>
    <a href="" style="font-size:15px;" title="双模手机">双模手机</a>
    <a href="" style="font-size:15px;" title="手机配件">手机配件</a>
    <a href="" style="font-size:15px;" title="团购商品">团购商品</a>
    <a href="" style="font-size:15px;" title="优惠活动">优惠活动</a>
  </div>
</div>
</div>
<div class="blank"></div>
<div class="block2">
<div class="blank"></div>
<form action="<?php echo U('Home/Order/done');?>" method="post" name="dingdan" id="k" >
<div class="goodsTitle clearfix" style="background:#f6f6f6; border:#E3E3E3 solid 1px; border-bottom:none;">
<span class="fl">商品列表</span><a  class="fr">修改</a></div>
<table class="floatTable" align="center" bgcolor="#e3e3e3" border="0" cellpadding="5" cellspacing="1" width="100%">
		<tbody><tr>
			<th bgcolor="#ffffff">商品名称</th>
			<th bgcolor="#ffffff">属性</th>
						<th bgcolor="#ffffff">市场价</th>
						<th bgcolor="#ffffff">本店价</th>
			<th bgcolor="#ffffff">购买数量</th>
			<th bgcolor="#ffffff">小计</th>
			</tr>
            <?php if(is_array($kache)): foreach($kache as $m=>$k): ?><tr>
			<td bgcolor="#ffffff">
				<a  target="_blank"><?php echo ($k['goods_name']); ?></a>
			</td>
			<td bgcolor="#ffffff">颜色:黑色 <br></td>
						<td align="right" bgcolor="#ffffff">￥3612.00元</td>
						<td class="price" align="right" bgcolor="#ffffff">￥<?php echo ($k['shop_price']); ?>元</td>
			<td align="right" bgcolor="#ffffff"><?php echo ($k['num']); ?></td>
			<td class="price" align="right" bgcolor="#ffffff">￥<?php echo ($k['num'] * $k['shop_price']); ?>元</td>
			</tr><?php endforeach; endif; ?>
			<tr>
			<td colspan="7" class="f1 f14b" style="text-align:right;" bgcolor="#ffffff">
						购物金额小计 ￥3010.00元，比市场价 ￥3612.00元 节省了 ￥602.00元 (17%)			</td>
			</tr>
			</tbody></table>
	<div class="goodsTitle clearfix" style="background:#f6f6f6; border:#E3E3E3 solid 1px; border-bottom:none;">
	<span class="fl">收货人信息</span><a  class="fr f1">修改</a>
	</div>
	<table class="floatTable" align="center" bgcolor="#e3e3e3" border="0" cellpadding="5" cellspacing="1" width="100%">
		<tbody>
		<tr>
			<td bgcolor="#ffffff">收货人姓名:</td>
			<td bgcolor="#ffffff">的vc</td>
			<td bgcolor="#ffffff">电子邮件地址:</td>
			<td bgcolor="#ffffff">897991012@qq.com</td>
		</tr>
		<tr>
			<td bgcolor="#ffffff">详细地址:</td>
			<td bgcolor="#ffffff">得瑟富人天堂 </td>
			<td bgcolor="#ffffff">邮政编码:</td>
			<td bgcolor="#ffffff"></td>
		</tr>
		<tr>
			<td bgcolor="#ffffff">电话:</td>
			<td bgcolor="#ffffff">15963547545 </td>
			<td bgcolor="#ffffff">手机:</td>
			<td bgcolor="#ffffff"></td>
		</tr>
		<tr>
			<td bgcolor="#ffffff">标志建筑:</td>
			<td bgcolor="#ffffff"> </td>
			<td bgcolor="#ffffff">最佳送货时间:</td>
			<td bgcolor="#ffffff"></td>
		</tr>
			</tbody></table>

<div class="goodsTitle" style="background:#f6f6f6; border:#E3E3E3 solid 1px; border-bottom:none;">其它信息</div>
<table class="floatTable" align="center" bgcolor="#e3e3e3" border="0" cellpadding="5" cellspacing="1" width="100%">
		<tbody>
		<tr>
			<td bgcolor="#ffffff" valign="top"><strong>订单附言:</strong></td>
			<td bgcolor="#ffffff"><textarea name="postscript" cols="80" rows="3" id="postscript" class="InputBorder"></textarea></td>
		</tr>
		<tr>
			<td bgcolor="#ffffff"><strong>缺货处理:</strong></td>
			<td bgcolor="#ffffff">				<label>
				<input name="how_oos" value="0" checked="checked"  type="radio">
				等待所有商品备齐后再发</label>
				<label>
				<input name="how_oos" value="1"  type="radio">
				取消订单</label>
				<label>
				<input name="how_oos" value="2"  type="radio">
				与店主协商</label>
			</td>
		</tr>
			</tbody></table>

<div class="goodsTitle" style="background:#f6f6f6; border:#E3E3E3 solid 1px; border-bottom:none;">费用总计</div>
	<div id="ECS_ORDERTOTAL">
	<table class="floatTable" align="center" bgcolor="#e3e3e3" border="0" cellpadding="5" cellspacing="1" width="100%">
	    <tbody><tr>
		    <td align="right" bgcolor="#ffffff">
		      该订单完成后，您将获得<font class="f1 f4_b">3010</font> 积分，以及价值<font class="f1 f4_b">￥0.00元</font>的红包。
		    </td>
		  	</tr>
		    <tr>
		    <td align="right" bgcolor="#ffffff">
		      商品总价: <font class="f1 f14b">￥<?php echo ($total); ?>元</font>
		    </td>
		    </tr>
		    <tr>
		    <td align="right" bgcolor="#ffffff"> 应付款金额: <font class="f1 f14b">￥<?php echo ($total); ?>元</font>
		    </td>
		  </tr>
		</tbody>
	</table>
</div>
<div style="margin:8px auto;" align="center">
	<input src="/Public/Home/images/bnt_subOrder.gif" type="image">
		<input name="step" value="done" type="hidden">
   </div>
</form>
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
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心</title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/Admin/css/general.css" rel="stylesheet" type="text/css" />
<link href="/Public/Admin/css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>

<h1>
<span class="action-span1"><a href="#">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"></span>
<div style="clear:both"></div>
</h1>
<ul id="lilist" style="padding:0; margin: 0; list-style-type:none; color: #CC0000;">
  </ul>
<ul style="padding:0; margin: 0; list-style-type:none; color: #CC0000;">

</ul>
<div class="list-div">
<table cellspacing='1' cellpadding='3'>
  <tr>
    <th colspan="4" class="group-title">订单统计信息</th>
  </tr>
  <tr>
    <td width="20%"><a href="#">待发货订单:</a></td>
    <td width="30%"><strong style="color: red">4</strong></td>

    <td width="20%"><a href="#">未确认订单:</a></td>
    <td width="30%"><strong>2</strong></td>
  </tr>
  <tr>
    <td><a href="#">待支付订单:</a></td>
    <td><strong>3</strong></td>
    <td><a href="#">已成交订单数:</a></td>

    <td><strong>3</strong></td>
  </tr>
  <tr>
    <td><a href="#">新缺货登记:</a></td>
    <td><strong>2</strong></td>
    <td><a href="#">退款申请:</a></td>
    <td><strong>0</strong></td>

  </tr>
</table>
</div>

<br />

<div class="list-div">
<table cellspacing='1' cellpadding='3'>
  <tr>
    <th colspan="4" class="group-title">实体商品统计信息</th>
  </tr>
  <tr>

    <td width="20%">商品总数:</td>
    <td width="30%"><strong>20</strong></td>
    <td width="20%"><a href="#">库存警告商品数:</a></td>
    <td width="30%"><strong style="color: red">7</strong></td>
  </tr>
  <tr>
    <td><a href="#">新品推荐数:</a></td>

    <td><strong>11</strong></td>
    <td><a href="#">精品推荐数:</a></td>
    <td><strong>10</strong></td>
  </tr>
  <tr>
    <td><a href="#">热销商品数:</a></td>
    <td><strong>11</strong></td>

    <td><a href="#">促销商品数:</a></td>
    <td><strong>0</strong></td>
  </tr>
</table>
</div>
<br />

<div class="list-div">
<table cellspacing='1' cellpadding='3'>
  <tr>
    <th colspan="4" class="group-title">虚拟卡商品统计</th>

  </tr>
  <tr>
    <td width="20%">商品总数:</td>
    <td width="30%"><strong>6</strong></td>
    <td width="20%"><a href="#">库存警告商品数:</a></td>
    <td width="30%"><strong style="color: red">2</strong></td>
  </tr>

  <tr>
    <td><a href="#">新品推荐数:</a></td>
    <td><strong>1</strong></td>
    <td><a href="#">精品推荐数:</a></td>
    <td><strong>4</strong></td>
  </tr>
  <tr>

    <td><a href="#">热销商品数:</a></td>
    <td><strong>6</strong></td>
    <td><a href="#">促销商品数:</a></td>
    <td><strong>0</strong></td>
  </tr>
</table>
</div>


<br />

<div class="list-div">
<table cellspacing='1' cellpadding='3'>
  <tr>
    <th colspan="4" class="group-title">访问统计</th>
  </tr>
  <tr>
    <td width="20%">今日访问:</td>
    <td width="30%"><strong>4</strong></td>

    <td width="20%">在线人数:</td>
    <td width="30%"><strong>4</strong></td>
  </tr>
  <tr>
    <td><a href="#">最新留言:</a></td>
    <td><strong>1</strong></td>
    <td><a href="#">未审核评论:</a></td>

    <td><strong>1</strong></td>
  </tr>
</table>
</div>

<br />

<div class="list-div">
<table cellspacing='1' cellpadding='3'>
  <tr>
    <th colspan="4" class="group-title">系统信息</th>

  </tr>
  <tr>
    <td width="20%">服务器操作系统:</td>
    <td width="30%">WINNT (127.0.0.1)</td>
    <td width="20%">Web 服务器:</td>
    <td width="30%"><?php echo ($server['SERVER_SOFTWARE']); ?></td>
  </tr>

  
 
  
  
 
  <tr>
    <td>ECShop 版本:</td>
    <td>v2.7.2 RELEASE 20100604</td>
    <td>服务器地址:</td>
    <td><?php echo ($server['REMOTE_ADDR']); ?></td>

  </tr>
  <tr>
    <td>编码:</td>
    <td>UTF-8</td>
   
  </tr>
</table>

</div>


<div id="footer">
共执行 28 个查询，用时 0.148943 秒，Gzip 已禁用，内存占用 3.336 MB<br />
版权所有 &copy; 2005-2010 上海商派网络科技有限公司，并保留所有权利。</div>

</body>
</html>
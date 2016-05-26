<?php
	include_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>购物车</title>
</head>
<link rel="stylesheet" type="text/css" href="CSS/standard.css">
<link rel="stylesheet" type="text/css" href="CSS/login.css">
<!-- <link rel="stylesheet" type="text/css" href="CSS/example.css"> -->
<link rel="stylesheet" type="text/css" href="CSS/shoppingcar.css">
<link rel="shortcut icon" href="favicon.ico" />
<body>
<!-- 头部包含国家地区、语言、登陆注册、购物篮等 -->
	<header>
		<div class="header-nav">
			<div id="country" class="top-show"><a href="">中国</a><img src="IMG/COSME-DE.COM/narrow.gif" alt="">
				<ul style="display: none;">
					<li><a href="">美国</a></li>
					<li><a href="">中国</a></li>
					<li><a href="">澳洲</a></li>
					<li><a href="">香港</a></li>
				</ul>
			</div>
			<div id="language" class="top-show"><a href="">简体</a> <img src="IMG/COSME-DE.COM/narrow.gif" alt="">
				<ul style="display: none;">
					<li><a href="">English</a></li>
				</ul>
			</div>
			<ul id="header-list">
				<?php if($_SESSION["user"]<>''){echo '
                    <a href=exit.php>'.$_SESSION["user"].',退出</a>';}else{?>
        			<li><a href="reg.php">登陆</a></li>
        		<?php } ?>
				<li><a href="">注册可享USD8.00折扣优惠</a></li>
				<li><a href="">我的回馈优惠</a></li>
				<li><a href="">订单追踪</a></li>
				<li><a href="">帮助</a></li>
			</ul>
		</div>
		<div class="clear"></div>
		<div class="header-cart">
			<a href="index.php"><img src="IMG/COSME-DE.COM/cosme_de_com_logo.png" alt=""></a>
			<a href="shoppingcar.php" id="cart">
				<img src="IMG/COSME-DE.COM/shopping_cart_h.gif" alt="">
				<p class="shoppingcar">0件货品</p>
				<p class="shoppingmoney">USD 0.00</p>
				<ul>
					<li>欢迎以<b>美元</b>或<b>人民币</b>结账</li>
					<li>购买任何货品，<b>全球免费</b>运送</li>
				</ul>
			</a>
			<div class="clear"></div>
		</div>
	</header>
		<section>
		<div id="title-8th">
			<a href="">8周年惊喜&nbsp;&nbsp;8折优惠，推广编号COSMEDE8，立即选购！</a>
		</div>
		<nav>
			<ul>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
			</ul>
		</nav>
		<div class="main-top" style="height: 900px;">
			<div class="search-product">
				<input type="search" name="" value="" placeholder="输入关键词 或 货品样式">
				<select name="">
					<option value="" selected="selected">所有品牌</option>
				</select>
				<input type="submit" name="" value="">
				<a class="a1" href="">品牌一览表</a>
				|
				<a href="">多买多送</a>
				<i></i>
			</div>
			<p class="hot-search"><b>热门搜索：</b><a href="">雅诗兰黛</a>
				<a href="">面膜</a>
				<a href="">防晒</a>
				<a href="">娇韵诗</a>
				<a href="">香奈儿</a>
				<a href="">僑兰</a>
				<a href="">摩洛哥油</a>
				<a href="">健康食品</a>
				<a href="">契尔氏</a>
				<a href="">护肤精华</a>
				<a href="">有机</a>
				<a href="">纤体紧致</a>
				<a href="">10刀以下</a>
			</p>
			<aside>
			<h1><img src="IMG/product/shop_by_category.gif" alt=""></h1>
				<ul>
					<li style="font-size: 15px;">脸部保养</li>
					<li><a href="">洁面</a></li>
					<li><a href="">爽肤</a></li>
					<li><a href="">面霜</a></li>
					<li><a href="">精华素</a></li>
					<li><a href="">眼部护理</a></li>
					<li><a href="">唇部护理</a></li>
					<li><a href="">面膜</a></li>
					<li><a href="">礼物套装</a></li>
					<li><a href="">美肌补充</a></li>
					<li><a href="">控油护理</a></li>
					<li><a href="">暗疮护理</a></li>
					<li><a href="">青春秘诀</a></li>
					<li><a href="">防晒保护</a></li>
					<li><a href="">美容工具</a></li>
				</ul>
			</aside>
			<div class="main-inner" style="background: white;height: 900px;">
			<img src="IMG/shopping_cart_gh.gif" alt="" style="margin-top: 10px; margin-left: 20px;">
			<span style="font-size: 12px;margin-left: 300px;">简单结账 &nbsp;&nbsp;&nbsp;<b>步骤 1</b>    >   步骤 2   >   步骤 3 </span>
			<img src="IMG/sc_step_1_01.gif" alt="">
			<div class="no-goods">
				<p>COSME-DE.COM 提供<b>全球免运费的送货服务</b>，无论你要送到哪一个国家，我们都乐意为你安排。每件货品最多可订购 10 件 (或目前库存的上限) 及每一次订货总数不超过 USD 1,000.00。</p>
				<p>于 COSME-DE.COM 购物，尽享轻松又安全的购物保障。</p> 
				<p style="color:black;">你的购物篮目前未有任何货品。</p> 
				<p style="color: black;"><b>Note</b>: 此货品不作单件发售，请拼凑其他产品以达到最少订单总额 USD 50.00。有关汇率请以主页底部的
				参考货币作准。</p>
			</div>
			<div class="has-goods">
				<p>COSME-DE.COM 提供<b>全球免运费的送货服务</b>，无论你要送到哪一个国家，我们都乐意为你安排。每件货品最多可订购 10 件 (或目前库存的上限) 及每一次订货总数不超过 USD 1,000.00。</p>
				<p>于 COSME-DE.COM 购物，尽享轻松又安全的购物保障。</p> 
			</div>
			<table>
					<thead>
						<tr>
							<th>&nbsp;图片 &nbsp;</th>
							<th>货品名称</th>
							<th>单价<br>USD</th>
							<th>数量</th>
							<th>小计<br>USD</th>
							<th>删除</th>
						</tr>
					</thead>
					<tbody>
						<tr id="last-tr">
							<td colspan="5" style="text-align: right;padding-right: 20px;">总计</td>
							<td bgcolor="#ededed" height="40px;"><b class="shoppingmoney">&nbsp; 0.00</b></td>
						</tr>
					</tbody>
				</table>

				<div class="reg">
					<img src="IMG/shoppingcart/sc_member_login_h.gif" alt="">
					<div>
						<ul id="choice">
								<li class="selected-li">登陆</li>
								<li>注册</li>
						</ul>
						<div class="clear"></div>
						<div style="height: 120px;width: 400px;background: lime;" id="box-2">
							<p>
								<label style="margin-left: 120px;">登陆</label>
								<input type="text" style="margin-top: 20px;margin-left: 10px;">
								<br>
								<label style="margin-left: 120px;">密码</label>
								<input type="password" style="margin-top: 5px;margin-left: 10px;"><br>
								<a href="" style="display:inline-block;margin-left: 130px;margin-top: 10px;"><img src="IMG/shoppingcart/btn_sc_login_01.gif" alt=""></a>
							</p>
							<p style="display: none;">
								<label style="margin-left: 30px;">登陆</label>
								<input type="text" style="margin-top: 5px;width: 100px;">
								<i style="font-style: normal;font-size: 12px; margin-left: 35px;">我是新注册会员，我的姓名是</i><br>
								<label style="margin-left: 30px;">登陆</label>
								<input type="password" style="margin-top: 5px;width: 100px;">
								<select style="margin-left: 30px;">
									<option selected="selected">--</option>
								</select>
								<input type="text" style="width: 100px;">
								<br>
								<em style="margin-left: 40px;">*如：abc123</em>
								<a href="" style="display: block;margin-left: 100px;margin-top: 10px;"><img src="IMG/shoppingcart/btn_sc_login_01.gif" alt=""></a>
							</p>
						</div>
					</div>
					<div class="clear"></div>	
					<div style="float: right;height: 150px;width: 200px;background: #EDEDED;margin-top: -150px;">
						<a style="display:block;margin-left:50px;margin-top: 50px;" href="" title=""><img src="IMG/shoppingcart/alipay_115x25.png" alt=""></a>
						<a href="" style="margin-left: 50px;" title=""><img src="IMG/shoppingcart/paypal_login_gb.png" alt=""></a>
					</div>
				</div>	
			</div>
			
		</div>
		<div class="clear"></div>
		<div class="main-bottom">
			<div class="last-bottom">
				<div class="bottom-list">
					<ul>
						<li><a href="" title="">主页</a></li>
						<li><a href="" title="">关于 COSME-DE.COM</a></li>
						<li><a href="" title="">联系 COSME-DE.COM</a></li>
					</ul>
					<ul>
						<li><a href="" title="">我的账户</a></li>
						<li><a href="" title="">批发合作</a></li>
						<li><a href="" title="">网站地图</a></li>
						<li><a href="" title="">品牌一览表</a></li>
					</ul>
					<ul>
						<li><b>最新消息</b></li>
					</ul>
					<ul>
						<li>2016.03.23</li>
						<li>2016.03.23</li>
						<li>2016.03.23</li>
						<li>2016.03.23</li>
					</ul>
					<ul>
						<li><a href="" title="">复活节休假通知</a></li>
						<li><a href="" title="">农历年休假中国订单投递需时延长</a></li>
						<li><a href="" title="">送货通知</a></li>
						<li><a href="" title="">圣诞空邮截邮日期</a></li>
					</ul>
					<ul>
						<li><img src="IMG/COSME-DE.COM/connect-twitter.gif" alt=""><a href="" title="">twitter</a></li>
						<li><img src="IMG/COSME-DE.COM/connect-facebook.gif" alt=""><a href="" title="">facebook</a></li>
						<li><img src="IMG/COSME-DE.COM/connect-sina.gif" alt=""><a href="" title="">新浪微博</a></li>
						<li><img src="IMG/COSME-DE.COM/connect-pinterest.png" alt=""><a href="" title="">Pinterest</a></li>
					</ul>
				</div>
			</div>
			<div class="bottom-email">
				<p class="error-title">请在标示的项目输入正确数据：电邮地址 - 电邮地址格式不正确</p>
				<p class="input-email">	
					<i><b>订阅电子通讯</b>率先知道唯会员独享的最新优惠及新货消息</i> 
					<input type="email" name="" value="" placeholder="">
					<input type="button" name="" value="">
				</p>
			</div>
		</div>
	</section>
	<footer>
		<p>安心购物保障：</p>
		<i>
			<img src="IMG/COSME-DE.COM/下载.png" alt="">
			<img src="IMG/COSME-DE.COM/verified_by_visa.gif" alt="" >
			<img src="IMG/COSME-DE.COM/mastercard.gif" alt="" >
			<img src="IMG/COSME-DE.COM/paypal.gif" alt="">
			<img src="IMG/COSME-DE.COM/186155_medal.gif" alt="" style="margin-bottom: 15px;">
		</i>
		<b><i>ISO9001:2008</i>
			<img src="IMG/COSME-DE.COM/iso.jpg" alt="">
		</b>
		<div >
			<img src="IMG/COSME-DE.COM/footer_logo.gif" alt="">
			<p>Copyright © 2007 - 2016 Cosme De Net Co. Ltd. 版权所有 不得转载<br>
使用本网站即表示接受有关的使用条款及私隐政策。</p>
		</div>
	</footer>
	<div id="footer-fixed">
		<span id="time"></span><b>HKT</b>
		<div class="footer-cart" >
				<p><span class="shoppingcar">0件货品</span> &nbsp;&nbsp; <span class="shoppingmoney">USD 0.00</span></p>
			</div>
		<div class="discount"><span><a href="">我的回馈优惠</a></span>|<a href="">注册</a></div>
		</div>
</body>
<script type="text/javascript" src="JS/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="JS/index.js"></script>
<script type="text/javascript" src="JS/product.js"></script>
<script type="text/javascript" src="JS/shoppingcar.js"></script>
</html>
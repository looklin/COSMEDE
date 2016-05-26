<?php
	include_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<link rel="stylesheet" type="text/css" href="CSS/standard.css">
<link rel="stylesheet" type="text/css" href="CSS/login.css">
<link rel="stylesheet" type="text/css" href="CSS/example.css">
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
		<div class="main-top">
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
				<h2><img src="IMG/product/top5bycategory.gif" alt=""></h2>
				<ol>
					<li><a href="" title="">SK-II 美之匙 Facial Treatment 护肤精华</a></li>
					<li><a href="" title="">SK-II 美之匙 Facial Treatment 护肤面膜</a></li>
					<li><a href="" title="">LANCÔME 兰蔻 Tonique Confort 柔肤水 (干性皮肤)</a></li>
					<li><a href="" title="">SK-II 美之匙 Facial Treatment 嫩肤清莹露</a></li>
					<li><a href="" title="">SK-II 美之匙 Facial Treatment 净肌护肤洁面乳</a></li>
				</ol>
				<h2><img src="IMG/product/category_blog.gif" alt=""></h2>
				<ol id="ol_2">
					<li><a href="">派对後护肤小贴士</a></li>
					<li><a href="">你涂面霜的方法正确吗？</a></li>
					<li><a href="">健康肌肤专家：Dermalogica 德美乐嘉</a></li>
					<li><a href="">逆转肌龄：Clarins 娇韵诗「赋活双精华」</a></li>
					<li><a href="">如何打造宛如天生的好肤质？</a></li>
				</ol>
			</aside>
			<div class="main-inner">
				<img src="IMG/product/skincare_image.jpg" alt="">
				<ul id="nav-4">
					<li>
			            <img src="IMG/COSME-DE.COM/ffffff_arrow.gif" alt="">新到货品
			            <i>马上看</i>
			            <img src="IMG/COSME-DE.COM/main_arrow_93846f.gif" alt="" style="margin-top: 10px;margin-left: 60px;">
         			</li>
			        <li>
			            <img src="IMG/COSME-DE.COM/ffffff_arrow.gif" alt="">编辑分享-美容搜记
			            <i>年轻及成熟肌肤涂粉底小贴士</i>
			            <img src="IMG/COSME-DE.COM/main_arrow_c46519.gif" alt="" style="margin-top: 10px;margin-left: 60px;display: none;">
			        </li>
				</ul>
				<div class="clear">
					
				</div>
				<div id="show-products">
                 <dl>
              <dt><a href="product.php"><img src="IMG/COSME-DE.COM/面膜.jpg" alt="图片"></a>
                <img src="IMG/COSME-DE.COM/icon_new.gif" alt="">
              </dt>
              <dd><a href=""><b>REN</b></a><a href="">一分钟奇迹面膜</a>
              <P>CNY 385.00<br> <b>USD 59.00</b><br>节约<b>30%</b></P>
              </dd>
          </dl>
          <dl>
              <dt><a href=""><img src="IMG/COSME-DE.COM/18719_2.jpg" alt="图片"></a>
                <img src="IMG/COSME-DE.COM/icon_new.gif" alt="">
              </dt>
              <dd><a href=""><b>SK-II</b>美之匙</a>
                <a href="">Color超肌能光润无瑕紧颜组SPF40/PA+++(附粉刷)</a>
                <P>CNY 496.00<br> <b>USD 76.00</b><br>节约<b>25%</b></P>
              </dd>
          </dl>
          <dl>
              <dt><a href=""><img src="IMG/COSME-DE.COM/18748_2.jpg" alt="图片"></a>
                <img src="IMG/COSME-DE.COM/icon_new.gif" alt="">
              </dt>
              <dd><a href=""><b>Shiscido</b>资生堂</a>
                <a href="">Bio-Performance百优高机能补湿乳霜</a>
                <P>CNY 789.00<br> <b>USD 121.00</b><br>节约<b>25%</b></P>
              </dd>
                
          </dl>
          <dl>
              <dt><a href=""><img src="IMG/COSME-DE.COM/18743_2.jpg" alt="图片"></a>
                <img src="IMG/COSME-DE.COM/icon_new.gif" alt="">
              </dt>
              <dd><a href=""><b>Estcc Laudcr</b>雅诗兰黛</a>
                <a href="">特润超导卸妆精萃膏</a>
                <P>CNY 285.00<br> <b>USD 44.00</b><br>节约<b>29%</b></P>
              </dd>

          </dl>
          <dl>
              <dt><a href=""><img src="IMG/COSME-DE.COM/16130_2.jpg" alt="图片"></a>
                <img src="IMG/COSME-DE.COM/icon_new.gif" alt="">
              </dt>
              <dd><a href=""><b>Chancl</b>香奈儿</a>
                <a href="">Rouge Coco柔润亮彩唇膏</a>
                <P>CNY 219.00<br> <b>USD 33.00</b><br>节约<b>23%</b></P>
                </dd>
          </dl>
           <dl>
              <dt><a href=""><img src="IMG/COSME-DE.COM/18723_2.jpg" alt="图片"></a>
                <img src="IMG/COSME-DE.COM/icon_new.gif" alt="">
              </dt>
              <dd><a href=""><b>Shiscido</b>资生堂</a>
                <a href="">Benefiance盼丽风姿纯防皱纹面膜</a>
              <P>CNY 386.00<br> <b>USD 59.00</b><br>节约<b>31%</b></P>
              </dd>
          </dl>
          <dl>
              <dt><a href=""><img src="IMG/COSME-DE.COM/18745_2.jpg" alt="图片"></a>
              <img src="IMG/COSME-DE.COM/icon_new.gif" alt="">
              <img src="IMG/COSME-DE.COM/icon_promotions.gif" alt="">
              </dt>
              <dd><a href=""><b>Estcc Laudcr</b>雅诗兰黛</a>
                <a href="">Nutrititious Vitality8&trade;超能红石榴微循环活肤水(清爽型)</a>
              <P>CNY 294.00<br><b>USD 45.00</b><br>节约<b>41%</b></P>
              </dd>
          </dl>
          <dl>
              <dt><a href=""><img src="IMG/COSME-DE.COM/18716_2.jpg" alt="图片"></a>
                <img src="IMG/COSME-DE.COM/icon_new.gif" alt="">
              </dt>
              <dd><a href=""><b>By Tcrry</b></a>
                <a href="">亮采唇部护理</a>
                <P>CNY 407.00<br> <b>USD 62.00</b><br>节约<b>30%</b></P>
              </dd>
          </dl>
          <dl>
              <dt><a href=""><img src="IMG/COSME-DE.COM/18690_2.jpg" alt="图片"></a>
                <img src="IMG/COSME-DE.COM/icon_new.gif" alt="">
              </dt>
              <dd><a href=""><b>Christian Dior</b>迪奥</a>
                <a href="">Dior Addict Backstage Pros诱惑焕彩润色唇笔(2016 春季限量版)</a>
                <P>CNY 191.00<br> <b>USD 29.00</b><br>节约<b>19%</b></P>
              </dd>
          </dl>
          <dl>
              <dt><a href=""><img src="IMG/COSME-DE.COM/18729_2.jpg" alt="图片"></a>
                <img src="IMG/COSME-DE.COM/icon_new.gif" alt="">
              </dt>
              <dd><a href=""><b>Lalinc</b></a>
                <a href="">Ocean海洋身体磨砂</a>
              <P>CNY 225.00<br> <b>USD 34.00</b><br>节约<b>21%</b></P>
              </dd>
          </dl>
                <dl>
              <dt><a href="product.php"><img src="IMG/COSME-DE.COM/面膜.jpg" alt="图片"></a>
                <img src="IMG/COSME-DE.COM/icon_new.gif" alt="">
              </dt>
              <dd><a href=""><b>REN</b></a><a href="">一分钟奇迹面膜</a>
              <P>CNY 385.00<br> <b>USD 59.00</b><br>节约<b>30%</b></P>
              </dd>
          </dl>
           <dl>
              <dt><a href=""><img src="IMG/COSME-DE.COM/18690_2.jpg" alt="图片"></a>
                <img src="IMG/COSME-DE.COM/icon_new.gif" alt="">
              </dt>
              <dd><a href=""><b>Christian Dior</b>迪奥</a>
                <a href="">Dior Addict Backstage Pros诱惑焕彩润色唇笔(2016 春季限量版)</a>
                <P>CNY 191.00<br> <b>USD 29.00</b><br>节约<b>19%</b></P>
              </dd>
          </dl>
          <div class="clear"></div>
          <a class="look-more" href="">观看全部...</a>
        </div>
			</div>
			
		</div>
		<div class="clear"></div>
		<div class="main-middle" style="padding-left: 200px;position: relative;">
			<img src="IMG/product/other/viewed_h.gif" alt="" style="position: absolute;left: 0px;top: -29px;">
		</div>
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
<script type="text/javascript" src="JS/example.js"></script>
</html>
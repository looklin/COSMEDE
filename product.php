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
<link rel="stylesheet" type="text/css" href="CSS/product.css">
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
		<div class="main-top" style="height: 750px;">
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
			<h1><img src="IMG/product/category_by_brand.gif" alt=""></h1>
				<ul class="one-title">
					<li><a href="">脸部保养</a>
						<ul>
							<li><a href="">洁面</a></li>
							<li><a href="">爽肤</a></li>
							<li><a href="">面霜</a></li>
							<li><a href="">精华素</a></li>
							<li><a href="">眼部护理</a></li>
							<li><a href="">唇部护理</a></li>
							<li><a href="">面膜</a>
								<ul>
									<li>美白</li>
									<li>保湿</li>
									<li>眼膜</li>
								</ul>
							</li>
							<li><a href="">礼物套装</a></li>
							<li><a href="">青春秘诀</a></li>
							<li><a href="">防晒保护</a></li>
						</ul>
					</li>
					<li><a href="">魅力彩妆</a>
						<ul>
							<li><a href="">脸部</a></li>
							<li><a href="">眼部</a></li>
							<li><a href="">唇部</a></li>
						</ul>
					</li>
					<li><a href="">男士保养</a>
						<ul>
							<li><a href="">洁面、爽肤</a></li>
							<li><a href="">须后护理</a></li>
						</ul>
					</li>
					<li><a href="">礼物套装</a>
						<ul>
							<li><a href="">护肤套装</a></li>
							<li><a href="">香水套装</a></li>
							<li><a href="">男士套装</a></li>
						</ul>
					</li>
				</ul>
			<h2><img src="IMG/product/category_blog.gif" alt=""></h2>
			<li><a href="">谁想要完美肌肤？</a></li>
			</aside>
			<div class="main-inner">
				<img id="main-pic" src='IMG/product/QQ20160504102855.png' alt="">
				<a id="arrow" href="">浏览此品牌的所有货品<br>SK-II美之匙<img src="IMG/product/arrow_n.gif" alt=""></a>
				<img id="skii" src="IMG/product/b00000147_1.jpg" alt="">
				<a id="add" href=""><img src="IMG/product/add_icon_eng.gif" alt="">加入「我喜爱的货品名单」</a>
				<P>Skin Signature 全效活能 3D 面膜</P>
				<table border="0">
					<thead>
						<tr>
							<th width="300px;">货品名称</th>
							<th width="100px">容量</th>
							<th width="140px">价钱</th>
							<th width="100px;">数量</th>
							<th width="160px;">加入购物篮</th>
						</tr>
					</thead>
					<tbody>
						<tr style="border-top: 1px dashed gray;">
							<td style="text-align: center;">
								<img id="prouct-1-1" src="IMG/product/3658_3.jpg" alt="">
								<img src="IMG/product/icon_promotions.gif" alt="">
								<img src="IMG/product/icon_best_sellers.gif" alt=""><br><br>
								<div id="product-1-2" style="font-size: 12px;">全效活能 3D 面膜<br> 货号: SKX0100120-000-00<br>保质期到: 2018年04月</div>
							</td>
							<td>
								1box, 6pcs
							</td>
							<td>
								CNY 523.00 <br>
								<b>USD 80.00</b> <br>
								USD <del>171.00</del> <br>
								节省 53%
							</td>
							<td>
								<select id="select1">
									<script  type="text/javascript">
										for(i=1;i<11;i++)
										{
											document.write("<option value="+i+">"+i+"</option>")
										}
									</script>
								</select>
							</td>
							<td>
								<input type="button" name="" id="addcart1" value="" >
							</td>
						</tr>
						<tr style="border-bottom: 1px dashed gray;">
							<td style="text-align: left;">
								<img id="prouct-2-1" src="IMG/product/5620_3.jpg" alt="">
								<img src="IMG/product/icon_best_sellers.gif" alt="">
								<img src="IMG/product/icon_note.gif" alt=""><br><br>
								<div id="product-2-2" style="font-size: 12px;">全效活能 3D 面膜<br> 货号: SKX0100120-000-00<br>保质期到: 2018年04月</div>
							</td>
							<td>
								1pc (sample/ 試用裝)
							</td>
							<td >
								CNY 102.00 <br>
								<b>USD 16.00</b> <br>
								USD <del>32.00</del> <br>
								节省 50%
							</td>
							<td>
								<select id="select2">
									<script  type="text/javascript">
										for(i=1;i<11;i++)
										{
											document.write("<option value="+i+">"+i+"</option>")
										}
									</script>
								</select>
							</td>
							<td>
								<input type="button" name="" id="addcart2" value="">
							</td>
						</tr>
					</tbody>
				</table>
				<div id="main-inner-up" style="border-bottom: 1px dashed gray;padding-bottom: 20px;">
					
				<li style="font-size: 12px;padding-left: 20px;padding-top: 10px;"><img src="IMG/product/icon_note.gif" alt="">此货品不作单件发售，请拼凑其他产品以达到最少订单总额 USD 50.00。有关汇率请以主页底部的参考货币作准。</li>
				<h3>货品说明：</h3>
				<li style="font-size: 13px;padding:5px;">「SK-II Skin Signature 全效活能 3D 面膜」突破性 3D 上下独立两片立体设计，配合伸缩性鼻位设计，能紧密贴合面部，将焕肤成份有效输入肌肤，显著提升眼角、唇线以及嘴角的线条。</li>
				<li style="font-size: 13px;padding:5px;">上片面膜含 NAG 葡萄糖，能促进肌肤透明质酸的增加，快速滋润，减淡皱纹，有助预防和解决多重眼周衰老问题</li>
				<li style="font-size: 13px;padding:5px;">下片面膜特别添加 Oli-Vityl 元气复方、Pitera®：能启动细胞中抗氧化启动基因 ARE，促进肌肤生成更多自身的抗氧化物质，使肌肤饱满富有弹性，有效收缩毛孔并改善肤质，同时提升下颚线条，令脸部轮廓更加紧致。</li>
				<li><img src="IMG/product/SKX0100120-000-00_5.jpg" alt=""></li>
				<h3>主要成份：</h3>
				<li style="font-size: 13px;padding-left: 10px;">Water, Galactomyces Ferment Filtrate, Glycerin, Dipropylene Glycol, Niacinamide, Pentylene Glycol, Butylene Glycol, Acetyl Glucosamine, Isopropyl Isosterarate, Isohexadecane, Panthenol, Tocopheryl Acetate, Phytosteryl/Behenyl/Octyldodecyl Lauroyl Glutamate, polysorbate 20, Benzyl Alcohol, Acrylates/C10-30 Alkyl Acrylate Crosspolymer, Methylparaben, PVP, Disodium EDTA, Olea Europara (Olive) Fruit Oil, Sodium PEG-8 Olive Oil Carboxylate, Sodium Hydroxide, Fragrance, Simmondsia Chinensis (Jojoba) Seed Extract, Sodium Lauroyl Glutamate. (Upper)
				Water, Galactomyces Ferment Filtrate, Glycerin, Dipropylene Glycol, Niacinamide, Pentylene Glycol, Butylene Glycol, Isopropyl Isosterarate, Isohexadecane, Panthenol, Tocopheryl Acetate, Phytosteryl/Behenyl/Octyldodecyl Lauroyl Glutamate, polysorbate 20, Benzyl Alcohol, Acrylates/C10-30 Alkyl Acrylate Crosspolymer, , Methylparaben, PVP, Disodium EDTA, Olea Europara (Olive) Fruit Oil, Sodium PEG-8 Olive Oil Carboxylate, Sodium Hydroxide, Fragrance, Simmondsia Chinensis (Jojoba) Seed Extract, Sodium Lauroyl Glutamate. (Lower)</li>
				<h3>查看「<a href=""> Skin Signature</a>」系列的其他货品</h3>
				<ul>
					<li><img src="IMG/product/other/3854_3.jpg" alt=""></li>
					<li><img src="IMG/product/3658_3.jpg" alt=""></li>
					<li><img src="IMG/product/other/4999_3.jpg" alt=""></li>
				</ul>
				<div class="clear"></div>
				<h3>查看「脸部保养 > 面膜 > 保湿」的其他货品</h3>
				<ul>
					<li><img src="IMG/product/other/2714_3.jpg" alt=""></li>
					<li><img src="IMG/product/other/9423_3.jpg" alt=""></li>
					<li><img src="IMG/product/other/971_3.jpg" alt=""></li>
					<li><img src="IMG/product/other/2563_3.jpg" alt=""></li>
					<li><img src="IMG/product/other/15898_3.jpg" alt=""></li>
					<li><img src="IMG/product/other/18583_3.jpg" alt=""></li>
				</ul>
				<div class="clear"></div>
				<h3>您可能喜欢</h3>
				<ul>
					<li><img src="IMG/product/other/6333_3.jpg" alt=""></li>
					<li><img src="IMG/product/other/5145_3.jpg" alt=""></li>
					<li><img src="IMG/product/other/18748_3.jpg" alt=""></li>
					<li><img src="IMG/product/other/2563_3.jpg" alt=""></li>
				</ul>
				<div class="clear"></div>
				</div>
				<h3 style="padding: 10px 5px 5px 5px;">用家意见(9)</h3>
				<ul id="opinion">
					<li>Christine Jackson, 澳大利亚, 2015.03.26 <a href="">[回应/提问]</a><br>
Just wanted to let you know straight away how impressed I am with your products and services!!! I also can't believe how quickly it was delivered! Good work and keep it up!!!</li>
					<li>Melinda Zhang, 中国, 2015.03.08<a href="">[回应/提问]</a><br>
VERY REASONABLE PRICES, GREAT DISCOUNT OFFERS!... WELL WORTH .. I RECOMMEND THIS SELLER SUPER A++++ No Longer Worry About my Money, I can save more here!</li>
					<li>Angela Roggenbauer, 德国, 2015.02.19<a href="">[回应/提问]</a><br>
This is my first experience with the product, but I am satisfied with the quality. The delivery was excellent and was packaged very well and arrived safely. Thank you!</li>
					<li>Ellena, 立陶宛, 2015.02.13<a href="">[回应/提问]</a><br>
I am really impressed by the high quality of SK-II products from thel ingredients, scent, smoothness and long lasting effect prospective. I believe that it's the best products that that I'v ever used</li>
					<li>Ranichang, 加拿大, 2015.02.11<a href="">[回应/提问]</a><br>
Only cosme-de.com will give you the lowest price, outstanding customer service, fast & free shipping, safe & good packaging. I will definitely buy not only this again, but other products as well!</li>
					<li>Andrea, 新加坡, 2015.02.11<a href="">[回应/提问]</a><br>
I've tried this 3D face masks and I have to say I am thoroughly impressed. Yes they are more expensive than sheet masks from the drug store, but the ingredient list explains that quickly.</li>
					<li>Li Na, 中国, 2015.02.10<a href="">[回应/提问]</a><br>
I was literally stunned when I saw my face the morning after I used it. As described, my skin be more firm and elastic. Will def purchase more soon! :)</li>
					<li>Mary Colin, 丹麦, 2015.01.19<a href="">[回应/提问]</a><br>
这个SKII的面膜是我用过贴膜里最服帖了。上面半张非常合适，刚刚好，下面半张下巴到脸缘部分多出来一指半，就将将好可以把下巴部分贴住，然后再把面膜复盖在脸上。</li>
					<li>Little Pony, 澳大利亚, 2012.12.08<a href="">[回应/提问]</a><br>
来了澳洲之后水土不服爆痘很严重，因为手贱老抠最后都成了痘印，而且持续很干燥，总是有小干皮。第一次用就有明显效果，皮肤变得很嫩也不干了，第二天上妆容易许多。现在用了四片之后我想说花了大价钱买它，值了。</li>
				</ul>
				<div class="clear"></div>
				<input id="write_a_review" type="button" name="" value="" style="height: 22px;width: 96px;border: none;background:url(IMG/product/other/write_a_review_01.gif);margin-left: 20px;">
				<div id="weibo" style="margin-left: 10px;">
					<img src="IMG/product/QQ20160504170827.png" alt="">
				</div>
				<ul id="little-title">
					<li><a href="">安全购物保证</a>|</li>
					<li><a href="">购物先注册</a>|</li>
					<li><a href="">货品品质</a>|</li>
					<li><a href="">订购程序</a>|</li>
					<li><a href="">送货方式</a>|</li>
					<li><a href="">入口关税</a>|</li>
					<li><a href="">付款方式</a>|</li>
					<li><a href="">退回货品</a></li>
				</ul>
			</div>
			
		</div>
		<div class="clear"></div>
		<div class="main-middle">
			<img src="IMG/product/other/viewed_h.gif" alt="">
		</div>
   <div class="main-bottom">
      <div class="last-bottom">
        <select name="">
          <option value="人民币" selected="selected">(CNY)人民币</option>
        </select>
        <label>USD 1 = CNY 6.5334 </label>
        <p>所有交易均以美元或人民币结账，其他货币只供参考。欢迎使用以下付款方法：</p>
        <div class="pay-path">
          <a href="" title=""><img src="IMG/COSME-DE.COM/bnr_prefer_120x30_y.gif" alt=""></a>
          <a href="" title=""><img src="IMG/COSME-DE.COM/payment2.gif" alt=""></a>
        </div>
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
          <input type="email" name="" value="" placeholder="请输入邮箱地址">
          <input type="button" name="" value="&nbsp;">
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
<script type="text/javascript">
	var code ;  
     function createCode()  
     {   
       code = "";  
       var codeLength = 6;
       var checkCode = document.getElementById("checkCode");  
       var selectChar = new Array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
          
       for(var i=0;i<codeLength;i++)  
       {  
        
          
       var charIndex = Math.floor(Math.random()*36);  
       code +=selectChar[charIndex];   
         
       }  
</script>
</html>
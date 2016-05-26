<?php 
	include_once("config.php");
	if($_POST["submit"])
	{
		$email=$_POST["email"];
		$pwd=$_POST["pwd"];
		$sql="select * from user where email='$email' and password='$pwd'";
		$rs=mysql_query($sql);
		if(mysql_num_rows($rs)==0)
		{
		echo "<script>alert('账号或密码错误！请注册');window.location='reg.php'</script>";
			?>
			<?php
		}
		else
		{
			$_SESSION["user"]=$email;
			echo "<script>alert('登录成功');window.location='index.php'</script>";
		?>
		<?php
		}
		exit();
	}
	if($_POST["submit1"])
	{
		$username=$_POST["username"];
		$pwd=$_POST["pwd1"];
		$sex=$_POST["sex"];
		$email=$_POST["email"];
		$skin=$_POST["skin"];
		$address=$_POST["address"];
		$sql="insert into user(username,password,sex,email,skin,address) values ('$username','$pwd','$sex','$email','$skin','$address')";
		mysql_query($sql);
		echo "<script language=javascript>alert('注册成功，请重新登陆一下！');window.location='reg.php'</script>";
		exit();
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册和登录</title>
</head>
<link rel="stylesheet" type="text/css" href="CSS/standard.css">
<link rel="stylesheet" type="text/css" href="CSS/login.css">
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
				<li><a href="">登陆</a></li>
				<li><a href="">注册可享USD8.00折扣优惠</a></li>
				<li><a href="">我的回馈优惠</a></li>
				<li><a href="">订单追踪</a></li>
				<li><a href="">帮助</a></li>
			</ul>
		</div>
		<div class="clear"></div>
		<div class="header-cart">
			<a href="index.php"><img src="IMG/COSME-DE.COM/cosme_de_com_logo.png" alt=""></a>
			<a href="" id="cart">
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
			<h1><img src="IMG/login/need_help.gif" alt=""></h1>
				<ul>
					<li><a href="">最新消息</a></li>
					<li><a href="">严正声明</a></li>
					<li><a href="">常见问题</a></li>
					<li><a href="">购物先注册</a></li>
					<li><a href="">合作网站账号登陆</a></li>
					<li><a href="">激活我的账户</a></li>
					<li><a href="">登陆电邮及密码</a></li>
					<li><a href="">更新个人资料</a></li>
					<li><a href="">建立我的地址簿</a></li>
					<li><a href="">订阅电子通讯</a></li>
					<li><a href="">订货记录</a></li>
					<li><a href="">到货通知</a></li>
					<li><a href="">我喜爱的货品名单</a></li>
					<li><a href="">网上保安</a></li>
					<li><a href="">隐私政策</a></li>
					<li><a href="">联系COSME-DE.COM</a></li>
				</ul>
			</aside>
			<div class="main-inner">
				<a href=""><img src="IMG/login/welcome_8anniversary.png" alt=""></a>
				<form id="frm1" name="frm1" method="post" action="">
					<fieldset>
						<legend><img src="IMG/login/member_login.gif" alt=""></legend>
						<p>登录<input type="text" name="email" placeholder="邮箱地址"></p>
						<p>密码<input type="password" name="pwd"></p>
						<a href="forget.php">忘记密码？</a>
						<input type="submit" name="submit" value="&nbsp;">
						<img src="IMG/login/partner_sites_login.gif" alt="">
						<input type="button" name="" value="" id="btn-ali">
						<input type="button" name="" value="" id="btn-pay">
						<div class="discount-title">
							<h3>会员专享的「回馈优惠」：</h3>
							<ul>
								<li><a href="">每月消费越多，节省倍数同步增多，<br>马上登入看看您本月可节省的折扣。</a></li>
								<li><a href="">尚未收到账户激活码的，请联络我们<br>客服人员。</a></li>
							</ul>
						</div>
					</fieldset>
				</form>
				<div class="regist">
				<form id="frm2" name="frm2" method="post" action="" onsubmit="return checkForm()">
					<fieldset>
						<legend><img src="IMG/login/new_register.gif" alt=""></legend>
						<table border="0">
								<tr>
									<td colspan="5"><b>第 1 步 (共 2 个步骤)：</b></td>
								</tr>
								<tr>
									<td colspan="5"><b>个人资料</b></td>
								</tr>
								<tr>
									<td colspan="2">&nbsp;&nbsp;称谓及姓名</td>
									<td>
										<select name="sex" style="width: 60px;">
											<option selected="selected">--</option>
											<option value="小姐">小姐</option>
											<option value="女士">女士</option>
											<option value="太太">太太</option>
											<option value="先生">先生</option>
										</select>
									</td>
									<td colspan="2"><input type="text" name="username" required="required" placeholder=""></td>
								</tr>
								<tr>
									<td colspan="2">&nbsp;&nbsp;所在地</td>
									<td colspan="3">
										<select name="address" style="width: 246px;">
											<option selected="selected">--请选择--</option>
											<option value="中国">中国</option>
											<option value="台湾">台湾</option>
											<option value="香港">香港</option>
											<option value="澳门">澳门</option>
										</select>
									</td>
								</tr>
								<tr>
									<td colspan="5"><b>账户登录资料</b></td>
								</tr>
								<tr>
									<td colspan="2">&nbsp;&nbsp;电邮地址</td>
									<td colspan="3">
									<input type="email" name="email" id="email" required="required" style="width: 242px;"onkeyup="ajaxSubmit()">
									<p style="position: absolute;color:red;" id="msg"></p>
									</td>
								</tr>
								<tr>
									<td colspan="2">&nbsp;&nbsp;再次输入电邮地址</td>
									<td colspan="3"><input type="email" name="email2" id="email2" style="width: 242px;"></td>
								</tr>
								<tr>
									<td colspan="2">&nbsp;&nbsp;建立密码</td>
									<td colspan="3"><input type="password" name="pwd1" id="pwd1" style="width: 242px;"></td>
								</tr>
								<tr>
									<td colspan="2">&nbsp;&nbsp;再次输入密码</td>
									<td colspan="3"><input type="password" name="pwd2" id="pwd2" style="width: 242px;"></td>
								</tr>

						</table>
						<p>*密码须由 6 - 12 个英文及数字组成 (如：abc123)，不能单独使用英文字母或数字作为密码。英文字母区分大小写</p>
						<p>*请勿使用<b>Comcast</b>的邮箱，因为这些邮箱无法收到本站发出的电邮。</p>
						<p>*我们会发出一封核证电邮到你注册的电邮地址。届时请按下电邮内的帐户激活链接即可完成注册程序。为确保你收到有关的电邮，请将 service@cosme-de.com 和 updates@cosme-de.com 加入你的电邮通讯簿。</p>
						<table border="0">
							<tbody>
								<tr>
									<td colspan="5"><b>我喜爱的护肤品牌</b></td>
								</tr>
								<tr>
									<td colspan="5">
									   <select style="width: 320px;margin-left: 30px;">
									   		<option selected="selected">第一喜爱的</option>
									   </select>
									</td>
								</tr>
								<tr>
									<td colspan="5">
									   <select style="width: 320px;margin-left: 30px;">
									   		<option selected="selected">第二喜爱的</option>
									   </select>
									</td>
								</tr>
								<tr>
									<td colspan="5">
									   <select style="width: 320px;margin-left: 30px;">
									   		<option selected="selected">第三喜爱的</option>
									   </select>
									</td>
								</tr>
								<tr>
									<td colspan="5">
										<input type="text" name="" value="" placeholder="" style="width: 316px;margin-left: 30px;">
									</td>
								</tr>
								<tr>
									<td colspan="5"><b>我的肤质</b></td>
								</tr>
								<tr>
									<td colspan="5">
										<select name="skin" style="width: 320px;margin-left: 30px;">
											<option selected="selected">--请选择--</option>
											<option value="油性">油性</option>
											<option value="中性">中性</option>
										</select>
									</td>
								</tr>
								<tr>
									<td colspan="5"><b>订阅电子通讯</b></td>
								</tr>
								<tr>
									<td colspan="5">
										<input type="checkbox" name="" value="" required="required" style="margin-left: 10px;">
										<span>我希望率先知道 COSME-DE.COM 的最新优惠及新货品上市讯息。</span>
									</td>
								</tr>
								<tr>
									<td colspan="5"><b>使用条款</b></td>
								</tr>
								<tr>
									<td colspan="5">
										<input type="checkbox" name="" value="" required="required" style="margin-left: 10px;">
										<span>我已仔细阅读并同意有关 COSME-DE.COM 的使用条款：</span>
									</td>
								</tr>
							</tbody>
						</table>
						<div style="height: 160px;width: 360px;overflow: auto; border:1px solid gray;margin-top: 30px;margin-left: 10px;margin-bottom: 10px;">
							<p>欢迎阁下使用 COSME-DE.COM﹝「本网站」﹞或注册成为本网站的会员，本网站根据以下使用条款﹝「本条款」﹞向阁下提供服务。这些条款限定了本网站的法律责任，并就阁下对本网站的使用设定了限制。请阁下细阅。
本条款之最新修订日期为二零一五年十一月二十五日

使用条款

同意接受条款

当阁下使用 COSME-DE.COM﹝本网站﹞或注册成为本网站会员的同时，阁下将会被视作接受本条款之所有条件及规则所规管；所有该等条件及规则﹝包括但不限于 COSME-DE.COM 的私隐政策﹞于此经提述均被包涵在本条款内。本条款适用于 COSME-DE.COM 域名下的所有网页﹝包括但不限于其子域名的所有网页﹞。COSME-DE.COM 亦可能提供其他受不同或附加服务条款限制的服务。所以阁下于使用本网站前请先仔细阅读有关条款。

COSME-DE.COM 有权在任何时间及不需事先通知下而修改／取消／增加／替代任何在此列明的条款，而该条款均对本网站的使用者及注册会员有效力及约束力。藉因阁下每次使用本网站及/或其任何部份，阁下即同意及/或被视作已同意全部关于本条款及条件及被那些由 COSME-DE.COM 随时发出及采用之条款及条件所约束。因此，阁下应定期浏览本页。如在本条款作出修订后仍继续使用本网站，即被视为接受该些修订。

使用本网站

本网站只用作提供讯息作为个人消费的网上购物平台之用，不另作其他用途。阁下不可在未经批准下擅自将本网站内容用作牟利和商业、转售、传送至他人计算机平台或任何介面作大量发放之用途﹝包括但不限于以任何形式对本网站复制、传送、散播、发行、重刊、改写、或以相同的格式或技术再传递、或将其纳入到其他材料中﹞，此行为均属违反此使用条款。

使用数据

本网站所使用的数据报括所有内容、设计、文字、按钮图标、连接、HTML代码、商标、软件、音乐、声音、照片、商品照片、图像、静止图片、移动图片系列、录像、推广或其任何编排或组合、及任何在本网站或网页上出现的其他内容或材料。此所有内容的版权均属于 COSME DE NET COMPANY LIMITED﹝「本公司」﹞，且受香港及国际版权业、商标及任何可引用的知识产权法例所保护。未经本公司允许，阁下均不得以任何方式予以复制、再现、再版、上载、刊登、传输或分发，但阁下可以在任何单一台计算机下载一份数据以仅供阁下进行非商业使用﹝在本条款的范围内，禁止在任何其他网站或连网的计算机环境中使用任何该等数据﹞，条件是阁下必须保持所有的版权和其他专有权声明完好无缺。修改该等数据或任何其他目的而使用该等数据，均侵犯本公司和其他专有权利。

如果阁下从本网站下载软件，则该软件﹝包括该软件所包含或产生的任何文文件、图像以及伴随该软件的数据﹝统称「有关软件」﹞由本公司许可给予阁下。本公司保留对有关软件的全部和完整的拥有权以及有关软件中的所有知识产权。阁下不得对有关软件进行再分发、出售、反编译、逆向工程、反汇编或以其他方式将有关软件简化为人可认知的形式。

使用商标

本公司拥有本网站显示的商标、服务名称及标志﹝「商标」﹞的拥有权。其商标及设计并已根据香港特别行政区法例和其他司法机构注册或进行注册。未经本公司事先书面批准，阁下不得以任何形式展示／使用，尤其不得使用该商标于其他与本网站无关的服务／产品上。任何可引致其他人产生误会的展示行为亦不允许。

第三方网站连结

本网站可能载有超链接，连接到第三方操作的互联网站和资源。这些连结的网站并非由本公司控制。本公司不对这些外部资源或其内容是否可供使用承担责任，也不对该等网站上的任何内容、广告、产品或其他数据予以认可或承担责任。对于因阁下或据称因阁下使用或依赖该等网站上提供的任何内容、货品或服务而引致的任何直接或间接损失或损害赔偿，本公司概不负责，也不承担任何法律责任。任何有关外部连结的问题应发给相关的网站管理人或主持人处理。

资料披露及共享

本网站将所收集有的全部个人资料予以保密，在未得到阁下同意前，不会透露、出售、交易或租用阁下的个人资料予他人或非附属本公司的第三方单位作其市场推广之用。然而本网站可在有需要披露此等资料以达到收集此等资料之目的，或直接与其有关之目的时，向下述人士披露资料：

根据适用法例之下，或回应法庭传令时，本网站会向有关的第三方单位披露所收集得的个人资料﹝包括可识别个人身份的资料﹞。
根据本网站使用条款需要，本网站有权向提供行政支援、订单处理、网上付款结算、信用参考、维护及防止本网站被不正确使用或其他对本网站营运提供服务的代理人、承办商或服务提供者披露本网站收集的个人资料，或当本网站回应法庭传令或法律程序所需对该人士披露该资料的责任。
本网站若干服务或客户意见调查需由合作伙伴（如代理公司、提供相关技术服务的公司、运输公司、邮寄公司、提供奖品的公司等）提供或共同提供。爲了向阁下提供此等服务或意见调查，本网站必需与该合作伙伴分享阁下的个人资料。他们有机会获得履行职责所需的个人信息，但不得用于其他用途。
个别情况下，本网站会共享部份不可识别个人身份的资料予第三方作审计记录本网站点击率或探访量。
产品数据免责声明

COSME-DE.COM 从世界各地信誉良好的生产商、批发商搜罗优质的护肤品、化妆品及香水商品。唯使用这些护肤品、化妆品及香水商品／健康及美容商品﹝「商品」﹞有一定的使用方法及指引，阁下亦需留意个别商品可能于个别人士身上产生不同的反应或影响，包括但不限于可能引到皮肤或身体的敏感反应。

所有于本网站展示及提供的商品数据﹝不论是展示于本网站的商品说明网页、编辑部落格或其他合作的网站﹞仅供阁下作为参考之用，本网站展示及提供的一切商品数据亦为根据该商品生产商的资料提供。

本网站概不保证阁下通过本网站购买或获取的任何商品信息或其他数据均达到阁下的预期，且准确可靠。本网站概不会对商品的某特定用途之效用性、质量及可靠性作出任何保证及负上任何责任。

本网站可随时更新已列明的商品价格及存库数据而无需事先通知阁下。

免责声明

本网站中的任何信息、服务、商品及数据乃「按原状」提供，且不带有任何类别的明示或默示的保证。在适用法律准许的最大范围内，本公司卸弃所有明示或默示的保证，包括但不限于对不侵权、可商售性和特定目的之适宜性的默示保证。本公司概不保证以下各项：-

数据中包含的功能将不受干扰或没有错误；
资料将符合阁下的要求；
缺陷将被纠正；
本网站或提供本网站的服务器没有病毒或其他有害成分；
通过本网站传送的讯息将能维持保密。
就本网站中数据的正确性、准确性、可靠性或其他方面而言，本公司概不对本网站中的数据的使用或使用后果作出任何保证或任何声明。阁下﹝而非本公司﹞应承担所有必要的维修、修理或纠正的全部费用。
有限责任

阁下使用本网站，需承担完全的风险。COSME DE NET「按原状」提供本网站及其包含的任何数据与内容，没有任何明示的保证。此外，在适用法律准许的最大限度内，对于因以下各项引起的任何直接、间接、附带引起、特殊或后果性的损害赔偿﹝包括但不限于对利润损失、商誉损失、使用损失、数据损失或其他无形损失的损害赔偿﹞，COSME DE NET 均排除所有有关的法律责任，即使 COSME DE NET 已被告知出现上述损害赔偿的可能性亦然：使用或不能使用本网站；或由于通过或自网站购买或取得的任何货品或服务或进行的交易而造成购买替代货品和服务的费用；或阁下传送的讯息或阁下的数据被人擅自查阅或更改。

阁下亦同意，对于在网站上或通过网站出现的其他用户的任何威胁性、诽谤性、淫亵、攻击性或非法行为或对他人权利﹝包括知识产权﹞的任何侵犯，COSME DE NET 均不负责，也不对阁下承担任何法律责任。

如阁下对本网站提供的数据或对本条款不满意，阁下应选择停止使用本网站。

在不局限本条款和条件的任何其他规定的原则下，而且在不能排除任何法律责任保证的范围内，COSME DE NET 的全部法律责任只限于阁下在本网站购买商品或服务所付出的金额。

整份协议

以下的附加政策及说明亦构成本条款完整的一部分，按以下连结可直接查阅有关内容：-

私隐政策
退货退款政策
顾客帮助说明
本网站保留随时修改本条款及上述附加政策及说明，有关整份协议的修改会在本网站内作出通告。阁下有责任熟悉本网站的条款、附加政策及说明。如阁下继续阅览或使用本网站，即被视为已同意该等修改。
管辖法律

本条款及所有附加政策及说明受香港特别行政区法律所管限，并按香港法律解释。即使具有司法管辖权的法院因任何理由而裁断本条款的任何条文或任何部分不可强制执行，本条款内的其余条文将继续保留完全的效力、合法性或可强制执行性。

图像核证</p>
						</div>
						<b>图像核证</b>
						<br>
						<div id="checkCode" style="height: 100px;width: 260px;background: red;display: inline-block; position: relative;margin-left: 10px;">
							<a href="" style="font-size: 12px; display:inline-block; position:absolute;top: 40px;left: 170px;">显示另一组字符</a>
						</div>
						
						<input type="text" name="" value="" placeholder="图像核证字符" style="margin-left: 10px;font-size: 12px;width: 246px;margin-top: 10px;">
						<p style="border-bottom: 1px dashed gray; padding-bottom: 5px;margin-left: -10px;">(请根据大小写输入。)</p>
						<input type="submit" name="submit1" value="&nbsp;" style="height: 21px;width: 45px;background:url(IMG/login/submit_02.gif);margin-left: 40px; margin-top: 10px;">
					</fieldset>
				</form>
				</div>
			</div>
			
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
<script type="text/javascript" src="JS/reg.js"></script>
<script language="javascript" type="text/javascript"></script>  
</html>
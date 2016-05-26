<?php
 include_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>COSME-DE.COM玫丽网</title>
</head>
<link rel="stylesheet" type="text/css" href="CSS/standard.css">
<link rel="stylesheet" type="text/css" href="CSS/index.css">
<link rel="shortcut icon" href="favicon.ico" />
<style type="text/css" media="screen">
</style>
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
        <?php if($_SESSION["user"]!=''){echo $_SESSION["user"].'<a href=exit.php>,退出</a>';}else{?>
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
<!-- 主体内容，包含：导航、搜索、轮播图、商品展示-->
  <section>
    <div id="title-8th">
      <a href="">8周年惊喜&nbsp;&nbsp;8折优惠，推广编号COSMEDE8，立即选购！</a>
    </div>
    <nav>
      <ul>
        <li><a href="example.php"></a></li>
        <li><a href="example.php"></a></li>
        <li><a href="example.php"></a></li>
        <li><a href="example.php"></a></li>
        <li><a href="example.php"></a></li>
        <li><a href="example.php"></a></li>
        <li><a href="example.php"></a></li>
        <li><a href="example.php"></a></li>
        <li><a href="example.php"></a></li>
        <li><a href="example.php"></a></li>
        <li><a href="example.php"></a></li>
        <li><a href="example.php"></a></li>
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
      <div class="main-top-inner">
        
    
        <div id="myCarousel">
          <ul>
            <li><a href="example.php"><img src="IMG/COSME-DE.COM/slider_11.png" alt=""></a></li>
            <li><a href="example2.php"><img src="IMG/COSME-DE.COM/slider_12.png" alt=""></a></li>
            <li><a href="example.php"><img src="IMG/COSME-DE.COM/slider_1.png" alt=""></a></li>
            <li><a href="example.php"><img src="IMG/COSME-DE.COM/slider_2.png" alt=""></a></li>
            <li><a href="example.php"><img src="IMG/COSME-DE.COM/slider_3.png" alt=""></a></li>
            <li><a href="example.php"><img src="IMG/COSME-DE.COM/slider_4.png" alt=""></a></li>
            <li><a href="example2.php"><img src="IMG/COSME-DE.COM/slider_6.png" alt=""></a></li>
            <li><a href="example2.php"><img src="IMG/COSME-DE.COM/slider_7.png" alt=""></a></li>
          </ul>
          <ol id="myCarousel-index">
            <li class="myCarousel-selected"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ol>
          <a  class="prev"></a>
          <a  class="next"></a>
        </div>
        <!-- 需要切图确定a标签的具体大小 -->
        <div id="box-8">
          <a href="example.php" title=""><img src="IMG/COSME-DE.COM/tab.png" alt=""></a>
        </div>
        <div id="box-3">
          <ul>
            <li><h2><i>买满50美金</i>免邮</h2></li>
            <li><h2>30天购物保障</h2></li>
            <li><h2>100%原装正品</h2></li>
          </ul>
        </div>
        <div class="clear"></div>
        <ul id="nav-4">
          <li>
            <img src="IMG/COSME-DE.COM/ffffff_arrow.gif" alt="">新到货品
            <i>马上看</i>
            <img src="IMG/COSME-DE.COM/main_arrow_93846f.gif" alt="" style="margin-top: 10px;margin-left: 60px;">
          </li>
          <li>
            <img src="IMG/COSME-DE.COM/ffffff_arrow.gif" alt="">最畅销货品
            <i>值得一试！</i>
            <img src="IMG/COSME-DE.COM/main_arrow_c46519.gif" alt="" style="margin-top: 10px;margin-left: 60px;display: none;">
          </li>
          <li><img src="IMG/COSME-DE.COM/ffffff_arrow.gif" alt="">天然有机<i>爱自己，珍惜地球</i></li>
          <li id="last-one"><img src="IMG/COSME-DE.COM/ffffff_arrow.gif" alt="">美肌补充品<i>展现你的[内在美]</i></li>
        </ul>
        <div class="clear"></div>
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
          <div class="clear"></div>
          <a class="look-more" href="">观看全部...</a>
        </div>
      </div>
    </div>
    <!-- 一个广告 -->
    <div class="main-middle">
      <dl>
        <dt><a href=""><img src="IMG/COSME-DE.COM/7903_2.jpg" alt=""></a></dt>
        <dd><a href=""><h2>Chanel 香奈儿<br>Les 4 Ombres 四色眼彩</h2></a><p>Candy, 香港, 2016.03.29<br>
这4色搭配超美，又大气，低调奢华，最近总用这盒，闺密都说好看</p></dd>
      </dl>
      <div class="clear"></div>
      <a class="look-more" href="">观看全部..</a>
    </div>
    <div class="main-bottom">
        <div class="bottom-box">
          <img src="IMG/COSME-DE.COM/edit_h.gif" alt="">
          <ul>
            <li><a href="">眼睛超有神！3款日常眼线教学</a></li>
            <li><a href="">轻易打造凯特王妃自然美丽妆容</a></li>
            <li><a href="">对抗夏日油光4个油性肌护肤小贴士</a></li>
            <li><a href="">学性感天后碧昂丝 Beyoncé 的心机妆容</a></li>
            <li><a href="">夏日防晒大作战 4 款防晒品推荐</a></li>
          </ul>
          <a class="look-more" href="">观看全部...</a>
        </div>
        <div class="bottom-box">
          <img src="IMG/COSME-DE.COM/faq_h.gif" alt="">
          <ul>
            <li><a href="">为何选择于 COSME-DE.COM 购物？</a></li>
            <li><a href="">如何注册成为会员？</a></li>
            <li><a href="">如何浏览我的订货记录</a></li>
            <li><a href="">如何可以享有免费运送的优惠？</a></li>
            <li><a href="">我可退回已订购的货品吗？</a></li>
          </ul>
          <a class="look-more" href="">观看全部...</a>
        </div>
      <div class="clear"></div>
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
</html>
<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
    <link type="image/png" href="<?php echo IMG_PATH;?>myimg/favicon.ico" rel="icon">
    <script src="<?php echo JS_PATH;?>myjs/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/bootstrap/css/bootstrap1.css">
    <script src="<?php echo JS_PATH;?>myjs/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo JS_PATH;?>myjs/jquery-1.12.1.js"></script>
    <script src="<?php echo JS_PATH;?>myjs/hr.js"></script>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/hr.css">
</head>
<body>
<header>
    <div class="mainNav">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <a href="index.html" class="brand">
                        <img src="<?php echo IMG_PATH;?>myimg/index/logo1.png" alt="">
                    </a>
                </div>
                <nav class="span8 clearfix navbar-inner">
                    <div class="nav-collapse collapse">
                        <ul class="nav inline pull-right menu">
                            <li class="active">
                                <a href="<?php echo APP_PATH;?>?m=content&c=index&a=lists&catid=12" target="_blank">走进CARSMART</a></li>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=37a03306cbbab76afad72ddad33b4c91&action=category&catid=12&num=5&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'12','order'=>'listorder DESC','limit'=>'5',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                            <li>
                            <a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['catname'];?></a></li>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            <li>
                                <a href="">网站导航</a>
                                <ul class="unstyled">
                                    <li><a target="_blank" href="<?php echo APP_PATH;?>index.php">车网互联官网</a></li>
                                    <li><a target="_blank" href="<?php echo APP_PATH;?>?m=content&c=index&a=lists&catid=17">乐乘</a></li>
                                    <li><a target="_blank" href="<?php echo APP_PATH;?>?m=content&c=index&a=lists&catid=18">智乘（即将发布）</a></li>
                                    <li><a target="_blank" href="<?php echo APP_PATH;?>?m=content&c=index&a=lists&catid=19">纷乘</a></li>
                                    <li class="menu01"><a target="_blank" href="#">车店通</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<div class="container-fluid bigSlider">
    <div class="rs_mainslider">
        <ul class="rs_mainslider_items unstyleed" style="height:436.3px" >
            <li class="rs_mainslider_items_active">
                <img src="<?php echo IMG_PATH;?>myimg/rczp/slide1.jpg" alt="" class="rs_mainslider_items_image">
            </li>
            <li>
                <img src="<?php echo IMG_PATH;?>myimg/rczp/slide2.jpg" alt="" class="rs_mainslider_items_image">
            </li>
            <li>
                <img src="<?php echo IMG_PATH;?>myimg/rczp/slide3.jpg" alt="" class="rs_mainslider_items_image">
            </li>
        </ul>
        <div class="rs_mainslider_dots_container rs_center_horizontal_container">
            <ul class="rs_mainslider_dots rs_center_horizontal clearfix">
                <li class="rs_mainslider_dots_active"></li>
                <li class=""></li>
                <li class=""></li>
            </ul>
        </div>
        <div class="ccontrol">
            <span class="glyphicon glyphicon-chevron-left pre"></span>
            <span class="glyphicon glyphicon-chevron-right bac"></span>
        </div>
        <!-- <span class="glyphicon glyphicon-chevron-left"></span> -->
    </div>
</div>
<div class="container top01">
    <div class="row">
        <div class="span12 welcomeMessage">
            <h1>Carsmart的工作大不同 <strong><br>
                我们的工作氛围快乐、健康，让每个人都能够以愉悦的心情专注于工作<br>
                让每个人都积极创新，为美好的事情而努力。 </strong></h1>
        </div>
    </div>
</div>
<div class="container bottom01">
    <ul style="position: relative; overflow: hidden; height: 267px;" class="row portfolioItems isotope">
        <li style="position: absolute; left: 0px; top: 0px; transform: translate(0px, 0px);" class="span4 isotope-item">
            <figure>
                <a href="<?php echo IMG_PATH;?>myimg/rczp/item1.jpg" class="thumbnail" data-rel="prettyPhoto"> <img src="<?php echo IMG_PATH;?>myimg/rczp/item1.jpg" alt="project">
                </a>
                <figcaption>
                    <h3><a href="<?php echo IMG_PATH;?>myimg/rczp/item1.jpg" data-rel="prettyPhoto">北京总部办公环境</a></h3>
                </figcaption>
            </figure>
        </li>
        <li style="position: absolute; left: 0px; top: 0px; transform: translate(320px, 0px);" class="span4 isotope-item">
            <figure>
                <a href="<?php echo IMG_PATH;?>myimg/rczp/item2.jpg" class="thumbnail" data-rel="prettyPhoto"> <img src="<?php echo IMG_PATH;?>myimg/rczp/item2.jpg" alt="project"> </a>
                <figcaption>
                    <h3><a href="<?php echo IMG_PATH;?>myimg/rczp/item2.jpg" data-rel="prettyPhoto">北京总部前台</a></h3>
                </figcaption>
            </figure>
        </li>
        <li style="position: absolute; left: 0px; top: 0px; transform: translate(640px, 0px);" class="span4 isotope-item">
            <figure>
                <a href="<?php echo IMG_PATH;?>myimg/rczp/item3.jpg" class="thumbnail" data-rel="prettyPhoto"> <img src="<?php echo IMG_PATH;?>myimg/rczp/item3.jpg" alt="project"> </a>
                <figcaption>
                    <h3><a href="<?php echo IMG_PATH;?>myimg/rczp/item3.jpg" data-rel="prettyPhoto">广州分公司办公环境</a></h3>
                </figcaption>
            </figure>
        </li>
    </ul>
    <span class="glyphicon glyphicon-triangle-top sanjiao1"></span>
    <span class="glyphicon glyphicon-triangle-top sanjiao2"></span>
    <span class="glyphicon glyphicon-triangle-top sanjiao3"></span>
    <!-- /.portfolioItems -->
</div>
<div class="container-fluid coloredGray">
    <div class="container top01 bottom01">
        <div class="row">
            <div class="span12 welcomeMessage">
                <h1>你的价值在这里充分的体现<br>
                    <strong>为了吸引、激励、保留优秀的人才，保证员工和公司共同成长<br>
                        Carsmart为每位员工提供具有市场竞争力的薪酬和各项人性化的福利政策。</strong></h1>
            </div>
        </div>
        <div class="row pageStyle">
            <div class="tabs">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a>薪资</a></li>
                    <li class=""><a>福利</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab1">
                        <ul class="tabPost">
                            <div class="span6">
                                <li>
                                    <figure> <img src="<?php echo IMG_PATH;?>myimg/rczp/xc01.png" alt="photo"> </figure>
                                    <h3>固定薪酬</h3>
                                    <p>提供业内具有竞争性的工资待遇，相关细节会在Offer中详细列明</p>
                                </li>
                                <li>
                                    <figure> <img src="<?php echo IMG_PATH;?>myimg/rczp/xc03.png" alt="photo"> </figure>
                                    <h3>延时工作餐费补贴交通补贴</h3>
                                    <p>辛苦了！因延时工作而产生的餐费及交通费用，由公司埋单<br>
                                        <br>
                                    </p>
                                </li>
                                <li>
                                    <figure> <img src="<?php echo IMG_PATH;?>myimg/rczp/xc05.png" alt="photo"> </figure>
                                    <h3>全勤奖</h3>
                                    <p>每月为当月满勤的正式员工发放全勤奖</p>
                                </li>
                            </div>
                            <div class="span6">
                                <li>
                                    <figure> <img src="<?php echo IMG_PATH;?>myimg/rczp/xc02.png" alt="photo"> </figure>
                                    <h3>股权激励</h3>
                                    <p>母公司荣之联首次股权激励计划已于2014年2月实施，咱们车网1/4员工获得了股权激励，下一个会是你吗？</p>
                                </li>
                                <li>
                                    <figure> <img src="<?php echo IMG_PATH;?>myimg/rczp/xc04.png" alt="photo"> </figure>
                                    <h3>特殊奖励</h3>
                                    <p>为更好地激励员工，公司设连续服务奖、特殊贡献奖、年度优秀主管奖、优秀员工奖</p>
                                </li>
                                <li>
                                    <figure> <img src="<?php echo IMG_PATH;?>myimg/rczp/xc06.png" alt="photo"> </figure>
                                    <h3>通讯补贴</h3>
                                    <p>为每位正式员工提供相应岗位的通讯补贴</p>
                                </li>
                            </div>
                        </ul>
                    </div>
                    <div class="tab-pane" id="tab2">
                        <ul class="tabPost">
                            <div class="span4">
                                <li>
                                    <h3>社会保险</h3>
                                    <p>为每一位员工购买养老保险、失业保险、工伤保险、医疗保险、重大疾病医疗保险、生育保险</p>
                                </li>
                                <li>
                                    <h3>健康体检</h3>
                                    <p>每年免费为员工提供一年一度的身体健康检查</p>
                                </li>
                            </div>
                            <div class="span4">
                                <li>
                                    <h3>住房公积金</h3>
                                    <p>为每一位员工按照国家和地方政府的规定为员工办理住房公积金等相关手续</p>
                                </li>
                                <li>
                                    <h3>节日礼物</h3>
                                    <p>为分享喜庆，遇到中秋节、端午节等传统节日，员工获得过节礼品。春节回来领取开工利是</p>
                                </li>
                            </div>
                            <div class="span4">
                                <li>
                                    <h3>带薪假期</h3>
                                    <p>按照国家相关规定提供员工带薪年假、调休假、法定假、婚假、产假、陪产假、丧假</p>
                                </li>
                                <li>
                                    <h3>补充医疗保险</h3>
                                    <p>为每位正式员工购买补充医疗保险，看病除统筹外的个人支付部分仍可再申请报销</p>
                                </li>
                            </div>
                            <div class="span4">
                                <li>
                                    <h3>全薪病假</h3>
                                    <p>入职当年可获最高4天全薪病假，当然我们更希望大家都健健康康不生病</p>
                                </li>
                            </div>
                            <div class="span8"> <img src="<?php echo IMG_PATH;?>myimg/rczp/fl08.png"> </div>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- /.span4 -->

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<div class="container top01 bottom01">
    <ul style="position: relative; overflow: hidden; height: 267px;" class="row portfolioItems isotope">
        <li style="position: absolute; left: 0px; top: 0px; transform: translate(0px, 0px);" class="span4 isotope-item">
            <figure>
                <a href="<?php echo IMG_PATH;?>myimg/rczp/item1.jpg" class="thumbnail" data-rel="prettyPhoto"> <img src="<?php echo IMG_PATH;?>myimg/rczp/item1.jpg" alt="project">
                </a>
                <figcaption>
                    <h3><a href="<?php echo IMG_PATH;?>myimg/rczp/item1.jpg" data-rel="prettyPhoto">北京总部办公环境</a></h3>
                </figcaption>
            </figure>
        </li>
        <li style="position: absolute; left: 0px; top: 0px; transform: translate(320px, 0px);" class="span4 isotope-item">
            <figure>
                <a href="<?php echo IMG_PATH;?>myimg/rczp/item2.jpg" class="thumbnail" data-rel="prettyPhoto"> <img src="<?php echo IMG_PATH;?>myimg/rczp/item2.jpg" alt="project"> </a>
                <figcaption>
                    <h3><a href="<?php echo IMG_PATH;?>myimg/rczp/item2.jpg" data-rel="prettyPhoto">北京总部前台</a></h3>
                </figcaption>
            </figure>
        </li>
        <li style="position: absolute; left: 0px; top: 0px; transform: translate(640px, 0px);" class="span4 isotope-item">
            <figure>
                <a href="<?php echo IMG_PATH;?>myimg/rczp/item3.jpg" class="thumbnail" data-rel="prettyPhoto"> <img src="<?php echo IMG_PATH;?>myimg/rczp/item3.jpg" alt="project"> </a>
                <figcaption>
                    <h3><a href="<?php echo IMG_PATH;?>myimg/rczp/item3.jpg" data-rel="prettyPhoto">广州分公司办公环境</a></h3>
                </figcaption>
            </figure>
        </li>
    </ul>
    <span class="glyphicon glyphicon-triangle-top sanjiao1"></span>
    <span class="glyphicon glyphicon-triangle-top sanjiao2"></span>
    <span class="glyphicon glyphicon-triangle-top sanjiao3"></span>
    <span class="glyphicon glyphicon-triangle-top sanjiao4"></span>
    <span class="glyphicon glyphicon-triangle-top sanjiao5"></span>
    <span class="glyphicon glyphicon-triangle-top sanjiao6"></span>
    <!-- /.portfolioItems -->
</div>
<footer class="mainFooter">
    <!-- /.clients -->

    <div class="footerWidgets">
        <div class="container">
            <div class="row">
                <div class="span4"> <a href="#" class="brand01">DesignPortfolio</a> </div>
                <div class="span4">
                    <h3>上市公司成员企业</h3>
                    <p>车网互联版权所有： 京ICP备10024066号</p>
                </div>
                <!-- [footerMessage] -->
                <div class="span4">
                    <h3>联系方式</h3>
                    <p>电话：010-58978999 传真：010-58978988</p>
                    <p>北京市海淀区学院南路12号京师科技大厦A座10层</p>
                    <p><a href="##">hr@che08.com</a></p>
                </div>
                <!-- [recent posts] -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.footerWidgets -->
</footer>
<!-- 右下角微博开始 -->
<div id="weibo"></div>
<div id="weibo_img" ></div>
<!-- 右下角微博结束 -->
<!-- 右下角微信开始 -->
<div id="weixin"></div>
<div id="weixin_img" ></div>
<!-- 右下角微信结束 -->
<!-- 返回顶部 -->
<a href="#" id="gotop" style="display:none"></a>
</body>
</html>
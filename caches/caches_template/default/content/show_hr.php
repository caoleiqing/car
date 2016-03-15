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
                            <li>
                                <a href="<?php echo APP_PATH;?>?m=content&c=index&a=lists&catid=12" target="_blank">走进CARSMART</a></li>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e497b7b90c7d5c695eb4ea31b5f61d18&action=category&catid=12&num=5&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'12','order'=>'listorder ASC','limit'=>'5',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                            <li <?php if($catid==$v[catid]) { ?> class="active"<?php } ?>><a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['catname'];?></a></li>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            <li>
                                <a href="">网站导航</a>
                                <ul class="dropdown-menu" role="menu">
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
<div class="container-fluid topImage">
    <div class="container">
        <div class="row">
            <div class="span12 title">
                <h1>社会招聘</h1>
            </div>
        </div>
    </div>
    <!-- /.container -->
</div>
<!-- /.container-fluid [topImage] -->

<div class="container blog">
    <div class="row">
        <div class="span3 sidebar">
            <div class="sidebarMenu boxModel">
                <h1 class="colored">工作地点</h1>
                <ul>
                    <li class="active"><a href="#"><b>&#8594;</b>全部</a></li>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=65f71ddcd37f0b10f41b3f20d66beacc&action=category&catid=35&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'35','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><a href="<?php echo $r['url'];?>"><b>&#8594;</b><?php echo $r['catname'];?></a></li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
            <!-- /.sidebarMenu -->

        </div>
        <!-- /.span4 -->

        <div class="span9 blogItems">
            <ul class="breadcrumb blogBreadcrumb">
                <li><a href="index.html">走进Carsmart</a> <span class="divider">/</span></li>
                <li class="active"><a href="job.html">社会招聘</a></li>
            </ul>
            <hr>
            <div class="row">
                <div class="span9">
                    <?php echo $content;?>
                </div>
            </div>
            <!-- /.row [galleryNav]-->
        </div>
    </div>

    <!-- /.row [pagination]-->
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
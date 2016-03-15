<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
    <link type="image/png" href="<?php echo IMG_PATH;?>myimg/favicon.ico" rel="icon">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/index.css">
    <script src="<?php echo JS_PATH;?>myjs/jquery-1.12.1.js"></script>
    <script src="<?php echo JS_PATH;?>myjs/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo JS_PATH;?>myjs/index.js"></script>
</head>
<body>
<!-- 顶部导航开始 -->
<div class="box">
    <nav class="navbar navbar-default" role="navigation"><!--如果你在使用导航组件实现导航条功能，务必在 <ul> 的最外侧的逻辑父元素上添加 role="navigation" 属性，或者用一个 <nav> 元素包裹整个导航组件。不要将 role 属性添加到 <ul> 上，因为这样可以被辅助设备（残疾人用的）上被识别为一个真正的列表。-->
        <div class="container">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">
                    <img src="<?php echo IMG_PATH;?>myimg/index/logo.png" alt="">
                </a>
            </div>
            <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li <?php if(!$catid) { ?> class="active" <?php } ?>><a href="<?php echo siteurl($siteid);?>">首  &nbsp;页</a></li>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=70f0453b28d3b62324557276e5c8c8f2&action=category&catid=0&num=5&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'5',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <?php if($r[catid]==9) { ?>
                    <li class="dropdown <?php if($r[catid]==$CATEGORYS[$top_parentid][catid]) { ?>active<?php } ?>">
                        <a class="dropdown-toggle" href="#"><?php echo $r['catname'];?></a>
                        <ul class="dropdown-menu" role="menu">
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e930106f5c86096556a63fe1fa349442&action=category&catid=%24r%5Bcatid%5D&num=9&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'9',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $q) { ?><!--子栏目循环开始-->
                            <li><b><?php echo $q['catname'];?></b></li>
                            <li class="divider"></li>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d806d9f1ffa747cc0294401fa6de0b3b&action=category&catid=%24q%5Bcatid%5D&num=3&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$q[catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'3',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $w) { ?><!--子栏目循环开始-->
                            <li><a target="_blank" href="<?php echo $w['url'];?>"><?php echo $w['catname'];?></a></li>
                            <?php $n++;}unset($n); ?><!--子栏目循环结束-->
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            <?php $n++;}unset($n); ?><!--子栏目循环结束-->
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </ul>
                    </li>
                    <?php } elseif ($r[catid]==12) { ?>
                    <li><a target="_blank" href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
                    <?php } else { ?>
                    <li class="dropdown <?php if($r[catid]==$CATEGORYS[$top_parentid][catid]) { ?>active<?php } ?>">
                        <a href="#" class="dropdown-toggle"><?php echo $r['catname'];?></a>
                    <ul class="dropdown-menu" role="menu">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e94e7fc6967ce15b72fdf3f9ea82e351&action=category&catid=%24r%5Bcatid%5D&num=15&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?><!--子栏目循环开始-->
                        <li><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></li>
                        <?php $n++;}unset($n); ?><!--子栏目循环结束-->
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                    <?php } ?>
                    </li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
                <div id="nav-menu" class="btn-group pull-right wzdh">
                    <a class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" type="button" id="nav-menuclq">网站导航
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a target="_blank" href="<?php echo APP_PATH;?>index.php">车网互联官网</a></li>
                        <li><a target="_blank" href="<?php echo APP_PATH;?>?m=content&c=index&a=lists&catid=17">乐乘</a></li>
                        <li><a target="_blank" href="<?php echo APP_PATH;?>?m=content&c=index&a=lists&catid=18">智乘（即将发布）</a></li>
                        <li><a target="_blank" href="<?php echo APP_PATH;?>?m=content&c=index&a=lists&catid=19">纷乘</a></li>
                        <li class="menu01"><a target="_blank" href="#">车店通</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- 顶部导航结束 -->
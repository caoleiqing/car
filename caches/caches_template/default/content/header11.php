<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>乐乘</title>
    <link type="image/png" href="<?php echo IMG_PATH;?>myimg/favicon.ico" rel="icon">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/lecheng.css">
    <script src="<?php echo JS_PATH;?>myjs/jquery-1.12.1.js"></script>
    <script src="<?php echo JS_PATH;?>myjs/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo JS_PATH;?>myjs//Lc.js"></script>
</head>
<body>
<div class="box">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="<?php echo IMG_PATH;?>myimg/lecheng/logo.png">
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li <?php if($catid==17) { ?> class="active"<?php } ?>>
                    <a href="<?php echo APP_PATH;?>?m=content&c=index&a=lists&catid=17">首页</a>
                    </li>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=464a4d526ca6b0be30e16a9e35f4477c&action=category&catid=17&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'17','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                    <?php if($v[catid]==46&&$catid==21) { ?>
                    <li class="active">
                        <a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a>
                    </li>
                    <?php } else { ?>
                    <li <?php if($catid=="$v[catid]") { ?> class="active"<?php } ?>>
                    <a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a>
                    </li>
                    <?php } ?>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
                <ul id="nav-menu" class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">网站导航
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a target="_blank" href="<?php echo APP_PATH;?>?m=content&c=index&a=lists&catid=17">乐乘</a>
                            </li>
                            <li>
                                <a target="_blank" href="<?php echo APP_PATH;?>?m=content&c=index&a=lists&catid=18">智乘（即将发布）</a>
                            </li>
                            <li>
                                <a target="_blank" href="<?php echo APP_PATH;?>?m=content&c=index&a=lists&catid=19">纷乘</a>
                            </li>
                            <li>
                                <a href="#">车店通</a>
                            </li>
                            <li>
                                <a target="_blank" href="<?php echo APP_PATH;?>index.php">车网互联官网</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
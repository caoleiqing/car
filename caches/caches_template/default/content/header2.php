<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>智乘</title>
	<link type="image/png" href="<?php echo IMG_PATH;?>myimg/favicon.ico" rel="icon">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/div.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/both2.css">
	<script src="<?php echo JS_PATH;?>myjs/jquery-1.12.1.js"></script>
</head>
<body>
	<div class="navline"><!--导航开始-->
		<div class="navbox">
			<div class="logo">
				<a href="#">
					<img src="<?php echo IMG_PATH;?>myimg/logo4.png" alt="logo">
				</a>
			</div>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9ce804f6199a4b609c9e8c717e0f41f7&action=category&catid=18&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'18','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
			<ul class="container">
				<li  <?php if($catid=="18") { ?> id='active'<?php } ?>><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=18">首页</a></li>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<li <?php if($catid==$r[catid] || $top_parentid==$r[catid]) { ?> id='active'<?php } ?>><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
				<?php $n++;}unset($n); ?>
			</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			<div class="time">
				<a href="#"></a>
			</div>
		</div>
	</div><!--导航结束-->
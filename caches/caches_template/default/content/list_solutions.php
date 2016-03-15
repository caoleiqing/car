<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/solutions.css">
<div class="carousel-inner about-bg" role="listbox">
    <div class="item active">
        <img src="<?php echo IMG_PATH;?>myimg/solutions/default-bg.jpg">
        <div class="carousel-nav">
            <h1 class="pull-left"><?php echo $catname;?></h1>
            <div class="nav nav-tabs pull-right nav-bg-dw" role="tablist">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4ed6501f822a2c03611afc04ba403f56&action=category&catid=10&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'10','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li <?php if($catid==$r[catid]) { ?> class="active" <?php } ?> role="presentation">
                    <a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
                </li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="row t-2 about">
            <div class="col-lg-12">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=95a3e0ccdba1789978bbb555c6097ae3&action=lists&moreinfo=1&catid=%24catid&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('moreinfo'=>'1','catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <h3 class="text-center"><?php echo $v['title'];?></h3>
                <hr>
                <?php echo $v['content'];?>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
    </div>
</div>
<?php include template("content","footer"); ?>
<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/about.css">
<div class="carousel-inner about-bg" role="listbox">
    <div class="item active">
        <img src="<?php echo IMG_PATH;?>myimg/about/about.png">
        <div class="carousel-nav">
            <h1 class="pull-left"><?php echo $catname;?></h1>
            <div class="nav nav-tabs pull-right nav-bg-dw" role="tablist">

                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=cbb80374144affd8ee7457ee29e2343b&action=category&catid=13&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'13','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li  role="presentation" <?php if($catid==$r[catid]) { ?> class="active" <?php } ?>>
                    <a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
                </li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
    </div>
</div>
<?php if($catid==29 || $catid==30 || $catid==31 || $catid==32) { ?>
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="row t-2">
            <div class="col-lg-12 about">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=95a3e0ccdba1789978bbb555c6097ae3&action=lists&moreinfo=1&catid=%24catid&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('moreinfo'=>'1','catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <?php if($catid==29 || $catid==30|| $catid==32) { ?>
                <h3 class="text-center"><?php echo $v['title'];?></h3>
                <hr>
                <?php } ?>
                <?php echo $v['content'];?>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
    </div>
</div>
<?php } elseif ($catid==33) { ?>
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="row t-3">
            <div class="col-lg-12">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=95a3e0ccdba1789978bbb555c6097ae3&action=lists&moreinfo=1&catid=%24catid&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('moreinfo'=>'1','catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <?php echo $v['content'];?>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php include template("content","footer"); ?>
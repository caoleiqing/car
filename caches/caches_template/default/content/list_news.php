<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/about.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/news.css">
<div class="carousel-inner" role="listbox">
    <div class="item active">
        <img src="<?php echo IMG_PATH;?>myimg/news/newsbg.jpg">
        <div class="carousel-nav">


            <h1 class="pull-left"><?php echo $catname;?></h1>
            <div class="nav nav-tabs pull-right nav-bg-dw" role="tablist">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0912227015ab4b311ab02db1fcbd9f99&action=category&catid=11&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'11','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
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
        <div class="row t-3">
            <div class="col-lg-12">
                <div class="bs-example">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=72cfe0b7015350a8b097a493ff1533e7&action=lists&catid=%24catid&num=4&siteid=%24siteid&order=listorder+ASC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 4;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages_new = pages_new($content_total, $page, $pagesize, $urlrule);$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                    <ul class="media-list">
                        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                        <li class="media">
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a target="_blank" href="<?php echo $v['url'];?>" ><?php echo $v['title'];?></a>
                                </h4>
                                <p> ……</p>
                                <h4>
                                    <small>
                                        <i class="glyphicon glyphicon-calendar"></i>
                                        <?php echo date('Y-m-d H:i:s',$v[inputtime]);?>
                                    </small>
                                </h4>
                            </div>
                        </li>
                        <hr>
                        <?php $n++;}unset($n); ?>
                    </ul>
                    <?php echo $pages_new;?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include template("content","footer"); ?>
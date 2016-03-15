<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/about.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/news.css">
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="row t-2">
            <div class="col-lg-12">
                <div class="page-header text-center">
                    <h3><?php echo $title;?></h3>
                    <div class="row">
                        <div class="col-lg-8 col-xs-8">
                            <h4 class="text-right">
                                <small>
                                    <time><?php echo $inputtime;?></time>
                                    　来源:<?php echo $copyfrom;?>
                                </small>
                            </h4>
                        </div>
                        <div class="col-lg-4 col-xs-4">
                            <h4 class="text-right">
                                <small>
                                    <a href="<?php echo $r['url'];?>"><?php echo catpos($catid);?></a>
                                </small>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="news-zw">
                        <?php echo $content;?>
                </div>
                    <h4 class="pull-right">
                        <small><?php echo $inputtime;?> 　来源:<?php echo $copyfrom;?></small>
                    </h4>
                </div>
            </div>
        </div>
    </div>
<?php include template("content","footer"); ?>
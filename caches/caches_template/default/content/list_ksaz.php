<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header2"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/zhichenganzhuang.css">
<script src="<?php echo JS_PATH;?>myjs/zhichenganzhuang.js"></script>
<link rel="stylesheet" href="http://cache.amap.com/lbs/static/main.css" />
<script src="http://webapi.amap.com/maps?v=1.3&key=您申请的key值"></script>

<div id="mapContainer" style="height: 608px;width: 1349px;padding-top:100px"></div>

<script>
    //     var map = new AMap.Map('mapContainer', {
    //       // 设置中心点
    //       center: [116.397428, 39.90923],

    //       // 设置缩放级别
    //       zoom: 12
    //     });
    //   </script>
<script type="text/javascript">
    //初始化地图对象，加载地图
    ////初始化加载地图时，若center及level属性缺省，地图默认显示用户当前城市范围
    var map = new AMap.Map('mapContainer', {
        resizeEnable: true
    });
    //地图中添加地图操作ToolBar插件
    map.plugin(['AMap.ToolBar'], function() {
        //设置地位标记为自定义标记
        var toolBar = new AMap.ToolBar();
        map.addControl(toolBar);
    });
</script>

<?php include template("content","footer2"); ?>
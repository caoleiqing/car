$(function(){
//返回顶部
var gotop=$("#gotop");
var zh1=$(".zh1");
var zh2=$(".zh2");
var js1=$(".js1");
var js2=$(".js2");
var xc1=$(".xc1");
var xc2=$(".xc2");
var xc3=$(".xc3");
var jk1=$(".jk1");
var jk2=$(".jk2");
var jk3=$(".jk3");
var jk4=$(".jk4");
var zn1=$(".zn1");
var zn2=$(".zn2");
    var fif=$(".fif");
if($(window).scrollTop()>0){
    gotop.show(100);
}else{
    gotop.hide(100);
}
$(window).scroll(function(){

    if($(window).scrollTop()>50){
        zh1.addClass("fadeInDown");
    }
    if($(window).scrollTop()>100){
        zh2.addClass("fadeInUp");
    }
    if($(window).scrollTop()>800){
        js1.addClass("fadeInLeft");
    }
    if($(window).scrollTop()>850){
        js2.addClass("fadeInRight");
    }
    if($(window).scrollTop()>1600){
        xc1.addClass("fadeIn");
    }
    if($(window).scrollTop()>1800){
        xc3.addClass("fadeInLeft");
    }
    if($(window).scrollTop()>1800){
        xc2.addClass("fadeInRight");
    }

    if($(window).scrollTop()>2600){
        jk1.addClass("fadeIn");
    }
    if($(window).scrollTop()>2700){
        jk2.addClass("fadeInLeft");
    }
    if($(window).scrollTop()>2700){
        jk3.addClass("fadeInUp");
    }
    if($(window).scrollTop()>2700){
        jk4.addClass("fadeInRight");
    }
    if($(window).scrollTop()>3400){
        zn1.addClass("fadeInDown");
    }
    if($(window).scrollTop()>3500){
        zn2.addClass("fadeInUp");
    }
    if($(window).scrollTop()>4000){
        xc1.addClass("fadeIn");
    }
    if($(window).scrollTop()>0){
        gotop.show(100);
    }else{
        gotop.hide(100);
    }
})
gotop.click(function(){
    $("html,body").animate({scrollTop:0},1000)
})


//微博
var weibo=$("#weibo");
var weiboImg=$("#weibo_img");
weibo.hover(function(){
    weibo.removeAttr("id");
    weibo.attr("id","weibo_hover");
    weiboImg.css("display","block");
},function(){
    weibo.removeAttr("id");
    weibo.attr("id","weibo");
    weiboImg.css("display","none");
})
//微信
var weixin=$("#weixin");
var weixinImg=$("#weixin_img");
weixin.hover(function(){
    weixin.removeAttr("id");
    weixin.attr("id","weixin_hover");
    weixinImg.css("display","block");
},function(){
    weixin.removeAttr("id");
    weixin.attr("id","weixin");
    weixinImg.css("display","none");
})
    /*function getStyle(obj,attr){
        if(!obj.currentStyle){//obj.currentStyle是对象
            return getComputedStyle(obj,null)[attr]
        }else{
            return obj.currentStyle[attr]
        }
    }
    function offsetWindow(){
        var x=document.documentElement.clientWidth;
        var y=document.documentElement.clientHeight;
        return {width:x,height:y}
    }
    function getPosition(obj){
        var parent=obj.parentNode;
        //while 判断父元素
        var left=obj.offsetLeft;
        var top=obj.offsetTop;
        while(parent.nodeName!="BODY"){
            //判断定位属性
            if(getStyle(parent,"position")=="absolute"||getStyle(parent,"position")=="relative"){
                left+=(parent.offsetLeft+parseInt(getStyle(parent,"borderLeftWidth")))
                top+=(parent.offsetTop+parseInt(getStyle(parent,"borderTopWidth")))
            }
            parent=parent.parentNode;
        }
        return {x:left,y:top};
    }
    var imgs=document.getElementsByTagName("img");
    for (var i = 0; i < imgs.length; i++) {
        if(getPosition(imgs[i]).y<offsetWindow().height){
            imgs[i].src=imgs[i].getAttribute("data-src")
        }
    };
    window.onscroll=function(){
        obj=document.documentElement.scrollTop?document.documentElement:document.body;
        for (var i = 0; i < imgs.length; i++) {
            if(obj.scrollTop>getPosition(imgs[i]).y-offsetWindow().height){
                imgs[i].src=imgs[i].getAttribute("data-src")
            }
        };
    }*/
})
$(function(){
	/*//网站导航添加一个类名出现下拉框
  $(".dropdown-toggle").click(function(){
		$("#nav-menu").toggleClass("open");
	})
	//判断点击的不是下拉菜单的时候让下拉菜单消失
	$(document).click(function(e){
  	var ev=e||event;
  	var target=ev.target||ev.srcElement;
  	var id=target.id;
 	 if(id!=="nav-menuclq"){
      $("#nav-menu").removeClass("open");
      return;
   }
  });*/


//返回顶部
var gotop=$("#gotop");
var c1=$(".c1");
var c2=$(".c2");
var c3=$(".c3");
var c4=$(".c4");
if($(window).scrollTop()>0){
		gotop.show(100);
	c1.addClass("fadeInUp");
	c2.addClass("fadeInUp01");
	c3.addClass("fadeInUp02");
	c4.addClass("fadeInUp03");
	}else{
		gotop.hide(100);
	}
	flag=true;
$(window).scroll(function(){
	if($(window).scrollTop()>0){
		gotop.show(100);
		c1.addClass("fadeInUp");
		c2.addClass("fadeInUp01");
		c3.addClass("fadeInUp02");
		c4.addClass("fadeInUp03");
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

//导航条
$(".dropdown").hover(function(){
	var index=$(".dropdown").index(this);
	$(".dropdown-menu").eq(index).css("display","block");
},function(){
	var index=$(".dropdown").index(this);
	$(".dropdown-menu").eq(index).css("display","none");
})

})
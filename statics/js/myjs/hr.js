$(function(){
	$(".unstyled").parent().mouseenter(function(){
		$(".unstyled").css({display:"block"})
	})
	$(".unstyled").parent().mouseleave(function(){
		$(".unstyled").css({display:"none"})
	})
	// var num=0;
	// var t=setInterval(move,2000)
	// //$(".rs_mainslider_items_image").css({display:""})//eq(0).animate({opacity:1},1000)
	// function move(){
	// 	if(num>2){
	// 		num=0
	// 	}
	// 	$("ul.rs_mainslider_dots li").css({background:"#fff"})
	// 	$("ul.rs_mainslider_dots li").eq(num).css({background:"#ff5959"})
	// 	$(".rs_mainslider_items_image").eq(num).css({display:"block"})//animate({opacity:1},1000)
	// 	//$(".rs_mainslider_items_image").css({display:"none"})//animate({opacity:0},3000)
	// 	num++;	
	// // }
		var t=setInterval(move,2000)
	var num=0;
	var length=$(".rs_mainslider_items_image").length
	function move(){
		num++
		if(num>=length){
			num=0
		}
		$(".rs_mainslider_items_image").css({display:"none"}).eq(num).fadeIn("slow")
		$(".rs_mainslider_dots li").css({background:"#fff"}).eq(num).css({background:"#ff5959"})
	}
	$(".bigSlider").mouseenter(function(){
		$(".ccontrol").animate({opacity:1},500)
	})
	$(".bigSlider").mouseleave(function(){
		$(".ccontrol").animate({opacity:0},500)
	})
	$(".rs_mainslider_dots li").click(function(e){
		clearInterval(t)
		var target=e.target
		num=$(".rs_mainslider_dots li").index(this)
		$(".rs_mainslider_items_image").css({display:"none"}).eq(num).fadeIn("slow")
		$(".rs_mainslider_dots li").css({background:"#fff"}).eq(num).css({background:"#ff5959"})
		t=setInterval(move,2000)
	})
	$(".bac").click(function(){
		move()
		clearInterval(t)
		//num++
	})
	$(".bac").mouseleave(function(){
		clearInterval(t)
		t=setInterval(move,3000)
	})
	$(".pre").click(function(){
		clearInterval(t);
		num-=2
		if(num<-4){
			num=-2
		}
		move()
	})
	$(".pre").mouseleave(function(){
		clearInterval(t)
		t=setInterval(move,3000)
	})
	$("figure").eq(0).mouseenter(function(){
		$(".sanjiao1").css({display:"block"})
	})
	$("figure").eq(0).mouseleave(function(){
		$(".sanjiao1").css({display:"none"})
	})
	$("figure").eq(1).mouseenter(function(){
		$(".sanjiao2").css({display:"block"})
	})
	$("figure").eq(1).mouseleave(function(){
		$(".sanjiao2").css({display:"none"})
	})
	$("figure").eq(2).mouseenter(function(){
		$(".sanjiao3").css({display:"block"})
	})
	$("figure").eq(2).mouseleave(function(){
		$(".sanjiao3").css({display:"none"})
	})
	$("figure").eq(9).mouseenter(function(){
		$(".sanjiao4").css({display:"block"})
	})
	$("figure").eq(9).mouseleave(function(){
		$(".sanjiao4").css({display:"none"})
	})
	$("figure").eq(10).mouseenter(function(){
		$(".sanjiao5").css({display:"block"})
	})
	$("figure").eq(10).mouseleave(function(){
		$(".sanjiao5").css({display:"none"})
	})
	$("figure").eq(11).mouseenter(function(){
		$(".sanjiao6").css({display:"block"})
	})
	$("figure").eq(11).mouseleave(function(){
		$(".sanjiao6").css({display:"none"})
	})
	$("#myTab li").click(function(){
		var index=$("#myTab li").index(this)
		$("#myTab li").attr("class","")
		$("#myTab li").eq(index).attr("class","active")
		$(".tab-pane").css({display:"none"})
		$(".tab-pane").eq(index).css({display:"block"})
	})

})
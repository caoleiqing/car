$(function(){
	var mess1line=$(".message1");
	var mess2line=$(".message2");
	var mess3line=$(".message3");
	var mess4line=$(".message4");
	var messRight1=$(".message1-right");
	var messLeft1=$(".message1-left");
	var messTop2=$("h2",mess2line);
	var messBottom2=$("img",mess2line);
	var messRight3=$(".message3-right");
	var messLeft3=$(".message3-left");
	var messTop4=$(".message4-top");
	var messBottom4=$(".message4-bottom");

	var flagMess1=true;
	var flagMess2=true;
	var flagMess3=true;
	var flagMess4=true;

	//滚轮 onscroll
	$(window).scroll(function(){
		//信息1
		if($(window).scrollTop()>50){
			messRight1.addClass("fadeInRight")
			messLeft1.addClass("fadeInLeft")
		}
		//信息2
		if($(window).scrollTop()>750){
				messTop2.addClass("fadeInDown");
				messBottom2.addClass("fadeInUp");
		}
		//信息3
		if($(window).scrollTop()>1250){
			messRight3.addClass("fadeInRight")
			messLeft3.addClass("fadeInLeft")

		}
		//信息4
		if($(window).scrollTop()>2050){
			messTop4.addClass("fadeInDown");
			messBottom4.addClass("fadeInUp");

		}
	})
})
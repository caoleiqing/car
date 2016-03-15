window.onload=function(){
	//微博微信 鼠标经过效果
	var box=$(".foot-right")[0];
	var wb=$("a",box)[0];
	var wx=$("a",box)[1];
	var wbphoto=$("img",wb)[0];
	var wxphoto=$("img",wx)[0];
	wb.onmouseover=function(){
		wbphoto.style.display="block";
		animate(wbphoto,{opacity:1},500);
	}
	wb.onmouseout=function(){
		animate(wbphoto,{opacity:0.2},200,function(){
			wbphoto.style.display="none";
		});
	}
	wx.onmouseover=function(){
		wxphoto.style.display="block";
		animate(wxphoto,{opacity:1},500);
	}
	wx.onmouseout=function(){
		animate(wxphoto,{opacity:0.2},200,function(){
			wxphoto.style.display="none";
		});
	}

	//返回顶部
	var goTop=$("a",box)[2];
	goTop.onclick=function(){
		var aa=document.documentElement.scrollTop!=0?document.documentElement:document.body;
		animate(aa,{scrollTop:0},800);
	}
}
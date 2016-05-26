$(function(){
		var isIn=false;
		$('.top-show').hover(function(){
					that=$(this);
					$(this).children('ul').stop().slideDown('slow');

			},function(){
				if(isIn==false){
					setTimeout(function(){that.children('ul').stop().slideUp('slow')},1500)
				}
			});
			$('.top-show ul').hover(function(){
				$(this).css({display:'block'});
				isIn=true;
			},function(){
				isIn=false;
			})
			// 顶部的小轮播图
		var cartLi=$("#cart ul li");
		var index1=0;
			function show(){
				cartLi.eq(index1).stop().animate({top:'0px'},2000).css({zIndex: 100});
			}
			show();
			var timer=setInterval(play,2000);
			function play(){
				index1++;
				if(index1==cartLi.length){
					index1=0;
				}
				cartLi.css({top:'18px',zIndex:0});
				show();
			};
			cartLi.hover(function(){
					clearInterval(timer);
					cartLi.stop();
				},function(){
					play();
				timer=setInterval(play,2000);
			})

		// 主要的轮播图
		var myCarouselLi=$('#myCarousel ul li');
		var index2=0;
		function myCarouselPlay(n){
			myCarouselLi.eq(n).fadeIn(300).siblings().fadeOut(300);
			$('#myCarousel #myCarousel-index li').eq(n).addClass('myCarousel-selected').siblings().removeClass('myCarousel-selected');
		}
		myCarouselPlay(0);
		function change(){
			index2++;
			if(index2==myCarouselLi.length){
				index2=0;
			}
			myCarouselPlay(index2);
		}
		time=setInterval(change,3000);

	$('#myCarousel #myCarousel-index li').click(function(){
		clearInterval(time);
		var i=$(this).index();
		emp=$(this);
		index2=i;
		myCarouselPlay(index2);
		time=setInterval(change,3000);
});
	$('.prev').click(function(){
		clearInterval(time);
		index2--;
		if (index2<0) {
			index2=7;
		}
		myCarouselPlay(index2);
		time=setInterval(change,3000);
	})
	$('.next').click(function(){
		clearInterval(time);
		index2++;
		if (index2>7) {
			index2=0;
		}
		myCarouselPlay(index2);
		time=setInterval(change,3000);
	})



	// 时间
	var d=new Date();
	function showTime(){
		var d = new Date();
		$('#time')[0].innerHTML = d.getFullYear()+'.'+double(d.getMonth()+1)+'.'+double(d.getDate())+' '+double(d.getHours())+':'+double(d.getMinutes())+':'+double(d.getSeconds());
	}
	(showTime)();
	setInterval(showTime, 1000);
	function double(n){
		if(n<10)
			return '0'+n;
		else
			return ''+n;	
	}

	// 检测邮箱
	$('.input-email input').eq(1).click(function(){
		$('.error-title').css({
			display:'none'
		})
		var email=(/^\w+@\w+(\.\w+)+$/);
		if($('.input-email input').eq(0).val().match(email)){

		}else{
			$('.error-title').css({
				display:'block'
			});
		}
	});









	})
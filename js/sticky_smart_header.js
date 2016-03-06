//Upon scrollin up show header, and hide on scrolling down

document.addEventListener("DOMContentLoaded", function () {
	var header=document.getElementById('header');
	var flag=true;
	var lastScrollTop = window.pageYOffset; //get the Yoffset of the user when user enters the website
	
	window.addEventListener("scroll", function(){
		var st = window.pageYOffset;
		if (st > lastScrollTop){
			if (flag){
       			header.toggle('hideHeader');
       			flag=false;
			}
   		} else if (!flag){
      			header.toggle('hideHeader');
      			flag=true;
      		
   		}
   		lastScrollTop = st;
   	});

});
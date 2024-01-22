// JavaScript Document
 $(document).ready(function(){
	 var click = false; 
		 $('#hamburger-icon').click(function(){
			 if(click == false){
			$(".navgatie").animate({ left:'0px' });
			   $('#hamburger-icon').toggleClass("fa-times");
			  click = true;
	}else{
		 $('#hamburger-icon').toggleClass("fa-times");
			$(".navgatie").animate({ left:'-900px' });
			  click = false;
	 }
		  
	});	
	 
	 
	 
	 	 $(window).scroll(function(){
			 var scrollafstand = $(window).scrollTop();
			 var afstandItem1 = $("#item1").offset().top;
			  var afstandItem2 = $(".item2").offset().top;
			   var afstandItem3 = $("#item3").offset().top;
			
			 if(scrollafstand > (afstandItem1 - $(window).height())){
				  $('#item1').animate({ bottom:'0', opacity:'1'},2000);
			 } 
			 
			  if(scrollafstand > (afstandItem2 - $(window).height())){
				 $('.item2').animate({ bottom:'0',opacity:'1'},2000);
			 }
			 
			  if(scrollafstand > (afstandItem3 - $(window).height())){
				 $('#item3').animate({ bottom:'0',opacity:'1'},2000);
			 }
			 
			
		 });
	 
	 
	 	 $('.knop').click(function(){
			$('.cookie-container').effect("fold" , 1000, function(){//callback is animatie na uitvoeren vorige animatie
				$('#block').slideUp(2000, function(){
				});
				
			});
			
			
		 });
	 
	  $(".content").mouseover(function(){
    $(this).css("background-color", "#ff0066");
  });
  $(".content").mouseout(function(){
    $(this).css("background-color", "white");
  });
		  
	 });
	
         


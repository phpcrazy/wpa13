function goHover(link,content){

	
	$("#"+link).hover(function(){

			$("#"+content).css({"display":"block"});

			$("#"+content).hover(function(){
	    		$("#"+content).css({"display":"block"});		
			},function(){
			    $("#"+content).css({"display":"none"});	
			});   

		},function(){		

			$("#"+content).css({"display":"none"});		

	});




}

$(document).ready(function() {	

		$("#menu").hover(function(){
		    	$('.flyout').show();

		    	$(".flyout").hover(function(){
		    		$('.flyout').show();
				},function(){
				    $('.flyout').hide();
				});

			},function(){
			    $('.flyout').hide();

			    $(".flyout").hover(function(){
		    		$('.flyout').show();
				},function(){
				    $('.flyout').hide();
				});
		});



		//Clothing Hover
		link="c";
		content="clothing";
		goHover(link,content);

		//Shoes Hover
		link="s";
		content="shoes";
		goHover(link,content);

		//Accessories Hover
		link="a";
		content="accessories";
		goHover(link,content);

		//Brands Hover
		link="b";
		content="brands";
		goHover(link,content);		

});
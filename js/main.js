 jQuery(document).ready(function() {
      	
	

 });
 
 

  jQuery(window).load(function() {

		//when scrolling...
		$(window).scroll(function() {

			
			if($(window).scrollTop() > 185){
				 //do whatever
				//$("#big_header").hide();
				$("body").addClass("header-fixed");
				$("#small_header").show();
			}
			else
			{
				$("body").removeClass("header-fixed");
				$("#small_header").hide();
			}
		});
		
 });
function gopage(target)
{
		window.location.href =target;
}

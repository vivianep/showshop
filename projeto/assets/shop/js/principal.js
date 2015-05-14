$(function() {
	$(".item-banner").hover(
		function () {
			$(".item-banner").css("border-width","1px 1px 1px 1px");
			$(this).css("border-width","1px 1px 1px 0px");
			$("#div-banner").css("background-color", $(this).css("background-color"));			
		},
		function () {
			
		}
	);	
});
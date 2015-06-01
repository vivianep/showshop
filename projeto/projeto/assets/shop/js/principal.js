$(function() {
	$(".item-banner").hover(
		function () {
			$(".item-banner").css("border-width","1px 1px 1px 1px");
			$(this).css("border-width","1px 1px 1px 0px");
			$("#div-banner").html("");	
			$("#div-banner").html($($(this).attr("data-banner")).html());
			
			$("#btn-cadastrar-loja").click(function(){
				$("#div-banner").load("index.php/shop/cadastro_loja");
			});			
		},
		function () {
			
		}
	);	
});
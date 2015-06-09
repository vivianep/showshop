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
	
	$(".item-produto").hover(
		function () {
			$(this).find(".botoes-produto").show();
		},
		function () {
			$(this).find(".botoes-produto").hide();
		}	
	);
	
	$(".btn-detalhes-produto").click(function(){
		var descr = $(this).parent().parent().find(".descricao-produto").text();
		var preco = $(this).parent().parent().find(".preco-produto").text();
		var img = $(this).parent().parent().find(".img-item-produto").attr("src");
		
		$("#modal-detalhes-produto").find(".modal-header").find(".modal-title").text(descr);
		$("#modal-detalhes-produto").find(".modal-body").find(".modal-preco-produto").find("h3").text(preco);
		$("#modal-detalhes-produto").find(".modal-body").find("img").attr("src", img);
		$("#modal-detalhes-produto").modal();
	});
});
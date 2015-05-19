<div class="row">
	<div class="col-md-9" id="div-banner"></div>
	<div class="col-md-3">
		<div class="row">
			<div class="col-md-12 item-banner" data-banner="#banner1">
				<img src="<?php echo base_url('assets/shop/img/store.png') ?>" alt="">
				<span>Para o lojista</span>
			</div>
			<div class="col-md-12 item-banner" style="background-color:yellow"></div>
			<div class="col-md-12 item-banner" style="background-color:blue"></div>
			<div class="col-md-12 item-banner" style="background-color:gray"></div>
			<div class="col-md-12 item-banner" style="background-color:green"></div>
		</div>
	</div>
</div>

<div id="conteudo-banners">
	<div id="banner1">
		<div style="padding:10px">
			<h1>Venha para o ShowShop e venda mais.</h1>
			<p>O ShowShop é a melhor plataforma de vendas online para clientes e lojistas.</p>
			<ul>
				<li>Alcance mais clientes (mais de 10 mil visitas diárias no site).</li>
				<li>Baixo custo de manutenção.</li>
				<li>Controle suas vendas online.</li>
				<li>Relatórios para decisões estratégicas.</li>
				<li>Oferça variadas formas de pagamento.</li>
			</ul>
			<p><button class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#modal-cadastro-loja">Quero cadastrar minha loja</button></p>
		</div>	
	</div>
</div>

<div class="row" class="div-lojas">
	<h3>Lojas</h3>
	<?php
		foreach($lojas as $l){			
			echo '<div class="thumb-loja"><a href="'.base_url('index.php/shop/loja').'/'.$l->cod.'"><img src="'.base_url($l->logo).'"/></a></div>';
		}
	?>
</div>
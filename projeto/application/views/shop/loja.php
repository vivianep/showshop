<div class="row">
	<div class="col-md-3">
		<div class="row">
			<div class="col-md-12" id="menu-loja">
				<ul class="nav nav-pils nav-stack">
					<?php
						foreach($categorias as $c){
							echo '<li><a href="'.base_url('index.php/shop/loja/'.$loja->cod.'/'.$c->tipo).'">'.$c->tipo.'</a></li>';
						}
					?>
					<li><a href="<?php echo base_url('index.php/shop/loja/'.$loja->cod)?>">Tudo</a></li>';
				</ul>
			</div>
		</div>
	</div>
	<div class="col-md-9" id="div-banner">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
				  <?php
						  foreach($banners as $i=>$b){
							  echo '<li data-target="#carousel-example-generic" data-slide-to="'.$i.'" '.($i == 0?'class="active"':'').'></li>';
						  }
					?>
			  </ol>
			
			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox" style="max-height:300px">
				  	<?php
						  foreach($banners as $i=>$b){
							  echo '<div class="item '.($i == 0?'active':'').'">'.
								   '   <img src="'.base_url('imagens/banners/'.$b).'">'.
								   '</div>';
						  }
					?>
			  </div>
			
			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
	</div>
</div>

<?php
	foreach($produtos as $row){
		echo '<div class="row div-produtos">';
		foreach($row as $p){
			echo '<div class="col-md-2 item-produto">'.
				 '	<img src="'.base_url('imagens/produtos/'.$p->img).'" alt="" class="img-item-produto"/>'.
				 '	<div class="descricao-produto">'.$p->nome.'</div>'.
				 '	<div class="preco-produto">R$ '.$p->preco.'</div>'.
				 '	<div class="botoes-produto">'.
				 '		<button class="btn btn-primary btn-sm">Comprar</button>'.
				 '		<button class="btn btn-default btn-sm btn-detalhes-produto">Detalhes</button>'.
				 '	</div>'.
				 '</div>';
		}
		echo '</div>';
	}
?>

<!-- MODAL LOGIN -->
<div class="modal fade" id="modal-detalhes-produto">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Descrição do produto</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<img src="<?php echo base_url('imagens/produtos/produto_default.jpg')?>" alt="Imagem do produto" class="img-responsive"/>
					</div>
					<div class="row">
						<div class="col-md-6"></div>
						<div class="col-md-6 modal-preco-produto" style="font-weight:bold; text-align:center"><h3>R$ 1.234,56</h3></div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary">Comprar</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- FIM MODAL LOGIN-->
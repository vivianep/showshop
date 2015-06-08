<div class="row">
	<section class="content">
		<div class="col-md-9-edit">
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title">Atualizar produtos</h3>
				</div><!-- /.box-header -->
				
				<div class="box-body">
					<form role="form" action="<?php echo base_url('index.php/Produto/buscar_produto')?>" method="GET"  >
						<div class="form-group">
							<label for="exampleInputEmail1">Nome</label>
							<input type="text" class="form-control" name="nome" placeholder="Título do produto"/>
							<input class="search btn btn-primary" type="submit" value="Pesquisar"/>
						</div> <!-- /.form-group -->
					</form> 
					  
					<table id="example2" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Nome do Produto</th>
								<th>Tipo</th>
								<th>Quantidade</th>
								<th>Tamanho</th>
								<th>Marca</th>
								<th>Opções</th>
								<th>-</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($query->result() as $row){ ?>
								<tr>								   
									<td><?php echo $row->nome; ?></td>
									<td><?php echo $row->tipo; ?></td>
									<td><?php echo $row->quantidade; ?></td>
									<td><?php echo $row->tam; ?></td>
									<td><?php echo $row->marca; ?></td>
									<td> 
									<form role="form" accept-charset="utf-8" action="<?php echo base_url('index.php/Produto/deletar_dados')?>" method="POST">
										<input type="hidden" name="cod" value="<?php echo $row->cod; ?>">
										<input class="table-btn btn_primary" type="submit" value="Excluir">
									</form>
									</td>
									<td>
									<button class="edit-btn"  data-editar="<?php echo $row->cod; ?>" >"Editar"</button>
									</td>
								</tr>
							<?php } ?>	
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
</div>
<div id="modal-edit-prod" class="modal fade"></div>
<script type="text/javascript">                       
	$(function() {	
		
	  	$(".edit-btn").click(function(){
	      $("#modal-edit-prod").load("modal_editar", {cod: "11"}).modal();
	    
  	});
});
  

</script>
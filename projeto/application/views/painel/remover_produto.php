<div class="row">
	<section class="content">
		<div class="col-md-9-edit">
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title">Exclusão produto</h3>
				</div><!-- /.box-header -->
				
				<div class="box-body">
					<form role="form" method="post" >
						<div class="form-group">
							<label for="exampleInputEmail1">Nome</label>
							<input type="text" class="form-control" name="nome" placeholder="Título do produto"/>
							<input class="search btn btn-primary" type="submit" value="Pesquisar"/>
						</div> <!-- /.form-group -->
					</form> 
					
					<div id="invisible-table">
						<div class="box-header">
						<h3 class="box-title">Tabela de Produtos</h3>
					</div><!-- /.box-header -->
					  
					<table id="example2" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Nome do Produto</th>
								<th>Tipo</th>
								<th>Quantidade</th>
								<th>Tamanho</th>
								<th>Marca</th>
								<th>Opções</th>
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
										<?php
											//echo form_open('painel/delete');
											//echo form_hidden('cod', $row->cod);
											//echo form_submit(array('name'=>'excluir'), 'Excluir');
											//echo form_close();									
										?>
										<form role="form" accept-charset="utf-8" action="http://localhost/showshop/projeto/index.php/produto/deletar_dados/" method="POST">
											<input type="hidden" name="cod" value="<?php echo $row->cod;?>">
											<input class="table-btn btn_primary" type="submit" value="Excluir">
										</form>
									</td>
								</tr>
							<?php } ?>	
						</tbody>
					</table>
				<div>
				</div>
			</div>
		</div>
	</section>
</div>
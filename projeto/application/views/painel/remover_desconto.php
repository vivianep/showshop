<div class="row">
	<section class="content">
		<div class="col-md-9-edit">
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title">Exclusão de Desconto</h3>
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
						<h3 class="box-title">Tabela de Descontos</h3>
					</div><!-- /.box-header -->
					  
					<table id="example2" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Produto</th>
								<th>Desconto</th>
								<th>Data Inicial</th>
								<th>Data Final</th>
								<th>Opções</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($query->result() as $row){ ?>
								<tr>								   
									<td><?php echo $row->produto; ?></td>
									<td><?php echo $row->desconto; ?></td>
									<td><?php echo $row->datainicial; ?></td>
									<td><?php echo $row->datafinal; ?></td>
									<td>
										<form role="form" accept-charset="utf-8" action="<?php echo base_url('index.php/desconto/deletar_dados/'); ?>" method="POST">
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
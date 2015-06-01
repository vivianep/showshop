<div class="row">
	<section class="content">
		<div class="col-md-9-edit">
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title">Buscar Produto</h3>
				</div><!-- /.box-header -->
				
				<div class="box-body">
					<form role="form" method="post" action="<?php echo base_url('index.php/desconto/buscar_desconto/'); ?>">
						<div class="form-group">
							<label for="exampleInputEmail1">Nome</label>
							<input type="text" class="form-control" name="nome" value="<?php echo $nome; ?>"/> <!-- placeholder="Título do produto" -->
							<input class="search btn btn-primary" type="submit" value="Pesquisar"/>
						</div>
					</form> 
					
					<div id="invisible-table">
						<div class="box-header">
						<h3 class="box-title">Tabela de Descontos</h3>
					</div><!-- /.box-header -->
					  
					<table id="example2" class="table table-bordered table-hover">
						<thead>							
							<tr>
								<th> <center> Serial      </center> </th>
								<th> <center> Produto      </center> </th>
								<th> <center> Desconto     </center> </th>
								<th> <center> Data Inicial </center> </th>
								<th> <center> Data Final   </center> </th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($query->result() as $row){ ?>
								<tr>								   
									<td> <?php echo '<center>'.$row->serial.'</center>'; ?>     </td>
									<td> <?php echo '<center>'.$row->produto.'</center>'; ?>     </td>
									<td> <?php echo '<center>'.$row->desconto.'% </center>'; ?>  </td>
									<td> <?php echo '<center>'.$row->datainicial.'</center>'; ?> </td>
									<td> <?php echo '<center>'.$row->datafinal.'</center>'; ?>   </td>
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
<section class="content">
    <div class="row">
    	<!-- left column -->
    	<div class="col-md-12">
      		<!-- general form elements -->
      		<div class="box box-primary">
        		<div class="box-header">
					<i class="fa fa-users"></i>
          			<h3 class="box-title">Usuários administrativos da loja</h3>
					<div class="box-tools pull-right">
						<div class="has-feedback">
							<button class="btn btn-primary" onclick="$('#modal-cadastrar-usuario').modal();"><i class="fa fa-plus"></i></button>
						</div>
					</div>	 
        		</div><!-- /.box-header -->
        		<!-- form start -->
				<div class="box-body">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Nome</th>
								<th>Email</th>
								<th>Login</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
								foreach($usuarios as $u){
									echo '<tr>'.
											 '<td>'.$u->nome.'</td>'.
											 '<td>'.$u->email.'</td>'.
											 '<td>'.$u->usuario.'</td>'.
											 '<td><a href="'.base_url('index.php/loja/excluir_usuario/'.$u->usuario).'" class="btn btn-danger" title="Excluir usuário"><i class="glyphicon glyphicon-trash"></i></a></td>'.
										 '</tr>';
								} 
							?>
						</tbody>
					</table>
				</div>
      		</div><!-- /.box -->
		</div>
	</div>
</section><!-- /.content -->


<!-- Modal -->
<div class="modal fade" id="modal-cadastrar-usuario">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Cadastrar usuário</h4>
			</div>
			<form role="form" id="form-modal-edit" method="POST" action="<?php echo base_url('index.php/loja/cadastrar_usuario')?>">
				<div class="modal-body">
					<div class="box-body">
						<div class="form-group">
							<label for="nome">Nome</label>
							<input type="text" class="form-control" name="nome">
						</div>
						<div class="form-group">
							<label for="usuario">Login</label>
							<input type="text" class="form-control" name="usuario">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<input type="submit" id="btn-modal-edit" class="btn btn-primary" value="Salvar">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				</div>
			</form>
		</div>
	</div>
</div>                           

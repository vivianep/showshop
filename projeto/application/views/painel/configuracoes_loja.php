<section class="content">
    <div class="row">
    	<!-- left column -->
    	<div class="col-md-12">
      		<!-- general form elements -->
      		<div class="box box-primary">
        		<div class="box-header">
          			<h3 class="box-title">Configurações da loja</h3>
        		</div><!-- /.box-header -->
        		<!-- form start -->
			
        		<form role="form"  accept-charset="utf-8" action="<?php echo base_url('index.php/loja/salvar_dados')?>" method="POST" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label for="nome">Nome da loja</label>
							<input type="text" name="nome" class="form-control" value="<?= $loja->nome ?>">
						</div>
						<div class="form-group">
							<label for="tipo">Tipo da loja</label>
							<input type="text" name="tipo" class="form-control"  value="<?= $loja->tipo; ?>" placeholder="Ramo de atividade da loja. Ex: Calçados, Artigos esportivos.">
						</div>
						<div class="form-group" style="height:100px">
							<div class="col-md-6">
								<label for="tipo">Logomarca</label>
								<input type="file" name="logo"/>
							</div>
							<div class="col-md-6">
								<img src="<?php echo base_url('imagens/logos/'.$loja->logo)?>" alt="Logmarca" style="height:100px"/>
							</div>							
						</div>
					</div><!-- /.box-body -->
					<div class="box-footer">
            			<button type="submit" class="btn btn-primary">Salvar</button>
          			</div>
        		</form>
      		</div><!-- /.box -->
		</div>
	</div>
</section><!-- /.content -->
     
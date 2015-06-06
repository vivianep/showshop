<section class="content">
    <div class="row">
    	<!-- left column -->
    	<div class="col-md-12">
      		<!-- general form elements -->
      		<div class="box box-primary">
        		<div class="box-header">
          			<h3 class="box-title">Configurar vitrine</h3>
        		</div><!-- /.box-header -->
        		<!-- form start -->
				<div class="box-body">
					<form action="<?php echo base_url('index.php/loja/salvar_vitrine')?>" method="POST" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-6">
								<label for="banner1">Banner 1</label>
								<input type="file" name="banner1">
							</div>
							<div class="col-md-6">
								<img src="<?php echo base_url('imagens/banners/'.$vitrine->vitrine1banner)?>" alt="Banner 1" style="width:100%">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label for="banner2">Banner 2</label>
								<input type="file" name="banner2">
							</div>
							<div class="col-md-6">
								<img src="<?php echo base_url('imagens/banners/'.$vitrine->vitrine2banner)?>" alt="Banner 2" style="width:100%">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label for="banner3">Banner 3</label>
								<input type="file" name="banner3" >
							</div>
							<div class="col-md-6">
								<img src="<?php echo base_url('imagens/banners/'.$vitrine->vitrine3banner)?>" alt="Banner 3" style="width:100%">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label for="banner4">Banner 4</label>
								<input type="file" name="banner4">
							</div>
							<div class="col-md-6">
								<img src="<?php echo base_url('imagens/banners/'.$vitrine->vitrine4banner)?>" alt="Banner 4" style="width:100%">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="submit" value="Salvar" class="btn btn-primary"/>
							</div>
						</div>
					</form>
				</div>
      		</div><!-- /.box -->
		</div>
	</div>
</section><!-- /.content -->
<div style="padding:10px">
	<h2>Cadastrar loja</h2>
	<form action="index.php/shop/cadastrar_loja" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="form-group col-md-12">
				<label for="nome">Nome da loja</label>
				<input type="text" name="nome" class="form-control" placeholder="O nome da sua loja"/>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-6">
				<label for="tipo">Tipo</label>
				<input type="text" name="tipo" class="form-control" placeholder="Qual o ramo de atuação da sua loja?"/>
			</div>
			<div class="form-group">
				<label for="tipo">Sua logomarca</label>
				<input type="file" name="logo"/>
			</div>
		</div>
		<div class="form-group">
			<input type="submit" value="Cadastrar" class="btn btn-primary"/>
		</div>
	</form>
</div>
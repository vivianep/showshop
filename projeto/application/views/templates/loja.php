<!doctype html>
<html>
	<head>
		<title>ShowShop</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="<?php echo base_url('assets/shop/css/bootstrap.min.css') ?>"/>
		<link rel="stylesheet" href="<?php echo base_url('assets/shop/css/loja.css') ?>"/>
	</head>
	<body>	
		<div class="row" id="topo1">
			<div class="col-md-9"></div>
			<div class="col-md-3">				
				<a href="#">MINHA CONTA</a> | 
				<a href="#" data-toggle="modal" data-target="#modal-login">LOGIN</a>
			</div>
		</div>
		<div class="row" id="topo2">
			<div class="col-md-4" id="div-logo">
				<h2 class="logo">Show<strong>Shop</strong></h2> <?php if(isset($loja)) echo '<h3>'.$loja->nome.'</h3>'; ?>
			</div>
			<div class="col-md-6">				
			
			</div>
			<div class="col-md-2">			
				<a href="#">
					<img src="<?php echo base_url('assets/shop/img/shopping-bag.png') ?>" alt="Suas compras" id="icone-carrinho" title="Suas compras">
				</a>
			</div>
		</div>
		<div id="corpo">
			<?php echo $contents ?>
		</div>
		
		<div class="row" id="rodape1">
			<div class="col-md-3">
				<ul class="lista-rodape">
					<li><a href="#">Política de uso</a></li>
					<li><a href="#">Fale conosco</a></li>
					<li><a href="#">Perguntas frequentes</a></li>
				</ul>
			</div>
		</div>
		
		<div class="row" id="rodape2">			
		</div>
		
		<!-- MODAL LOGIN -->
		<div class="modal fade" id="modal-login">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Acesse sua conta</h4>
					</div>
					<div class="modal-body">
						<form action="post">
							<div class="form-group">
								<label for="loginemail">Email</label>
								<input type="email" name="loginemail" placeholder="Informe seu email" class="form-control"/>
							</div>
							<div class="form-group">
								<label for="loginsenha">Senha</label>
								<input type="password" name="loginsenha"" class="form-control"/>
							</div>
							<div class="form-group">
								<p>Ainda não é cadastrado? <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-cadastro">Cadastre-se agora.</a></p>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						<button type="button" class="btn btn-primary">Acessar</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		<!-- FIM MODAL LOGIN-->
		
		<!-- MODAL CADASTRO  -->
		<div class="modal fade" id="modal-cadastro">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Cadastre-se no <strong>ShowShop</strong></h4></h4>
					</div>
					<div class="modal-body">
						<form action="post">
							<div class="form-group">
								<label for="cadastroemail">Email</label>
								<input type="email" name="cadastroemail" placeholder="Digite aqui seu email de acesso" class="form-control"/>
							</div>
							<div class="form-group">
								<label for="cadastrosenha">Senha</label>
								<input type="password" name="cadastrosenha"" class="form-control"/>
							</div>
							<div class="form-group">
								<label for="cadastroconfirmasenha">Confirme a senha</label>
								<input type="password" name="cadastroconfirmasenha"" class="form-control"/>
							</div>
							<div class="form-group">
								<p>Já tem cadastro? Então efetue <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-login">login.</a></p>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						<button type="button" class="btn btn-primary">Cadastrar</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		<!-- FIM MODAL CADASTRO-->
	</body>
	<script src="<?php echo base_url('assets/shop/js/jquery.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/shop/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/shop/js/principal.js') ?>"></script>
</html>
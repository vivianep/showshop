<!doctype html>
<html>
	<head>
		<title>ShowShop</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="<?php echo base_url('assets/shop/css/bootstrap.min.css') ?>"/>
		<link rel="stylesheet" href="<?php echo base_url('assets/shop/css/home.css') ?>"/>
	</head>
	<body>
		
		<div class="row" id="topo1">
			<div class="col-md-9"></div>
			<div class="col-md-3">
				<a href="#">
				<?php 
					if (isset($_SESSION['usuario'])) {
						echo $_SESSION['usuario'];
						$usuario = $_SESSION['usuario'];
						$sair = base_url('index.php/shop/log_out');
						echo "</a> | <a href='$sair'>SAIR</a>";
					}else{
						echo "MINHA CONTA </a> |"; 
						echo '<a href="#" data-toggle="modal" data-target="#modal-login">LOGIN</a>';
					}
				?>
			</div>
		</div>
		<div class="row" id="topo2">
			<div class="col-md-2" id="div-logo">
				<h2 class="logo">Show<strong>Shop</strong>
				
				</h2>
								
			</div>
			<div class="col-md-8">
				</br></br>
				<table border='0'>
					<tr>
						<td>
							<form action="<?php echo base_url('index.php/loja/buscar'); ?>">
								<input type="text" name="termo" class="form-control"  placeholder="Buscar Loja" style="width: 220px;"/>					
							</form>
						</td>
						
						<td>
							<form action="<?php echo base_url('index.php/produto/buscar'); ?>">
								<input type="text" name="termo" class="form-control"  placeholder="Buscar Produto" style="width: 220px;"/>					
							</form>
						</td>
					</tr>
				</table>
			</div>
			<div class="col-md-2">
				<a href="#">
					<img src="<?php echo base_url('assets/shop/img/shopping-bag.png'); ?>" alt="Suas compras" id="icone-carrinho" title="Suas compras">
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
						<form action="<?php echo base_url('index.php/usuario/autenticar_usuario')?>" method="post">
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
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						<button type="submit" class="btn btn-primary">Acessar</button>
					</div>
					</form>
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
						<form action="<?php echo base_url('index.php/usuario/cadastrar_usuario_showshop')?>"" method='post'>
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
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						<button type="submit" class="btn btn-primary">Cadastrar</button>
					</div>
					</form>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		<!-- FIM MODAL CADASTRO-->
		
		<!-- MODAL CADASTRO LOJA  -->
		<div class="modal fade" id="modal-cadastro-loja">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Cadastre-se no <strong>ShowShop</strong></h4></h4>
					</div>
					<form action="<?php echo base_url('index.php/shop/cadastrar_loja')?>" method="post" enctype="multipart/form-data">
						<div class="modal-body">						
							<div class="row">
								<div class="form-group col-md-12">
									<label for="nome">Nome da loja</label>
									<input type="text" name="nome" class="form-control" placeholder="O nome da sua loja"/>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-12">
									<label for="tipo">Tipo</label>
									<input type="text" name="tipo" class="form-control" placeholder="Qual o ramo de atuação da sua loja?"/>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-12">
									<label for="nomeusuario">Seu nome</label>
									<input type="text" class="form-control"  name="nomeusuario" placeholder="Informe seu nome."/>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-12">
									<label for="email">Email</label>
									<input type="email" class="form-control"  name="email" placeholder="Informe seu email."/>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-6">
									<label for="usuario">Login</label>
									<input type="text" class="form-control" name="usuario" placeholder="Informe um login de acesso."/>
								</div>
								<div class="form-group col-md-6">
									<label for="senha">Senha</label>
									<input type="password" class="form-control"  name="senha"/>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
							<input type="submit" value="Cadastrar" class="btn btn-primary"/>
						</div>
					</form>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		<!-- FIM MODAL CADASTRO LOJA-->
	</body>
	<script src="<?php echo base_url('assets/shop/js/jquery.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/shop/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/shop/js/principal.js') ?>"></script>
</html>
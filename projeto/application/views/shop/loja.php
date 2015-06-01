<div class="row">
	<div class="col-md-3">
		<div class="row">
			<div class="col-md-12" id="menu-loja">
				<ul class="nav nav-pils nav-stack">
					<?php
						foreach($categorias as $c){
							echo '<li><a href="#">'.$c->tipo.'</a></li>';
						}
					?>
					<li><a href="#">Tudo</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-md-9" id="div-banner"></div>
</div>

<div class="row" class="div-produtos">
	<div class="col-md-3 item-produto"></div>
	<div class="col-md-3 item-produto"></div>
	<div class="col-md-3 item-produto"></div>
	<div class="col-md-3 item-produto"></div>
</div>

<div class="row" class="div-produtos">
	<div class="col-md-3 item-produto"></div>
	<div class="col-md-3 item-produto"></div>
	<div class="col-md-3 item-produto"></div>
	<div class="col-md-3 item-produto"></div>
</div>
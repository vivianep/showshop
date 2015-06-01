 <!-- Full Width Column -->
      
        <div class="container-fluid">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Resultado da Busca de Lojas
              <small></small>
            </h1>
            <ol class="breadcrumb">
              <li>
				<a href="<?php echo base_url('index.php');?>">
					<i class="fa fa-dashboard">
						Home
					</i>
				</a>
			  </li>
              <li class="active">Busca de Lojas</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
			<?php
				$i = 0;
				foreach ($query->result() as $row){ ?>
				<?php
					if ($i % 2 == 0) { ?>
						<div class="callout callout-info">
							<h4><?php echo $row->nome; ?></h4>
							<p><?php echo $row->descricao; ?></p>
						</div>
					<?php } else { ?> 
						<div class="callout callout-danger">
							<h4><?php echo $row->nome; ?></h4>
							<p><?php echo $row->descricao; ?></p>
						</div>
					<?php }
				$i = $i + 1;		
			 } ?>
			
            <?php /*<div class="box box-default">
              <div class="box-header with-border">
                <h3 class="box-title">Blank Box</h3>
              </div>
              <div class="box-body">
                The great content goes here
              </div><!-- /.box-body -->
            </div><!-- /.box --> */ ?>
			
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="pull-right hidden-xs">
            <b>Version</b> 2.0
          </div>
          <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
        </div><!-- /.container -->
      </footer>
    
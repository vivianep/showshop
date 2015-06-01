        <section class="content">

            <div class="row">
            <!-- left column -->
            <div class="col-md-9-register">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Cadastrar Leilão</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form"  accept-charset="utf-8" action="<?php echo base_url('index.php/leilao/salvar_dados')?>" method="POST">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Produto*</label>
                      <select class="form-control" name="produto">
							<?php foreach ($query->result() as $row){ ?>
								<option value="<?php echo $row->cod; ?>"><?php echo $row->serial." - ".$row->nome; ?></option>
							<?php } ?>
                      </select>
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Lance Inicial*</label>
                      <input type="text" class="form-control" name="precoinicial" placeholder="Lance Inicial (ex: 59.23)">
                    </div>                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Data Inicial*</label>
                      <input type="DateTime-Local" class="form-control" name="datainicial" placeholder="Data Inicial">
                    </div>              
                    <div class="form-group">
                      <label for="exampleInputEmail1">Data Final*</label>
                      <input type="DateTime-Local" class="form-control" name="datafinal" placeholder="Data Final">
                    </div>
                                      

                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                  </div>
                </form>
              </div><!-- /.box -->

</section><!-- /.content -->
     
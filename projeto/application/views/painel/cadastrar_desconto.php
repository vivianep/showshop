
        <section class="content">

            <div class="row">
            <!-- left column -->
            <div class="col-md-9-register">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Adicionar Desconto</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form"  accept-charset="utf-8" action="http://localhost/showshop/projeto/index.php/desconto/cadastrar_desconto" method="POST">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Produto*</label>
                      <select class="form-control" name="produto">
                        <option value="Acessórios p/ Celular">Acessórios p/ Celular</option>
                        <option value="Calçado">Calçado</option>
                        <option value="Câmera">Câmera</option>
                        <option value="Celular">Celular</option>
                        <option value="Instrumento Musical">Instrumento Musical</option>
                        <option value="Material Escolar">Material Escolar</option>
                        <option value="Som">Som</option>
                        <option value="Televisão">Televisão</option>
                        <option value="Vestimenta">Vestimenta</option>
                      </select>
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Porcentagem*</label>
                      <input type="text" class="form-control" name="desconto" placeholder="Porcengagem do Desconto (ex: 59.3)">
                    </div>                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Data Inicial*</label>
                      <input type="date" class="form-control" name="datainicial" placeholder="Data Inicial">
                    </div>              
                    <div class="form-group">
                      <label for="exampleInputEmail1">Data Final*</label>
                      <input type="date" class="form-control" name="datafinal" placeholder="Data Final">
                    </div>
                                      

                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                  </div>
                </form>
              </div><!-- /.box -->

</section><!-- /.content -->
     
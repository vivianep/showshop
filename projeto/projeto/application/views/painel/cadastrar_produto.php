        <section class="content">

            <div class="row">
            <!-- left column -->
            <div class="col-md-9-register">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Adicionar produto</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form"  accept-charset="utf-8" action="http://localhost/showshop/projeto/index.php/produto/salvar_dados" method="POST">
                  <div class="box-body">
                    <div class="form-group">
                      <input type="hidden" name="codloja" value="1">
                      <label for="exampleInputEmail1">Nome*</label>
                      <input type="text" class="form-control" name="nome" placeholder="Título do produto">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Serial</label>
                      <input type="text" class="form-control" name="serial" placeholder="Digite o serial do produto">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tipo do Produto*</label>
                      <select class="form-control" name="tipo">
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
                      <label for="exampleInputEmail1">Tamanho* </label>
                      <select class="form-control" name="tam">
                        <option value="PP">PP</option>
                        <option value="G">G</option>
                        <option value="37">37</option>
                        <option value="40">40</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Marca*</label>
                      <input type="text" class="form-control" name="marca" placeholder="Marca">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Quantidade*</label>
                      <input type="text" class="form-control" name="quantidade" placeholder="Quantidade">
                      
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Preço(Ex:9999.99)*</label>
                      <input type="text" class="form-control" name="preco" placeholder="Preco">
                      
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Descrição do Produto*</label>
                      <textarea type="text" class="form-control" name="descr" placeholder="Descrição"> </textarea>
                      
                    </div>
                    
                    
                    

                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                  </div>
                </form>
              </div><!-- /.box -->

</section><!-- /.content -->
     
        <div class="row">
          <section class="content">
                <div class="col-md-9-edit">
                  <div class="box box-primary">
                    <div class="box-header">
                      <h3 class="box-title">Editar produto</h3>
                    </div><!-- /.box-header -->
                    
                      <div class="box-body">
                            <form role="form" method="post" >
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nome</label>
                            <input type="text" class="form-control" name="nome" placeholder="Título do produto"/>
                            <input class="search btn btn-primary" type="submit" value="Pesquisar"/>
                          </div>
                        </form>
                        <div id="invisible-table">
                          <div class="box-header">
                            <h3 class="box-title">Tabela de Produtos</h3>
                          </div><!-- /.box-header -->
                          <table id="example2" class="table table-bordered table-hover">
                            <thead>
                              <tr>
                                <th>Nome do Produto</th>
                                <th>Tipo</th>
                                <th>Quantidade</th>
                                <th>Tamanho</th>
                                <th>Marca</th>
                                <th></th>
                                
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <form method="post">
                                  <td contenteditable='true'>Camiseta Branca</td>
                                  <td contenteditable='true'>Vestimenta</td>
                                  <td contenteditable='true'>200</td>
                                  <td contenteditable='true'>M</td>
                                  <td contenteditable='true'>Adidas</td>
                                  <td><input class="table-btn btn_primary" type="submit" value="Editar"></td>
                                </form>

                                
                              </tr>
                          </table>
                        <div>
                        </div>
                      </div>
                    </div>
                
          </section>
        </div>

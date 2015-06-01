

        <div class="row">
          <section class="content">
                <div class="col-md-9-edit">
                  <div class="box box-primary">
                    <div class="box-header">
                      <h3 class="box-title">Listagem dos Produtos </h3>
                    </div><!-- /.box-header -->
                      <div class="box-body">
                        <div id="invisible-table">
                          <table id="example2" class="table table-bordered table-hover">
                            <thead>
                              <tr>
                                <th>Nome do Produto</th>
                                <th>Tipo</th>
                                <th>Quantidade</th>
                                <th>Tamanho</th>
                                <th>Marca</th>
                                
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($query->result() as $row){ ?>
                              <tr>
                               
                                  <td><?php echo $row->nome; ?></td>
                                  <td ><?php echo $row->tipo; ?></td>
                                  <td ><?php echo $row->quantidade; ?></td>
                                  <td ><?php echo $row->tam; ?></td>
                                  <td ><?php echo $row->marca; ?></td>
                                
                              </tr>
                              <?php }?>
                            </tbody>
                          </table>
                        <div>
                        </div>
                      </div>
                    </div>
                
          </section>
        </div>
     
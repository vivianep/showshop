 <!-- Modal -->
<div id="myModal">
   <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Editar Produto</h4>
          </div>
          <div class="modal-body">
            <form role="form" id="form-modal-edit">
                <div class="box-body">
                  <div class="form-group">
                    <?php foreach ($query->result() as $row){ ?>
                    <h1> <?php echo $row->nome; ?></h1>
                    <?php } ?>

                    
                    <label for="exampleInputEmail1">Nome*</label>
                    <input type="text" class="form-control" name="nome" placeholder="Título do produto">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Serial</label>
                      <input type="text" class="form-control" name="nome" placeholder="Digite o serial do produto">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Tipo do Produto*</label>
                      <select class="form-control" name="tipo">
                      <option value="vestimenta">Vestimenta</option>
                      <option value="calcado">Calçado</option>
                      <option value="celular">Celular</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Tamanho* </label>
                      <select class="form-control" name="tam">
                        <option value="PP">PP</option>
                        <option value="G">G</option>
                        <option value="40">40</option>
                        <option value="37">37</option>
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
                      <label for="exampleInputEmail1">Desconto em porcentagem(Ex:10)*</label>
                      <input type="text" class="form-control" name="desc" placeholder="Desconto">
                  </div>
                  <input type="submit" id="btn-modal-edit" class="btn btn-primary" value="Salvar">
                </div>
              </form>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
    </div>
</div>
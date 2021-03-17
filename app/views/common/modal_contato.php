<div class="modal fade" id="contatoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen-sm-down" role="document">
    <div class="modal-content">
      <div class="modal-body">

        <a href="javascript:void(0)" class="close" data-bs-dismiss="modal" aria-label="Close">
          <?php echo getImg('ic_voltar_modal.png') ?>
        </a>

        <div class="container">
          <div class="row mt-5">

            <div class="col-md-8">
              <div class="card formulario">
                <h2>Fale conosco</h2>

                <form class="form_contato mt-4" action="" method="post">

                  <div class="row">
                    <div class="col-md-6">
                      <input type="text" class="form-control" placeholder="Nome" name="nome" value="">
                    </div>
                    <div class="col-md-6">
                      <input type="email" class="form-control" placeholder="E-mail" name="email" value="">
                    </div>
                  </div>

                  <div class="row mt-4">
                    <div class="col-md-6">
                      <input type="text" class="form-control" placeholder="Telefone" name="telefone" value="">
                    </div>
                    <div class="col-md-6">
                      <select class="form-control" name="Cargo">
                        <option value="">Cargo</option>
                        <option value="">Cargo 1</option>
                        <option value="">Cargo 2</option>
                      </select>
                    </div>
                  </div>

                  <div class="row mt-4">
                    <div class="col-md-6">
                      <input type="text" class="form-control" placeholder="Empresa" name="empresa" value="">
                    </div>
                    <div class="col-md-6">
                      <select class="form-control" name="Segmento">
                        <option value="">Segmento</option>
                        <option value="">Segmento 1</option>
                        <option value="">Segmento 2</option>
                      </select>
                    </div>
                  </div>

                  <div class="row mt-4">
                    <h6>Com qual departamento deseja falar?</h6>

                    <div class="col-md-6">
                      <div class="checkbox_list">
                        <label class="container_checkbox comercial_check">Comercial
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                        <label class="container_checkbox">Marketing/ Imprensa
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                      </div>

                      <div class="checkbox_list mt-3">
                        <label class="container_checkbox">Recursos Humanos
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                        <label class="container_checkbox">Compras
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                      </div>

                      <div class="checkbox_list mt-3">
                        <label class="container_checkbox">Outros
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                      </div>

                      <div class="form-group mt-3 hide esconder">
                        <h6>Qual o volume de consumo médio de energia em MWm?</h6>
                        <input type="text" class="form-control" placeholder="" name="consumo" value="">
                      </div>

                      <div class="hide esconder">
                        <h6 class="mt-3">Trabalha com o Mercado Livre de Energia?</h6>
                        <div class="checkbox_list mt-3">
                          <label class="container_checkbox">Sim
                            <input type="checkbox">
                            <span class="checkmark"></span>
                          </label>
                          <label class="container_checkbox">Não
                            <input type="checkbox">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                      </div>


                    </div>

                    <div class="col-md-6">
                      <textarea name="mensagem" placeholder="Mensagens:" class="form-control" rows="8" cols="80"></textarea>

                      <div class="checkbox_list mt-3">
                        <label class="container_checkbox"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                      </div>

                      <button type="submit" class="btn btn_primary" name="button">ENVIAR</button>

                    </div>

                  </div>

                </form>

              </div>
            </div>

            <div class="col-md-4 contato">
              <h3>Contato</h3>
              <hr>
              <a href="tel:551121993700"> <?php echo getImg('ic_telefone.png') ?> +55 11 2199-3700</a>

              <h3 class="mt-4">Endereço</h3>
              <hr>
              <h6>Matriz</h6>
              <p>Condomínio Rochaverá <br>
                Avenida das Nações Unidas, 14171 - Marble Tower - 11° Andar Brooklin Novo - CEP: 04794-000 São Paulo - SP
              </p>
              <h6 class="mt-4">Centro <br> de Distribuição:</h6>
              <p>Avenida Leonil Crê Bortolosso, 88 <br> Quitaúna - CEP: 06186-260 <br> Osasco - SP</p>
            </div>

          </div>
        </div>

        <div id="background"></div>

      </div>
    </div>
  </div>
</div>

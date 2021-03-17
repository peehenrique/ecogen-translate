<section id="banner">
  <div class="bg-video">
    <video autoplay loop src="<?php echo base_url('public/uploads/images/banner_video.mp4'); ?>"></video>
  </div>

  <div class="banner_1">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>Para todo <strong>tipo de negócio.</strong> <br> Para todo <strong>tipo de indústria.</strong>  <br> <strong>Ecogen Brasil</strong> </h2>
        </div>
      </div>

      <div class="row menu_solucoes">
        <div class="owl-carousel owl-theme owl-custom" id="carousel_1">
          <div class="item">
            <a href="<?php echo base_url('industrias'); ?>"> <?php echo getImg('menu_s_industrias.png') ?> </a>
          </div>
          <div class="item">
            <a href="<?php echo base_url('hospitais'); ?>"> <?php echo getImg('menu_s_hospitais.png') ?> </a>
          </div>
          <div class="item">
            <a href="<?php echo base_url('datacenter'); ?>"> <?php echo getImg('menu_s_data_centers.png') ?> </a>
          </div>
          <div class="item">
            <a href="<?php echo base_url('galpoes-logisticos'); ?>"> <?php echo getImg('menu_s_galpoes_logisticos.png') ?> </a>
          </div>
          <div class="item">
            <a href="<?php echo base_url('edificios-comerciais'); ?>"> <?php echo getImg('menu_s_edificios_comerciais.png') ?> </a>
          </div>
          <div class="item">
            <a href="<?php echo base_url('shopping-centers'); ?>"> <?php echo getImg('menu_s_shopping.png') ?> </a>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>


<section id="a_ecogen" class="sec_def">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-12">
        <h2 class="titulo_black">A Ecogen <br> investe no <br> <span>seu negócio</span></h2>
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="reducaoCusto">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <?php echo getImg('ic_reducao_de_custos.png') ?> Investimento Ecogen
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="reducaoCusto" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                A Ecogen investe até 100% no valor das soluções, pois confia no potencial de seus clientes que podem, então, focar no seu negócio e gerar valor através da nossa energia.
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="valorizacaoVida">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                  <?php echo getImg('ic_excelencia_inovacao.png') ?> Eficiência em Energia e Utilidades
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="valorizacaoVida" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Somos uma empresa focada em promover a melhor solução para cada tipo de negócio, através das melhores tecnologias e garantindo maior eficiência para os processos de nossos clientes.
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="exelenciaInovacao">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    <?php echo getImg('ic_confiabilidade.png') ?>  Confiabilidade
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="exelenciaInovacao" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    A Ecogen conta com equipes especializadas em operação e manutenção e um Centro de Controle Operacional que monitora e opera nossas plantas 24 horas por dia. Ou seja, confiabilidade para sua matriz energética.
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="sustentabilidade">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                      <?php echo getImg('ic_sustentabilidade.png') ?>  Sustentabilidade
                    </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="sustentabilidade" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Atuamos no presente com olhos no futuro. Em nosso portfólio promovemos soluções  que visam a sustentabilidade, oferecendo energia e utilidades de qualidade e ambientalmente responsáveis.
                    </div>
                  </div>

                </div>
                <div class="col-lg-6 col-12"></div>
              </div>
            </div>
            <?php echo getImg('a_ecogen.png', 'img-pq-ecogen') ?>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-12 text-center">
        <a href="<?php echo base_url('solucoes'); ?>" class="btn btn-lg btn_primary mt-4 t_upper">Saiba mais sobre nossas soluções</a>
      </div>
    </div>
  </div>

</section>

<section id="ecogen_home" class="sec_def">
  <?php echo getImg('img-pq-ecogen.png', 'img-pq-ecogen') ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-12">
      </div>
      <div class="col-lg-6 col-12">
        <div class="inner">
          <h2 class="titulo_black">Por que <br> <span>a Ecogen?</span> </h2>
          <p class="p_primary mt-5">Desde 2002 no mercado, a Ecogen é uma empresa brasileira que rapidamente se tornou sinônimo de qualidade na área de soluções integradas de energia.
            <br>
            Hoje, é líder no desenvolvimento, implantação e gerenciamento de soluções energéticas economicamente atrativas e ambientalmente responsáveis.
          </p>
        </div>
      </div>
    </div>

    <div class="row row_card">
      <div class="col">

        <div class="box">
          <div class="card first" style="background: linear-gradient(rgb(0 0 0 / 50%), rgb(0 0 0 / 50%)), url(<?php echo base_url('public/uploads/images/img-grupo-mitsui.png'); ?>)">
            <?php echo getImg('ic_grupo_mitsui.png') ?>
            <h6>Grupo <br> Mitsui</h6>
            <hr>
          </div>
          <div class="second">
            <p>Somos uma empresa do Grupo Mitsui & Co, um dos maiores conglomerados do Japão, com presença em mais de 66 países e investimento em diversas áreas de atuação.</p>
          </div>
        </div>

      </div>
      <div class="col">

        <div class="box">
          <div class="card first" style="background: linear-gradient(rgb(0 0 0 / 50%), rgb(0 0 0 / 50%)), url(<?php echo base_url('public/uploads/images/img-om-diferenciado.png'); ?>)">
            <?php echo getImg('ic_oem_diferenciado.png') ?>
            <h6>O&M <br> Diferenciado</h6>
            <hr>
          </div>
          <div class="second">
            <p>Profissionais multidisciplinares, especializados e preparados para operar com eficiência, antecipando ações de forma preventiva e garantindo alta performance.</p>
          </div>
        </div>

      </div>
      <div class="col">
        <div class="box">
          <div class="card first" style="background: linear-gradient(rgb(0 0 0 / 50%), rgb(0 0 0 / 50%)), url(<?php echo base_url('public/uploads/images/img_tecnologia_de_ponta.png'); ?>)">
            <?php echo getImg('ic_tecnolgia_de_ponta.png') ?>
            <h6>Tecnologia <br> de Ponta </h6>
            <hr>
          </div>
          <div class="second">
            <p>Trabalhamos com os melhores e mais modernos equipamentos e contamos com o Centro de Controle Operacional (CCO), que monitora e opera nossas plantas remotamente, garantindo agilidade e segurança aos nossos clientes.</p>
          </div>
        </div>
      </div>
      <div class="col">

        <div class="box">
          <div class="card first" style="background: linear-gradient(rgb(0 0 0 / 50%), rgb(0 0 0 / 50%)), url(<?php echo base_url('public/uploads/images/img_consultoria_gratuita.png'); ?>)">
            <?php echo getImg('ic_projeto_customizado.png') ?>
            <h6>Projeto 100% <br> Customizado </h6>
            <hr>
          </div>
          <div class="second">
            <p>Assim como cada negócio é único, nossas soluções também são. Cada projeto é criado de acordo com a necessidade e realidade de nossos clientes, buscando eficiência e economia com excelência.</p>
          </div>
        </div>

      </div>
    </div>

    <div class="row mt-5 analise_preliminar">
      <div class="col-12 text-center">
        <!-- <a href="#" class="btn btn-lg btn_primary mt-4">Faça uma consultoria gratuita para o seu negócio</a> -->

        <div class="card">

          <h2 class="titulo_black">Quer ter uma <span>análise preliminar</span> <br> sobre o cenário do seu negócio?</h2>

          <div class="row mt-5">
            <div class="col-md-12">
              <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#contatoModal" class="btn btn-lg btn_primary mr-4">FALE COM UM DE NOSSOS CONSULTORES</a>
              <a href="https://forms.office.com/Pages/ResponsePage.aspx?id=C-P_Uepr306Kzq_znZMhUbDks70XCoRCnfgPLrzHQYZUMk8xRTBGMUNDS0Y1OUVURU1STEs0MTAxUy4u" target="_blank" class="btn btn-lg btn_primary">SIMULE SUA ECONOMIA</a>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
</section>

<section id="como_trabalhamos">
  <?php echo getImg('fundo_como_trabalhamos.png', 'fundo_como_trabalhamos') ?>
  <div class="container sec_def">
    <div class="row">
      <div class="col-sm-6">
        <div class="col leftmenu atuacao padding-quem-somos">
          <h2>Temos um modelo <br>
            de negócio que <br>
            <span>atende toda a cadeia</span> <br>
            <span>ou parte dela</span>
            <br><br>
            A necessidade <br>
            do cliente é que <br>
            <span>define nosso escopo</span>
          </h2>
        </div>
      </div>
      <div class="col-sm-6 .maincontent mt-5">
        <h6>Como <br> trabalhamos</h6>

        <span class="card mt-4 active" data-section="section_1">
          <?php echo getImg('ic_solucao.png') ?> <span>01 -  Solução <br> <b>Após a análise preliminar, definimos qual <br> a melhor solução para o seu negócio.</b> </span>
        </span>

        <?php echo getImg('img_linha_v.png', 'img_linha') ?>
        <span class="card mt-4" data-section="section_2">
          <?php echo getImg('ic_investimentos.png') ?> <span>02 -  Investimento <b>A Ecogen investe até 100% do valor <br> das soluções propostas.</b> </span>
        </span>

        <?php echo getImg('img_linha_v.png', 'img_linha') ?>
        <span class="card mt-4" data-section="section_3">
          <?php echo getImg('ic_instalacao.png') ?> <span>03 -  Instalação <b>Definição do parque de máquinas, <br> construção e instalação do seu projeto. </b> </span>
        </span>

        <?php echo getImg('img_linha_v.png', 'img_linha') ?>
        <span class="card mt-4" data-section="section_4">
          <?php echo getImg('ic_oe_m.png') ?> <span>04 - O&M <b>Profissionais altamente qualificados <br> farão a operação e manutenção de sua <br> planta. Excelência e inovação para o <br> seu negócio.</b> </span>
        </span>
      </div>

    </div>
  </div>
</section>

<section id="cst_eco" class="sec_def">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-12">
        <h2 class="titulo_black">Conheça o <br> <span>nosso CCO</span> </h2>
        <p class="p_primary mt-5">Em nosso Centro de Controle <br> Operacional, monitoramos e operamos <br> as plantas de nossos clientes, 24 horas <br> por dia, com uma equipe especializada <br> e multidisciplinar.</p>
      </div>
      <div class="col-lg-6 col-12">

        <video width="100%" class="border-radius" controls>
          <source src="<?php echo base_url('public/uploads/images/video_conheca_cco.mp4'); ?>" type="video/mp4">
          </video>

        </div>
      </div>
    </div>
  </section>

  <section id="blog" class="sec_def">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="titulo_black"><span>Blog</span> </h2>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-lg-4 col-12">
          <div class="card">
            <img src="<?php echo base_url('public/uploads/images/blog_noticia_fake.png'); ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> <i class="fa fa-calendar-o"></i> 12/20/2021</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="card">
            <img src="<?php echo base_url('public/uploads/images/blog_noticia_fake.png'); ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> <i class="fa fa-calendar-o"></i> 12/20/2021</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="card">
            <img src="<?php echo base_url('public/uploads/images/blog_noticia_fake.png'); ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> <i class="fa fa-calendar-o"></i> 12/20/2021</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

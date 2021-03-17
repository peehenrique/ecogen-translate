<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <title><?php echo $titulo ?></title>

  <!-- <link rel="shortcut icon" href="<?php echo base_url('public/uploads/favicon.png'); ?>" type="image/x-icon"> -->

  <!-- Plugins CSS -->
  <!-- link rel="stylesheet" href="<?php echo base_url('public/plugins/bootstrap/css/bootstrap.min.css'); ?>"> -->
  <link rel="stylesheet" href="<?php echo base_url('public/plugins/font-awesome/css/font-awesome.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('public/plugins/owl-carousel/owl.carousel.min.css'); ?>">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200;300;400;600;700&display=swap" rel="stylesheet">

  <!-- css -->
  <link rel="stylesheet" href="<?php echo base_url('public/themes/front/css/style.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('public/themes/front/css/responsive.min.css'); ?>">

  <script type="text/javascript">
  var url_loja = "<?php echo base_url() ?>";
  </script>

</head>

<body class="<?php if (isset($id_pagina)) echo $id_pagina ?>">

  <?php
  include "header.php"
  ?>

  <?php
  if (isset($view)) {
    $this->load->view($view);
  }
  ?>

  <section id="newsletter">
    <div class="container">
      <div class="row">

        <div class="col-lg col-12">
          <h2>Newsletter</h2>
        </div>
        <div class="col-lg col-12">
          <h6>Digite seu email <br> e fique por dentro</h6>
        </div>
        <div class="col">
          <div class="form">
            <?php echo getImg('ic_email_newsletter.png', 'ic_email_newsletter') ?>
            <input type="text" name="email_newsletter" placeholder="SEU EMAIL" value="">
            <?php echo getImg('ic_send_newsletter.png') ?>
          </div>
          <p>is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's standard
            dummy text ever since the 1500s,</p>
          </div>

        </div>
      </div>
    </section>
    <footer>
      <div class="container">

        <div class="row">
          <div class="col-md-3 col-12 links">
            <h4>Redes Sociais</h4>

            <div class="social">
              <ul>
                <li class="pt-0"><a href="https://www.facebook.com/ecogenbrasil" target="_blank"><?php echo getImg("ic_facebook.png"); ?> <span>/ecogenbrasil</span> </a>
                </li>
                <li><a href="https://www.instagram.com/ecogenbrasil/" target="_blank"><?php echo getImg("ic_instagram.png"); ?> <span>/ecogenbrasil</span> </a>
                </li>
                <li class="bb-0"><a href="https://www.linkedin.com/company/ecogen-brasil" target="_blank"><?php echo getImg("ic_linkedin.png"); ?> <span>/ecogen-brasil</span> </a>
                </li>
              </ul>
            </div>

          </div>

          <div class="col-md-3 links">
            <h4>Quem somos</h4>
            <ul>
              <li><a href="<?php echo base_url('quem-somos'); ?>">Quem somos</a></li>
              <li><a href="#" class="menu_segmentos">Segmentos</a></li>
              <li><a href="<?php echo base_url('solucoes'); ?>">Soluções</a></li>
              <li><a href="<?php echo base_url('operacao-manutencao'); ?>">O&M</a></li>
              <li><a href="<?php echo base_url('sustentabilidade'); ?>">Sustentabilidade</a></li>
              <li><a href="<?php echo base_url('parceiros'); ?>">Parceiros</a></li>
              <li><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#contatoModal">Contato</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </div>
          <div class="col-md-3 links">
            <h4>Segmentos</h4>
            <ul>
              <li><a href="<?php echo base_url('industrias'); ?>">Indústrias</a></li>
              <li><a href="<?php echo base_url('hospitais'); ?>">Hospitais</a></li>
              <li><a href="<?php echo base_url('data-centers'); ?>">Data Centers & Telecom</a></li>
              <li><a href="<?php echo base_url('galpoes-logisticos'); ?>">Galpões Logísticos</a></li>
              <li><a href="<?php echo base_url('edificios-comerciais'); ?>">Edifícios Comerciais</a></li>
              <li><a href="<?php echo base_url('shopping-centers'); ?>">Shopping Centers</a></li>
            </ul>
          </div>
          <div class="col-md-3 links">
            <h4>Contato</h4>
            <ul>
              <li><a href="#"><?php echo getImg('ic_telefone_footer.png') ?> : +55 (11) 2199-3700</a></li>
              <li>
                <p>Matriz:<br>
                  Condomínio Rochaverá <br>
                  Avenida das Nações Unidas, 14171 <br>
                  Marble Tower - 11° Andar <br>
                  Brooklin Novo - CEP: 04794-000 <br>
                  São Paulo - SP
                  <br><br>
                  Centro de Distribuição:<br>
                  Avenida Leonil Crê Bortolosso, 88 <br>
                  Quitaúna - CEP: 06186-260 <br>
                  Osasco - SP</p>
                </li>
              </ul>
            </div>

          </div>

          <div class="row copy">
            <div class="col-lg-6 col-12">
              <p>© Copyright © <?php echo date("Y"); ?> Ecogen- Todos os direitos reservados.</p>
            </div>
            <div class="col-lg-6 col-12 text-right">
              <!-- <p>Feito por: <?php echo getImg('logo_mais_clicks.png') ?> </p> -->
              <?php echo getImg('logo_b.png', 'logo_footer') ?>
            </div>
          </div>

        </div>
      </footer>

      <?php $this->load->view('common/modal_contato'); ?>

      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="<?php echo base_url('public/plugins/jquery/jquery-3.5.1.min.js'); ?>"></script>
      <!-- <script src="<?php echo base_url('public/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script> -->


      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

      <!-- Plugins Js -->
      <script src="<?php echo base_url('public/plugins/owl-carousel/owl.carousel.min.js'); ?>"></script>

      <!-- Custom -->
      <!-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script> -->

      <script src="<?php echo base_url('public/themes/front/js/front.js'); ?>" charset="utf-8"></script>

    </body>

    </html>

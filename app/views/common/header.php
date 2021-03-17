<header>
  <div class="container">
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="<?php echo base_url(''); ?>"> <?php echo getImg('logo_b.png') ?> </a>

      <button class="navbar-toggler" type="button" data-toggle="modal" data-target="#menuMobile">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto menu_esquerdo">
          <li class="nav-item">
            <a class="nav-link <?php if($this->uri->uri_string()==""){echo 'active';}?>" href="<?php echo base_url(''); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($this->uri->uri_string()=="quem-somos"){echo 'active';}?>" href="<?php echo base_url('/quem-somos'); ?>">Quem somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link menu_segmentos <?php echo ResolveMenuSegmentos($this->uri->uri_string()) ?>" href="javascript:void(0)">Segmentos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($this->uri->uri_string()=="solucoes"){echo 'active';}?>" href="<?php echo base_url('/solucoes'); ?>">Soluções</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($this->uri->uri_string()=="operacao-manutencao"){echo 'active';}?>" href="<?php echo base_url('/operacao-manutencao'); ?>">O&M</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($this->uri->uri_string()=="sustentabilidade"){echo 'active';}?>" href="<?php echo base_url('/sustentabilidade'); ?>">Sustentabilidade</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($this->uri->uri_string()=="parceiros"){echo 'active';}?>" href="<?php echo base_url('/parceiros'); ?>">Parceiros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($this->uri->uri_string()=="contato"){echo 'active';}?>" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#contatoModal">Contato</a>
          </li>
        </ul>

        <div class="form-inline my-2 my-lg-0">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#"><?php echo getImg('pt_en.png') ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> <?php echo getImg('mao.png') ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link menu_parceiros" href="javascript::"> <?php echo getImg('noite.png') ?></a>
            </li>
          </ul>
        </div>

      </div>
    </nav>
  </div>
</header>

<div id="segmentos_menu" class="hide">
  <div class="card">
    <div class="row">
      <div class="col-md-6">
        <?php echo getImg('menu_solucoes.png', 'w-100') ?>
      </div>
      <div class="col-md-6 pl">
        <ul>
          <li> <a href="<?php echo base_url('industrias'); ?>">Indústrias</a> </li>
          <li> <a href="<?php echo base_url('hospitais'); ?>">Hospitais</a> </li>
          <li> <a href="<?php echo base_url('data-center'); ?>">Data centers & Telecom</a> </li>
          <li> <a href="<?php echo base_url('galpoes-logisticos'); ?>">Galpões Logísticos</a> </li>
          <li> <a href="<?php echo base_url('edificios-comerciais'); ?>">Edifícios Comerciais</a> </li>
          <li> <a href="<?php echo base_url('shopping-centers'); ?>">Shopping Centers</a> </li>
        </ul>
      </div>
    </div>
  </div>
</div>

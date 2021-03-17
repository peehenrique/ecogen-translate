<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <title><?php echo $titulo; ?></title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" href="<?php echo base_url('/public/themes/default/app-assets/vendors/css/vendors.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/public/themes/default/app-assets/vendors/css/charts/apexcharts.css'); ?>">
  <!-- END: Vendor CSS-->

  <!-- BEGIN: Theme CSS-->
  <link rel="stylesheet" href="<?php echo base_url('/public/themes/default/app-assets/css/bootstrap.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/public/themes/default/app-assets/css/bootstrap-extended.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/public/themes/default/app-assets/css/colors.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/public/themes/default/app-assets/css/components.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/themes/default/app-assets/css/themes/semi-dark-layout.css'); ?>">

  <!-- BEGIN: Page CSS-->
  <link rel="stylesheet" href="<?php echo base_url('/public/themes/default/app-assets/css/core/menu/menu-types/vertical-menu.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/public/themes/default/app-assets/css/core/colors/palette-gradient.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/public/themes/default/app-assets/css/pages/dashboard-analytics.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/public/themes/default/app-assets/css/pages/dashboard-ecommerce.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/themes/default/app-assets/vendors/css/tables/datatable/datatables.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/themes/default/app-assets/css/plugins/forms/wizard.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/themes/default/'); ?>app-assets/css/pages/faq.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/themes/default/app-assets/css/pages/app-ecommerce-shop.css') ?>">

  <link href="http://hayageek.github.io/jQuery-Upload-File/4.0.11/uploadfile.css" rel="stylesheet">
  <!-- include summernote css/js -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">

  <!-- END: Page CSS-->

  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" href="<?php echo base_url('/public/themes/default/assets/css/style.css'); ?>">
  <!-- END: Custom CSS-->

  <script type="text/javascript">
  var url_loja = "<?php echo base_url()?>";
  </script>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern ecommerce-application 2-columns navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

  <!-- BEGIN: Header-->
  <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
    <div class="navbar-wrapper">
      <div class="navbar-container content">
        <div class="navbar-collapse" id="navbar-mobile">
          <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
          </div>
          <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav">
              <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
            </ul>
          </div>
          <ul class="nav navbar-nav float-right">

            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>

            <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
              <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600"><?php echo $this->session->userdata('username'); ?></span></div><span>
                <?php $user = $this->ion_auth->user()->row(); ?>
                <?php if ($user->foto): ?>
                  <img class="round" src="<?php echo base_url('public/uploads/usuarios/'.$user->foto); ?>" alt="avatar" height="40" width="40">
                <?php else: ?>
                  <!-- <img class="round" src="<?php echo base_url('public/uploads/usuarios/no_user.jpg'); ?>" alt="avatar" height="40" width="40"> -->
                <?php endif; ?>
              </span>
            </a>
            <!-- <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="<?php echo base_url('admin/perfil'); ?>">
            <i class="feather icon-user"></i> Editar Perfil</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo base_url('admin/login/sair'); ?>"><i class="feather icon-power"></i> Sair</a>
          </div> -->
        </li>
      </ul>
    </div>
  </div>
</div>
</nav>

<!-- END: Header-->

<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
      <li class="nav-item mr-auto"><a class="navbar-brand" href="<?php echo base_url(''); ?>">
        <img src="<?php echo base_url('public/uploads/images/logo.png'); ?>" width="100%" alt="">
      </a></li>
      <li class="nav-item nav-toggle">
        <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
          <i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i>
          <i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i>
        </a>
      </li>
    </ul>
  </div>
  <div class="shadow-bottom"></div>
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li class=" navigation-header"><span>Menu</span>
      </li>

      <li class="<?php if($this->uri->uri_string()=="admin/solucoes"){echo 'active';}?> nav-item"><a href="<?php echo base_url('admin/solucoes') ?>"><i class="feather icon-image"></i><span class="menu-title">Soluções</span></a>
      </li>

      <li class="<?php if($this->uri->uri_string()=="admin/liderancas"){echo 'active';}?> nav-item"><a href="<?php echo base_url('admin/liderancas') ?>"><i class="feather icon-users"></i><span class="menu-title">Lideranças</span></a>
      </li>

      <li class="<?php if($this->uri->uri_string()=="admin/clientes"){echo 'active';}?> nav-item"><a href="<?php echo base_url('admin/clientes') ?>"><i class="feather icon-image"></i><span class="menu-title">Clientes</span></a>
      </li>

      <li class="<?php if($this->uri->uri_string()=="admin/sair"){echo 'active';}?> nav-item"><a href="<?php echo base_url('admin/login/sair') ?>"><i class="feather icon-log-out"></i><span class="menu-title">Sair</span></a>
      </li>

    </ul>

  </div>
</div>
<!-- END: Main Menu-->
<!-- BEGIN: Content-->
<div class="app-content content">
  <div class="content-overlay"></div>
  <div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
      <?php
      if (isset($view)) {
        $this->load->view($view);
      }
      ?>

    </div>
  </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<script src="<?php echo base_url('/public/themes/default/assets/js/jquery.min.js'); ?>"></script>

<!-- BEGIN: Vendor JS-->
<script src="<?php echo base_url('/public/themes/default/app-assets/vendors/js/vendors.min.js'); ?>"></script>    <!-- BEGIN Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="<?php echo base_url('/public/themes/default/app-assets/js/core/app-menu.js'); ?>"></script>
<script src="<?php echo base_url('/public/themes/default/app-assets/js/core/app.js'); ?>"></script>
<script src="<?php echo base_url('/public/themes/default/app-assets/js/scripts/components.js'); ?>"></script>


<!-- END: Page JS-->
<!-- BEGIN: Page JS-->
<script src="<?php echo base_url('/public/themes/default/app-assets/js/scripts/datatables/datatable.js') ?>"></script>
<script src="<?php echo base_url('/public/plugins/jquery-mask/jquery.mask.js'); ?>"></script>

<!-- END: Page JS-->

<!-- //BIBLIOTECA DE UPLOAD JS-->
<script src="http://hayageek.github.io/jQuery-Upload-File/4.0.11/jquery.uploadfile.min.js"></script>


<!-- BEGIN: Page Vendor JS-->
<script src="<?php echo base_url('/public/themes/default/app-assets/vendors/js/tables/datatable/vfs_fonts.js') ?>"></script>
<script src="<?php echo base_url('/public/themes/default/app-assets/vendors/js/tables/datatable/datatables.min.js') ?>"></script>
<script src="<?php echo base_url('/public/themes/default/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') ?>"></script>
<script src="<?php echo base_url('/public/themes/default/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('/public/themes/default/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('/public/themes/default/app-assets/vendors/js/extensions/jquery.steps.min.js') ?>"></script>
<script src="<?php echo base_url('/public/themes/default/app-assets/vendors/js/forms/validation/jquery.validate.min.js') ?>"></script>
<!-- END: Page Vendor JS-->


<!-- BEGIN: Page JS-->
<script src="<?php echo base_url('/public/themes/default/app-assets/js/scripts/forms/wizard-steps.js') ?>"></script>
<script src="<?php echo base_url('/public/themes/default/app-assets/js/scripts/pages/app-ecommerce-shop.js') ?>"></script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
<!-- END: Page JS-->


<script src="<?php echo base_url('/public/themes/default/assets/js/table2excel.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('/public/themes/default/app-assets/js/scripts/pages/app-chat.js'); ?>"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9hUnNy4yY8tqvb5rO-tZ3vCUAjoDz554&libraries=places&callback=initAutocomplete" async defer></script>
<!-- <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyB9hUnNy4yY8tqvb5rO-tZ3vCUAjoDz554"></script> -->
<script src="<?php echo base_url('/public/themes/default/assets/js/main.js'); ?>"></script>

<script type="text/javascript">
$('.text_area_wp').summernote();
$(function () {
  $("#btnExport").click(function () {
    $("#tblLeads").table2excel({
      filename: "Leads.xls"
    });
  });
});

</script>

</body>
<!-- END: Body-->

</html>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

  <link rel="icon" type="image/png" href="<?php echo base_url('public/uploads/ic_tma.png'); ?>"/>

  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" href="<?php echo base_url('/public/themes/default/app-assets/vendors/css/vendors.min.css'); ?>">
  <!-- END: Vendor CSS-->

  <!-- BEGIN: Theme CSS-->
  <link rel="stylesheet" href="<?php echo base_url('/public/themes/default/app-assets/css/bootstrap.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/public/themes/default/app-assets/css/bootstrap-extended.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/public/themes/default/app-assets/css/colors.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/public/themes/default/app-assets/css/components.css'); ?>">

  <!-- BEGIN: Page CSS-->
  <link rel="stylesheet" href="<?php echo base_url('/public/themes/default/app-assets/css/core/menu/menu-types/horizontal-menu.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/public/themes/default/app-assets/css/core/colors/palette-gradient.css'); ?>">

  <link rel="stylesheet" href="<?php echo base_url('/public/themes/default/app-assets/css/pages/authentication.css'); ?>">

  <!-- END: Page CSS-->

  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" href="<?php echo base_url('/public/themes/default/assets/css/style.css'); ?>">
  <!-- END: Custom CSS-->

</head>

<body class="horizontal-layout horizontal-menu 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="hover" data-menu="horizontal-menu" data-col="1-column">
  <!-- BEGIN: Content-->
  <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="row flexbox-container">
          <div class="col-xl-8 col-11 d-flex justify-content-center">
            <div class="card bg-authentication rounded-0 mb-0">
              <div class="row m-0">
                <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                  <img src="<?php echo base_url('/public/uploads/logo.gif') ?>" alt="farma" width="100%">
                </div>
                <div class="col-lg-6 col-12 p-0">
                  <div class="card rounded-0 mb-0 px-2">
                    <div class="card-header pb-1">
                      <div class="card-title">
                        <h4 class="mb-0">Esqueceu a senha?</h4>
                      </div>
                    </div>
                    <p class="px-2">Informe o seu e-mail para redefinir a senha</p>

                    <div class="col-lg-12">
                      <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                      <?php getMsg('recuperarSenha'); ?>
                    </div>

                    <div class="card-content">
                      <div class="card-body pt-1">
                        <h4>Código enviado com sucesso, por favor verifique o seu email</h4>
                      </div>
                    </div>
                    <div class="login-footer">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

      </div>
    </div>
  </div>


  <!-- BEGIN: Vendor JS-->
  <script src="<?php echo base_url('/public/themes/default/app-assets/vendors/js/vendors.min.js'); ?>"></script>
  <!-- BEGIN Vendor JS-->

  <!-- BEGIN: Page Vendor JS-->
  <script src="<?php echo base_url('/public/themes/default/app-assets/vendors/js/ui/jquery.sticky.js'); ?>"></script>
  <!-- END: Page Vendor JS-->

  <!-- BEGIN: Theme JS-->
  <script src="<?php echo base_url('/public/themes/default/app-assets/js/core/app-menu.js'); ?>"></script>
  <script src="<?php echo base_url('/public/themes/default/app-assets/js/core/app.js'); ?>"></script>
  <script src="<?php echo base_url('/public/themes/default/app-assets/js/scripts/components.js'); ?>"></script>
  <!-- END: Theme JS-->

</body>
</html>

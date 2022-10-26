<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="es" class="translated-ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Catalogo</title>
  <link rel="stylesheet" href="../vistas/librerias/dist/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../vistas/librerias/dist/bootstrap/css/all.css">
  <link rel="stylesheet" type="text/css" href="../vistas/librerias/dist/bootstrap/css/fontawesome.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../vistas/librerias/dist/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../vistas/librerias/dist/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../vistas/librerias/dist/css/adminlte.min.css">
  <body class=" layout-fixed ">
    <div class="wrapper">



      <!-- Navbar -->
      <nav class=" navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar " style="background: #0056b3">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">

            <div class="badge badge mr-3 "> <img src="../catalogo/logo/logo1.jpeg" width="160" height="45" > </div>

          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="index.php"  class="nav-link text-light">Incio</a>

          </li>  
          <li class="nav-item d-none d-sm-inline-block">
            <a href="Nosotros.php"  class="nav-link text-light">Nosotros</a>

          </li> 
          <li class="nav-item d-none d-sm-inline-block">
           <a href="../cata.php"  class="nav-link text-light">Catalogo</a>

         </li> 
         <li class="nav-item d-none d-sm-inline-block">
          <a href="Contactanos.php"  class="nav-link text-light">Contactanos</a>

        </li> 
      </ul>

      <ul class="navbar-nav ml-auto">

       <li class="nav-item">
         <i class="fas fa-user"style="color: white;width:20px; height:20px"></i>
         <a style="color: white" href="../home.php"> inicio</a>

       </li> 


       <li class="nav-item">
        <i   class="fab fa-facebook-square"style="color: white;width:30px; height:20px"></i>
        <a style="color: white" href="https://www.facebook.com/VM-Motors-Bolivia-101499138107778/">Facebook</a>

      </li>   
    </nav>

    <video src="../catalogo/video/video.mp4" class="d-block w-100 bg-dark "  height="550" autoplay="" poster="img/motos/fondo.jpeg" muted="" loop="" ></video>

    <div class="container-fliud ml-30 mr-30  align-items-center bg-light ">
      <div class="row ">
        <!--<button style="color: aqua"  class="btn btn-secondary  btn-block"> <h2>NUESTAS MARCAS</h2> </button>-->
      </div>


      <div style="background: #0056b3" class="row flex-xl-nowrap"  >
        <div style="color: skyblue" class="col-12 col-md-4  bd-sidebar">
          <div class="elementor-column-wrap elementor-element-populated">
            <div class="elementor-widget-wrap">
              <div class="elementor-element elementor-element-75fcb12 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="75fcb12" data-element_type="widget" data-widget_type="icon-box.default">
                <div class="elementor-widget-container">
                  <div class="elementor-icon-box-wrapper">
                    <div class="elementor-icon-box-icon">
                      <span style="color: white" class="elementor-icon elementor-animation-" >
                        <i aria-hidden="true" class="fas fa-piggy-bank"></i>  
                      </span>
                    </div>
                    <div class="elementor-icon-box-content">
                      <h5 class="elementor-icon-box-title">
                        <span >Al crédito y al contado</span>
                      </h5>
                      <p class="elementor-icon-box-description">Contamos con las mejores marcas de industria china en motocicletas.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="elementor-element elementor-element-9bdea1e elementor-align-left elementor-widget elementor-widget-button" data-id="9bdea1e" data-element_type="widget" data-widget_type="button.default">
                <div class="elementor-widget-container">
                  <div class="elementor-button-wrapper">
                    <a href="#" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                      <span class="elementor-button-content-wrapper">
                        <span style="color: white" class="elementor-button-icon elementor-align-icon-left">
                          <i aria-hidden="true" class="far fa-calendar-check"></i>
                        </span>
                        <span style="color:white" class="elementor-button-text">Contáctanos</span>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div style="color: skyblue" class="col-12 col-md-4 col-xl bd-sidebar">
          <div class="elementor-column-wrap elementor-element-populated">
            <div class="elementor-widget-wrap">
              <div class="elementor-element elementor-element-9f91804 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="9f91804" data-element_type="widget" data-widget_type="icon-box.default">
                <div class="elementor-widget-container">
                  <div class="elementor-icon-box-wrapper">
                    <div class="elementor-icon-box-icon">
                      <span style="color: white" class="elementor-icon elementor-animation-" >
                        <i aria-hidden="true" class="fas fa-motorcycle"></i>
                      </span>
                    </div>
                    <div class="elementor-icon-box-content">
                      <h5 class="elementor-icon-box-title">
                        <span >Las mejores marcas</span>
                      </h5>
                      <p class="elementor-icon-box-description">Acércate a nuestra tienda estamos para brindarte la mejor atención</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="elementor-element elementor-element-5b2a47c elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="5b2a47c" data-element_type="widget" data-widget_type="icon-list.default">
                <div class="elementor-widget-container">
                  <ul class="elementor-icon-list-items">
                    <li class="elementor-icon-list-item">
                      <span class="elementor-icon-list-icon">
                        <i aria-hidden="true" class="fas fa-check-circle"></i>
                      </span>
                      <span class="elementor-icon-list-text">Lun.- Vie.: 9:00 Am – 19:00 Pm</span>
                    </li>
                    <li class="elementor-icon-list-item">
                      <span class="elementor-icon-list-icon">
                        <i aria-hidden="true" class="fas fa-check-circle"></i>
                      </span>
                      <span class="elementor-icon-list-text">Sab.: 9:00 Am – 13:00PM</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div style="color: skyblue" class="col-12 col-md-4 col-xl bd-sidebar">
          <div class="elementor-column-wrap elementor-element-populated">
            <div class="elementor-widget-wrap">
              <div class="elementor-element elementor-element-0613109 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="0613109" data-element_type="widget" data-widget_type="icon-box.default">
                <div class="elementor-widget-container">
                  <div class="elementor-icon-box-wrapper">
                    <div class="elementor-icon-box-icon">
                      <span style="color: white" class="elementor-icon elementor-animation-" >
                        <i aria-hidden="true" class="fas fa-phone-square-alt"></i>  
                      </span>
                    </div>
                    <div class="elementor-icon-box-content">
                      <h5 class="elementor-icon-box-title">
                        <span >Las mejores motocicletas</span>
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="elementor-element elementor-element-2f64a47 elementor-widget elementor-widget-heading" data-id="2f64a47" data-element_type="widget" data-widget_type="heading.default">
                <div class="elementor-widget-container">
                  <p class="elementor-icon-box-description">Comunicate con nosotros.</p>
                  <p class="elementor-heading-title elementor-size-default">68085219 </p>   
                </div>
              </div>
              <div class="elementor-element elementor-element-c719afd elementor-widget elementor-widget-button" data-id="c719afd" data-element_type="widget" data-widget_type="button.default">
                <div class="elementor-widget-container">
                  <div class="elementor-button-wrapper">
                    <a href="tel:68085219" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                      <span class="elementor-button-content-wrapper">
                        <span style="color: white" class="elementor-button-icon elementor-align-icon-left">
                          <i aria-hidden="true" class="fas fa-phone-alt"></i>     
                        </span>
                        <span style="color: white" class="elementor-button-text">llama ahora</span>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>







  </head>


  <script src="../vistas/librerias/dist/jquery/jquery-1.12.1.min.js"></script>
  <!-- Bootstrap -->
  <script src="../vistas/librerias/dist/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- AdminLTE App -->
  <script src="../vistas/librerias/dist/js/adminlte.js"></script>


  <script src="../vistas/librerias/dist/bootstrap/js/bootstrap.min.js">
  </script>
</body>
</html>
<?php

include('Session/BD.php');

include('Session/Cartx.php');

session_start();

include('Session/BD.php');

include('Session/Ident.php');

@$UserN = $_SESSION['Usuario'];

@$User = $_SESSION['Id'];

@$Foto = $_SESSION['FOTO'];





?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>DRO-PC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <script type="text/javascript"
                src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
  <link rel="icon" type="icon" href="images/ico.png">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<body>

 <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content" style="bottom:-80px;">
      <div class="modal-header tit-up">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Usuario</h4>
      </div>
      <div class="modal-body customer-box">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
          <li><a class="active" href="#Login" data-toggle="tab">Login</a></li> 
          <li><a href="#Registration" data-toggle="tab">Registro</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="Login">
            <form role="form" class="form-horizontal" method = "POST" action="Session/Inicio_Seccion.php">
              <div class="form-group">
                <div class="col-sm-12">
                <input class="form-control" id="email1" placeholder="Identificación" type="text" name = "Ident">
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-sm-12">
                     <input class="form-control" id="exampleInputPassword1" placeholder="Contraseña" type="password" name = "ContraL">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-10">
                  <button type="button" class="btn btn-light btn-radius btn-brd grd1" id="EnviarL">
                    Enviar
                  </button>
                  <a class="for-pwd" href="javascript:;">¿Olvidaste tu contraseña?</a>
                </div>
              </div>
            </form>
          </div>

          <div class="tab-pane" id="Registration">
                 
            <form role="form" class="form-horizontal" id="Register" method="POST" action="
            Session/Register.php">
              <div class="form-group">
                <div class="col-sm-12">
                  <input class="form-control" placeholder="Nombres" name="Nombre" id="Nombre" type="text">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-12">
                  <input class="form-control" placeholder="Apellidos" name="Apellido" type="text">
                </div>
              </div>
                          
                             <div class="form-group">
                <div class="col-sm-12">
                  <select class="form-control" name="Alias" id="Alias">
                  <option>Tipo documento</option> 
                   <?php
                      
                      while($M4 = mysqli_fetch_array($AK))
                      {



                   ?>
                  <option value="<?php echo $M4['IDENT_ID']?>" name="OP"> <?php echo $M4['IDENT_ALIAS']?> </option>
                  
                  <?php } ?>               
                                       
                  </select>
                </div>
              </div>

                          <div class="form-group">
                <div class="col-sm-12">
                  <input class="form-control" placeholder="Numero-Idenficación" type="Number" name="NumIdent" minlength="10" maxlength="10">
                </div>
              </div>          

              <div class="form-group">
                <div class="col-sm-12">
                  <input class="form-control" id="email" placeholder="Email" type="email" name ="Email">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-12">
                  <input class="form-control" id="mobile" placeholder="Telefono" type="number" name="Telefono" minlength="10" maxlength="10">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-12">
                  <input class="form-control" id="password" placeholder="Contraseña" type="password" name="Contra">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-12">
                  <input class="form-control" id="passwordC" placeholder="Confirmar contraseña" type="password" name="Confirmar_Contraseña">
                </div>
              </div>
                            
                            
              <div class="row">             
                <div class="col-sm-10">
                  <button type="button" class="btn btn-light btn-radius btn-brd grd1" id="Enviar">
                    Guardar &amp; Continuar
                  </button>

                   <button type="button" class="btn btn-light btn-radius btn-brd grd1 -close" data-dismiss="modal">
                    Cancelar
                  </button>

                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>


  <div class="site-wrap">




    <div class="site-navbar py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="index.html" class="js-logo-clone">Pharma</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active"><a href="index.php">Home</a></li>
                <li class="has-children">
                  <a href="shop.php">Servicios y medicamentos</a>
                  <ul class="dropdown">
                    <li><a href="#">Medicamentos</a></li>
                    <li class="has-children">
                      <a href="ShopC.php">Cuidado Personal</a>
                      
                    </li>
                    <li><a href="ShopQ.php">Quirurgico</a></li>
                    <li><a href="ShopE.php">Estetica</a></li>
                    
                  </ul>
                </li>
                <li><a href="about.html">Nosotros</a></li>
                <li><a href="contact.html">Contactenos</a></li>
               
                <?php if(!$User):?>

                <li><a class="hover-btn-new log" href="#" data-toggle="modal" data-target="#login"><i class="bi bi-person-circle"></i><span>Cuenta</span></a></li>
                
                <?php else:?>
                <li> <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="DroPC/<?php echo $Foto?>" style="max-width: 60px; border: 1px solid #000;" alt="X">
                <span class="ml-2 d-none d-lg-inline text-white small" style="Color:#000!important"><?php echo $UserN;?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="Social/Perfil.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                 Cerrar sesión
                </a>
            </div>            </li>
              </ul>
               
               <?php endif;?>
              
            </nav>
          </div>
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Estas seguro de cerrar sesión?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <button class="btn btn-primary" id="Salir" onclick="AK();">Salir</a></button>
                </div>
              </div>
            </div>
          </div>



            </nav>

            

          </div>


     

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> 
            <strong class="text-black">Cart</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
                <tbody id="Carrito"></tbody>

              </table>
            </div>
          </form>
        </div>

        <div id="Total"> </div>
    
        
      </div>
    </div>

    <div class="site-section bg-secondary bg-image" style="background-image: url('images/bg_2.jpg');">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_1.jpg');">
              <div class="banner-1-inner align-self-center">
                <h2>Pharma Products</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_2.jpg');">
              <div class="banner-1-inner ml-auto  align-self-center">
                <h2>Rated by Experts</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
                </p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>


    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-4">About Us</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quae reiciendis distinctio voluptates
                sed dolorum excepturi iure eaque, aut unde.</p>
            </div>

          </div>
          <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Quick Links</h3>
            <ul class="list-unstyled">
              <li><a href="#">Supplements</a></li>
              <li><a href="#">Vitamins</a></li>
              <li><a href="#">Diet &amp; Nutrition</a></li>
              <li><a href="#">Tea &amp; Coffee</a></li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                <li class="email">emailaddress@domain.com</li>
              </ul>
            </div>


          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
              with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank"
                class="text-primary">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>

        </div>
      </div>
    </footer>
  </div>

  
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main.js"></script>
  <script src="js/Carrito.js"></script>
    <script src="js/Mostrar.js"></script>
    <script src="js/Vaciar.js"></script>
    <script src="js/Eliminar.js"></script>
    <script src="js/PrecioCant.js"></script>
    <script src="js/Total.js"></script>
     <script src="js/Total.js"></script>
     <script src="js/Email.js"></script>



</body>

</html>

<?php

session_start();

include('Session/BD.php');

include('Session/Ident.php');


@$UserN = $_SESSION['Usuario'];

@$User = $_SESSION['Id'];

@$Foto = $_SESSION['foto'];




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

  <link rel="icon" type="icon" href="images/ico.png">
  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/styl.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <link rel="stylesheet" href="scss/bootstrap/utilities/_modal.scss">


 <!-- -------------------------------------------------------------------------------------------------------------- -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>


  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content" style="position:relative; bottom:-80px;">
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
                  
              <br>	

              <br>
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
              <a href="index.php" class="js-logo-clone">Dro-PC</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active"><a href="index.php">Home</a></li>
                <li class="has-children">
                  <a href="#">Servicios y medicamentos</a>
                  <ul class="dropdown">
                    <li><a href="Shop.php">Medicamentos</a></li>
                    
                      <li><a href="ShopC.php">Cuidado Personal</a></li>
                
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

          <div class="dropdown" onclick="Mostrar();">
          	<a class="icons-btn d-inline-block bag" data-toggle="modal" data-target="#carritoModal">
          		<i class="icon-shopping-bag" style="color:#000; margin-left:-200px;"></i>
          		<div class="qty"></div>
          	</a>

          </div>

            <div class="modal fade" id="carritoModal" tabindex="-1" role="dialog" aria-labelledby="carritoModalLabel" aria-hidden="true">

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="carritoModalLabel">Carrito de Compras</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    
                   

                  <div id="Productos"></div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" onclick="Vaciar();">Vaciar Carrito</button>
                    <button type="button" class="btn btn-danger" id="Check">Procesar Compra</button>
                </div>
            </div>
        </div>
    </div>
            

        </div>
      </div>
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
    <div class="site-blocks-cover" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
            <div class="site-block-cover-content text-center">
              <h2 class="sub-title">Effective Medicine, New Medicine Everyday</h2>
              <h1>Welcome To DRO-PC</h1>
              <p>
    
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section">
      <div class="container">
        <div class="row align-items-stretch section-overlap">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap bg-primary h-100">
              <a href="#" class="h-100">
                <h5>Free <br> Shipping</h5>
                <p>
                  Amet sit amet dolor
                  <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap h-100">
              <a href="#" class="h-100">
                <h5>Season <br> Sale 50% Off</h5>
                <p>
                  Amet sit amet dolor
                  <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap bg-warning h-100">
              <a href="#" class="h-100">
                <h5>Buy <br> A Gift Card</h5>
                <p>
                  Amet sit amet dolor
                  <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                </p>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>



    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Productos mas vendidos</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <span class="tag">Sale</span>

        <a href="shop.php"> <img src="images/Acetaminofen.png" alt="Acetaminofen" width="370px" height="370px"></a>

            <h3 class="text-dark"><a href="shop-single.html">Acetaminofen</a></h3>
            <p class="price"><del>2.000</del></p>
          </div>

          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="shop.php"> <img src="images/post.png" alt="Image" width="370px" height="370px"></a>
            <h3 class="text-dark"><a href="shop-single.html">Postday</a></h3>
            <p class="price">$15.000</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="shop.php"> <img src="images/Dolex.png" alt="Image" width="270px" height="370px"></a>
            <h3 class="text-dark"><a href="shop-single.html">Dolex forte</a></h3>
            <p class="price">$3.000</p>
          </div>

          <div class="col-sm-6 col-lg-4 text-center item mb-4">

            <a href="shop-single.html"> <img src="images/Duo.png" alt="Image" width="270px" height="370px"></a>
            <h3 class="text-dark"><a href="shopC.php">Duo retardante</a></h3>
            <p class="price">$20.000</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="shop-single.html"> <img src="images/Cera.png" alt="Image" width="270px" height="370px"></a>
            <h3 class="text-dark"><a href="shopC.php">Cera</a></h3>
            <p class="price">$3.800</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <span class="tag">Sale</span>
            <a href="shopC.php"> <img src="images/Palet.png" alt="Image" width="270px" height="370px"></a>
            <h3 class="text-dark"><a href="shop-single.html">Palette Negro</a></h3>
            <p class="price"><del>$8.500</del> &mdash; $8000</p>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-12 text-center">
            <a href="shop.html" class="btn btn-primary px-4 py-3">View All Products</a>
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Nuevos Productos</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">

              <div class="text-center item mb-4">
                <a href="shop-single.html"> <img src="images/product_03.png" alt="Image"></a>
                <h3 class="text-dark"><a href="shop-single.html">Umcka Cold Care</a></h3>
                <p class="price">$120.00</p>
              </div>

              <div class="text-center item mb-4">
                <a href="shop-single.html"> <img src="images/product_01.png" alt="Image"></a>
                <h3 class="text-dark"><a href="shop-single.html">Umcka Cold Care</a></h3>
                <p class="price">$120.00</p>
              </div>

              <div class="text-center item mb-4">
                <a href="shop-single.html"> <img src="images/product_02.png" alt="Image"></a>
                <h3 class="text-dark"><a href="shop-single.html">Umcka Cold Care</a></h3>
                <p class="price">$120.00</p>
              </div>

              <div class="text-center item mb-4">
                <a href="shop-single.html"> <img src="images/product_04.png" alt="Image"></a>
                <h3 class="text-dark"><a href="shop-single.html">Umcka Cold Care</a></h3>
                <p class="price">$120.00</p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Testimonials</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 no-direction owl-carousel">
        
              <div class="testimony">
                <blockquote>
                  <img src="images/person_1.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat unde.&rdquo;</p>
                </blockquote>

                <p>&mdash; Kelly Holmes</p>
              </div>
        
              <div class="testimony">
                <blockquote>
                  <img src="images/person_2.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore
                    obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat
                    unde.&rdquo;</p>
                </blockquote>
              
                <p>&mdash; Rebecca Morando</p>
              </div>
        
              <div class="testimony">
                <blockquote>
                  <img src="images/person_3.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore
                    obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat
                    unde.&rdquo;</p>
                </blockquote>
              
                <p>&mdash; Lucas Gallone</p>
              </div>
        
              <div class="testimony">
                <blockquote>
                  <img src="images/person_4.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore
                    obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat
                    unde.&rdquo;</p>
                </blockquote>
              
                <p>&mdash; Andrew Neel</p>
              </div>
        
            </div>
          </div>
        </div>
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
              <h3 class="footer-heading mb-4">Acerca de nosotros</h3>
              <p>Dro-PC es una empresa farmaceutica comprometida a presevar la salud de nuestros de nuestros clientes y cuidarlos de la mejor manera</p>
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
              <h3 class="footer-heading mb-4">Información de Contacto</h3>
              <ul class="list-unstyled">
                <li class="address">Crack 6 #48b Santa Elena</li>
                <li class="phone"><a href="tel://23923929210">+3126627118</a></li>
                <li class="email">adrian24cg@gmail.com</li>
              </ul>
            </div>


          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Esta sitio Web fue desarrollado por APCOCG COMPANY <img src="images/5.png" style="background: radial-gradient(black, transparent);"> 
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
  <script src="js/Register.js"></script>
  <script src="js/main.js"></script>
  <script src="js/login.js"></script> 
   <script src="js/Destruir.js"></script> 
   <script src="js/Check.js"></script> 

</body>

</html>
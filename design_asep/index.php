<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Scrolling Nav - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>asset/css/scrolling-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">My Profile</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Tentang</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Pelayanan</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Kontak</a>
                    </li>
                    
                    <li role="separator" class="divider">
                        <a href="#galeri" class="page-scroll">Galeri</a>
                    </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kejutan <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                                <li><a>
                                <form  class="form-horizontal">
                                    <div class="form-group">
                                    <input type="username" class="form-control" id="username" placeholder="username">
                                  </div>

                                  <div class="form-group">
                                   <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                  </div>
                                  <div class="form-group">
                                  <button type="submit" class="btn btn-succes">LOGIN</button>    
                                  <button type="reset" class="btn btn-succes">RESET</button>
                                   </div>

                                </form></a></li>
                                
                                <li><a href="#"></a></li>
                                <li ></li>
                                <li><a href="#">Separated link</a></li>
                          </ul>
                        </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

   
        




    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                <a href="#about" class="page-scroll"><button class="btn btn-default btn-lg" type="submit">Lihat My Profile</button></a>
                
                    
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>About Section</h1>
                        <div class="row">
                            <div class="col-md-8">
                               



                            </div>
                        </div>




                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Services Section</h1>
 

                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Contact Section</h1>
                </div>
            </div>
        </div>
    </section>

     <!-- galeri Section -->
    <section id="galeri" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Galeri</h1>

                    <div class="row">
                      <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                          <img src="<?php echo base_url()?>asset/img/car.jpg" alt="...">
                        </a>
                          <a href="#" class="thumbnail">
                          <img src="<?php echo base_url()?>asset/img/car.jpg" alt="...">
                        </a>
                          <a href="#" class="thumbnail">
                          <img src="<?php echo base_url()?>asset/img/car.jpg" alt="...">
                        </a>

                      </div>
                      <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                          <img src="img/car.jpg" alt="...">
                        </a>
                          <a href="#" class="thumbnail">
                          <img src="img/car.jpg" alt="...">
                        </a>
                          <a href="#" class="thumbnail">
                          <img src="img/car.jpg" alt="...">
                        </a>

                      </div>
                      <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                          <img src="img/car.jpg" alt="...">
                        </a>
                          <a href="#" class="thumbnail">
                          <img src="img/car.jpg" alt="...">
                        </a>
                          <a href="#" class="thumbnail">
                          <img src="img/car.jpg" alt="...">
                        </a>

                      </div>
                      <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                          <img src="img/car.jpg" alt="...">
                        </a>
                          <a href="#" class="thumbnail">
                          <img src="img/car.jpg" alt="...">
                        </a>
                          <a href="img/car.jpg" class="thumbnail">
                          <img src="img/car.jpg" alt="...">
                        </a>

                      </div>

                    </div>




                </div>
            </div>
        </div>
    </section>
<hr>

<div class="bawah">
<div class="container" >

   <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; <strong>Asep Dadan</strong> 2015</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>

                        <li><a href="#">Terms of Use</a>
                        </li>
                         
                    </ul>

                </div>
            </div>
        </div>
    </footer>
</div>
</div>

    <!-- jQuery -->
    <script src="<?php echo base_url()?>asset/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>asset/js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="<?php echo base_url()?>asset/js/jquery.easing.min.js"></script>
    <script src="<?php echo base_url()?>asset/js/scrolling-nav.js"></script>

</body>

</html>

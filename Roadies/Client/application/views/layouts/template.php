<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Dancing+Script&family=Oswald&family=Kanit&family=Merriweather&family=Poppins&family=Rambla&family=Titillium+Web&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/36a1a5d2c6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="../fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/boot.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/template.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/interface.css'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.0/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bulma-social.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bulma.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css') ?>" />
    <link rel="canonical" href="https://aldi.github.io/bulma-login-template/" />
    <title>Roadies</title>
</head>
<body>
    <header>
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-end">
                        <div class="top-navbar ml-auto">
                            <div class="info">
                                <ul>
                                    <li>
                                        <a href="tel:7874084831">7874084831</a>
                                    </li>
                                    <li>                                   
                                        <a href="mailto:asp54795@gmail.com">asp54795@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="second-row">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <div class="logo-img">
                            <a href="#home">
                                <img src="<?php echo base_url('assets/roadies/logo/Roadies1.png'); ?>" class="w-100" alt="loding..">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-10 col-10 user-Action">
                        <div>
                          <?php if(isset($_SESSION['CId'])!=NULL || isset($_SESSION['TId'])!=NULL){ ?>
                            <ul class="d-flex flex-row align-item-center justify-content-end">
                                <li class="row dropdown login-content d-flex flex-row align-item-center justify-content-end">
                                    <div class="d-flex flex-row align-item-center justify-content-end">
                                        <div class="login-icon col text-dark">
                                            <i class="fa fa-sign-in"></i>&nbsp;&nbsp;
                                        </div>
                                        <div class="login-context col text-dark">
                                            Login
                                        </div>
                                    </div>  
                                    <div class="dropdown-content">
                                        <div>
                                            <a href="<?php echo base_url('Intro/loginload/customer'); ?>" class="btn btn-success w-100 mt-3 btn-flat rounded">Customer</a>
                                        </div>
                                        <div>
                                            <a href="<?php echo base_url('Intro/loginload/partner'); ?>" class="btn btn-primary w-100 my-3 btn-flat rounded">Partner</a>
                                        </div>
                                    </div>          
                                </li>
                                <li class="row dropdown login-content d-flex flex-row align-item-center justify-content-end">
                                    <div class="d-flex flex-row align-item-center justify-content-end">
                                        <div class="login-icon col text-dark">
                                            <i class="fa fa-gift"></i>&nbsp;&nbsp;
                                        </div>
                                        <div class="login-context col text-dark">
                                            Register
                                        </div>
                                    </div>  
                                    <div class="dropdown-content">
                                        <div>
                                            <a href="<?php echo base_url('Intro/form/Customer'); ?>" class="btn btn-success w-100 mt-3 btn-flat rounded">Customer</a>
                                        </div>
                                        <div>
                                            <a href="<?php echo base_url('Intro/form/Transporter'); ?>" class="btn btn-primary w-100 my-3 btn-flat rounded">Transporter</a>
                                        </div>
                                    </div>                
                                </li>
                            </ul>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
          <nav class="navbar navbar-expand-lg" id="nav">
            <div class="container">
              <button class="navbar-toggler list-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav nav-list">
                    <li class="nav-item">
                        <a href="#home" active>Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#working">Working</a>
                    </li>            
                    <li class="nav-item">
                        <a href="#working">Working</a>
                    </li>            
                    <li class="nav-item">
                        <a href="#team">Members</a>
                    </li>            
                    <li class="nav-item">
                        <a href="#blog">Blog</a>
                    </li> 
                  </ul>
              </div>
            </div>
          </nav>
        </div>
    </header>
    <!-- content -->
    <div>
      <?php echo $content; ?>
    </div>
<!-- footer -->
    <footer class="footer" id="feedback">
      <div class="container-fluid footer-info">
        <div class="row row-cols-lg-3 row-cols-md-3 row-cols-1">
          <div class="col">
            <p class="co-info">+91 7874 084 831 | mail@dummy.com</p>
          </div>
          <div class="col">
            <h5 class="link-logo text-uppercase">
              <a href="#"><span class="logo-back-circle">Ro</span>adies</a>
            </h5>
          </div>
          <div class="col">
            <input type="email" value="Enter your email for newsletter" class="text-box"><span class="aeroplane"><i class="fa-regular fa-paper-plane"></i></span></input>
          </div>
        </div>
      </div>
      <div class="container footer-menu">
        <div class="row g-5 row-cols-lg-3">
          <div class="col">
            <h5 class="text-capitalize footer-head">
              usefull links
            </h5>
            <div class="footer-lists">
              <ul class="footer-link-one text-capitalize">
                <li><a href="#home">home</a></li>
                <li><a href="#intro">about us</a></li>
                <li><a href="#working">services</a></li>
                <li><a href="#schedule">Portfolio</a></li>
              </ul>
              <ul class="footer-link-two text-capitalize">
                <li><a href="#design">feedback</a></li>
                <li><a href="#team">team</a></li>
                <li><a href="#blog">blog</a></li>
                <li><a href="#footer">contact us</a></li>
              </ul>
            </div>
          </div>
          <div class="col remover">
            <h5 class="text-capitalize footer-head">
              follow us instagram
            </h5>
            <div class="row g-0 row-cols-lg-4 row-cols-md-3">
              <div class="col">
                <img src="<?php echo base_url('assets/images/social-images/p1.jpeg'); ?>" alt="..." class="f-img">
              </div>
              <div class="col">
                <img src="<?php echo base_url('assets/images/social-images/p2.jpeg'); ?>" alt="..." class="f-img">
              </div>
              <div class="col">
                <img src="<?php echo base_url('assets/images/social-images/p3.jpeg'); ?>" alt="..." class="f-img">
              </div>
              <div class="col">
                <img src="<?php echo base_url('assets/images/social-images/p4.jpg'); ?>" alt="..." class="f-img">
              </div>
              <div class="col">
                <img src="<?php echo base_url('assets/images/social-images/p5.jpg'); ?>" alt="..." class="f-img">
              </div>
              <div class="col">
                <img src="<?php echo base_url('assets/images/social-images/p6.jpg'); ?>" alt="..." class="f-img">
              </div>
              <div class="col">
                <img src="<?php echo base_url('assets/images/social-images/p7.jpg'); ?>" alt="..." class="f-img">
              </div>
              <div class="col">
                <img src="<?php echo base_url('assets/images/social-images/p8.jpg'); ?>" alt="..." class="f-img">
              </div>
            </div>
          </div>
          <div class="col">
            <h5 class="text-capitalize footer-head">
              about millenial
            </h5>
            <p class="f-text">
              It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
            </p>
            <div class="f-icon">
              <p>Follow us: <span class="ps-4">
                <i class="fa-brands fa-dribbble"></i>&nbsp&nbsp&nbsp&nbsp
                <i class="fa-brands fa-facebook-f"></i>&nbsp&nbsp&nbsp&nbsp
                <i class="fa-brands fa-google-plus-g"></i>&nbsp&nbsp&nbsp&nbsp
                <i class="fa-brands fa-twitter"></i>&nbsp&nbsp&nbsp&nbsp
              </span></p>
            </div>
          </div>
        </div><hr>
        <div class="below-footer text-capitalize">
          <div class="left-shift">
            <p>privacy policy</p>
            <p class="middle-shift">terms and condition</p>
          </div>
          <p>2019@digitalagency</p>
        </div>
      </div>
</footer>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js') ?>" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?php echo bae_url('assets/js/main.js'); ?>"></script>
</body>
</html>
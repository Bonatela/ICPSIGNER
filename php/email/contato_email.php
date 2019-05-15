<?php


    // Recuperadno os Dados Enviados pelo Form
    $GetPost = filter_input_array(INPUT_POST, FILTER_DEFAULT);


    $Error = true;


    //Variaveis Locais
    $Nome = $GetPost['name'];
    $Email = $GetPost['email'];
    $Telefone = $GetPost['telefone'];
    $Assunto = $GetPost['assunto'];
    $Mensagem = $GetPost['mensagem'];



    //Incluir PHP MAILER
    include_once '../mailer/src/SMTP.php';
    include_once '../mailer/src/PHPMailer.php';


    //Enviando o e-mail Classe phpmail

    $Mailer = new \PHPMailer\PHPMailer\PHPMailer();

    $Mailer->Charset = "utf8";
    $Mailer->IsSMTP();

    $Mailer->Host = "icpsigner.com";

    $Mailer->SMTPAuth = true;
    $Mailer->Username = "website@icpsigner.com";
    $Mailer->Password = "rgk5Fzx9SAN5FCg";
    $Mailer->SMTPSecure = "tls";
    $Mailer->Port = 587;

    $Mailer->FromName = "($Nome)";
    $Mailer->From = "website@icpsigner.com";
    $Mailer->AddAddress("contato@icpsigner.com","website@icpsigner.com");

    $Mailer->IsHTML(true);

    $Mailer->Subject = "($Assunto)";
    $Mailer->Body = " Nome: $Nome <br>  E-mail: $Email <br>  Telefone: $Telefone <br> Assunto:  $Assunto <br> Mensagem: $Mensagem";

    //Verificar
    if($Mailer->Send()){
        $Error = false;
    }

?>

<html>
<html lang="pt-br">
  <head>
    <title>ICP SGINER</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="shortcut icon" href="../../images/favicon.png" />


    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="../../fonts/icomoon/style.css">

    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/magnific-popup.css">
    <link rel="stylesheet" href="../../css/jquery-ui.css">
    <link rel="stylesheet" href="../../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../css/owl.theme.default.min.css">

    <link rel="stylesheet" href="../../css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="../../fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="../../css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
      
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center position-relative">
          
            
            <div class="site-logo">
              <a href="../../index.html" class="text-black"><span class="text-primary">ICPSGINER</a>
            </div>
            
              <nav class="site-navigation text-center ml-auto" role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="../../index.html" class="nav-link">Volta</a></li>
                  <li><a href="#investors-section" class="nav-link">Partners</a></li>
                  <li><a href="#about-section" class="nav-link">Sobre</a></li>
                  <li><a href="#services-section" class="nav-link">O que fazemos</a></li>
                  <li><a href="#press-section" class="nav-link">Press</a></li>
                  
                  
                  <li><a href="#blog-section" class="nav-link">Blog</a></li>
                  <li><a href="#contact-section" class="nav-link">Contact</a></li>
                </ul>
              </nav>
          
            

          <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
    








    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-8">
                <h2 class="footer-heading mb-4">Sobre</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
              </div>
              <div class="col-md-4 ml-auto">
                <h2 class="footer-heading mb-4">Features</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Press Releases</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              
            </div>
          </div>
          <div class="col-md-4 ml-auto">

            <div class="mb-5">
              <div class="mb-5">
                <h2 class="footer-heading mb-4">Some Paragraph</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat nostrum libero iusto dolorum vero atque aliquid.</p>
              </div>
              <h2 class="footer-heading mb-4">Subscribe to Newsletter</h2>
              <form action="#" method="post">
                <div class="input-group mb-3">
                  <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary text-white" type="button" id="button-addon2">Subscribe</button>
                  </div>
                </div>
              </div>


              <h2 class="footer-heading mb-4">Follow</h2>
                <a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
                <!-- <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>-->
                <a href="https://www.linkedin.com/company/icp-signer" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with ICP SGINER</a></p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div>

  <script src="../../js/jquery-3.3.1.min.js"></script>
  <script src="../../js/jquery-ui.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <script src="../../js/owl.carousel.min.js"></script>
  <script src="../../js/jquery.magnific-popup.min.js"></script>
  <script src="../../js/jquery.sticky.js"></script>
  <script src="../../js/jquery.waypoints.min.js"></script>
  <script src="../../js/jquery.animateNumber.min.js"></script>
  <script src="../../js/aos.js"></script>

  <script src="../../js/main.js"></script>
    
  </body>
</html>
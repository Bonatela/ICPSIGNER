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

    $Mailer->Host = "certificadorasul.com.br";

    $Mailer->SMTPAuth = true;
    $Mailer->Username = "site@certificadorasul.com.br";
    $Mailer->Password = "134679";
    $Mailer->SMTPSecure = "tls";
    $Mailer->Port = 587;

    $Mailer->FromName = "($Nome)";
    $Mailer->From = "site@certificadorasul.com.br";
    $Mailer->AddAddress("sac@certificadorasul.com.br","site@certificadorasul.com.br");

    $Mailer->IsHTML(true);

    $Mailer->Subject = "($Assunto)";
    $Mailer->Body = " Nome: $Nome <br>  E-mail: $Email <br>  Telefone: $Telefone <br> Assunto:  $Assunto <br> Mensagem: $Mensagem";

    //Verificar
    if($Mailer->Send()){
        $Error = false;
    }

?>



<html>
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Guilherme Bonato">


        <title>Certificadora Sul</title>

       

        <!-- bootstrap -->

            <!-- font-awesome/4.7.0 -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="../../bootstrap/dist/css/bootstrap.min.css">

            <!-- jQuery library -->
            <script src="../../bootstrap/jquery-3.3.1.js"></script>

            <!-- Latest compiled JavaScript -->
            <script src="../../bootstrap/dist/js/bootstrap.min.js"></script>
            

            <!--Normalize V8-->
            <script src="../../bootstrap/v8.js"></script>
            
        <!-- bootstrap -->


        <!--header icon CSS -->
        <link rel="icon" href="../../logos/favicon.png">


        <!--CSS -->
        <link rel="stylesheet" href="../return/css/css.css">


   

   



</head>
<body>


        <!--menu-->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="menus">

            <div class="container-fluid">
                <div class="navbar-header">


                    <span  style="color:#fff;" class="navbar-toggle fa fa-navicon" data-toggle="collapse" data-target="#links-menu"></span>

                    

                    <a class="navbar-brand" href="../../index.html" > <img src="../../logos/logotipo.png" id="logotipo-topo" alt="logo CCS"> </a>

                </div>

                <nav id="links-menu" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">

                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="fa fa-address-card-o"></span> Certificados <span class="caret"></span></a>
                            <ul class="dropdown-menu" id="segundo-menu">

                        
                                <li><a href="../../produtos/ecpf/ecpf.html"><span class="fa fa-drivers-license"></span>&nbsp; e-CPF</a></li>
                                <li><a href="../../produtos/epf/epf.html"><span class="fa fa-id-badge"></span>&nbsp;&nbsp;  e-PF</a></li>
                                <li><a href="../../produtos/ecnpj/ecnpj.html"><span class="fa fa-briefcase"></span>&nbsp; e-CNPJ</a></li>
                                <li><a href="../../produtos/nfe/nfe.html"><span class="fa fa-barcode"></span>&nbsp; NF-e</a></li>
                                <li><a href="../../produtos/cte/cte.html"><span class="fa fa-truck"></span>&nbsp; CT-e</a></li>



                                <li><a href="../../produtos/bancario/bancario.html"><span class="fa fa-bank"></span>&nbsp; CIP</a></li>
                                <li><a href="../../produtos/oab/oab.html"><span class="fa fa-legal"></span> OAB</a></li>
                                <li><a href="../../produtos/emedico/emedico.html"><span class="fa fa-stethoscope"></span>&nbsp; e-Medico</a></li>
                                <li><a href="../../produtos/ssl/ssl.html"><span class="fa fa-shield"></span>&nbsp; SSL</a></li>
                                <li><a href="../../produtos/mobile/mobile.html"><span class="fa fa-tablet"></span>&nbsp; Mobile</a></li>
                                <li><a href="../../produtos/conectividade/conectividade.html"><span class="fa fa-handshake-o"></span>&nbsp; Conectividade</a></li>
                                <li><a href="../../produtos/promocional/promo.html"><span class="fa fa-cart-arrow-down"></span>&nbsp; Promocional</a></li>


                            </ul>
                        </li>




                        <li><a href="../../produtos/bancario/bancario.html"><span class="fa fa-bank"></span> CIP</a></li>
                        <li><a href="../../produtos/ssl/ssl.html"><span class="fa fa-shield"></span> SSL</a></li>
                        <li><a href="../../produtos/mobile/mobile.html"><span class="fa fa-tablet"></span> Mobile</a></li>
                        <li><a class="scroll" href="../../map/mail.html"><span class="fa fa-map-marker"></span> Pontos</a></li>
                        <li><a href="../../download/download.html"> <span class="fa fa-download"></span> Download</a></li>



                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> <span class="fa fa-wechat"></span> Sobre <span class="caret"></span></a>
                            <ul class="dropdown-menu" id="terceiro-menu">
                                <li><a href="../../faq/faq.html"><span class="fa fa-question-circle"></span> FAQ</a></li>
                                <li><a href="../../map/mail.html"><span class="fa fa-envelope"></span> Email</a></li>
                                <li><a href="../../parceiro/its/its.html"><span class="fa fa-map-signs"></span> ITS</a></li>
                                <li><a href="../../renovacao/renovacao.html"><span class="fa fa-refresh"></span> Renovação</a></li>
                            </ul>
                        </li>

                        <li><a class="scroll" href="../../parceiro/parceiro.html"><span class="fa fa-slideshare"></span> Parceiro</a></li>
                    </ul>


                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="https://www.facebook.com/CertificadoraSul/"><span style="color:#fff;" class="fa fa-facebook"></span></a></li>
                        <li><a href="https://www.instagram.com/certificadorasul/?hl=pt-br"><span style="color:#fff;" class="fa fa-instagram"></span></a></li>
                        <li><a href="https://twitter.com/CompanhiaSul"><span style="color:#fff;" class="fa fa-twitter"></span></a></li>
                        <li><a href="../../parceiro/cadastro/cadastro.html"><span class="fa fa-user-o"></span> Cadastrar</a></li>
                        <li><a href="../../parceiro/login/login.html"><span class="fa fa-users"></span> Logar</a></li>
                    </ul>



                </nav>
            </div>

        </nav>






        <div class="space-80"></div>



        <div class="container" align="center">

            <div class="space-80"></div>
            <h2>Mensagem enviada com sucesso!</h2>


            <div class="btn-group">
                <button type="button" class="button"><span style="color:#fff"><a href="../../index.html" style="color: whitesmoke">Voltar</a> </span></button>
            </div>

        </div>




        <div class="space-80"></div>





        <hr>
        <!-- Links Footer -->
        <div class="jumbotron" id="baixo">
            <div class="container" align="left">


                <div class="container">
                    <div class="row">



                        <div class="col-sm-4" id="txt-footer1">
                            <h5 style="color: #3b3b3b">Links Úteis</h5>

                            <div class="container" align="left">
                                <p><a href="https://www.validcertificadora.com.br/Identificacao.aspx/005370">Meus Pedidos</a></p>
                                <p><a href="http://www.validcertificadora.com.br/cancelamento/005370">Sobre Reembolso</a></p>
                                <p><a href="http://www.validcertificadora.com.br/cancelamento/005370">Sobre 2ª via NFE</a></p>
                            </div>

                        </div>


                        <div class="col-sm-4" id="txt-footer2">
                            <h5 style="color: #3b3b3b"> Veja Também </h5>

                            <div class="container" align="left">
                                <p><a href="http://www.validcertificadora.com.br/Valid-Certificados-Digitais.htm/005370">Certificados Digitais</a></p>
                                <p><a href="http://www.validcertificadora.com.br/certificados-ssl/005370">Certificados SSL</a></p>
                                <p><a href="http://www.validcertificadora.com.br/suporte/005370">Instalação e Suporte</a></p>
                            </div>

                        </div>

                        <div class="col-sm-4" id="txt-footer3">

                            <h5 style="color: #3b3b3b">Clique VALID e pronto!</h5>

                            <div class="container" align="left">

                                <p>
                                    VALID Certificadora Digital Ltda. <br>Uma empresa do Grupo VALID S/A <br>
                                </p>

                                <p>
                                    R. 15 de Janeiro 373 – 8º Andar<br>Centro Canoas - RS – CEP: 92.010-300
                                </p>

                                <p><span style="color:#014f5b" class="fa fa-phone "></span> <a href="tel:5130314832"> 3031 - 4832</a>

                                    &nbsp;
                                    <a href="https://www.facebook.com/CertificadoraSul/" > <span style="color:#014f5b" class="fa fa-facebook-official fa-2x"></span></a>
                                    &nbsp;
                                    <a href="https://www.instagram.com/certificadorasul/?hl=pt-br" > <span style="color:#014f5b" class="fa fa-instagram fa-2x"></span></a>
                                    &nbsp;
                                    <a href="https://twitter.com/CompanhiaSul" > <span style="color:#014f5b" class="fa fa-twitter fa-2x"></span></a></p>

                            </div>
                            <br><br><br>
                        </div>




                        <div class="container-fluid" align="center" id="img-footer">

                            <img src="../../logos/ccs.png" id="ccs">
                            <img src="../../logos/iti.png" id="iti">
                            <img src="../../logos/visa.jpg" id="visa">
                            <img src="../../logos/boleto.jpg" id="boleto">
                            <img src="../../logos/seg.png" id="seg">
                        </div>


                    </div><!--row-->
                </div> <!--container-->


            </div> <!--container-->
        </div><!--jumbo-->



        <div class="jumbotron-fluid text-center" id="final">
            <p>
                <br>
                © 2018 Companhia Certificadora Sul - Todos os direitos reservados
            </p>


        </div>
        <!-- Links Footer -->




</body>
</html>


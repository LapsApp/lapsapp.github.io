<!DOCTYPE html>
<?php header('Content-Type: text/html; charset=iso-8859-1');
$id_cliente = $_GET['id'];
?> 
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="img/favicon.png">

        <title>LAPS</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <link href="css/elegant-icons-style.css" rel="stylesheet" />
        <link href="css/font-awesome.min.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet">
        <link href="css/style-responsive.css" rel="stylesheet" />
    </head>

    <body style="color: #000;">
        <!-- container section start -->
        <section id="container" class="">
            <!--header start-->
            <header class="header dark-bg">
                <div class="toggle-nav">
                    <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
                </div>

                <!--logo start-->
                <a href="index.php" class="logo">L<span class="lite">APS</span></a>
                <!--logo end-->

                <div class="nav search-row" id="top_menu">
                    <ul class="nav top-menu">
                        <li>
                            <form class="navbar-form">
                                <input class="form-control" placeholder="Search" type="text">
                            </form>
                        </li>
                    </ul>
                </div>


            </header>
            <!--header end-->

            <!--sidebar start-->
            <aside>
                <div id="sidebar" class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a class="" href="menu_usuario.php?id=<?php echo $id_cliente; ?>">
                                <i class="icon_house_alt"></i>
                                <span>INICIO</span>
                            </a>
                        </li>
                        <li>
                            <a class="" href="cadastro.php?id=<?php echo $id_cliente; ?>">
                                <i class="icon_document_alt"></i>
                                <span>MEUS DADOS</span>
                            </a>
                        </li>
                        <li>
                            <a class="" href="convites.php?id=<?php echo $id_cliente; ?>">
                                <i class="icon_link"></i>
                                <span>INDICADOS</span>
                            </a>
                        </li>
                        <li>
                            <a class="" href="suporte.php?id=<?php echo $id_cliente; ?>">
                                <i class="icon_mail_alt"></i>
                                <span>SUPORTE</span>
                            </a>
                        </li>
                        <li class="">
                            <a class="" href="starter.php?id=<?php echo $id_cliente; ?>">
                                <i class="icon_documents_alt"></i>
                                <span>LISTA DE<br>COMPRAS</span>
                            </a>
                        </li>
                        <li class="">
                            <a class="" href="fatura.php?id=<?php echo $id_cliente; ?>">
                                <i class="icon_documents_alt"></i>
                                <span>DETALHAR<br>FATURAS</span>
                            </a>
                        </li>
                        <li>
                            <a class="" href="bloqueioUsuario.php?id=<?php echo $id_cliente; ?>">
                                <i class="icon_blocked"></i>
                                <span>BLOQUEIO</span>
                            </a>
                        </li>
                        <!--<li class="">
                           <a class="">
                              <i class="icon_table"></i>
                              <span>XXXXX</span>
                           </a>
                        </li>
                        <li class="">
                           <a class="">
                              <i class="icon_documents_alt"></i>
                              <span>XXXXX</span>
                           </a>
                        </li>-->
                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->

            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="page-header"><i class="fa fa-files-o"></i> INDICADOS</h3>
                            <ol class="breadcrumb">
                                <li><i class="fa fa-home"></i><a href="index.html">INICIO</a></li>
                                <li><i class="icon_mail_alt"></i>SUPORTE</li>
                            </ol>
                        </div>
                    </div>
                    <!-- Form validations -->
                    <div class="row">
                        <div class="col-lg-12">
                            <section class="panel">
                                <header class="panel-heading">
                                    SUPORTE
                                </header>
                                <div class="panel-body">
                                    <div class="form">
                                        <form class="form-validate form-horizontal" method="post" action="modelo/envia_msg.php?id=<?php echo $id_cliente; ?>">
                                            <div class="form-group ">
                                                <label for="cname" class="control-label col-lg-2">Assunto<span class="required">*</span></label>
                                                <div class="col-lg-8">
                                                    <input class="form-control" id="subject" name="assunto" type="mail" style="text-transform:uppercase" minlength="5" maxlength="20" required />
                                                </div>
                                            </div>

                                            <div class="form-group ">
                                                <label for="cname" class="control-label col-lg-2">Mensagem<span class="required">*</span></label>
                                                <div class="col-lg-8">
                                                    <textarea rows="4" class="form-control" id="subject" name="mensagem" minlength="5" maxlength="320" required /></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-lg-offset-5 col-lg-10">
                                                    <button class="btn btn-primary" type="submit">ENVIAR MENSAGEM</button>
                                                    <br><br>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <!-- page end-->
                </section>
            </section>
            <!--main content end-->
        </section>
        <!-- container section end -->

        <!-- javascripts -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/jquery.validate.min.js"></script>
        <script src="js/form-validation-script.js"></script>
        <script src="js/scripts.js"></script>
        <?php
        include ('modelo/funcoesJS.php');
        include ('modelo/TesteMen.php');
        ?>
    </body>
</html>
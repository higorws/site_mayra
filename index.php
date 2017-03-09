<!DOCTYPE html>
<?php
require './_app/config.inc.php';
?>

<html lang="pt-br" itemscope itemtype="https://schema.org/Article">
    <head>
        <meta charset="UTF-8">
        <title>Mayra Silva - Psicóloga comportamental </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="icon" href="<?= INCLUDE_PATH;?>/img/logo_favicon.png">
        <link rel="stylesheet" href="<?= INCLUDE_PATH;?>/css/styleV2.css">
        <link rel="stylesheet" href="<?= INCLUDE_PATH;?>/css/terapias.css">
        <link rel="stylesheet" href="<?= INCLUDE_PATH;?>/css/formulario_consulta.css">
        <link rel="stylesheet" href="<?= INCLUDE_PATH;?>/css/bootstrap.css">    
        <link rel="stylesheet" href="<?= INCLUDE_PATH;?>/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= INCLUDE_PATH;?>/css/responsivo.css">        
        <script src="_cdn/jquery-1.11.1.min.js"></script>
        <script src="_cdn/menu.js"></script>
        <script src="_cdn/modernizr.js"></script> <!-- Modernizr -->
        <script src="_cdn/scrool.js"></script>  <!--Modernizr -->
        <script src="_cdn/menu_responsivo.js"></script>
        
        <meta name="robots" content="index, fallow">
        <meta name="description" content="Mayra Sivla - Psicóloga comportamental">

        <link rel="canonical" href="<?= $pg_url;?>">
        <link rel="publisher" href="https://plus.google.com/<?= $pg_google_publisher;?>"/>
        <link rel="author" href="https://plus.google.com/<?= $pg_google_autor;?>"/>
        
        <meta itemprop="name" content="<?= $pg_site;?>"/>
        <meta itemprop="description" content="Mayra Sivla - Psicóloga comportamental"/>
        <meta itemprop="image" content=""/>
        <meta itemprop="url" content="<?= $pg_url;?>"/>
        
        <meta property="og:type" content="article"/>
        <meta property="og:title" content="Mayra Silva - Psicóloga comportamental "/>
        <meta property="og:description" content="Mayra Silva - Psicóloga comportamental "/>
        <meta property="og:image" content="article"/>
        <meta property="og:url" content="<?= $pg_url;?>"/>
        <meta property="og:site_name" content="<?= $pg_site;?>"/>
        <meta property="og:locale" content="pt_BR"/>
        
        <meta property="og:app_id" content="<?= $pg_fb_app;?>"/>
        <meta property="article:author" content="https://www.facebook.com/<?= $pg_fb_author;?>"/>
        <meta property="article:publisher" content="https://www.facebook.com/<?= $pg_fb_page;?>"/>
       
        
        
        
        
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
        <![endif]-->
    </head>
    <body>     
        <header id="header">
            <h1 class="main_logo">Mayra Silva - Psicóloga comportamental </h1>
            <a title="Inicio" href="<?= HOME; ?>">
                <img class="logo" title="Mayra Silva - psicologa comportamental" src="<?= INCLUDE_PATH;?>/img/logo1.png" alt="Mayra silva Psicóloga">
            </a>           
            <div class="nav_topo_sociais">
                <div class="container">
                    <div class="rom">
                        <div class="Contato_topo">
                            <p>
                                <span class="telefone_topo"></span>
                                (27) 3286-6877
                            </p>
                            <p>
                                <a class="email_topo" href="mailto: contato@mayrasilvapsi.com.br" title="contato@mayrasilvapsi.com.br">contato@mayrasilvapsi.com.br</a>
                            </p>
                            <ul class="topo_sociais">
                                <li>
                                    <a href="https://www.facebook.com/Mayra-Silva-Psic%C3%B3loga-comportamental-1864049407169141/" title="facebook">
                                        <span class="logo_facebook"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/mayra-silva-9a9679127/" title="linkidin">
                                        <span class="logo_linkidin"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn_menu"><i class="fa fa-bars fa-2x " aria-hidden="true"></i></div>
            <div title="menu_principal" class="menu_responsivo">                   
                <ul>
                    <span>Menu</span>
                    <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                    <li class="active"><a rel="nofollow" title="Inicio" href="#header">Inicio</a></li>
                    <li><a rel="nofollow" title="sobre mim" href="#sobre_mim">Sobre mim</a></li>
                    <li><a rel="nofollow"title="Terapias" href="#terapias">Terapias</a></li>
                    <li><a rel="nofollow" title="Publico atendido" href="#publico_atendido">Público atendido</a></li>
                    <li><a rel="nofollow" title="Consultas" href="#consultas">Consultas</a></li>
                </ul>                  
            </div>           
            <div title="menu_principal" id="menuHeader">                
                <ul>
                    <i class="fa fa-times" aria-hidden="true"></i>
                    <li class="active"><a  title="Inicio" href="#header">Inicio</a></li>
                    <li><a  title="sobre mim" href="#sobre_mim">Sobre mim</a></li>
                    <li><a title="Terapias" href="#terapias">Terapias</a></li>
                    <li><a  title="Publico atendido" href="#publico_atendido">Público atendido</a></li>
                    <li><a  title="Consultas" href="#consultas">Consultas</a></li>
                </ul>                  
            </div>
            <!-- menu_fixo-->
            <div class="menu_fixo" style="display: none;">
                <img src="<?= INCLUDE_PATH;?>/img/logo2.png" alt="" title="" />
                <span>Mayra Silva</span>
                <div class="btn_menu_fixo"><i class="fa fa-bars fa-2x " aria-hidden="true"></i></div>
                <ul>
                    <li class="active"><a  title="Inicio" href="#header">Inicio</a></li>
                    <li><a  title="sobre mim" href="#sobre_mim">Sobre mim</a></li>
                    <li><a title="Terapias" href="#terapias">Terapias</a></li>
                    <li><a  title="Publico atendido" href="#publico_atendido">Público atendido</a></li>
                    <li><a  title="Consultas" href="#consultas">Consultas</a></li>
                </ul> 
            </div>
        </header>
        <!--conteudo do site-->  
        <?php
            $Url[1] = (empty($Url[1]) ? null: $Url[1]);
            if(file_exists(REQUIRE_PATH.'/'.$Url[0].'.php'));
                require REQUIRE_PATH.'/'.$Url[0].'.php';  
        ?>
        <!--conteudo do site-->   
        <footer id="footer">
            <div class="contato_footer">
                <hgroup>
                    <h2 class="titulos_footer">Contatos</h2>
                    <h2 class="telefone_footer">
                        (27) 99934-3452 & 3286-6877
                    </h2>
                    <h2 class="email_Footer">contato@mayrasilvapsi.com.br</h2>
                </hgroup>
                <ul class="footer_sociais">
                    <li>
                        <a href="https://www.facebook.com/pg/Mayra-Silva-Psic%C3%B3loga-comportamental-1864049407169141/about/?ref=page_internal" title="facebook">
                            <span class="logo_facebook2"></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/mayra-silva-9a9679127/" title="linkidin">
                            <span class="logo_linkidin2"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="localização">
                <h2>Localização</h2>
                <div class="Lo_1">                  
                    <p class="local_icon">Centro empresarial shopping Moxuara.</p>
                    <p>Rod. BR 262, 6.555 - Sala 307 - Torre 4 A</p>                    
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1112.1864899264408!2d-40.39987080274619!3d-20.344323157413857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1aff2ce9fc9bcf7a!2sConsult%C3%B3rio+de+psicologia+Mayra+Silva!5e0!3m2!1spt-BR!2sus!4v1488888690217" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <nav class="menu_footer">
                <h2>Menu</h2>
                <ul>
                    <li><a  title="Inicio" href="#header">Inicio</a></li>
                    <li style="width: 115%"><a title="Sobre mim" href="#sobre_mim">Sobre Mim</a></li>
                    <li><a title="Terapias" href="#terapias">Terapias</a></li>
                    <li style="width: 172%"><a  title="Publico atendido" href="#publico_atendido">Público atendido</a></li>
                    <li><a title="Consultas" href="#consultas">Consultas</a></li>
                </ul>
                <a  title="Inicio" href="#header" class="retornar"></a>
        <script src="_cdn/retornar_inicio.js"></script>
            </nav>
        </footer>
        <footer class="direiros">
            <div class="dir_1">
                <div class="dir_1_1">
                    Todos os direitos reservados á <a href="https://www.facebook.com/Mayra-Silva-Psic%C3%B3loga-comportamental-1864049407169141/">Mayra J. Silva</a> © Copyright 2017.
                </div>
                <div class="dir_1_2"> 
                    Design e desenvolvimento por: <a href="https://www.facebook.com/higorweber.dasilva">Higor Weber</a> e <a href="https://www.facebook.com/reynaldo.marinho.3?fref=hovercard">Reynaldo Marinho</a>.
                </div>
            </div>
        </footer>
       


    </body>

</html>

<!DOCTYPE html>
<?php
define('BASE', 'http://localhost/site_maira/');
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Mayra Silva - Psicóloga comportamental </title>
        <meta name="description" content="Mayra Sivla - Psicóloga comportamental">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- <link rel="stylesheet" href="css/reset.css">-->
        <link rel="icon" href="img/logo_favicon.png">
        <link rel="stylesheet" href="css/styleV2.css">
        <link rel="stylesheet" href="css/terapias.css">
        <link rel="stylesheet" href="css/formulario_consulta.css">
        <link rel="stylesheet" href="css/bootstrap.css">    
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/responsivo.css">        
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/menu.js"></script>
        <script src="js/modernizr.js"></script> <!-- Modernizr -->
        <script src="js/scrool.js"></script>  <!--Modernizr -->
        <script src="js/menu_responsivo.js"></script>
        
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
        <![endif]-->
    </head>
    <body>     
        <header id="header">
            <h1 class="main_logo">Mayra Silva - Psicóloga comportamental </h1>
            <a title="Inicio" href="<?= BASE; ?>">
                <img class="logo" title="Mayra Silva - psicologa comportamental" src="img/logo1.png" alt="Mayra silva Psicóloga">
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
                                <a class="email_topo" href="mailto: contato@mayrasiva.com.br" title="contato@mayrasiva.com.br">contato@mayrasiva.com.br</a>
                            </p>
                            <ul class="topo_sociais">
                                <li>
                                    <a href="https://www.facebook.com/profile.php?id=100005260125769&fref=ts" title="facebook">
                                        <span class="logo_facebook"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/higor-weber-da-silva-329672127?trk=nav_responsive_tab_profile" title="linkidin">
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
                    <li class="active"><a rel="nofollow" title="Inicio" href="#header">Inicio</a></li>
                    <li><a rel="nofollow" title="sobre mim" href="#sobre_mim">Sobre mim</a></li>
                    <li><a rel="nofollow"title="Terapias" href="#terapias">Terapias</a></li>
                    <li><a rel="nofollow" title="Publico atendido" href="#publico_atendido">Público atendido</a></li>
                    <li><a rel="nofollow" title="Consultas" href="#consultas">Consultas</a></li>
                </ul>                  
            </div>
            <!-- menu_fixo-->
            <div class="menu_fixo" style="display: none;">
                <img src="img/logo2.png" alt="" title="" />
                <span>Mayra Silva</span>
                <div class="btn_menu_fixo"><i class="fa fa-bars fa-2x " aria-hidden="true"></i></div>
                <ul>
                    <li class="active"><a rel="nofollow" title="Inicio" href="#header">Inicio</a></li>
                    <li><a rel="nofollow" title="sobre mim" href="#sobre_mim">Sobre mim</a></li>
                    <li><a rel="nofollow"title="Terapias" href="#terapias">Terapias</a></li>
                    <li><a rel="nofollow" title="Publico atendido" href="#publico_atendido">Público atendido</a></li>
                    <li><a rel="nofollow" title="Consultas" href="#consultas">Consultas</a></li>
                </ul> 
            </div>
        </header>
        <section title="banner principal" class="banner_principal">
            <!-- colocar o alt e title da img -->
            <img class="Foto_banner"title="Sude mental e bem estar" alt="Saúde mental e bem estar" src="img/mãe_filha_banner.jpg">
            <div class="retangulo_banner">
                <h1 title="Sude mental e bem estar">Saúde mental e bem estar!</h1>
                <p title=" sobre a chamada do site"> 
                    O tabu de se procurar um especialista em saúde mental somente quando se acredita ter algum transtorno grave,
                    deve ser quebrado. Sendo assim, buscar manter o equilíbrio entre saúde física, mental e emocional, tem sido cada
                    vez mais comum. 
                </p>
            </div>
        </section>
        <section title="Terapias" id="terapias">
            <div title="terapias" class="titulo_terapias">
                <div class="organizar_div2">
                    <img title="" alt="logo" src="img/logo2.png" width="40">
                    <h1 title="Terapias" class="">Terapias</h1>
                </div>
            </div>
            <div class="backgroud">
                <div class="cd-tabs">
                    <nav>
                        <ul class="cd-tabs-navigation">
                            <li><a data-content="inbox" class="selected" href="#0"><h2>Terapia Comportamental o que é?</h2></a></li>
                            <li><a data-content="new" href="#0"><h2>Como a Psicologia Comportamental atua?</h2></a></li>
                            <li><a data-content="gallery" href="#0"><h2>Quando é indicada?</h2></a></li>                        
                        </ul> <!-- cd-tabs-navigation -->
                    </nav>

                    <ul class="cd-tabs-content">
                        <li data-content="inbox" class="selected">
                            <p>A Terapia Comportamental baseia-se nas propostas do Behaviorismo (termo que tem origem na palavra inglesa behavior, que significa comportamento). Por esta concepção, os comportamentos disfuncionais que fazem as pessoas sofrerem são aprendidos, e neste sentido a terapia é o espaço para a aprendizagem de novos comportamentos mais adaptativos e livres de sofrimento, considerando que a pessoa tem uma historia de vida e está inserida em  seu contexto social.</p>
                        </li>
                        <li data-content="new">
                            <p>Inicialmente é preciso identificar no indivíduo quais são os comportamentos limitantes que causam dor, sofrimento, prejuízos emocionais e sociais. Por meio de técnicas específicas, o terapeuta analisa a relação do indivíduo com o ambiente, entende quando e onde esses comportamentos ocorrem e quais funções eles têm para a pessoa: se proteger, ser reconhecido, chamar a atenção, ser amado — entre centenas de estratégias que o indivíduo adota para atender suas necessidades e desejos</p>

                            <p>O psicólogo comportamental se apoia em um campo da Psicologia denominado Análise do Comportamento - estudo do comportamento humano de maneira cientifica. Não segue crenças, dogmas ou o senso comum, a Análise do Comportamento faz pesquisas criteriosas e conta com pesquisadores academicamente conceituados em diversas Universidades ao redor do mundo inteiro.</p>
                        </li>
                        <li data-content="gallery">
                            <p>Quando há manifestação de sofrimento ou dificuldades. A atuação do psicólogo comportamental se faz muito eficiente em quadros de transtornos de ansiedade; compulsões; pânico; fobias; depressão; stress; doenças psicossomáticas; transtorno bipolar; transtornos sexuais; coadjuvante em transtornos de aprendizagem etc. O psicólogo comportamental será sempre uma importante fonte de auxílio, sempre que não nos percebemos capazes de lidar sozinhos com questões impostas pelas mais complicadas situações do dia a dia pois trabalha no desenvolvimento de novos repertórios e ensina a identificar o que determinou o aparecimento de tais comportamentos disfuncionais e o quê os mantêm.</p>
                        </li>                   
                    </ul> <!-- cd-tabs-content -->
                </div> <!-- cd-tabs -->
            </div>

        </section>
        <script src="js/main.js"></script> <!-- Resource jQuery -->
          <section title="Publico atendido" id="publico_atendido">
            <div title="público atendido" class="titulo_publico">
                <div class="organizar_div3">
                    <img title="" alt="logo" src="img/logo2.png" width="40">
                    <h1 title="publico" class="">Público atendido</h1>
                </div>
            </div>
            <h2>O terapeuta comportamental atende o público:</h2>
            <div class="publico">
                <div class="infantil">
                    <img alt="crianças" title="infantil" src="img/infantil.jpg">
                    <h3>Infantil</h3>
                </div>
                <div class="adolescentes">
                    <img alt="adolescentes" title="adolescentes" src="img/adolescentes.JPG">
                    <h3>Adolescente</h3>
                </div>
                <div class="adultos">
                    <img alt="Adultos" title="adultos" src="img/adultos .jpg">
                    <h3>Adulto</h3>
                </div>
            </div>
        </section>

        <section title="Sobre a Mayra Silva" id="sobre_mim">
            <div title="sobre mim" class="titulo_sobre">
                <div class="organizar_div">
                    <img title="" alt="logo" src="img/logo2.png" width="40">
                    <h1 title="sobre mim" class="">Sobre Mayra Silva</h1>
                </div>
            </div>
            <div title="um pouco mais sobre Mayra silva" class="sobre_mayra">
                <figure class="foto_maira">
                    <img src="img/foto da maira.jpg" class="maira_img"alt="foto da maira"/>
                    <figcaption class="discrição_foto_maira">
                        Mayra Silva psicóloga,
                        CRP 16/3420.
                    </figcaption>
                </figure>                
                <article class="texto_mayra" title="Mayra Silva psicóloga">
                    <h2 class="esconder">Mayra Silva psicóloga</h2>

                    <p class="p_1">
                        <strong class="marcar">Mayra Silva</strong> psicóloga, pós Graduada em Gestão de Pessoas, possui cursos de extensão nas área
                        de Psicologia Comportamental, Habilidades Sociais e Assertividade.
                    </p>

                    <p class="p_2">
                        Experiência profissional como Terapeuta Comportamental, Analista de Recursos Humanos;
                        Saúde Ocupacional; Psicóloga na rede Socioassistencial, Vasta experiência no treinamento
                        e desenvolvimento de pessoas e liderança de Equipes.
                    </p>
                </article>
            </div>
        </section>
        
      
        <section title="consultas" id="consultas">
            <div title="público atendido" class="titulo_consultas">
                <div class="organizar_div4">
                    <img title="" alt="logo" src="img/logo2.png" width="40">
                    <h1 title="consultas" class="">Consultas</h1>
                </div>
            </div>      
            <div>              
                <br />
                <div class="inner contact"> 
                    <div class="inf_consu">
                <p>Para obter maiores  informações  sobre  os  serviços  prestados, ou agendamento  de 
                    consultas presenciais. Entre em contato com  este profissional  através  do  site ou pelos telefones abaixo!</p>
            </div>
                    <!-- Form Area -->
                    <div class="contact-form">                        
                        <!-- Form -->
                        <form id="contact-us" method="post" action="contato.php">
                          <!--   Left Inputs -->
                            <div class="col-xs-12 col-sm-6 wow animated slideInLeft" data-wow-delay=".5s">
                                <!-- Name -->
                                <input type="text" name="name" id="name" required="required" class="form" placeholder="Nome" />
                                <!-- Email -->
                                <input type="email" name="mail" id="mail" required="required" class="form" placeholder="E-mail" />
                                <!-- Subject -->
                                <input type="text" name="phone" id="phone" required="required" class="form" placeholder="Telefone" />
                            </div><!-- End Left Inputs -->
                            <!-- Right Inputs -->
                            <div class="col-xs-12 col-sm-6 wow animated slideInRight" data-wow-delay=".5s">
                                <!-- Message -->
                                <textarea name="message" id="message" class="form textarea"  placeholder="Menssagem"></textarea>
                            </div><!-- End Right Inputs -->
                            <!-- Bottom Submit -->
                            <div class="relative fullwidth col-xs-12">
                                <!-- Send Button -->
                                <button type="submit" id="submit" name="submit" class="form-btn semibold">Enviar Menssagem</button> 
                            </div><!-- End Bottom Submit -->
                            <!-- Clear -->
                            <div class="clear"></div>
                        </form>

                        <!-- Your Mail Message -->
                        <div class="mail-message-area">
                            <!-- Message -->
                            <div class="alert gray-bg mail-message not-visible-message">
                                <strong>Thank You !</strong> Your email has been delivered.
                            </div>
                        </div>

                    </div><!-- End Contact Form Area -->
                </div><!-- End Inner -->
            </div>
        </section>        
        <footer id="footer">
            <div class="contato_footer">
                <hgroup>
                    <h2 class="titulos_footer">Contatos</h2>
                    <h2 class="telefone_footer">
                        (27) 99934-3452 & 3286-6877
                    </h2>
                    <h2 class="email_Footer">contato@contato.com.br</h2>
                </hgroup>
                <ul class="footer_sociais">
                    <li>
                        <a href="https://www.facebook.com/profile.php?id=100005260125769&fref=ts" title="facebook">
                            <span class="logo_facebook2"></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/higor-weber-da-silva-329672127?trk=nav_responsive_tab_profile" title="linkidin">
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1572.8725823237264!2d-40.40062275604555!3d-20.343992628423425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x48c0d6a34f286085!2sShopping+Moxuara!5e0!3m2!1spt-BR!2sbr!4v1487260486688" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <nav class="menu_footer">
                <h2>Menu</h2>
                <ul>
                    <li><a rel="nofollow" title="Inicio" href="#header">Inicio</a></li>
                    <li style="width: 115%"><a  rel="nofollow" title="Sobre mim" href="#sobre_mim">Sobre Mim</a></li>
                    <li><a rel="nofollow"title="Terapias" href="#terapias">Terapias</a></li>
                    <li style="width: 172%"><a rel="nofollow" title="Publico atendido" href="#publico_atendido">Público atendido</a></li>
                    <li><a rel="nofollow" title="Consultas" href="#consultas">Consultas</a></li>
                </ul>
                <a rel="nofollow" title="Inicio" href="#header" class="retornar"></a>
        <script src="js/retornar_inicio.js"></script>
            </nav>
        </footer>
        <footer class="direiros">
            <div class="dir_1">
                <div class="dir_1_1">
                    Todos os direitos reservados á <a href="https://www.facebook.com/profile.php?id=100005260125769&fref=ts">Mayra J. Silva</a> © Copyright 2017.
                </div>
                <div class="dir_1_2"> 
                    Design e desenvolvimento por: <a href="https://www.facebook.com/higorweber.dasilva">Higor Weber</a> e <a href="https://www.facebook.com/reynaldo.marinho.3?fref=hovercard">Reynaldo Marinho</a>.
                </div>
            </div>
        </footer>
       


    </body>

</html>

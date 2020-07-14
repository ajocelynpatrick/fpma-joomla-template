<?php
defined('_JEXEC') or die;
// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');
// ne pas charger le correctif
JHtmlBootstrap::loadCss($includeMaincss = true );
?>
<!DOCTYPE html>
<html lang="en">
    <HEAD>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="FPMA Fiangonana gasy cergy vavaka alahady"/>
        <jdoc:include type="head" />
        <!--[if lt IE 9]>
            <script src="<?php echo $this->baseurl ?>/media/jui/js/html5.js"></script>
        <![endif]-->
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="resources/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="resources/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="resources/favicons/favicon-16x16.png">
        <link rel="manifest" href="resources/favicons/site.webmanifest">
        <link rel="mask-icon" href="resources/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
    </HEAD>
    <body>
        <!--header contenant la navbar et le texte -->
        <header>
            <nav>
                <div class="row">
                    <img src="resources/img/fpmalogo%20cergy.png" alt="fpma logo" class="logo"/>
                    <ul class="main-nav js--main-nav">
                        <li> <a href="#bible_texte">Accueil</a></li>
                        <li><a href="#bible">Etude biblique</a></li>
                        <li><a href="#sampana">Section</a></li>
                        <li><a href="#responsables">Contact</a></li>
                    </ul>
                    <a class="mobile-nav-icon js--nav-icon"><i class="fas fa-bars"></i></a>
                </div>
            </nav>
            <div class="bible-text-box" id="bible_texte">
                <h1>"fa araka ny fahamasinan'ilay niantso anareo, dia aoka mba ho masina koa ianareo amin'ny fitondran-tena          rehetra"<br>
                    I Petera 1:15
                </h1>
                <a class= "btn btn-full js--scroll-to-plans" href="#">Ecouter en direct</a>
                <a class="btn btn-ghost js--scroll-to-start" href="#">Annonce</a>
            </div>
        </header>
        <!-- section etude biblique -->
        <section class="section-features js--section-features" id="bible">
           <div class="row">
            Section etude biblique
           </div>
           
        </section>
        <!-- section gallery photo sampana -->
        <section class="section-meals" id="sampana">
            <div class="row"> 
                Section gallery photo sampana 
            </div>   
        </section>
        <!-- section etude biblique et formation -->
        <section class="section-step">
            <div class="row">Section etude biblique</div>
        </section>
        <!-- section responsable fiangonana -->
        <section class="section-responsable" id="responsables">
            <div class="row"> Section responsable </div>
        </section>
        <!-- section verset du mois -->class
        <section class="section-verset-du-mois">
            <div class="row">Verset du mois</div>
        </section>
        <!-- membre du bureau -->
        <section class="section-membre js--section-plans">
            <div class="row">Section membres du bureau</div>
        </section>
        <!-- maps et formulaire contact -->
        <section class="section-form map-box"> 
            <div class="row">Contact</div> 
        </section>
        <footer>
            <div class="row">Footer va ici</div>
        </footer>
    </body>
</html>

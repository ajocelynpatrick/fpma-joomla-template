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
        <header class="row-fluid">
            <div class="span4">
                <a href="/"><img src="images/logo.png" alt="KinetECO, Inc., click for home. " class="pull-left" /></a>
            </div>
            <div class="span8">Put language switcher and search here</div>
        </header>
        <div class="row-fluid">
            <nav class="span12">navigation goes here</nav>
        </div>
        <div class="row-fluid">
            <div class="span12">breadcrumbs go here</div>
        </div>
        <div class="row-fluid">
            <div class="span9">This is where the content goes</div>
            <div class="span3">This is where the right column goes</div>
        </div>
        <footer class="row-fluid">
            <div class="span9">
                <p>&copy; 2012 KinetECO, Inc. All rights reserved.</p>
            </div>
            <div class="span3"><img src="images/footerlogo.png" alt="KinetECO, Inc." class="pull-right" /></div>
        </footer>

</html>

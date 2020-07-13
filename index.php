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
        <meta name="description" content="Minoa an'i Jesosy Tompo dia ho vonjena ianao sy ny ankohonanao"/>
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
        <section class="section-features js--section-features" id="bible">
            
            <div class="row">
                <h2>
                  La Bible
                </h2>
                <p class="section1-paragraph1">
                    Il ne suffit de posseder la bible, il faut la lire, la croire, et la vivre
                </p>
            </div>
            <div class="row js--wp-featurebox">
                <div class="col span-1-of-4 box">
                    <i class="fas fa-dove icon-big"></i>
                    <h3> Pain du jour</h3>
                    <p>
                        Qui ne voudrait pas connaître le bonheur? Plus que ses trois ,heureux, C'est tout ce qui nous dit ce qu'est le bonheur et comment le trouver.
                    </p>
                </div>
               <div class="col span-1-of-4 box">
                    <i class="fas fa-book-open icon-big"></i>
                    <h3> Pericope</h3>
                    <p>
                        Il ne suffit pas de posseder la bible,il faut la lire<br>
                        Il ne suffit pas de lire la bible, il faut la croire<br>
                        Il ne suffit pas de la croire, il faut la vivre
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <i class="fas fa-bible icon-big"></i>
                    <h3> Etude biblique</h3>
                    <p>
                        Sekolin'ny tenin'Andriamanitra, fifampitondrana am-bavaka ho an'ny rehetra,<br>
                        fitondrana am-bavaka ny fiainam-piangonana.
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <i class="fas fa-church icon-big"></i>
                    <h3> Edito Pasteur</h3>
                    <p>
                        'Or, une seule chose est nécessaire. Marie a choisi la bonne part, qui ne lui sera<br>
                        pas ôtée', Luc 10:42
                    </p>
                </div>
            </div>
        </section>
        
        <!--Nouvelle section pour la galery de photo du sampana-->
        <!-- Pour cette section, on ne souhaite pas centrer la rangée donc on n'utilisera pas la classe row -->
        <!-- on souhaite utiliser 100% de la largeur de la vue  du navigateur et mettre 4 colonnes d'images par rangée -->
        <!-- nous allons avoir deux lignes d'images et donc nous utiliserons deux listes <ul> (un pour chaque ligne) -->
        
        <section class="section-meals" id="sampana">
            <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/cercle_feminin.jpg" alt="SVK" width=320 height=180>
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/cercle_masculin.jpg" alt="SLK" width="320" height="180">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/Chorale.jpg" alt="chorale" width="350" height="180">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/Ed.jpg" alt="ED" width="320" height="180">
                    </figure>
                </li>
            </ul>
            <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/Kt.jpg" alt="KT" width="320" height="180">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/jeune.jpg" alt="STK" width="320" height="180">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/music.jpg" alt="SZM" width="320" height="180">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/Reveil.jpg" alt="reveil" width="320" height="180">
                    </figure>
                </li>
            </ul>
        </section>
        
        <section class="section-step">
            <div class="row">
                <!--header de la section contenant le titre-->
                <h2>Formation SAP???</h2>
            </div>
            <div class="row"> <!--permet d'utiliser toute la largeur du navigateur-->
                <div class="col span-1-of-2 step-box">
                    <img src="resources/img/bible_PN.png" alt="bible pour formation" class="bible-open js--wp-step-box">
                </div>
                <div class="col span-1-of-2 step-box">
                    <div class="form-step">
                        <div>1</div>
                        <p>
                            Fampianarana isaky ny alarobia: 20h à 21h
                        </p>
                    </div>
                    <div class="form-step">
                        <div>2</div>
                        <p class="form-texte_2">
                            Fidirana amin'ny confcall: 0176728908;  code : 359104#
                        </p>
                    </div>
                    <div class="form-step">
                        <div>3</div>
                        <p>
                            Fampianarana SAP/KNPL:<br>
                                - Le leadership Masculin: <a href="#"> http://archives.fpma.net</a>
                        </p>
                    </div>
                    <!--rajout du bouton lien-->
                    <a href="#" class="btn-link"><img src="resources/img/lien-hypertexte.png" width="50" height="50" alt="bouton lien"></a>
                    <span><a href="#">cliquez ici pour visiter le site</a></span>
                </div>
            </div>
        </section>
        
        <section class="section-responsable" id="responsables">
            <div class="row">
                <h2>Les responsables</h2>
            </div>
            <div class="row js--responsable-images">
                <!-- pour chaque colonne il nous faudra un div avec classe col -->
                <!-- la classe col et span-1-of-4 (permet d'afficher une colonne sur 4) sont fournies par grid.css-->
                <div class="col span-1-of-4 box">
                    <!--comme cette section fait partie de la section 1 alors le titre sera un sous-titre h3-->
                    <!--car on a déja un h2 dans le titre de la section 1-->
                    <img src="resources/img/bible.jpg" alt="bible">
                    <h3> Pasteur </h3>
                    <div class="res-feature">
                         <p>Joelitiana RARIVOMANANA</p>
                        <i class="fa fa-envelope icon-small"></i>
                           rarivomanana.<br>joelitiana@neuf.fr
                    </div>
                    
                </div>
                <div class="col span-1-of-4 box">
                    <img src="resources/img/president.jpg" alt="president">
                    <h3> Président </h3>
                    <div class="res-feature">
                        <p>Rémy RAHERIARISOA</p>
                        <i class="fa fa-envelope icon-small"></i>
                            raheriarisoa@aol.com
                    </div>
                     <!--div class="res-feature">
                         <i class="fab fa-twitter icon-small"></i>
                           <a href="#">@aol.com</a> 
                    </div-->
                </div>
                <div class="col span-1-of-4 box">
                    <img src="resources/img/gestionnaire.jpg" alt="gestionnaire">
                    <h3> Géstionnaire </h3>
                    <div class="res-feature">
                        <p>Tahiana RAKOTOMALALA</p>
                        <i class="fa fa-envelope icon-small"></i>
                           tahianarakotomalala77<br>@gmail.com     
                    </div>
                </div>
                <div class="col span-1-of-4 box">
                    <img src="resources/img/tresorie.jpg" alt="tresorier">
                    <h3> Trésorier </h3>
                    <div class="res-feature">
                        <p>Parfait RAKOTOMAMPIANINA</p>
                        <i class="fa fa-envelope icon-small"></i>
                            pariniza@yahoo.fr   
                    </div>
                </div>
            </div>
        </section>
        <section class="section-verset-du-mois">
            <!--titre-->
            <div class="row">
                <h2> Les 3 versets du dernier mois</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <blockquote>
                        Fa velona sy mahery ny tenin'Andriamanitra ka maranitra noho ny sabatra roa lela, ka manindrona hatramin'ny fampisarahana ny aina sy ny fanahy ary ny tonona sy ny tsoka, ka mahay mamantatra ny eritreritra sy ny fisainan'ny fo.
                        <cite>
                            <img src="resources/img/bb1.jpg" alt="bibleicon1">
                             Hebreux 4:12
                        </cite>
                    </blockquote>
                </div>
                <div class="col span-1-of-3">
                    <blockquote>
                         Koa amin'izany, satria efa nohamarinina tamin'ny finoana isika, dia aoka isika hanana fihavanana amin'Andriamanitra amin'ny alalan'i Jesosy Kristy Tompontsika.
                        <div>&nbsp;</div>
                        <div>&nbsp;</div>
                        <cite>
                            <img src="resources/img/bb4.jpg" alt="bibleicon4">
                             Romain 5:1
                        </cite>
                    </blockquote>
                </div>
                <div class="col span-1-of-3">
                    <blockquote>
                        Hoy ny tenin'ny Tompo: Tiako izay tia ahy; Ary izay fatra-pitady ahy dia hahita ahy
                        <div>&nbsp;</div>
                        <div>&nbsp;</div>
                        <div>&nbsp;</div>
                        <div>&nbsp;</div>
                        <div>&nbsp;</div>
                        <cite>
                            <img src="resources/img/bb3.jpg" alt="bibleicon3">
                              Proverbes 8: 17
                        </cite>
                    </blockquote>
                </div>
            </div>
        </section>
        <section class="section-membre js--section-plans">
            <div class="row">
                <h2>Membre du bureau</h2>
            </div>
            <!--créer un div row entier-->
            <div class="row">
               <div class="col span-1-of-2">
                   <div class="plan-box js--plan-box">
                     <div>
                        <h3>Responsable du bureau </h3>
                         <!--p class="nom"></p-->
                     </div>
                     <div>
                         <ul>
                            <li>  
                                <i class="fa fa-check-square icon-small"></i>Rémy Raheriarisoa:raheriarisoa@aol.com
                            </li>
                            <li>
                                <i class="fa fa-check-square icon-small"></i>Tahiana Rakotomalala: tahianarakotomalala77@gmail.com 
                            </li>
                            <li>
                                <i class="fa fa-check-square icon-small"></i>Parfait Rakotomampianina:pariniza@yahoo.fr
                            </li>
                            <li>  
                                <i class="fa fa-check-square icon-small"></i>Nivo Razafiaharison: nrazafiharispon@yahoo.fr 
                             </li> 
                            <li>
                                <i class="fa fa-check-square icon-small"></i>Nizara Rakotomampianina: fpma.cergy.secretariat@gmail.com
                            </li>
                         </ul> 
                     </div>
                   </div>
                </div>
                <div class="col span-1-of-2">
                       <div class="plan-box">
                         <div>
                            <h3>Diacre</h3>
                            <!--p class="nom">Nom et Mail</p-->
                         </div>
                         <div>
                           <ul>
                            <li>  
                                <i class="fa fa-check-square icon-small"></i>Noro Raheriarisoa: raheriarisoa@aol.com 
                            </li>
                            <li>  
                                <i class="fa fa-check-square icon-small"></i>Rondro Razafindralambo : rajesier@gmail.com
                            </li>
                            <li>  
                                <i class="fa fa-check-square icon-small"></i>Fanja Ralison : nirina.ralison@gmail.com 
                            </li>
                            <li>  
                                <i class="fa fa-check-square icon-small"></i>Lala Randriantsoa : dolyalexandre@yahoo.com
                            </li>
                            <li>  
                                <i class="fa fa-check-square icon-small"></i>Nayssa Razafiharison : nayssa@gmail.com
                            </li>
                            </ul>
                         </div>
                     </div>
                </div>
            </div>
        </section>
        
        <section class="section-form map-box"> 
            <div class="map"></div>
            <div class="form-box">
            <div class="row">
                <h2> Inscription Ecole du Dimanche</h2>
            </div>
            <div class="row">
                <form method="post" action="#" class="contact-form">
                    <!--Nom-->
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Nom du Responsable</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="firstnamer" placeholder="Nom du responsable" required>
                        </div>
                   </div>
                   <!--div class="row">
                        <div class="col span-1-of-3">
                            <label>Prénom du Responsable</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="lastnamer" placeholder="Prénom du responsable" required>
                        </div>
                   </div-->
                   <div class="row">
                        <div class="col span-1-of-3">
                            <label>Nom de l'enfant</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="firstnamee" placeholder="Nom de l'enfant" required>
                        </div>
                   </div>
                   <div class="row">
                        <div class="col span-1-of-3">
                            <label>Prénom de l'enfant</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="lastnamee" placeholder="Prénom de l'enfant" required>
                        </div>
                  </div>
                  <div class="row">
                        <div class="col span-1-of-3">
                            <label>Date de Naissance</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="date_naiss" id="date_naiss" required>
                        </div>
                  </div>
                  <!--Section-->
                    <div class="row">
                        <!-- une colonne parmi 3 -->
                        <div class="col span-1-of-3">
                            <label>Section</label>
                        </div>
                        <!-- deux colonnes parmi 3 -->
                        <div class="col span-2-of-3">
                            <!--ici ce ne sera pas un input mais un combobox-->
                            <!--les id sont utiles pour utiliser les controles-->
                            <select name="find-us" id="find-us">
                                <option value="section-1" selected>Section 1</option>
                                <option value="section-2">Section 2</option>
                                <option value="section-3">Section 3</option>
                                <option value="section-4">Section 4</option>
                            </select>
                        </div> 
                    </div>
                    <!--Email-->
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Votre email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="entrer votre email">
                        </div>
                    </div>
                    <!--drop us a line-->
                    <div class="row">
                        <!-- une colonne parmi 3 -->
                        <div class="col span-1-of-3">
                            <label> Votre Message</label>
                        </div>
                        <!-- deux colonnes parmi 3 -->
                        <div class="col span-2-of-3">
                            <textarea id="message" name="message" placeholder="Votre message">
                            </textarea>
                        </div> 
                    </div>   
                    <!--submit button-->
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label> </label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value="Envoyer">
                        </div>
                    </div>
                </form>
            </div>
         </div>
        </section> 
        <footer>
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li>
                            <a href="#">About us</a>
                        </li>
                        <li>
                            <a href="#">iOS App</a>
                        </li>
                        <li>
                            <a href="#">Android App</a>
                        </li>
                    </ul>
                </div>
                <div class="col span-1-of-2">
                    <ul class="social-links">
                        <li>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-youtube"></i> </a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-rss"></i> </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <p>
                    Eglise Protestante Malgache en France, Fpma Cergy,
                           19 Place des Touleuses 95000, Cergy<br>
                    Fonctionne avec Nirvana et wordPress
                </p>
            </div>
            <div class="row">
                <p>
                    Copyright &copy;2019, by fpma Cergy.
                </p>
            </div>
        </footer>
        <script type="text/jscript" src="vendor/js/jquery.min.js"></script>
        <script type="text/jscript" src="vendor/js/respond.min.js"></script>
        <script type="text/jscript" src="vendor/js/html5shiv.min.js"></script>
        <script type="text/jscript" src="vendor/js/selectivizr.js"></script>
        <script type="text/javascript" src="vendor/js/jquery.waypoints.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/jscript" src="vendor/js/gmap.js"></script>
        <script type="text/jscript" src="resources/js/script.js"></script>
    </body>
</html>

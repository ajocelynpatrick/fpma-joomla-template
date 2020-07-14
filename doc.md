[TOC ] 
# 1. Préparation structure de fichier
Nous allons créer la structure de répertoire. 
- création da la structure de fichier vide (voir git commit numero `8bd59d10`)

# 2. Remplissage de index.php 
Copie du contenu du template html que nous souhaitons convertir en joomla (voir git commit )


# 3. Préparation header du template
Application de l'étape 3 du tutorial sur kineteco.
Recopie de la ligne 1,2 35,36 et 40 41 du template protostar au début de notre fichier (dans une balise `<?php ?>`)

Là, où ça va changer c'est qu'on va faire attention au chargement des css car nous avons plein de css et cela peut avoir des impacts sur notre site. 

On va tout effacer les chargements des CSS mais nous allons garder le chargement des favicons et des google fonts. 

Copier également le code 
```php 
    <!--[if lt IE 9]>
        <script src="<?php echo $this->baseurl ?>/media/jui/js/html5.js"></script>
    <![endif]-->
```
Pour l'instant, je vais également remplacer toute la partie `<body>` de la page `index.php` pour faciliter l'insertion des modules et des composants.

Le contenu de notre fichier `index.php` est maintenant selon le commit "header et contenu minimum"

# 4. Arrangement layout du site

Nous allons adapter notre layout minimum à notre vrai template tel que nous l'avonc créé en HTML5/CSS3.
Nous avons plusieurs sections dans le design de notre site. Chaque section est un `row` (ou ligne au sens boostrap)
Pour le moment, le plus simple est de mettre un div dans chaque section

# 5. Remplacement du texte par du code joomla
Dans ce qui suit, nous allons modifier le code de `index.php` pour remplacer les textes brut de chaque lignes par un code joomla qui va nous les remplacer par des modules ou un composant joomla.

Nous allons commence par le code du menu dans le header

```html
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
```
Nous allons remplacer la partie `<ul>...</ul>` qui est la liste des éléments du menu en 

``` php
    <jdoc:include type="modules" name="nav" style="html5" />
```
et nous allons également faire en sorte que le texte du bandeau soit une module et donc nous allons remplacer le `<h1>...</h1>` par un autre code de module joomla.

``` php
    <jdoc:include type="modules" name="texte-banner" style="html5" />
```
On obtient alors :

```html
<header>
    <nav>
        <div class="row">
            <img src="resources/img/fpmalogo%20cergy.png" alt="fpma logo" class="logo"/>
            <jdoc:include type="modules" name="nav" style="html5" />
            <a class="mobile-nav-icon js--nav-icon"><i class="fas fa-bars"></i></a>
        </div>
    </nav>
    <div class="bible-text-box" id="bible_texte">
        <jdoc:include type="modules" name="verset-banner" style="html5" />
        <a class= "btn btn-full js--scroll-to-plans" href="#">Ecouter en direct</a>
        <a class="btn btn-ghost js--scroll-to-start" href="#">Annonce</a>
    </div>
</header>
```

Nous allons également modifier le texte dans nos différentes sections en code de modules pour pouvoir les placer dynamiquement.

Pour commencer et faciliter la migration de notre template, nous allons ensuite les définir plus tard comme des modules html et baucoup plus tard, nous allons développer des modules joomla pour les différentes parties.

Voici la liste des remplacements :

```html
    <!-- section etude biblique -->
    <section class="section-features js--section-features" id="bible">
    <div class="row">
        <jdoc:include type="modules" name="pericope" style="html5" />
    </div>        
    </section>
```
Et pour les autres sections, nous allons modifier également les lignes 53, 58, 62, 66, 70, 74 et 77 (voir les modifications dans le fichier `index.php` dans le repo git)
 
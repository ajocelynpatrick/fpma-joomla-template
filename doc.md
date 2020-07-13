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
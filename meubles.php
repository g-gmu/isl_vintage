<!DOCTYPE html>
<html>
    <head>
	<title>Vintage - meubles</title>
	<meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body>        
        <?php include 'includes/pages/parties-communes.php';  ?>
        
<!-- 
================================================================================
    Pourquoi ai-je décidé de diviser mon code en utilisant des includes() ?
        - car une partie me semble commune à tous le site
        - l'autre est propre à la page visitee.
        - la division est ainsi faite :
            -- zoneici-start.php (comprend le debut du bloc)
            -- zoneici-meubles.php (comprend l'information qui change
            -- zoneici-end.php (comprend la fin du bloc)
    information : je ne sais pas s'il est de convention d'agir ainsi.
================================================================================
-->
        
        <?php include 'includes/pages/zoneici-start.php'; ?>
        <?php include 'includes/pages/zoneici-meubles.php'; ?>
        <?php include 'includes/pages/zoneici-end.php'; ?>
        
        <section class="container">
            <div class="sous-container">
                <!-- bloc zone-deploiement ------------------------------------- -->
                <section id="zone-deploiement">
                    <div class="deploiement-menu">
                        <ul>
                            <li class="menu">Chaises</li>
                            <ul>
                                <li class="sous_menu">Cuisine</li>
                                <li class="sous_menu">Salle à manger</li>
                            </ul>
                            <li class="menu">Tables</li>
                            <ul>
                                <li class="sous_menu">Basse</li>
                                <li class="sous_menu">Haute</li>
                                <li class="sous_menu">Chevet</li>
                                <li class="sous_menu">Desserte</li>
                            </ul>
                            <li class="menu">Armoires</li>
                            <li class="menu">Tables</li>
                        </ul>
                    </div>
                    <div class="deploiement-article_sm deploiement-article_md deploiement-article_xl">
                        <!-- deploiement-article -->
                        <div class="article-souscontainer_sm article-souscontainer_md article-souscontainer_xl">
                            <div class="souscontainer-gauche">
                                <!-- cette div me permet avec plus de facilité de placer mon image dans la vue tablette -->
                                <article class="catalogue_ln4sm_01 catalogue_ln4md_01 catalogue_ln4xl_01">souscontainer-img</article>
                            </div>                            
                            <div class="souscontainer-droite">
                                <article class="catalogue_ln4sm_02 catalogue_ln4md_02 catalogue_ln4xl_02">souscontainer-model</article>
                                <article class="catalogue_ln4sm_03 catalogue_ln4md_03 catalogue_ln4xl_03">souscontainer-texte</article>
                                <article class="catalogue_ln4sm_04 catalogue_ln4md_04 catalogue_ln4xl_04">souscontainer-prix</article>
                            </div>                            
                        </div>
                        <div class="article-souscontainer_sm article-souscontainer_md article-souscontainer_xl">
                            <div class="souscontainer-gauche">
                                <!-- cette div me permet avec plus de facilité de placer mon image dans la vue tablette -->
                                <article class="catalogue_ln4sm_01 catalogue_ln4md_01 catalogue_ln4xl_01">souscontainer-img</article>
                            </div>                            
                            <div class="souscontainer-droite">
                                <article class="catalogue_ln4sm_02 catalogue_ln4md_02 catalogue_ln4xl_02">souscontainer-model</article>
                                <article class="catalogue_ln4sm_03 catalogue_ln4md_03 catalogue_ln4xl_03">souscontainer-texte</article>
                                <article class="catalogue_ln4sm_04 catalogue_ln4md_04 catalogue_ln4xl_04">souscontainer-prix</article>
                            </div>                            
                        </div>
                        <div class="article-souscontainer_sm article-souscontainer_md article-souscontainer_xl">
                            <div class="souscontainer-gauche">
                                <!-- cette div me permet avec plus de facilité de placer mon image dans la vue tablette -->
                                <article class="catalogue_ln4sm_01 catalogue_ln4md_01 catalogue_ln4xl_01">souscontainer-img</article>
                            </div>                            
                            <div class="souscontainer-droite">
                                <article class="catalogue_ln4sm_02 catalogue_ln4md_02 catalogue_ln4xl_02">souscontainer-model</article>
                                <article class="catalogue_ln4sm_03 catalogue_ln4md_03 catalogue_ln4xl_03">souscontainer-texte</article>
                                <article class="catalogue_ln4sm_04 catalogue_ln4md_04 catalogue_ln4xl_04">souscontainer-prix</article>
                            </div>                            
                        </div>
                        <div class="article-souscontainer_sm article-souscontainer_md article-souscontainer_xl">
                            <div class="souscontainer-gauche">
                                <!-- cette div me permet avec plus de facilité de placer mon image dans la vue tablette -->
                                <article class="catalogue_ln4sm_01 catalogue_ln4md_01 catalogue_ln4xl_01">souscontainer-img</article>
                            </div>                            
                            <div class="souscontainer-droite">
                                <article class="catalogue_ln4sm_02 catalogue_ln4md_02 catalogue_ln4xl_02">souscontainer-model</article>
                                <article class="catalogue_ln4sm_03 catalogue_ln4md_03 catalogue_ln4xl_03">souscontainer-texte</article>
                                <article class="catalogue_ln4sm_04 catalogue_ln4md_04 catalogue_ln4xl_04">souscontainer-prix</article>
                            </div>                            
                        </div>
                        <div class="article-souscontainer_sm article-souscontainer_md article-souscontainer_xl">
                            <div class="souscontainer-gauche">
                                <!-- cette div me permet avec plus de facilité de placer mon image dans la vue tablette -->
                                <article class="catalogue_ln4sm_01 catalogue_ln4md_01 catalogue_ln4xl_01">souscontainer-img</article>
                            </div>                            
                            <div class="souscontainer-droite">
                                <article class="catalogue_ln4sm_02 catalogue_ln4md_02 catalogue_ln4xl_02">souscontainer-model</article>
                                <article class="catalogue_ln4sm_03 catalogue_ln4md_03 catalogue_ln4xl_03">souscontainer-texte</article>
                                <article class="catalogue_ln4sm_04 catalogue_ln4md_04 catalogue_ln4xl_04">souscontainer-prix</article>
                            </div>                            
                        </div>
                        <div class="article-souscontainer_sm article-souscontainer_md article-souscontainer_xl">
                            <div class="souscontainer-gauche">
                                <!-- cette div me permet avec plus de facilité de placer mon image dans la vue tablette -->
                                <article class="catalogue_ln4sm_01 catalogue_ln4md_01 catalogue_ln4xl_01">souscontainer-img</article>
                            </div>                            
                            <div class="souscontainer-droite">
                                <article class="catalogue_ln4sm_02 catalogue_ln4md_02 catalogue_ln4xl_02">souscontainer-model</article>
                                <article class="catalogue_ln4sm_03 catalogue_ln4md_03 catalogue_ln4xl_03">souscontainer-texte</article>
                                <article class="catalogue_ln4sm_04 catalogue_ln4md_04 catalogue_ln4xl_04">souscontainer-prix</article>
                            </div>                            
                        </div>
                        <div class="article-souscontainer_sm article-souscontainer_md article-souscontainer_xl">
                            <div class="souscontainer-gauche">
                                <!-- cette div me permet avec plus de facilité de placer mon image dans la vue tablette -->
                                <article class="catalogue_ln4sm_01 catalogue_ln4md_01 catalogue_ln4xl_01">souscontainer-img</article>
                            </div>                            
                            <div class="souscontainer-droite">
                                <article class="catalogue_ln4sm_02 catalogue_ln4md_02 catalogue_ln4xl_02">souscontainer-model</article>
                                <article class="catalogue_ln4sm_03 catalogue_ln4md_03 catalogue_ln4xl_03">souscontainer-texte</article>
                                <article class="catalogue_ln4sm_04 catalogue_ln4md_04 catalogue_ln4xl_04">souscontainer-prix</article>
                            </div>                            
                        </div>
                        <div class="article-souscontainer_sm article-souscontainer_md article-souscontainer_xl">
                            <div class="souscontainer-gauche">
                                <!-- cette div me permet avec plus de facilité de placer mon image dans la vue tablette -->
                                <article class="catalogue_ln4sm_01 catalogue_ln4md_01 catalogue_ln4xl_01">souscontainer-img</article>
                            </div>                            
                            <div class="souscontainer-droite">
                                <article class="catalogue_ln4sm_02 catalogue_ln4md_02 catalogue_ln4xl_02">souscontainer-model</article>
                                <article class="catalogue_ln4sm_03 catalogue_ln4md_03 catalogue_ln4xl_03">souscontainer-texte</article>
                                <article class="catalogue_ln4sm_04 catalogue_ln4md_04 catalogue_ln4xl_04">souscontainer-prix</article>
                            </div>                            
                        </div>
                    </div>
                </section>
            </div>
        </section>
        
        
    </body>
</html>


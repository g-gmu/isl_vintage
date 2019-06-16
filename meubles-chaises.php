<!DOCTYPE html>
<html lang="fr">
    <head>
	<title>Les chaises disponibles</title>
	<meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body>        
        <?php include 'includes/pages/parties-communes.php';  ?>
        
<!-- 
================================================================================
    Pourquoi ai-je décidé de diviser mon code en utilisant des includes() ?
        * car une partie me semble commune à tous le site
        * l'autre est propre à la page visitee.
        * la division est ainsi faite :
            ** zoneici-start.php (comprend le debut du bloc)
            ** zoneici-meubles.php (comprend l'information qui change
            ** zoneici-end.php (comprend la fin du bloc)
    information : je ne sais pas s'il est de convention d'agir ainsi.
================================================================================
-->
        
        <?php include 'includes/pages/zoneici-start.php'; ?>
        <?php include 'includes/pages/zoneici-meubles-chaises.php'; ?>
        <?php include 'includes/pages/zoneici-end.php'; ?>
    

        <div class="container">
            <div class="sous-container">
                <div id="zone-deploiement">
                    <div class="deploiement-menu">
                        <?php include 'includes/menu-deroulant/meubles-menu-deroulant.php'; ?>
                    </div>
                    <!-- === Chaise Bombay ===================================== -->
                    <div class="deploiement-article_sm deploiement-article_md deploiement-article_xl nno">
                        <a href="meubles-chaises-detail-bombay.php" class="urlarticle">
                            <div class="article-souscontainer_sm article-souscontainer_md article-souscontainer_xl nne chaise_bombay">                            
                                <div class="souscontainer-gauche">
                                    <!-- cette div me permet avec plus de facilité de placer mon image dans la vue tablette -->
                                    <div class="catalogue_ln4sm_01 catalogue_ln4md_01 catalogue_ln4xl_01 souscontainer_img_1 image1"></div>
                                </div>                            
                                <div class="souscontainer-droite">
                                    <div class="catalogue_ln4sm_02 catalogue_ln4md_02 catalogue_ln4xl_02 model">Bombay</div>
                                    <div class="catalogue_ln4sm_03 catalogue_ln4md_03 catalogue_ln4xl_03 texte">Chaise de bar industrielle Bombay.  Le siège en cuir n'est pas complètement fini fonnant aux chaises un joli look vintage.  Un design cool que vous pouvez combiner avec par exemple une table en bois.<br/>[...]</div>
                                    <div class="catalogue_ln4sm_04 catalogue_ln4md_04 catalogue_ln4xl_04 prix">89€</div>
                                </div>                            
                            </div>    
                        </a>
                        <!-- === Chaise Kima Acier ============================= -->
                        <a href="meubles-chaises.php" class="urlarticle">
                            <div class="article-souscontainer_sm article-souscontainer_md article-souscontainer_xl nne">
                                <div class="souscontainer-gauche">
                                    <!-- cette div me permet avec plus de facilité de placer mon image dans la vue tablette -->
                                    <div class="catalogue_ln4sm_01 catalogue_ln4md_01 catalogue_ln4xl_01 souscontainer_img_2 image2"></div>
                                </div>                            
                                <div class="souscontainer-droite">
                                    <div class="catalogue_ln4sm_02 catalogue_ln4md_02 catalogue_ln4xl_02 model">Kima Acier</div>
                                    <div class="catalogue_ln4sm_03 catalogue_ln4md_03 catalogue_ln4xl_03 texte">Une belle chaise de fil d'acier avec un design lisse et solide. Sans pareil et un vrai eye-attachant à votre table.<br/>[...]</div>
                                    <div class="catalogue_ln4sm_04 catalogue_ln4md_04 catalogue_ln4xl_04 prix">99€</div>
                                </div>                            
                            </div>                            
                        </a>
                        <!-- === Chaise Peak Blue ============================== -->
                        <a href="meubles-chaises-detail-peakyblue.php" class="urlarticle">
                            <div class="article-souscontainer_sm article-souscontainer_md article-souscontainer_xl nne">
                                <div class="souscontainer-gauche">
                                    <!-- cette div me permet avec plus de facilité de placer mon image dans la vue tablette -->
                                    <div class="catalogue_ln4sm_01 catalogue_ln4md_01 catalogue_ln4xl_01 image3"></div>
                                </div>                            
                                <div class="souscontainer-droite">
                                    <div class="catalogue_ln4sm_02 catalogue_ln4md_02 catalogue_ln4xl_02 model">Peaky Blue</div>
                                    <div class="catalogue_ln4sm_03 catalogue_ln4md_03 catalogue_ln4xl_03 texte">Lovely pour s'asseoir et belle à regarder. Les chaises de salle à manger ne devraient pas seulement être confortables. Elles doivent aussi avoir l'air bien. Moderne et bien ajusté.<br/>[...]</div>
                                    <div class="catalogue_ln4sm_04 catalogue_ln4md_04 catalogue_ln4xl_04 prix">69€</div>
                                </div>                            
                            </div>
                        </a>
                        <!-- === Chaise DSW Red ================================ -->
                        <a href="meubles-chaises.php" class="urlarticle">
                            <div class="article-souscontainer_sm article-souscontainer_md article-souscontainer_xl nne">
                                <div class="souscontainer-gauche">
                                    <!-- cette div me permet avec plus de facilité de placer mon image dans la vue tablette -->
                                    <div class="catalogue_ln4sm_01 catalogue_ln4md_01 catalogue_ln4xl_01 image4"></div>
                                </div>                            
                                <div class="souscontainer-droite">
                                    <div class="catalogue_ln4sm_02 catalogue_ln4md_02 catalogue_ln4xl_02 model">DSW Red</div>
                                    <div class="catalogue_ln4sm_03 catalogue_ln4md_03 catalogue_ln4xl_03 texte">Pour ceux qui veulent être à l'aise et à la mode. Avec le siège DSW Style, vous êtes bon! Une chaise design facile et confortable qui sans vouloir attirer l'attention s'adapte.<br/>[...]</div>
                                    <div class="catalogue_ln4sm_04 catalogue_ln4md_04 catalogue_ln4xl_04 prix">89€</div>
                                </div>                            
                            </div>
                        </a>
                        <!-- === Chaise Vbar =================================== -->
                        <a href="meubles-chaises.php" class="urlarticle">
                            <div class="article-souscontainer_sm article-souscontainer_md article-souscontainer_xl nne">
                                <div class="souscontainer-gauche">
                                    <!-- cette div me permet avec plus de facilité de placer mon image dans la vue tablette -->
                                    <div class="catalogue_ln4sm_01 catalogue_ln4md_01 catalogue_ln4xl_01 image5"></div>
                                </div>                            
                                <div class="souscontainer-droite">
                                    <div class="catalogue_ln4sm_02 catalogue_ln4md_02 catalogue_ln4xl_02 model">V Bar</div>
                                    <div class="catalogue_ln4sm_03 catalogue_ln4md_03 catalogue_ln4xl_03 texte">Une belle chaise de bar en acier avec un design lisse et solide sans pareil et un vrai eyecatcher à votre table de bar.<br/>[...]</div>
                                    <div class="catalogue_ln4sm_04 catalogue_ln4md_04 catalogue_ln4xl_04 prix">89€</div>
                                </div>                            
                            </div>
                        </a>                        
                        <!-- === Chaise Pezi =================================== -->
                        <a href="meubles-chaises.php" class="urlarticle">
                            <div class="article-souscontainer_sm article-souscontainer_md article-souscontainer_xl nne">
                                <div class="souscontainer-gauche">
                                    <!-- cette div me permet avec plus de facilité de placer mon image dans la vue tablette -->
                                    <div class="catalogue_ln4sm_01 catalogue_ln4md_01 catalogue_ln4xl_01 image6"></div>
                                </div>                            
                                <div class="souscontainer-droite">
                                    <div class="catalogue_ln4sm_02 catalogue_ln4md_02 catalogue_ln4xl_02 model">Pezi</div>
                                    <div class="catalogue_ln4sm_03 catalogue_ln4md_03 catalogue_ln4xl_03 texte">La chaise Pezi est un siège de fil serré et peut être utilisé sans différents styles d'intérieur.<br/>[...]</div>
                                    <div class="catalogue_ln4sm_04 catalogue_ln4md_04 catalogue_ln4xl_04 prix">69€</div>
                                </div>                            
                            </div>
                        </a>                        
                        <!-- === Chaise Tulip ================================== -->
                        <a href="meubles-chaises.php" class="urlarticle">
                            <div class="article-souscontainer_sm article-souscontainer_md article-souscontainer_xl nne">
                                <div class="souscontainer-gauche">
                                    <!-- cette div me permet avec plus de facilité de placer mon image dans la vue tablette -->
                                    <div class="catalogue_ln4sm_01 catalogue_ln4md_01 catalogue_ln4xl_01 image7"></div>
                                </div>                            
                                <div class="souscontainer-droite">
                                    <div class="catalogue_ln4sm_02 catalogue_ln4md_02 catalogue_ln4xl_02 model">Tulip</div>
                                    <div class="catalogue_ln4sm_03 catalogue_ln4md_03 catalogue_ln4xl_03 texte">Cette chaise design est connue pour son siège en forme de tulipe spécifique. Lhabitacle magnifiquement formé est équipé d'un coussin mou et donc très confortable. Le cockpit est fait de<br/>[...]</div>
                                    <div class="catalogue_ln4sm_04 catalogue_ln4md_04 catalogue_ln4xl_04 prix">79€</div>
                                </div>                            
                            </div>
                        </a>                        
                        <!-- === Chaise Bertola ================================ -->
                        <a href="meubles-chaises.php" class="urlarticle">
                            <div class="article-souscontainer_sm article-souscontainer_md article-souscontainer_xl nne">
                                <div class="souscontainer-gauche">
                                    <!-- cette div me permet avec plus de facilité de placer mon image dans la vue tablette -->
                                    <div class="catalogue_ln4sm_01 catalogue_ln4md_01 catalogue_ln4xl_01 image8"></div>
                                </div>                            
                                <div class="souscontainer-droite">
                                    <div class="catalogue_ln4sm_02 catalogue_ln4md_02 catalogue_ln4xl_02 model">Bertola</div>
                                    <div class="catalogue_ln4sm_03 catalogue_ln4md_03 catalogue_ln4xl_03 texte">Chaise de salle à manger Bertola noire. Chaise en fil d'un design solide et élégant.<br/>[...]</div>
                                    <div class="catalogue_ln4sm_04 catalogue_ln4md_04 catalogue_ln4xl_04 prix">89€</div>
                                </div>                            
                            </div>
                        </a>                        
                    </div>
                </div>
            </div>
        </div>        
    </body>
</html>




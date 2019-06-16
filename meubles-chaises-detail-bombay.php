<!DOCTYPE html>
<html lang="fr">
    <head>
	<title>La chaise Bombay en détail</title>
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
        <?php include 'includes/pages/zoneici-meubles-chaises-bombay.php'; ?>
        <?php include 'includes/pages/zoneici-end.php'; ?>

        <div id="zone-deploiement-detail">
            <div id="deploiement_detail_gauche">
                <div class="gauche_un">
                    <!-- J'ai opté volontairement pour des div au lieu des img
                         ayant rencontré quelques petits soucis de mise en place -->
                    <div id="detail_bombay_img1"></div>
                </div>
                <div class="gauche_quatre">
                    <div id="detail_bombay_img2"></div>
                    <div id="detail_bombay_img3"></div>
                    <div id="detail_bombay_img4"></div>
                    <div id="detail_bombay_img5"></div>
                </div>
            </div>
            <div id="deploiement_detail_droit">
                <h1>Bombay :</h1>
                <h2>Chaise de bar industrielle en cuir marron</h2>
                <p>Le siège en cuir n'est pas complètement fini, donnant aux 
                    chaises un joli look vintage.  Un design cool que vous pouvez 
                    combiner avec par exemple une table en bois.</p>
                <div class="detail_prix">Prix : 89€</div>
                <div class="detail_specification">
                    <ul>
                        <li>specification</li>
                        <li>hauteur d'assice: <span>75cm</span></li>
                        <li>hauteur totale: <span>105cm</span></li>
                        <li>largeur: <span>51cm</span></li>
                        <li>profondeur: <span>53cm</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>


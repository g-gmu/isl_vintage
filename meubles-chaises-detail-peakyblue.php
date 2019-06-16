<!DOCTYPE html>
<html lang="fr">
    <!--
    ============================================================================
        Exception de quelques modification au niveau des images, cette page
        est une copie de : "meubles-chaises-detail-bombay.php"
        Une réflexion s'est faite sur la bonne manière d'intéger ce 
        multi-contenu : 
            - includes mais avec découpe du code ;
            - $_SESSION entre page
            - transferts de variable entre pages
            - utilisation de fichier externe.
        Je choisis donc après quelques heures de réflexion et de test d'intégrer
        cette page en modifiant le code nécéssaire directement dans la structure
        de la page.s
    ============================================================================
    -->
    <head>
	<title>La chaise Peaky Blue en détail</title>
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
        <?php include 'includes/pages/zoneici-meubles-chaises-peakyblue.php'; ?>
        <?php include 'includes/pages/zoneici-end.php'; ?>

        <div id="zone-deploiement-detail">
            <div id="deploiement_detail_gauche">
                <div class="gauche_un">
                    <!-- 
                    ============================================================
                        beaucoup de div présente dans mon projet
                        cause au validator w3c
                            : balises comme section & article nécessite une 
                        identification au moyen des balises h1 vers h6.
                            : remplacement de ces balises par des div.
                    ============================================================
                    -->
                    <div id="detail_peakyblue_img1"></div>
                </div>
                <div class="gauche_quatre">
                    <div id="detail_peakyblue_img2"></div>
                    <div id="detail_peakyblue_img3"></div>
                    <div id="detail_peakyblue_img4"></div>
                    <div id="detail_peakyblue_img5"></div>
                </div>
            </div>
            <div id="deploiement_detail_droit">
                <h1>Peaky Blue :</h1>
                <h2>Une chaise moderne et confortable</h2>
                <p>Lovely pour s'asseoir et belle à regarder. Les chaises de salle à manger 
                    ne devraient pas seulement être confortables. Elles doivent aussi avoir l'air bien. Moderne et bien ajusté.</p>
                <div class="detail_prix">Prix : 69€</div>
                <div class="detail_specification">
                    <ul>
                        <li>specification</li>
                        <li>hauteur d'assice: <span>50cm</span></li>
                        <li>hauteur totale: <span>80cm</span></li>
                        <li>largeur: <span>60cm</span></li>
                        <li>profondeur: <span>50cm</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
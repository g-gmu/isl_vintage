<!DOCTYPE html>
<html>
    <head>
	<title>Vintage - contact</title>
	<meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body>        
        <?php include 'includes/pages/parties-communes.php';  ?>
        
        <?php include 'includes/pages/zoneici-start.php'; ?>
        <?php include 'includes/pages/zoneici-contact.php'; ?>
        <?php include 'includes/pages/zoneici-end.php'; ?>
        
        
        <div class="container">
            <div class="sous-container">
                <!-- bloc zone-map  ---------------------------------------- -->
                <!-- contact_ : balise propre à la page contact.php          -->
                <!-- volontairement : map ne sera pas directement dans zone-map
                     car : j'applique une "cassure" sur les sections afin de 
                     redéfinir facilement un nouveau conteneur flex.         -->
                <section id="zone-map">
                    <article class="contact_ln4sm_01 contact_ln4md_01 contact_ln4xl_01">map_map</article>
                </section>
            </div>
        </div>
              
        
        <div class="container">
            <div class="sous-container">
                <!-- bloc zone-info ---------------------------------------- -->
                <!-- contact_ : balise propre à la page contact.php          -->
                <section id="zone-info">
                    <article class="contact_ln5sm_01 contact_ln5md_01 contact_ln5xl_01">info-information</article>
                    <article class="contact_ln5sm_02 contact_ln5md_02 contact_ln5xl_02">info-detail</article>
                </section>
            </div>
        </div>
                
        <div class="container">
            <div class="sous-container">
                <!-- bloc zone-contact ------------------------------------- -->
                <!-- contact_ : balise propre à la page contact.php          -->
                <section id="zone-contact">
                    <article class="contact_ln6sm_01 contact_ln6md_01 contact_ln6xl_01">contact-formulaire</article>
                    <article class="contact_ln6sm_02 contact_ln6md_02 contact_ln6xl_02">formulaire-gauche</article>
                    <article class="contact_ln6sm_03 contact_ln6md_03 contact_ln6xl_03">formulaire-droite</article>
                </section>
            </div>
        </div>

    </body>
</html>

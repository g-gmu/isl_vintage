<!DOCTYPE html>
<html lang="fr">
    <head>
	<title>Nous contacter</title>
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
                <!-- bloc zone-map  ======================================== -->
                <!-- contact_ : balise propre à la page contact.php          -->
                <!-- volontairement : map ne sera pas directement dans zone-map
                     car : j'applique une "cassure" sur les sections afin de 
                     redéfinir facilement un nouveau conteneur flex.         -->
                <div id="zone-map">
                    <div class="contact_ln4sm_01 contact_ln4md_01 contact_ln4xl_01 isl_google">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4255.260145179844!2d5.562410084500987!3d50.64211001811351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0fa164d5c4969%3A0xd379a00de93c696!2sRue+St+Laurent+33%2C+4000+Li%C3%A8ge!5e0!3m2!1sfr!2sbe!4v1560084674647!5m2!1sfr!2sbe" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
              
        <div class="container">
            <div class="sous-container">
                <!-- bloc zone-infocontact ===================================== -->
                <div id="zone_infocontact">
                    <!-- =======================================================
                            Cause à une grosse modification ce 09.06.19 impliquant
                            une modification des mockups et de la structure globale
                            du projet : je me suis passé des balises contact au profit
                            de ma balise id.
                            Elles ont étés remises pour la forme (temporairement).
                            Idem pour la ligne id="infocontact_contact
                         ======================================================= -->
                    <div id="infocontact_info" class="contact_ln5sm_01 contact_ln5md_01 contact_ln5xl_01">
                        <div id="info_titre">Infos-contact !</div>
                        <div id="info_contenu">
                            <div class="info_contenu_type">Adresse:</div>
                            <div class="info_contenu_info">33 Rue Saint-Laurent 4000 Liège</div>
                            <div class="info_contenu_type">Email:</div>
                            <div class="info_contenu_info">vintage@lab.com</div>
                            <div class="info_contenu_type">Tel:</div>
                            <div class="info_contenu_info">+32 4 223 11 31</div>
                            <div class="info_contenu_type">Site:</div>
                            <div class="info_contenu_info">www.vlab.com</div>
                            
                        </div>
                    </div>
                    <div id="infocontact_contact" class="contact_ln5sm_02 contact_ln5md_02 contact_ln5xl_02">
                        <form id="form-contact" action="contact.php" method="post">
                            <div id="contact_titre">Contactez-nous !</div>
                            <div id="contact_contenu">
                                <div id="contenu_gauche">
                                    <!-- ci-dessous : la balise n'est pas obligatoire mais facilite grandement son positionnement -->
                                    <div class="gauche_ligne">
                                        <div class="in_ligne_cotgauche">
                                            <label for="name">Nom : </label>
                                        </div>
                                        <div class="in_ligne_cotdroite">
                                            <input type="text" id="name" name="user_name"/>
                                        </div>
                                    </div>
                                    <div class="gauche_ligne">
                                        <div class="in_ligne_cotgauche">
                                            <label for="firstname">Prénom : </label>
                                        </div>
                                        <div class="in_ligne_cotdroite">
                                            <input type="text" id="firstname" name="user_firstname"/>
                                        </div>
                                    </div>
                                    <div class="gauche_ligne">
                                        <div class="in_ligne_cotgauche">
                                            <label for="email">Email : </label>
                                        </div>
                                        <div class="in_ligne_cotdroite">
                                            <input type="email" id="email" name="user_email"/>
                                        </div>
                                    </div>
                                    
                                    <div id="areamask1" class="gauche_ligne">
                                        <textarea placeholder="Un commentaire ?"></textarea>
                                    </div>
                                    
                                    <div id="newsletter" class="gauche_ligne">
                                        <div>
                                            <input type="checkbox" id="checkbox" name="checkbox"/>
                                        </div>
                                        <div>
                                            <label for="checkbox">Je désire recevoir des newsletters</label>
                                        </div>
                                    </div>
                                    <div id="contact-btn-envoyer" class="gauche_ligne">
                                        <button type="submit">envoyer</button>
                                    </div>
                                </div>
                                <div id="contenu_droit">                                    
                                    <div id="areamask2" class="gauche_ligne">
                                        <textarea placeholder="Un commentaire ?"></textarea>
                                    </div>                                                                        
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

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
                    <article class="contact_ln5sm_02 contact_ln5md_02 contact_ln5xl_02 info_detail">
                        <p>Infos contact !</p>
                    </article>
                    <div class="detail_all">
                        <label class="detail_type">Adresse:</label>
                        <label class="detail_information">33 rue Saint-Laurent 4000 Liège</label>
                        <label class="detail_type">Email:</label>
                        <label class="detail_information">vintage@lab.com</label>
                        <label class="detail_type">Site:</label>
                        <label class="detail_information">www.vlab.com</label>
                    </div>
                </section>
            </div>
        </div>
                
        <div class="container">
            <div class="sous-container">
                <!-- bloc zone-contact ------------------------------------- -->
                <!-- contact_ : balise propre à la page contact.php          -->
                <section id="zone-contact">
                    <article class="contact_ln6sm_01 contact_ln6md_01 contact_ln6xl_01 contact_contactez">
                        <p>Contactez-nous !</p>
                    </article>
                    <!--  ======================================================
                                DEBUT du formulaire
                            Englobe le balisage responsive car je souhaite pouvoir
                            déployer facilement la position de mes blocs. 
                            Application sur formulaire d'un flex-basis de 12.
                          ======================================================  -->
                    <form id="form-contact" action="contact.php" method="post">                    
                        <section class="contact_ln6sm_02 contact_ln6md_02 contact_ln6xl_02 contact_gauche">
                            <article class="contact-ligne">
                                <div class="ligne_partie_gauche">
                                    <label for="name">Nom : </label>
                                </div>
                                <div class="ligne_partie_droite">
                                    <input type="text" id="name" name="user_name"/>
                                </div>
                            </article>
                            <article class="contact-ligne">
                                <div class="ligne_partie_gauche">
                                    <label for="firstname">Prénom : </label>
                                </div>
                                <div class="ligne_partie_droite">
                                    <input type="text" id="firstname" name="user_firstname"/>
                                </div>
                            </article>
                            <article class="contact-ligne">
                                <div class="ligne_partie_gauche">
                                    <label for="email">E-mail : </label>
                                </div>
                                <div class="ligne_partie_droite">
                                    <input type="text" id="email" name="user_email"/>
                                </div>
                            </article>
                            <article>
                                <textarea placeholder="Un commentaire ?"></textarea>
                            </article>
                        </section>
                        <section class="contact_ln6sm_03 contact_ln6md_03 contact_ln6xl_03 contact_droit">C</section>
                        <section id="contact-btn-envoyer">
                            <article>
                                <div>
                                    <input type="checkbox" id="checkbox" name="checkbox"/>
                                </div>
                                <div>
                                    <label for="checkbox">Je désire recevoir des newsletters</label>
                                </div>                                                                
                            </article>
                            <article>
                                <button id="contact-button" type="submit">envoyer</button>
                            </article>
                        </section>
                    </form>
                    <!-- ======================================================= 
                                FIN du formulaire
                         =======================================================  -->
                </section>
            </div>
        </div>

    </body>
</html>

<div class="container">
    <div class="sous-container">
        <section id="zone-titre">
            <!-- bloc zone-titre ----------------------------------- -->
            <!--    partsall : balise commune à tous le site         -->
            <article class="partsall_ln1sm_01 partsall_ln1md_01 partsall_ln1xl_01 titre-imagetitre">                
                <div><?php include './includes/liens/lien-vintage-home-logo.php';  ?></div>                    
                <div>vintage<strong> lab</strong></div>
            </article>
            <article class="partsall_ln1sm_02 partsall_ln1md_02 partsall_ln1xl_02 vide">vide</article>
            <article class="partsall_ln1sm_03 partsall_ln1md_03 partsall_ln1xl_03 titre-bouton">
                <form action="" method="post">
                    <!-- si: retour ligne - espace du au retour chariot -->
                    <input type="text" name="recherche" placeholder="Que recherchez-vous ?"/><input type="submit" value="ok"/>
                </form>
            </article>
            <article class="partsall_ln1sm_04 partsall_ln1md_04 partsall_ln1xl_04 vide">vide</article>
        </section>
    </div>
</div>
<hr>
<div class="container">
    <div class="sous-container">
        <!-- bloc zone-menu ---------------------------------------- -->
        <!--    partsall : balise commune à tous le site             -->
        <section id="zone-menu">
            <article class="partsall_ln2sm_01 partsall_ln2md_01 partsall_ln2xl_01 menu_accueil">
                <?php include './includes/liens/lien-vintage-home.php';  ?>
            </article>
            <!-- ===============================================================
                        Explications:
                    - Chaque include contient une url vers une page choisie. 
                    - l'URL ci-dessous affichait un lien vers la page meubles.php 
                    que je modifie ce 10.06.19 pour qu'elle pointe vers la pages 
                    meubles-chaises.php (sa future page par défaut à l'ouverture
                    des meubles).
                 =============================================================== -->
            <article class="partsall_ln2sm_02 partsall_ln2md_02 partsall_ln2xl_02 menu_meubles">
                <?php include './includes/liens/lien-vintage-meubles.php';  ?>
            </article>
            <article class="partsall_ln2sm_03 partsall_ln2md_03 partsall_ln2xl_03 menu_luminaires">
                <?php include './includes/liens/lien-vintage-luminaires.php';  ?>
            </article>
            <article class="partsall_ln2sm_04 partsall_ln2md_04 partsall_ln2xl_04 menu_accessoires">
                <?php include './includes/liens/lien-vintage-accessoires.php';  ?>
            </article>
            <article class="partsall_ln2sm_05 partsall_ln2md_05 partsall_ln2xl_05 menu_contact">
                <?php include './includes/liens/lien-vintage-contact.php';  ?>
            </article>
        </section>
    </div>
</div>


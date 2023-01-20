<?php
//page de connexion du back office
require_once 'headerAndFooter.php';
//recupération de l'entete
get_header();
?>
<form id="auth_form" action="newBackOffice/loginClient.php" method="POST">
     <p>
         <label for="login"></label><input id="mail" type="mail" name="login" value="" placeholder="E-mail"/> <br/>
         <label for="pwd"></label><input id="pwd" type="password" name="pwd" value="" placeholder="Password"/><br/>
         <a href="resMPD.php"><p class="dark">Vous avez oublié votre mot de passe ?</p></a>
         <input type="submit" value="Connexion"/>
         <input type="reset" value="Annuler">
         <input type="reset" value="Accueil" onClick="location.href = 'index.php';">
    </p>
</form>
<?php
//récupération du pied de page
get_footer();
?>

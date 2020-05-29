<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
        <title>INSCRIPTION</title>
    </head>
    <body id="body_inscription">
        <form id="form_inscription" method='post' action='inscription.php'>
            <div id="form_inscription-titre">Inscription</div>
            <div class="form_inscription-prenom">
                Prénom<input type="text" required>
            </div>
            <div class="form_inscription-nom">
                Nom<input type="text" required>
            </div>
            <div class="form_inscription-pseudo">
                Pseudo<input type="text" required>
            </div>
            <div class="form_inscription-mail">
                Mail<input type="mail" required>
            </div>
            <div class="form_inscription-password">
                Mot de passe<input type="password" required>
            </div>
            <div class="form_inscription-passwordConfirm">
                Confirmer mot de passe<input type="password" required>
            </div>
            <div class="form_inscription-picture">
                Image de profil<input type="file">
            </div>
            <input type='submit' id="form_inscription-valider" name='inscrire' value='VALIDER'>
        </form>
    </body>
</html>
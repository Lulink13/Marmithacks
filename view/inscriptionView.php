<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <title>INSCRIPTION</title>
    </head>
    <body id="body_inscription">
        <form id="form_inscription" method='post' action='inscription.php' enctype="multipart/form-data">
            <div id="form_inscription-titre">Inscription</div>
            <div id="form_inscription-prenom">
                Prénom<input type="text" name="userName" required>
            </div>
            <div id="form_inscription-nom">
                Nom<input type="text" name="userSurname" required>
            </div>
            <div id="form_inscription-pseudo">
                Pseudo<input type="text" name="userUsername" required>
            </div>
            <div id="form_inscription-mail">
                Mail<input type="email" name="userMail" required>
            </div>
            <div id="form_inscription-password">
                Mot de passe<input type="password" name="userPassword" required>
            </div>
            <div id="form_inscription-passwordConfirm">
                Confirmer mot de passe<input type="password" name="userPasswordConfirm" required>
            </div>
            <div id="form_inscription-picture">
                Image de profil<input type="file" name="userPicture" id="userPicture">
            </div>
            <input type='submit' id="form_inscription-valider" name='inscrire' value='VALIDER'>
        </form>
    </body>
</html>
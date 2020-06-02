<!DOCTYPE HTML>
<html lang='fr'>
    <head>
        <meta charset="utf-8">
        <title>CONNEXION</title>
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
        <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
    </head>
    <body id="body_connexion">
        <form id="form_connexion" method='post' action='connexion.php'>
            <div id="form_connexion-titre">Marmit'Hacks</div>
            <div class="form-label-group">
                <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Adresse mail" required autofocus>
                <label for="inputEmail">Adresse mail</label>
            </div>
            <div class="form-label-group">
                <input type="password" id="inputPwd" name="inputPwd" class="form-control" placeholder="Mot de passe" required>
                <label for="inputPwd">Mot de passe</label>
            </div>
            <?php echo $error;?>
            <input type='submit' name='connecter' value='SE CONNECTER'>
            <a href="home.php">Retour</a>
        </form>
    </body>
</html>
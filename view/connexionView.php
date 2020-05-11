<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    </head>
    <body id="body_connexion">
        <form id="form_connexion" method='post' action='connexion.php'>
            <div id="form_connexion-titre">Marmit'Hacks</div>
            <div class="form-label-group">
                <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Adresse mail" required autofocus>
                <label for="inputEmail">Adresse mail</label>
            </div>
            <div class="form-label-group">
                <input type="password" id="inputPwd" name="inputPwd" class="form-control" placeholder="Mot de passe" required autofocus>
                <label for="inputPwd">Mot de passe</label>
            </div>
            <?php echo $error;?>
            <input type='submit' name='connecter' value='SE CONNECTER'>
        </form>
    </body>
</html>




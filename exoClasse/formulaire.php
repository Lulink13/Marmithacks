
<?php
    session_start();
    if(isset($_SESSION['login'])) {
        echo "Salut mon poto ".$_SESSION['login'];
        echo "<a href='deconnexion.php'> deconnexion </a>";
    }   else {
 ?> 
    

<form method='post' action='accueil.php'>

    <input type='text' name='login'>

    <input type='password' name='password'>

    <input type='submit' name='sign_in' value='sign in'>

</form>

<?php

    }

?>

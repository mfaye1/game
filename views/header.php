<?php
require_once 'user_authenticate.php'; // Code pour authentification
define('PS_USERNAME', 'ps_username');
require_once 'panier.php';

function is_logged_in()
{
    return (array_key_exists(PS_USERNAME, $_SESSION) && (!empty($_SESSION[PS_USERNAME]))); // Par convention, l'utilisateur est connecté si la données de session username n'est pas vide
}

?>
<?php
$username = '';
$password = '';
$username_valide = true;
$password_valide = true;
if (is_logged_in() && array_key_exists('logout_btn', $_POST)) {
    // Déconnexion à effectuer
    $_SESSION[PS_USERNAME] = ''; // Username vide signifie non connecté
} else if (!is_logged_in()
    && array_key_exists('login_btn', $_POST)
    && array_key_exists('username', $_POST)
    && array_key_exists('password', $_POST)
) {
    // Connexion à effectuer ici
    // Filtrage et Validation
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $username_valide = (1 === preg_match('/\w{5,}/', $username));
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $password_valide = (1 === preg_match('/\w{6,}/', $password));
    if ($username_valide
        && $password_valide
        && user_authenticate($username, $password)
    ) {
        // Si tout se passe bien on le connecte
        $_SESSION[PS_USERNAME] = $username;
    }
}

?>

<header class="row">
    <div class="col-4">
        <a href="acceuil.php"><img src="" alt="logo"></a>
    </div>
    <div class="col-4">
        <?php
        require_once "menu.php";
        ?>
    </div>
    <div class="col-4">

        <div id="connexion">

            <?php if (is_logged_in()) { ?>
                <marquee direction="left" scrollamount="4" onMouseOver="this.stop();" onMouseOut="this.start();">
                    <span>Salut <?= $_SESSION[PS_USERNAME] ?> ! bienvenu dans votre espace personel</span>
                </marquee>
                <form name="logout" id="logout" method="post">
                        <input type="submit" id="logout_btn" name="logout_btn" value="Déconnecter"/>
                    <a style="visibility: hidden" href="inscription.php">s'inscrire</a>
                </form>
                   <a href="panier.php"> <p>Panier <span class="panier_count"><?= panier_get_count() ?></span></p></a>

            <?php } else { ?>
                <form name="login" id="login" method="post">
                        <input type="text" name="username" id="username" placeholder="Identifiant"
                               value="<?= array_key_exists('username', $_POST) ? $_POST['username'] : '' ?>"/>

                        <input type="password" name="password" id="password" placeholder="Mot de passe" value=""/>

                    <img src="images/panier.png" alt="panier" style="visibility: hidden">

                    <?php // Afficher un message dans le cas ou l'authentification n'a pas réussi
                    if (array_key_exists('login_btn', $_POST)) { ?>
                        <p>Le pseudo et le mot de passe fournis ne concordent pas.</p>
                    <?php } ?>
                        <input type="submit" id="login_btn" name="login_btn" value="Connecter"/>
                        <a style="visibility: visible" href="inscription.php">s'inscrire</a>
                </form>
            <?php } ?>

        </div>

    </div>
</header>


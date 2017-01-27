<?php
require_once 'define.php';
$page_title = 'Accueil';
?>

<?php
require_once 'views/top.php';
require_once 'views/header.php';
require_once 'user_authenticate.php'; // Code pour authentification
define('PS_USERNAME', 'ps_username');

session_start(); // Démarrage session

function is_logged_in() {
    return (array_key_exists(PS_USERNAME, $_SESSION) && (! empty($_SESSION[PS_USERNAME]))); // Par convention, l'utilisateur est connecté si la données de session username n'est pas vide
}

?>
<?php
$username='';
$password='';
$username_valide = true;
$password_valide = true;
if (is_logged_in() && array_key_exists('logout_btn', $_POST)) {
    // Déconnexion à effectuer
    $_SESSION[PS_USERNAME] = ''; // Username vide signifie non connecté
} else if ( ! is_logged_in()
    && array_key_exists('login_btn', $_POST)
    && array_key_exists('username', $_POST)
    && array_key_exists('password', $_POST)) {
    // Connexion à effectuer ici
    // Filtrage et Validation
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $username_valide = (1===preg_match('/\w{5,}/', $username));
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $password_valide = (1===preg_match('/\w{6,}/', $password));
    if ($username_valide
        && $password_valide
        && user_authenticate($username, $password)) {
        // Si tout se passe bien on le connecte
        $_SESSION[PS_USERNAME] = $username;
    }
}

?>

<?php
/*$en_reception = array_key_exists('saisie_username', $_POST) && array_key_exists('saisie_password', $_POST);


//Reception du username
$username = '';
$username_valide = true;
if (array_key_exists('saisie_username', $_POST)) {
    $username = filter_input(INPUT_POST, 'saisie_username', FILTER_SANITIZE_STRING);
    $username_valide = (1 == preg_match('/\w{8,}/', $username));
}
//Reception du password
$password = '';
$password_valide = true;

if (array_key_exists('saisie_password', $_POST)) {
    $password = filter_input(INPUT_POST, 'saisie_password', FILTER_SANITIZE_STRING);
    $password_valide = (1 == preg_match('/^[A-Z]\w{3,}[0-9]{2,}/', $password));
}

if ($en_reception && $username_valide && $password_valide)

//    header('Location:')

*/?>

<body>

<div id="wrapper">
    <div id="wowslider-container1">
        <div class="ws_images"><ul>
                <li><img src="data1/images/slide2.png" alt="" title="" id="wows1_0"/></li>
                <li><img src="data1/images/slide3.jpg" alt="" title="" id="wows1_1"/></li>
                <li><img src="data1/images/slide3_0.png" alt="" title="" id="wows1_2"/></li>
                <li><img src="data1/images/slide4.jpg" alt="" title="" id="wows1_3"/></li>
                <li><a href="http://wowslider.com/vi"><img src="data1/images/slide7.jpg" alt="bootstrap carousel" title="" id="wows1_4"/></a></li>
                <li><img src="data1/images/slider8.jpg" alt="" title="" id="wows1_5"/></li>
            </ul></div>
        <div class="ws_bullets"><div>
                <a href="#" title=""><span><img src="data1/tooltips/slide2.png" alt=""/>1</span></a>
                <a href="#" title=""><span><img src="data1/tooltips/slide3.jpg" alt=""/>2</span></a>
                <a href="#" title=""><span><img src="data1/tooltips/slide3_0.png" alt=""/>3</span></a>
                <a href="#" title=""><span><img src="data1/tooltips/slide4.jpg" alt=""/>4</span></a>
                <a href="#" title=""><span><img src="data1/tooltips/slide7.jpg" alt=""/>5</span></a>
                <a href="#" title=""><span><img src="data1/tooltips/slider8.jpg" alt=""/>6</span></a>
            </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">wow slider</a> by WOWSlider.com v8.7</div>
        <div class="ws_shadow"></div>
    </div>
    <script type="text/javascript" src="engine1/wowslider.js"></script>
    <script type="text/javascript" src="engine1/script.js"></script>
    <div class="row">
        <div class="col-8">
            <main>


                <h2>Nouveauté</h2>
                <section>
                    <div class="cadre_produit">
                        <img class="" src="" alt="img_produit">
                        <div class="">
                            <h3>Nom du produit</h3>
                            <p><span>5.00$</span></p>
                            <a class="" href="catalogue.php">Plus de détail</a>
                        </div>
                    </div>

                    <div class="cadre_produit">
                        <img class="" src="" alt="img_produit">
                        <div class="">
                            <h3>Nom du produit</h3>
                            <p><span>5.00$</span></p>
                            <a class="" href="catalogue.php">Plus de détail</a>
                        </div>
                    </div>

                    <div class="cadre_produit">
                        <img class="" src="" alt="img_produit">
                        <div class="">
                            <h3>Nom du produit</h3>
                            <p><span>5.00$</span></p>
                            <a class="" href="catalogue.php">Plus de détail</a>
                        </div>
                    </div>

                    <div class="cadre_produit">
                        <img class="" src="" alt="img_produit">
                        <div class="">
                            <h3>Nom du produit</h3>
                            <p><span>5.00$</span></p>
                            <a class="" href="catalogue.php">Plus de détail</a>
                        </div>
                    </div>
                </section>

                <section id="a_propos">
                    <h2>A propos de nous</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non tellus ut dolor ullamcorper
                        auctor vel
                        ac risus. In in turpis aliquet, ornare nibh quis, laoreet tellus. Curabitur posuere, augue id
                        tempor auctor,
                        felis mauris convallis tellus, ac porttitor arcu nisi vitae leo. Quisque ornare orci ante, nec
                        mollis ipsum
                        fermentum in. Nulla sodales augue nisl, sit amet eleifend mauris fringilla ac. Nam luctus
                        hendrerit lacus
                        pellentesque sagittis. Etiam ac molestie enim. Aenean scelerisque, dolor ac rhoncus finibus,
                        risus orci
                        sagittis eros, et sagittis felis elit quis felis. Maecenas a vestibulum felis. Donec nunc nisl,
                        varius et
                        imperdiet quis, tempor vel urna. Maecenas rutrum massa est, vel molestie mi blandit non.
                        Suspendisse
                        potenti. Sed rutrum tincidunt molestie. Aliquam malesuada nunc vel mi iaculis, ut laoreet tellus
                        condimentum. In semper nisl sed mollis aliquet. Nunc quis sapien vestibulum, vulputate justo a,
                        vestibulum
                        nibh.</p>
                </section>
            </main>
        </div>
        <div class="col-4" id="aside">

            <div id="connexion">

                <?php if (is_logged_in()) { ?>
                    <h2 style="visibility: hidden">CONNEXION</h2>
                    <marquee direction="left" scrollamount="4" onMouseOver="this.stop();" onMouseOut="this.start();">
                        <span>Salut <?= $_SESSION[PS_USERNAME] ?> !, bienvenu a votre espace personel</span>
                    </marquee>
                    <form name="logout" method="post">
                        <input type="submit" id="logout_btn" name="logout_btn" value="Déconnecter" />
                        <div style="visibility: hidden">
                            <a href="inscription.php">s'inscrire</a>
                        </div>
                    </form>
                <?php } else { ?>
                    <h2 style="visibility: visible">CONNEXION</h2>
                    <form name="login" method="post">
                        <div>
                        <label for="username">Identifiant:</label>
                        <input type="text" name="username" id="username"
                               value="<?= array_key_exists('username',$_POST) ? $_POST['username'] : '' ?>"
                        />
                        </div>
                        <div>
                        <label for="password">Mot de passe:</label>
                        <input type="password" name="password" id="password" value="" />
                        </div>
                        <?php // Afficher un message dans le cas ou l'authentification n'a pas réussi
                        if (array_key_exists('login_btn',$_POST)) { ?>
                            <p>Le pseudo et le mot de passe fournis ne concordent pas.</p>
                        <?php } ?>
                        <input type="submit" id="login_btn" name="login_btn" value="Connecter" />
                        <div style="visibility: visible">
                            <a href="inscription.php">s'inscrire</a>
                        </div>
                    </form>
                <?php } ?>


            </div>
            <div id="defillement">
                <marquee  direction="down" scrollamount="4" onMouseOver="this.stop();" onMouseOut="this.start();">
                    <ul>
                        <li><a href="#">le <span></span> sera disponible a partir du</a></li>
                        <li><a href="#">le <span></span> sera disponible a partir du</a></li>
                        <li><a href="#">le <span></span> sera disponible a partir du</a></li>
                        <li><a href="#">le <span></span> sera disponible a partir du</a></li>
                        <li><a href="#">le <span></span> sera disponible a partir du</a></li>
                        <li><a href="#">le <span></span> sera disponible a partir du</a></li>
                        <li><a href="#">le <span></span> sera disponible a partir du</a></li>
                        <li><a href="#">le <span></span> sera disponible a partir du</a></li>
                        <li><a href="#">le <span></span> sera disponible a partir du</a></li>
                        <li><a href="#">le <span></span> sera disponible a partir du</a></li>
                        <li><a href="#">le <span></span> sera disponible a partir du</a></li>
                        <li><a href="#">le <span></span> sera disponible a partir du</a></li>
                        <li><a href="#">le <span></span> sera disponible a partir du</a></li>
                        <li><a href="#">le <span></span> sera disponible a partir du</a></li>
                        <li><a href="#">le <span></span> sera disponible a partir du</a></li>
                    </ul>
                </marquee
            </div>

        </div>
    </div>
</div>

</body>
<?php
require_once 'views/footer.php';
?>

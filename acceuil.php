<?php
require_once 'define.php';
$page_title = 'Accueil';
?>

<?php
require_once 'views/top.php';
require_once 'views/header.php';
?>

<?php
$en_reception = array_key_exists('saisie_username', $_POST) && array_key_exists('saisie_password', $_POST);


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

?>

<body>

<main>

    <div id="carrousel" class="row">
        <figure class="">
            <img src="#" alt="img_1">
            <img src="#" alt="img_2">
            <img src="#" alt="img_3">
            <img src="#" alt="img_4">
        </figure>
    </div>

    <?php
    require_once 'views/aside.php';
    ?>
    <aside>
        <h2>Inscription</h2>
        <form id="inscription" action="<?= basename(__FILE__) ?>" method="post">

            <div class="<?= $username_valide ? '' : 'invalide' ?>">
                <label for="saisie_username">Pseudo : </label>
                <input type="text" placeholder="(entrez votre username)" id="saisie_username" name="saisie_username"
                       value="<?= $username ?>"/>
                <?php if (!$username_valide) { ?>
                    <p>Le pseudo doit contenir au moins 8 caractère.</p>
                <?php } ?>
            </div>
            <div class="<?= $password_valide ? '' : 'invalide' ?>">
                <label for="saisie_password">Mod de passe : </label>
                <input type="password" placeholder="(entrez votre password)" id="saisie_password" name="saisie_password"
                       value="<?= $password ?>"/>
                <?php if (!$password_valide) { ?>
                    <p>Le password doit contenir 6 caractère et commencer par un Majuscule, contenir 2 chiffres.</p>
                <?php } ?>
            </div>
            <div>
                <input type="submit" value="Soumettre"/>
            </div>
        </form>
    </aside>
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
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non tellus ut dolor ullamcorper auctor vel
            ac risus. In in turpis aliquet, ornare nibh quis, laoreet tellus. Curabitur posuere, augue id tempor auctor,
            felis mauris convallis tellus, ac porttitor arcu nisi vitae leo. Quisque ornare orci ante, nec mollis ipsum
            fermentum in. Nulla sodales augue nisl, sit amet eleifend mauris fringilla ac. Nam luctus hendrerit lacus
            pellentesque sagittis. Etiam ac molestie enim. Aenean scelerisque, dolor ac rhoncus finibus, risus orci
            sagittis eros, et sagittis felis elit quis felis. Maecenas a vestibulum felis. Donec nunc nisl, varius et
            imperdiet quis, tempor vel urna. Maecenas rutrum massa est, vel molestie mi blandit non. Suspendisse
            potenti. Sed rutrum tincidunt molestie. Aliquam malesuada nunc vel mi iaculis, ut laoreet tellus
            condimentum. In semper nisl sed mollis aliquet. Nunc quis sapien vestibulum, vulputate justo a, vestibulum
            nibh.</p>
    </section>
</main>

<?php
require_once 'views/footer.php';
?>
</body>

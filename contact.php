<?php
require_once 'define.php';
$page_title = 'Contact';
?>
<?php
require_once 'views/top.php';
require_once 'views/header.php';
?>
<?php
$liste_ville = array('choisir.', 'Montreal', 'Gâtineau', 'Sherbrooke', 'Quebec');

function retire_accents($str)
{
    $resultat = strtolower(str_replace(array('é', 'ï'), array('e', 'i'), $str));
    return $resultat;
}

$reception = $en_reception = array_key_exists('saisi_nom', $_POST)
    && array_key_exists('saisi_prenom', $_POST)
    && array_key_exists('saisi_email', $_POST)
    && array_key_exists('saisi_telephone', $_POST);
/*d<abord le nom*/
$nom = '';
$nom_valide = true;
if (array_key_exists('saisi_nom', $_POST)) {
    $nom = filter_input(INPUT_POST, 'saisi_nom', FILTER_SANITIZE_STRING);
    $nom_valide = (1 === preg_match('/[A-Za-z]\w{1,}/', $nom));
}
/*******validation du prenom*/
$prenom = '';
$prenom_valide = true;
if (array_key_exists('saisi_prenom', $_POST)) {
    $prenom = filter_input(INPUT_POST, 'saisi_prenom', FILTER_SANITIZE_STRING);
    $prenom_valide = (1 === preg_match('/[A-Za-z]\w{1,}/', $prenom));
}
/******validation de l'email*/
$email = '';
$email_valide = true;
if (array_key_exists('saisi_email', $_POST)) {
    $email = filter_input(INPUT_POST, 'saisi_email', FILTER_SANITIZE_STRING);
    $email_valide = (false !== filter_var($email, FILTER_VALIDATE_EMAIL));
}

$telephone = '';
$telephone_valide = true;
if (array_key_exists('saisi_telephone', $_POST)) {
    $telephone = filter_input(INPUT_POST, 'saisi_telephone', FILTER_SANITIZE_STRING);
    $telephone_valide = (1 === preg_match('/\^\\\(\?\(\[0\-9\]\{3\}\)\\\)\?\[\-\. \]\?\(\[0\-9\]\{3\}\)\[\-\. \]\?\(\[0\-9\]\{4\}\)\$ /', $telephone));

}


/******/

if ($reception && $nom_valide && $prenom_valide && $email_valide && $sexe_valide && $telephone_valide
    && $ville_valide
) {
    // Les données de formulaire sont valides
    header('Location:inscrire.php');
    exit;
}
/**********************************************/
$sexe = array();
$sexe_valide = true;
if (array_key_exists('sexe', $_POST)) {
    $sexe = $_POST['sexe'];
}
if ($en_reception && empty($sexe)) {
    $villes_valide = false;
}
// Réception des ville choisis
$ville_valide = true;
$ville = ''; // ville sélectionnés par l'utilisateur
if (array_key_exists('ville', $_POST)) {
    $ville = $_POST['ville'];
}
// ville est valide si on est affichage initial ou bien si on a au moins un ville sélectionné
if ($reception && empty($ville)) {
    $ville_valide = false;
}


?>
<div id="wrapper">
    <div class="row">

        <div class="col-9">
    <main>
        <form id="form" method="post">
            <div class="<?= $nom_valide ? '' : 'invalid' ?>">
                <label for="saisi_nom">Nom: </label>
                <input type="text" id="saisi_nom" name="saisi_nom" placeholder="entrez votre nom" value="<?= $nom ?>">
                <?php
                if (!$nom_valide) {
                    echo "<p>veuillez entre un nom valide avec au moins un caractere</p>";
                }

                ?>
            </div>
            <div class="<?= $prenom_valide ? '' : 'invalid' ?>">
                <label for="saisi_prenom">Prenom: </label>
                <input type="text" id="saisi_prenom" name="saisi_prenom" placeholder="entrez votre prenom"
                       value="<?= $prenom ?>">
                <?php
                if (!$prenom_valide) {
                    echo "<p>veuillez entre un prenom valide avec au moins un caractere</p>";
                }
                ?>
            </div>

            <div class="<?= $telephone_valide ? '' : 'invalid' ?>">
                <label for="saisi_telephone">Telephone: </label>
                <input type="text" id="saisi_telephone" name="saisi_telephone" placeholder="***-***-****"
                       value="<?= $telephone ?>">
                <?php
                if (!$telephone_valide) {
                    echo "<p>veuillez entre un numero telephone valide</p>";
                }
                ?>
            </div>

            <div class="<?= $email_valide ? '' : 'invalid' ?>">
                <label for="saisi_email">Email: </label>
                <input type="text" id="saisi_email" name="saisi_email" placeholder="example@emample.con"
                       value="<?= $email ?>">
                <?php
                if (!$email_valide) {
                    echo "<p>veuillez entre un nom valide</p>";
                }
                ?>
            </div>

            <div class="">
                <label for="">Mot De Passe: </label>
                <input type="password" id="" name="" placeholder="" value="">
            </div>
            <div>
                <label for="">Confirmation Mot De Passe: </label>
                <input type="password" id="" name="" placeholder="" value="">
            </div>
            <div>
                <label for="sexe">Sexe: </label>
                Homme <input type="radio" name="sexe[]" id="sexe" value="H">
                Femme <input type="radio" name="sexe[]" id="sexe" value="F">
                <?php
                if (!$sexe_valide) {
                    echo "<p>veuillez cochez au moins une case</p>";

                }
                ?>

            </div>
            <div>
                <label for="birthday">Date de Naissance: </label>
                <input type="date" id="birthday" name="birthday" value="">
            </div>
            <div>
                <label for="ville">ville: </label>
                <select name="ville[]" id="ville" multiple="multiple">
                    <?php foreach ($liste_ville as $ville) {
                        $option_value = retire_accents($ville);
                        ?>
                        <option value="<?= $option_value ?>"
                            <?= array_key_exists('ville', $_POST) && in_array($option_value, $_POST['ville']) ? 'selected="selected"' : '' ?>
                        ><?= $ville ?></option>
                    <?php } ?>
                    <?php if (!$ville_valide) { ?>
                        <p>Au moins un ville doit être sélectionné.</p>
                    <?php } ?>
                </select>
            </div>
            <div>
                <input id="submit" type="submit" value="Inscription">
            </div>

        </form>
    </main>
        </div>
        <div class="col-3">
            <?php
            require_once 'views/aside.php';
            ?>
        </div>
    </div>
</div>
<?php
require_once 'views/footer.php';
?>

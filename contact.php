<?php
require_once 'define.php';
$page_title = 'Contact';
?>
<?php
require_once 'views/header.php';
require_once 'views/aside.php';
require_once 'views/top.php'
?>
<?php
$reception = $en_reception = array_key_exists('saisi_nom', $_POST)
            && array_key_exists('saisi_prenom', $_POST)
            && array_key_exists('saisi_email', $_POST);
/*d<abord le nom*/
$nom='';
$nom_valide = true;
if (array_key_exists('saisi_nom',$_POST)){
    $nom=filter_input(INPUT_POST,'saisi_nom',FILTER_SANITIZE_STRING);
    $nom_valide = (1 === preg_match('/[A-Za-z]\w{1,}/',$nom));
}
/*******validation du prenom*/
$prenom='';
$prenom_valide = true;
if (array_key_exists('saisi_prenom',$_POST)){
    $prenom=filter_input(INPUT_POST,'saisi_prenom',FILTER_SANITIZE_STRING);
    $prenom_valide = (1 === preg_match('/[A-Za-z]\w{1,}/',$prenom));
}
/******validation de l'email*/
$email = '';
$email_valide = true;
if (array_key_exists('saisi_email', $_POST)) {
    $email = filter_input(INPUT_POST, 'saisi_email', FILTER_SANITIZE_STRING);
    $email_valide = (false !== filter_var($email, FILTER_VALIDATE_EMAIL));
}

/******/

if ($reception && $nom_valide && $prenom_valide && $email_valide) {
    // Les données de formulaire sont valides
    header('Location:inscrire.php');
    exit;
}
?>
<style>
    form{
        width: 60%;
    }
    div{
        margin-bottom: 3%;
        display: block;
    }
    #wrapper{
        width: 80%;
        margin: auto;
    }
    label{
        display: inline-block;
        width: 35%;
    }
    .invalid input{
    border: solid 2px red;
    }
    .invalid p {
        color: red;
        margin-left: 35%;
               }
</style>
<div id="wrapper">
<main>
    <form action="inscrire.php" method="post">
        <div class="<?= $nom_valide ? '' : 'invalid' ?>">
            <label for="saisi_nom">Nom: </label>
            <input type="text" id="saisi_nom" name="saisi_nom" placeholder="entrez votre nom" value="<?=$nom?>">
            <?php
            if (! $nom_valide){
                echo "<p>veuillez entre un nom valide</p>";
            }
            ?>
        </div>
        <div class="<?= $prenom_valide ? '' : 'invalid' ?>">
            <label for="saisi_prenom">Prenom: </label>
            <input type="text" id="saisi_prenom" name="saisi_prenom" placeholder="entrez votre prenom" value="<?=$prenom?>">
            <?php
            if (! $nom_valide){
                echo "<p>veuillez entre un nom valide</p>";
            }
            ?>
        </div>

        <div class="">
            <label for="saisi_telephone">Telephone: </label>
            <input type="text" id="saisi_telephone" name="saisi_telephone" placeholder="***-***-****" value="">
        </div>

        <div class="<?= $email_valide ? '' : 'invalid' ?>">
            <label for="saisi_email">Email: </label>
            <input type="text" id="saisi_email" name="saisi_email" placeholder="example@emample.con" value="<?=$email?>">
            <?php
            if (! $email_valide){
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
            <input type="text" id="" name="" placeholder="" value="">
        </div>
        <div>
            <label for="sexe">Sexe: </label>
            Homme <input type="checkbox" name="sexe" id="sexe" value="">
            Femme <input type="checkbox" name="sexe" id="sexe" value="">
        </div>
        <div>
            <label for="birthday">Date de Naissance: </label>
            <input type="date" id="birthday" name="birthday" value="">
        </div>
        <div>
            <label for="ville">ville: </label>
            <select id="ville" name="ville"  >
                <option value="-1">Choisir...</option>
                <option value="mo">Montréal</option>
                <option value="qc">Québec</option>
                <option value="ga">Gâtineau</option>
                <option value="sh">Sherbrooke</option>
            </select>
        </div>
        <div>
            <input type="submit" value="Inscription">
        </div>

    </form>
</main>
</div>
<?php
require_once 'views/footer.php';
?>


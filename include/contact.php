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

?>
<div id="wrapper">
<main>
    <form method="post">
        <div>
            <label for="nom">Nom: </label>
            <input type="text" id="nom" name="nom" placeholder="entrez votre nom" value="">
        </div>
        <div>
            <label for="prenom">Prenom: </label>
            <input type="text" id="prenom" name="prenom" placeholder="entrez votre prenom" value="">
        </div>
        <div>
            <label for="email">Email: </label>
            <input type="email" id="email" name="email" placeholder="example@emample.con" value="">
        </div>
        <div>
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


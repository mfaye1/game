<?php
require_once 'define.php';
$page_title = 'Contact';
?>
<?php
require_once 'views/top.php';
require_once 'views/header.php';
?>

<?php
/****la validation*/
$username = '';
$username_valide = true;
if (array_key_exists('username', $_POST)) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $username_valide = (false !== filter_var($username, FILTER_VALIDATE_EMAIL));
}
$password = '';
$password_valide = true;
if (array_key_exists('password', $_POST)) {
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $password_valide = (1 === preg_match('/[A-Za-z0-9]\w{7,}/',$password));
}
?>

<?php
if (en_ligne){
    echo "
    <form name='deconnecter' method='post'>
    <input type='submit' name='btn_deconnexion' value='Deconnexion'>
    ";
}else{
    echo "
    <form>
    <div class=''>
    <label for='username'>Nom d'utilisateur: </label>
    <input type='text' name='username' id='username' value=''>
    </div>
    <div class=''>
    <label for='password'>mot de passe: </label>
    <input type='text' name='password' id='password' value=''>
    </div>
    <input type='submit' name='btn_connexion' value='Connexion'>
    ";
}
?>

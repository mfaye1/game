<?php
require_once 'define.php';
$page_title = 'contact';
?>
<?php
require_once 'views/top.php';
require_once 'views/header.php';
?>
<div id="wrapper">
    <div id="contact">
        <p>Vous pouvez nous contacter a partir des adresses suivantes ou bien nous envoyer un commentaire aussi</p>
        <p>Telephone:514-616-*****</p>
        <p>Email: <a style="text-decoration: none" href="gmail.com">example@gmail.com</a></p>
        <div>
            <form>
                <div>
                    <input type="text" placeholder="objet" id="objet" name="objet">
                </div>
                <div>
                    <textarea rows="10" cols="35" placeholder="tapez votre message ou votre commentaire ici"
                              maxlength="1000"></textarea>
                </div>
                <div>
                    <input type="submit" name="envoyer" value="envoyer">
                </div>
            </form>
        </div>
        <img src="images/le_map.png">
    </div>
</div>
<?php
require_once "views/footer.php"
?>
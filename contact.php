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

<div class="ui-dialog-titlebar ui-corner-all ui-widget-header ui-helper-clearfix ui-draggable-handle"><span id="ui-id-2" class="ui-dialog-title">Panier</span><button type="button" class="ui-button ui-corner-all ui-widget ui-button-icon-only ui-dialog-titlebar-close" title="Close"><span class="ui-button-icon ui-icon ui-icon-closethick"></span><span class="ui-button-icon-space"> </span>Close</button></div><div class="panier ui-dialog-content ui-widget-content" id="ui-id-1">
    <ul class="panier_liste">
        <li class="panier_article">
            <span class="panier_article_name">Call of duty</span>
            <span class="panier_article_quantite">(1)</span>
            <form class="panier_action" method="post">
                <input class="ui-button ui-widget ui-corner-all ui-button-icon-only" name="panier_remove" value="X" type="submit">
                <input name="article_id" value="11" type="hidden">
            </form>
        </li>
        <li class="panier_article">
            <span class="panier_article_name">Call of duty black ops 2</span>
            <span class="panier_article_quantite">(1)</span>
            <form class="panier_action" method="post">
                <input class="ui-button ui-widget ui-corner-all ui-button-icon-only" name="panier_remove" value="X" type="submit">
                <input name="article_id" value="10" type="hidden">
            </form>
        </li>
    </ul>
    <form class="panier_action" method="post">
        <input name="panier_empty" value="Vider le panier" type="submit">
    </form>
</div>


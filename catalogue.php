<?php
require_once 'define.php';
require_once 'db/db_access.php';
require_once 'db/db_define.php';
define('ARTICLE_IMG_PATH', 'images_png/');
define('CAT_ID','catid');
$page_title = 'Catalogue';

$id_cat = '';
$where = '';

if (array_key_exists(CAT_ID, $_GET)) {
    // Est-ce que l'id de categorie est valide ?
    if (array_key_exists($_GET[CAT_ID], $categories)) {
        $id_cat = $_GET[CAT_ID];
        $where = " WHERE `category_id` = $id_cat";
    }
}
//var_dump($id_cat,$where);

// Chargement des articles
$articles = get_articles($where);

?>

<?php
require_once 'views/top.php';
require_once 'views/header.php';
?>
<main>
    <div id="wrapper" class="row">
        <div class="col-8">
        <?php foreach ($articles as $id => $article) { ?>
            <article>
                <h2><?= utf8_encode($article['name'])?></h2>
<!--                <p>--><?//= utf8_encode($article['description'])?><!--</p>-->
                <img src="<?= ARTICLE_IMG_PATH,$article['image']?>" alt=""/>
                Prix : <span><?= $article['prix']?></span>
<!--                <form class ="panier_action" method="post">-->
<!--                    <input type="submit" name="panier_add" value="Ajouter">-->
<!--                    <input type="hidden" name="article_id" value="--><?//=$id?><!--"/>-->
<!--                    <input type="hidden" name="article_name" value="--><?//=utf8_encode($article['name'])?><!--"/>-->
<!--                </form>-->
            </article>

        <?php } ?>
        </div>
        <div class="col-4">
            <?php require_once 'views/aside.php';?>

        </div>
    </div>
</main>
<?php
require_once 'views/footer.php';
?>


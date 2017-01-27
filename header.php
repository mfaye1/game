
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
        <form method="post">
        <input type="text" name="search" placeholder="Search..">
        <input type="submit" name="rechercher" value="rechercher">
        </form>
    </div>
</header>


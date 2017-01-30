<?php
require_once 'define.php';
$page_title = 'Accueil';
?>

<?php
require_once 'views/top.php';
require_once 'views/header.php';
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

*/ ?>

<body>


<div id="wrapper">
    <div id="wowslider-container1">
        <div class="ws_images">
            <ul>
                <li><img src="data1/images/slide2.png" alt="" title="" id="wows1_0"/></li>
                <li><img src="data1/images/slide3.jpg" alt="" title="" id="wows1_1"/></li>
                <li><img src="data1/images/slide3_0.png" alt="" title="" id="wows1_2"/></li>
                <li><img src="data1/images/slide4.jpg" alt="" title="" id="wows1_3"/></li>
                <li><a href="http://wowslider.com/vi"><img src="data1/images/slide7.jpg" alt="bootstrap carousel"
                                                           title="" id="wows1_4"/></a></li>
                <li><img src="data1/images/slider8.jpg" alt="" title="" id="wows1_5"/></li>
            </ul>
        </div>
        <div class="ws_bullets">
            <div>
                <a href="#" title=""><span><img src="data1/tooltips/slide2.png" alt=""/>1</span></a>
                <a href="#" title=""><span><img src="data1/tooltips/slide3.jpg" alt=""/>2</span></a>
                <a href="#" title=""><span><img src="data1/tooltips/slide3_0.png" alt=""/>3</span></a>
                <a href="#" title=""><span><img src="data1/tooltips/slide4.jpg" alt=""/>4</span></a>
                <a href="#" title=""><span><img src="data1/tooltips/slide7.jpg" alt=""/>5</span></a>
                <a href="#" title=""><span><img src="data1/tooltips/slider8.jpg" alt=""/>6</span></a>
            </div>
        </div>
        <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">wow slider</a> by
            WOWSlider.com v8.7
        </div>
        <div class="ws_shadow"></div>
    </div>
    <script type="text/javascript" src="engine1/wowslider.js"></script>
    <script type="text/javascript" src="engine1/script.js"></script>
    <div class="row">
        <div class="col-8">
            <main>


                <h2>Nouveautés</h2>
                <section class="row">
                    <div class="cadre_produit col-6">
                        <h3>Assasin's creed Syndicate</h3>
                        <a href="catalogue.php"> <img class="" src="images_png/assasin_creed_xbox.png"
                                                      alt="img_produit"></a>
                        <p><span>30.99$</span></p>
                    </div>

                    <div class="cadre_produit col-6">
                        <h3>Grand theft auto V</h3>
                        <a href="catalogue.php"> <img class="" src="images_png/gta_ps4.png" alt="img_produit"></a>
                        <p><span>38.99$</span></p>
                    </div>
                    <div>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Jw8HCFZkBds" frameborder="0"
                                allowfullscreen></iframe>
                    </div>
                    <h4>Les Aubaines de la semaine</h4>

                    <div class="cadre_produit col-6">
                        <h3>Dragon ball xenoverse 2</h3>
                        <a href="catalogue.php"> <img class="" src="images_png/dragon_ball_ps4.png"
                                                      alt="img_produit"></a>
                        <p><span>41.99$</span></p>
                    </div>

                    <div class="cadre_produit col-6">
                        <h3>Mass Effect Andromeda</h3>
                        <img class="" src="images_png/mass_pc.png" alt="img_produit">
                        <p><span>50.99$</span></p>
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
            <div>
                <form method="post">
                    <input type="text" name="search" placeholder="Search..">
                    <input type="submit" name="rechercher" value="rechercher">
                </form>
            </div>
            <div id="defillement">
                <marquee direction="down" scrollamount="4" onMouseOver="this.stop();" onMouseOut="this.start();">
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

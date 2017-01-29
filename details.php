<?php
require_once 'define.php';
$page_title = 'details';
?>
<?php
require_once 'views/top.php';
require_once 'views/header.php';
?>

<body>
<div id="wrapper" class="row">
    <div class="col-4">
        <img src="images/sonic_wii.jpg">
        <p><span>425$</span></p>
        <img src="images/panier.png">
    </div>
    <div class="col-8 row">

        <div class="col-12">
            <video width="600px" controls>
                <source src="video/fifa.mp4" type="video/mp4">
            </video>
        </div>
        <div class="col-12">
            <h2>DESCRIPTION DU JEU</h2>
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
        </div>
    </div>

</div>
</body>
<?php
require_once 'views/footer.php';
?>

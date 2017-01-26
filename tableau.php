<?php
require_once 'define.php';
$page_title = 'Contact';
?>
<?php
require_once 'views/top.php';
require_once 'views/header.php';
?>
<body>
<div id="wrapper">
    <img src="images/sonic_wii.jpg"/>
    <div id="tab">
<fieldset id="fld1">
    jeu : <input type="text" />
    categorie : <input type="text"/>
    Prix : <input type="text"/>
    <button id="ajouter">Ajouter</button>
</fieldset>
<br/>
<table id="table">
    <tr>
        <td></td>
        <th>CATEGORIE</th>
        <th>PRIX</th>
    </tr>
    <tr>
        <th>FIFA</th>
        <td>PS4</td>
        <td>92 $</td>
    </tr>
    <tr>
        <th>ZELDA</th>
        <td>WII</td>
        <td>87 $</td>
    </tr>
    <tr>
        <th>NFS</th>
        <td>ROUMANIE</td>
        <td>132.99 $</td>
    </tr>
    <caption>Prix total :<span class="montant"></span></caption>
</table>
    </div>
</div>
</body>
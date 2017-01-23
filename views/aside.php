<style>
    #menu-deroulant, #menu-deroulant ul {
        padding: 0;
        margin: 0;
        list-style: none;
    }
    #menu-deroulant {
        /* on centre le menu dans la page */
        text-align: center;
    }
    #menu-deroulant li {
        /* on place les liens du menu horizontalement */
        margin: 5%;
        display: inline-block;
    }
    #menu-deroulant ul li {
        /* on enlève ce comportement pour les liens du sous menu */
        display: inherit;
    }
    #menu-deroulant a {
        text-decoration: none;
        display: block;
        color:#000;
    }
    #menu-deroulant ul {
        position: absolute;
        /* on cache les sous menus complètement sur la gauche */
        left: -999em;
        text-align: left;
        z-index: 1000;
    }
    #menu-deroulant li:hover ul {
        /* Au survol des li du menu on replace les sous menus */
        left: auto;
    }
</style>

<aside>
    <ul id="menu-deroulant">
        <li><a href="#">Type de jeu</a>
            <ul>
                <li><a href="#">PS3</a></li>
                <li><a href="#">PS4</a></li>
                <li><a href="#">PSP</a></li>
                <li><a href="#">PS VITA / PSP</a></li>
                <li><a href="#">PC</a></li>
                <li><a href="#">Xbox 360</a></li>
                <li><a href="#">NINTENDO / DS</a></li>
            </ul>
        </li><!--
 --><li><a href="#">Categorie</a>
            <ul>
                <li><a href="#">ARCADE</a></li>
                <li><a href="#">ACTION</a></li>
                <li><a href="#">AVENTURE</a></li>
                <li><a href="#">SPORT</a></li>
                <li><a href="#">COMBAT</a></li>
                <li><a href="#">COURSE</a></li>
            </ul>
        </li><!--
 --><li><a href="#">NOUVEAUTES</a>
            <ul>
                <li><a href="#">DOUBLE DRAGON 4</a></li>
                <li><a href="#">SNIPER GHOST</a></li>
                <li><a href="#">RESIDENT EVIL 7</a></li>
                <li><a href="#">NFS </a></li>
                <li><a href="#">FIFA 17</a></li>
            </ul>
        </li><!--
 --><li><a href="#">POUR ENFANT</a>
            <ul>
                <li><a href="#">SPIDER-MAN</a></li>
                <li><a href="#">SONIC</a></li>
                <li><a href="#">ANGRY-BIRD</a></li>
                <li><a href="#">ZELDA</a></li>
            </ul>
        </li>
    </ul>
</aside>
